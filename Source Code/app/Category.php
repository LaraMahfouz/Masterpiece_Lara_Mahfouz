<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'cat_name', 'cat_desc', 'cat_image',
    ];

    public function catPosts()
    {
        return $this->hasMany(Post::class);  //Relashion One to Many 
    }

    public function catSub()
    {
        return $this->hasMany(SubCategory::class);  //Relashion One to Many 
    }
}
