<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class I_withdraw extends Model
{
    protected $fillable = [
        'institute_id', 'amount', 'way','a_number','a_name','r_number','status'
    ];
    public function institute()
    {
        return $this->belongsTo('App\Models\Institute');
    }
    public function i_withdraws()
    {
        return $this->hasMany(I_withdraw::class);
    }  
    public static function pending()
    {
        return (New static)::where('status','Pending')->get();
    }  
}
