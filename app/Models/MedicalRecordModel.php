<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalRecordModel extends Model
{
    use HasFactory;

    protected $table = 'medical_records';

    protected $fillable = ['user_id', 'notes','doctor_id'];


}
