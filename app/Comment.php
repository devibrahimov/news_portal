<?php

namespace App; 
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $guarded = [];


    public function replycomment(){
        return $this->hasMany('App\Comment','reply');
    }
    public function usercomment(){
        return $this->belongsTo('App\Comment','id');
    }



    public function user(){
        return $this->belongsTo('App\User','userId');
    }

    public function post(){
        return $this->belongsTo('App\Posts','postId');
    }


}

