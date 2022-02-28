<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name','fname','email','professional','number','image','cnic','social',
        'url_fb','url_linkedin','url_twitter','qualification','p_date','job_title',
        'job_description','candidate_id','address','status','profile','a_date'
    ];
    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveAImage($value,'/profile/');
    }
    public function candidate()
    {
        return $this->belongsTo('App\Models\Candidate');
    }
    public function deposits()
    {
        return $this->hasMany('App\Models\Deposit');
    }   
    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }    
    public function hires()
    {
        return $this->hasMany(Hire::class);
    }   
    public static function notapproved()
    {
        return (New static)::where('profile','Not Approved')->get();
    }    
    public static function approved()
    {
        return (New static)::where('profile','Approved')->get();
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
