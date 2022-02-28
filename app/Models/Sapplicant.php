<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sapplicant extends Model
{
    protected $fillable = [
        'service_id','job_id','description','institute_id','s_deposit_id'
    ];
    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }
    public function institute()
    {
        return $this->belongsTo('App\Models\Institute');
    }
    public function job()
    {
        return $this->belongsTo('App\Models\Job');
    }
    public function s_deposit()
    {
        return $this->belongsTo('App\Models\S_deposit');
    }
    public function member()
    {
        return $this->belongsTo('App\Models\Member');
    }
}
