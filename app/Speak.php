<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speak extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image'
    ];
}
