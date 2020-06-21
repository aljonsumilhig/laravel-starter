<?php

namespace App\Http\Middleware;

use App\Role;
use App\User;
use Closure;
use Illuminate\Support\Facades\Gate;

class CheckPermission
{
    public $permissions = array ();
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = auth()->user();
        if ($user) {
            $roles = Role::with('permissions')->get();
            foreach ($roles as $role) {
                foreach ($role->permissions as $permissions) {
                    $this->permissions[$permissions->title][] = $role->id;
                }
            }
        }
        foreach ($this->permissions as $title => $roles) {
            Gate::define($title, function (User $user) use ($roles) {
                return count(array_intersect($user->roles->pluck('id')->toArray(), $roles)) > 0;
            });
        }
        return $next($request);
    }
}
