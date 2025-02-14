<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'healthcare_center_id'];

    public function healthcareCenter()
    {
        return $this->belongsTo(HealthcareCenter::class);
    }

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}
