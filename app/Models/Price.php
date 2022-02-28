<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'page', 'price'
    ];
    public static function institute()
    {
        return (New static)::where('page','Institute')->get();
    }   
    public static function service()
    {
        return (New static)::where('page','Service Provider')->get();
    }  
    public static function memberProfit()
    {
        return (New static)::where('page','Member Profit')->get();
    }
}
