<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientInformation extends Model
{
    use HasFactory;

    protected $table = 'patient_informations';
    protected $fillable = [
        'patient_id',
        'dob',
        'weight',
        'height',
        'blood_pressure',
        'blood_suger',
        'symptom',
        'allergy',
        'lab_result',
    ];
}
