<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','status',
    ];
    /**
     * @var array|\Illuminate\Foundation\Application|\Illuminate\Http\Request|mixed|string
     */

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    protected $hidden = [
        'password', 'remember_token',
    ];


//    public function isAdmin()
//    {
//        if($this->isAdmin == "1")
//        {
//            return true;
//        }
//        return false;
//    }

    public function thisUserNews(){
        return $this->hasMany('App\News','userId');
    }


    public function comment(){
        return $this->hasMany('App\Comment','userId');
    }

    // public function todolist(){

    // }

}
