<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
       'autherid' ,'name', 'email', 'last_seen','user_image','post_title','post_desc','post_mobile','post_image','post_price','post_location','sub_name','cat_name',
    ];
}
