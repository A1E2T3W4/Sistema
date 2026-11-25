<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';

    protected $fillable = [
        'name',
        'birthDate',
        'gender',
        'phone',
        'address',
        'BI',
    ];
}
