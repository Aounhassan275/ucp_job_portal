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
        'job_description','candidate_id','address','status','profile','a_date','category_id'
    ];
    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveAImage($value,'/profile/');
    }
    public function candidate()
    {
        return $this->belongsTo('App\Models\Candidate');
    }
    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }    
    public function hires()
    {
        return $this->hasMany(Hire::class);
    }      
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }   
    public static function notapproved()
    {
        return (New static)::where('profile','Not Approved')->get();
    }    
    public static function approved()
    {
        return (New static)::where('profile','Approved')->get();
    }  
}
