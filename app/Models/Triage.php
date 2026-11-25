<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Triage extends Model
{
    protected $table = 'triages';

    protected $fillable = [
        'temperature',
        'bloodPressure',
        'weight',
        'height',
        'triageDate',
        'triagetime',
    ];
}
