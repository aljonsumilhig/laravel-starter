<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['title'];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public static function findByTitle(string $title)
    {
        return static::where('title', $title)->first();
    }

}
