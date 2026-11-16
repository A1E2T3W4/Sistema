<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';

    protected $fillable = [
        'name',
        'birth_date',
        'gender',
        'phone',
        'address',
        'BI',
        'blood_type',
        'allergies',
        'diseases',
    ];
}
