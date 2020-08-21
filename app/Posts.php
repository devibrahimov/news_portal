<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Posts extends Model
{
    protected $table = 'posts';
    protected $guarded = [];


    public function authorUser(){
        return $this->belongsTo('App\User','userId');
    }

    public function CategoryNews(){
        return $this->belongsTo('App\Category','catId');
    }


    public function comment(){
        return $this->hasMany('App\Comment','postId');
    }

 public function Categoryparentcolor($pid=18){
    //$pid = $this->CategoryNews()->parentId;

  return   Category::where('id','==',$pid)->get();
    }


    public function subcatnews(){
        $cats = Category::where('parentId','!=',0)->get(['id']);
    
        foreach ($cats as $cat ) {
             
           $news[] =  $this->where('catId','=',$cat['id'])->get(['id','catId','header','slug','image']) ;

        }
        return $news ;
    }
}
