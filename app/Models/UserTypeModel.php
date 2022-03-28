<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTypeModel extends Model
{
    use HasFactory;

    protected $table ='user_types';

    protected $fillable = ['user_type'];
}