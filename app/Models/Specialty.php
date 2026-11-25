<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    protected $table = 'specialties';

   protected $fillable = [
    'name',
    'description',
];

 public function nurses()
    {
        return $this->hasMany(Nurse::class, 'specialty_id');
    }
}
