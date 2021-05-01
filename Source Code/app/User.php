<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;



class User extends Authenticatable
{
   

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'user_bio', 'last_seen','email','admin','password','user_image','user_mobile','user_social_fb','user_social_in',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);  //Relashion One to Many (user -> post)
    }
    public function ContactUs()
    {
        return $this->hasMany(ContactUs::class);  //Relashion One to Many (user -> ContactUs)
    }
    public function Commint()
    {
        return $this->hasMany(Commint::class);  //Relashion One to Many (user -> Commint)
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
