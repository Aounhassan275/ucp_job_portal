<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];
    public function categories()
    {
        return $this->hasMany(Category::class);
    }  
    public function cvs()
    {
        return $this->hasMany(Profile::class);
    }  
}
