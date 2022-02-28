<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'blog_id', 'tag'
    ];
    public function blog()
    {
        return $this->belongsTo('App\Models\Blog');
    }
}
