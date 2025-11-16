<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WelcomeHead extends Model
{
    protected $fillable = [
        'image',
        'subtitle',
        'title',
        'text1',
        'text2',
        'name',
        'position',
    ];
}
