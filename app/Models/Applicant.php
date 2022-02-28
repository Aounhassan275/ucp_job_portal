<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = [
        'candidate_id','job_id','description','institute_id','profile_id'
    ];
    public function applicant()
    {
        return $this->belongsTo('App\Models\Applicant');
    }
    public function candidate()
    {
        return $this->belongsTo('App\Models\Candidate');
    }
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
}
