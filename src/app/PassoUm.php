<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PassoUm extends Model
{
    protected $fillable = [
        'complete_name',
        'birth_date'
    ];
}
