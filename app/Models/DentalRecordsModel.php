<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DentalRecordsModel extends Model
{
    use HasFactory;

    protected $table = 'dental_records';

    protected $fillable = ['user_id', 'current_teeth', 'missing_teeth', 'notes'];
}
