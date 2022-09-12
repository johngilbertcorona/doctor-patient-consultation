<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'doctor_id',
        'has_appointment',
        'med_history',
        'is_online',
        'app_time',
        'app_date',
        'app_status',
    ];


}
