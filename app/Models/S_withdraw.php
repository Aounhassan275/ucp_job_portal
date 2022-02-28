<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class S_withdraw extends Model
{
    protected $fillable = [
        'service_id', 'amount', 'way','a_number','a_name','r_number','status'
    ];
    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }
   
        public function s_withdraws()
    {
        return $this->hasMany(S_withdraw::class);
    }  
    public static function pending()
    {
        return (New static)::where('status','Pending')->get();
    }  
}
