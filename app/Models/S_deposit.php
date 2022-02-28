<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class S_deposit extends Model
{
    protected $fillable = [
        'skill_id', 'price', 't_id','payment','service_id','status','a_date','valid'
    ];

    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }
    public function skill()
    {
        return $this->belongsTo('App\Models\Skill');
    }    
    public static function pending()
    {
        return (New static)::where('status','Pending')->get();
    }  
    public static function active()
    {
        return (New static)::where('status','active')->get();
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
