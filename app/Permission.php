<?php

namespace App;

use App\Traits\HasBinaryUuid;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasBinaryUuid;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['title'];
}
