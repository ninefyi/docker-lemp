<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class User_type extends Model
{
    //
    protected $table = 'user_types';
    public $incrementing = false;
    /**
     * Boot the Model.
     */
    public static function boot()
    {
        parent::boot();

        static::creating(function ($instance) {
            $instance->user_type_id = (string) Str::uuid();
        });
    }

}
