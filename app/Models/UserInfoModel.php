<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfoModel extends Model
{
    use HasFactory;

    protected $table = "user_info";

    protected $fillable = ['user_id', 'phone','gender','weight','date_of_birth'];

}
