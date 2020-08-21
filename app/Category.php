<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   protected $table = 'categories';
   protected $guarded=[];


   public function thisCatNews(){
      return $this->hasMany('App\News','catId');
   }

   public function parent_category(){
      return $this->belongsto('App\Category','id');
   }

   public function child_category(){
      return $this->hasMany('App\Category','parentId');
   }

    public function parent_cat(){
        return $this->belongsto('App\Category','parentId');
    }

   
}
