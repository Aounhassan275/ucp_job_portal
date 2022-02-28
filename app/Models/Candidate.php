<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Candidate extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','code','refer_by','status','address','image','cnic','balance','phone','verification'
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
    public function setPasswordAttribute($value){
        if (!empty($value)){
            $this->attributes['password'] = Hash::make($value);
        }
    }
    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveCImage($value,'/candidate/');
    }
    public function refers()
    {
        return $this->hasMany('App\Models\Candidate','refer_by');
    }

    public function profiles(){
        return $this->hasMany(Profile::class);
    }  
    public function deposits()
    {
        return $this->hasMany(Deposit::class);
    }     
    public function c_withdraws()
    {
        return $this->hasMany(C_withdraw::class);
    }   
    public function applicants()
    {
        return $this->hasMany(Applicant::class);
    }       
    public function hires()
    {
        return $this->hasMany(Hire::class);
    }   
    public function hire()
    {
        return $this->hasMany(Hire::class)->where('status','No Response')->count();
    }
     public static function pending()
    {
        return (New static)::where('status','pending')->get();
    }
    public function shires()
    {
        return $this->hasMany(Shire::class);
    } 

}
