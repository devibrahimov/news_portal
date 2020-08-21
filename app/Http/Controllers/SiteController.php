<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Comment;
class SiteController extends Controller
{
    //

    public function about(){
        
      $mostcommentpost = Posts::withCount('comment')->orderby('comment_count','desc')->take(6)->get();
      $comments = Comment::where('success','=',1)->where('reply','=', NULL )->orderBy('id','desc')->take(8)->get();

      return view('site.about.about',compact(['mostcommentpost','comments']));
    }

    public function contact(){

        $mostcommentpost = Posts::withCount('comment')->orderby('comment_count','desc')->take(6)->get();
        $comments = Comment::where('success','=',1)->where('reply','=', NULL )->orderBy('id','desc')->take(8)->get();

        return view('site.about.about',compact(['mostcommentpost','comments']));
    }
}
