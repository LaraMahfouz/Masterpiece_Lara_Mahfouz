<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'sub_name', 'sub_image','cat_id','cat_name'
    ];

    public function Scategory()
    {
        return $this->belongsTo(Category::class);
    }

    public function Subpost()
    {
        return $this->hasMany(Post::class);  //Relashion One to Many 
    }

}
