<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Institute extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','status','image','address','phone'
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
        $this->attributes['image'] = ImageHelper::saveIImage($value,'/institute/');
    }
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }    
    public function hires()
    {
        return $this->hasMany(Hire::class);
    }   
    public function applicants()
    {
        return $this->hasMany(Applicant::class);
    }     
    public function sapplicants()
    {
        return $this->hasMany(Sapplicant::class);
    }   
    public function shires()
    {
        return $this->hasMany(Shire::class);
    }   
    public function refers()
    {
        return $this->hasMany('App\Models\Institute','refer_by');
    }
    public function i_withdraws()
    {
        return $this->hasMany(I_withdraw::class);
    }   
    public function i_deposits()
    {
        return $this->hasMany(I_deposit::class);
    }   
    public static function active(){
        return (new static)::where('status','active')->get();
    }
    public static function pending(){
        return (new static)::where('status','Pending')->get();
    }
    public function hire()
    {
        return $this->hasMany(Hire::class)->where('status','onHold')->count();
    }
    public function shire()
    {
        return $this->hasMany(Shire::class)->where('status','onHold')->count();
    }
    public function packageExpires()
    {
        return $this->a_date->addDays(90);
    }
    public function checkStatus(){
        if(!$this->a_date){
            return 'fresh';

        } elseif (Carbon::now()->diffInDays($this->a_date) > 90){
            return 'expired';

        } else {
            return 'old';
        }
    }
}
