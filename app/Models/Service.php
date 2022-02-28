<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Service extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array 
     */
    protected $fillable = [
        'name', 'email', 'password','fb','code','refer_by','status','image','address','balance',
        'phone','location','description','type','time','a_date','verification'
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
        $this->attributes['image'] = ImageHelper::saveSImage($value,'/service/');
    }
    public function s_deposit()
    {
        return $this->hasMany('App\Models\S_deposit');
    }
    public function refers()
    {
        return $this->hasMany('App\Models\Service','refer_by');
    }
        public function s_withdraws()
    {
        return $this->hasMany(S_withdraw::class);
    }   
    public function s_deposits()
    {
        return $this->hasMany(S_deposit::class);
    }  
    public function shires()
    {
        return $this->hasMany(Shire::class);
    }   
    public function sapplicants()
    {
        return $this->hasMany(Sapplicant::class);
    }   
    public function shire()
    {
        return $this->hasMany(Shire::class)->where('status','No Response')->count();
    }

}
