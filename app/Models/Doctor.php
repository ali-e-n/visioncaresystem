<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'specialization', 'primary_clinic_id'];

    public function clinic()
    {
        return $this->belongsTo(Clinic::class, 'primary_clinic_id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}

