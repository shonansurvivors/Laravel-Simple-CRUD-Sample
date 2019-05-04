<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name',
        'age',
        'sex',
        'memo'
    ];
}
