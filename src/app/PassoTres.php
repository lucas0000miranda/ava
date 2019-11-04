<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PassoTres extends Model
{
    protected $fillable = [
        'contact_phone',
        'cell_phone'
    ];
}
