<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'specialist_id',
        'doctor_id',
        'patient_id',
        'booking_date',
        'name',
        'phone',
        'time_slot',
        'status',
        'created',
    ];

}
