<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PassoDois extends Model
{
    protected $fillable = [
        'address',
        'city',
        'country'
    ];
}
