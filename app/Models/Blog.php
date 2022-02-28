<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 'image','description','bcategory_id','admin_id'
    ];
    public function setImageAttribute($value){
        $this->attributes['image'] = ImageHelper::saveBImage($value,'/blog/');
    }
    public function bcategory(){
        return $this->belongsTo('App\Models\Bcategory');
    }  
    public function admin(){
        return $this->belongsTo('App\Models\Admin');
    }  
    public function tags()
    {
        return $this->hasMany('App\Models\Tag');
    }
}
