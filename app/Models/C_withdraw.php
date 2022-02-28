<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class C_withdraw extends Model
{
    protected $fillable = [
        'candidate_id', 'amount', 'way','a_number','a_name','r_number','status'
    ];
    public function candidate()
    {
        return $this->belongsTo('App\Models\Candidate');
    } 
    public function c_withdraws()
    {
        return $this->hasMany(C_withdraw::class);
    }  
    public static function pending()
    {
        return (New static)::where('status','Pending')->get();
    }  
}
