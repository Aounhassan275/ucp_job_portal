<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hire extends Model
{
    protected $fillable = [
        'description', 'status', 'job_id','institute_id','profile_id','candidate_id','time','date',
        'link','objection'
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
}
