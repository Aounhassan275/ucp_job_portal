<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class I_deposit extends Model
{
    protected $fillable = [
        'name', 'price', 't_id','payment','institute_id'
    ];
    public function institute()
    {
        return $this->belongsTo('App\Models\Institute');
    } 
    public function member()
    {
        return $this->belongsTo('App\Models\Member');
    }
}
