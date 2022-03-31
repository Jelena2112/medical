<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userInfo()
    {
        return $this->hasOne(UserInfoModel::class,'user_id','id');
    }

    public function userType ()
    {
        return $this->hasOne(UserTypeModel::class, 'id', 'type');
    }

    public function userDentalRecord()
    {
        return $this->hasOne(DentalRecordsModel::class, 'user_id', 'id');
    }

    public function userMedicalRecord()
    {
        return $this->hasOne(MedicalRecordModel::class, 'user_id','id');
    }

    public function doctorMedicalRecord()
    {
        return $this->hasMany(MedicalRecordModel::class, 'doctor_id','id');
    }

}
