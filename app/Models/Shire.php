<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shire extends Model
{
    protected $fillable = [
        'description', 'status', 'job_id','institute_id','s_deposit_id',
        'service_id','candidate_id'
    ];
    public function institute()
    {
        return $this->belongsTo('App\Models\Institute');
    } 
    public function candidate()
    {
        return $this->belongsTo('App\Models\Candidate');
    } 
    public function member()
    {
        return $this->belongsTo('App\Models\Member');
    }
    public function job()
    {
        return $this->belongsTo('App\Models\Job');
    } 
    public function s_deposit()
    {
        return $this->belongsTo('App\Models\S_deposit');
    }
    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }
    public static function onHold()
    {
        return (New static)::where('status','onHold')->get();
    }    
    public static function completed()
    {
        return (New static)::where('status','Completed')->get();
    }    
     public static function noresponse()
    {
        return (New static)::where('status','No Response')->get();
    } 
}
