<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'jenisPesan',
        'nama',
        'email',
        'telepon',
        'subject',
        'isiPesan',
    ];
}
