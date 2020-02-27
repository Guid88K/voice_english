<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grammar extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image'
    ];
}
