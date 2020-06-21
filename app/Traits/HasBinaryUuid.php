<?php

    namespace App\Traits;

    use Illuminate\Database\Eloquent\Model;
    use Ramsey\Uuid\Uuid;

    trait HasBinaryUuid
    {
        protected static function booted()
        {
            static::creating(function (Model $model) {
                $model->{$model->getKeyName()} = $model->{$model->getKeyName()} ?: Uuid::uuid4();
            });
        }
    }
