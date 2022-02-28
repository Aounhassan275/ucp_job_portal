<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'name','price'
    ];
    public function s_deposits()
    {
        return $this->hasMany(S_deposit::class);
    }  
}
