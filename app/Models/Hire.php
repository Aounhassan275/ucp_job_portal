<?php

namespace App\Models;

use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Model;

class Hire extends Model
{
    protected $fillable = [
        'description', 'status', 'job_id','institute_id','profile_id','candidate_id','time','date',
        'link','objection'
    ];
    protected $casts = [
        'time' => 'time',
    ];
    public function institute()
    {
        return $this->belongsTo('App\Models\Institute');
    } 
    public function job()
    {
        return $this->belongsTo('App\Models\Job');
    } 
    public function profile()
    {
        return $this->belongsTo('App\Models\Profile');
    }
    public function candidate()
    {
        return $this->belongsTo('App\Models\Candidate');
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
    public function completedStatus()
    {
        $date = Carbon::parse($this->date);
        $time = Carbon::parse($this->time)->format('h:i A');
        $current_time = Carbon::now()->format('h:i A');
        if(Carbon::today()->gt($date) && $current_time > $time)
        {
            return true;
        }else{
            return false;
        }
    } 
}
