<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'title', 'location', 'category_id','salary','image','status','type','summary','institute_id','qualification','salary1','city'
    ];
    public function institute()
    {
        return $this->belongsTo('App\Models\Institute');
    }   
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function member()
    {
        return $this->belongsTo('App\Models\Member');
    }
    public function applicants()
    {
        return $this->hasMany(Applicant::class);
    }   
}
