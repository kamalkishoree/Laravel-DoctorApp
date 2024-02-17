<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorInformation extends Model
{
    use HasFactory;
    protected $table = 'doctor_informations';
    protected $fillable = [
        'doctor_id',
        'licence_id',
        'specialist_id',
        'document_image',
    ];
}
