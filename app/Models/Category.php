<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'price'
    ];
    public function deposits()
    {
        return $this->hasMany(Deposit::class);
    }   
    public function categories()
    {
        return $this->hasMany(Category::class);
    }  
}
