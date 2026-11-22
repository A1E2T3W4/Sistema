<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    protected $table = 'nurses';

    protected $fillable = [
        'name',
        'dateOfBirth',
        'gender',
        'BI',
        'email',
        'phone',
        'address',
        'photo',
        'specialty',
        'professionalRegistration',
        'position',
    ];
}