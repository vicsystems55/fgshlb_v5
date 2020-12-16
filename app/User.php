<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'middlename', 'surname', 'email', 'password', 'type', 'avatar', 'req2fa', 'file_no', 'role', 'ippis_no', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function personal_info()
    {
        # code...
        return $this->hasOne('App\PersonalInfo', 'user_id');
    }

    public function docs()
    {
        # code...
        return $this->hasMany('App\DocumentUpload', 'user_id');
    }

    public function app_stage()
    {
        # code...
        return $this->hasOne('App\ApplicationStage', 'user_id');
    }
}
