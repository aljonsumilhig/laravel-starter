<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = ['title'];

    public static function findByTitle(string $title)
    {
        return static::where('title', $title)->first();
    }
}
