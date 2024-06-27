<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'phone', 'medical_history_id'];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function medicalHistory()
    {
        return $this->belongsTo(MedicalHistory::class);
    }
}
