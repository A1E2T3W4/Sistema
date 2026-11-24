<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
     protected $table = 'doctors';

    protected $fillable = [
        'name',
        'birthDate',
        'gender',
        'BI',
        'email',
        'phone',
        'address',
        'qualification',
        'specialty',
        'position',
        'biography',
    ];
}
