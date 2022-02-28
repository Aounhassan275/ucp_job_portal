<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    protected $fillable = [
        'category2','category1','price','candidate_id','t_id','payment','validity','status','profile_id'
    ];
    public function candidate()
    {
        return $this->belongsTo('App\Models\Candidate');
    }
    public function category1()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function profile()
    {
        return $this->belongsTo('App\Models\Profile');
    }
    public static function pending()
    {
        return (New static)::where('status','Pending')->get();
    }  
}
