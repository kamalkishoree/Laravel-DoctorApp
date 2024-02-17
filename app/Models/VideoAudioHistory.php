<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoAudioHistory extends Model
{
    use HasFactory;
    protected $table = 'booking_video_audio_history';
    protected $fillable = [
        'room_id',
        'booking_id',
        'doctor_id',
        'patient_id',
        'status',
        'call_type',
        'start_time',
        'end_time',
    ];
}
