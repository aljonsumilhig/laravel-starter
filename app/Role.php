<?php

namespace App;

use App\Traits\HasBinaryUuid;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasBinaryUuid;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['title'];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
