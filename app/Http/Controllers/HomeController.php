<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Posts;
use App\Comment;
use App\Category;
class HomeController extends Controller
{

    public function index()
    {
         
      //  $subcatnews = $a->subcatnews();

      /**
       * burdaki algortm deyishdirelecek. ana sehife ucun 
       *   1-evvelce tek sorgu ile mueyyen sayda data getirilecek (misal 200 ),
       *   2-sonra bu datanin oldugu array bolunerek ayri ayri arraylar halina getirilecek
       *   3-slider ve s yerleri ucun lazim olan companentler,bu arraylardan isdifade edilecek
       */
     // $posts = Posts::orderBy('id','desc')->take(100)->get();

      $sliderfirstposts = Posts::orderBy('id','desc')->take(1)->get(); 
      $slidersecondposts = Posts::orderBy('id','desc')->skip(1)->take(4)->get();

      $firstposts = Posts::orderBy('id','desc')->skip(5)->take(1)->get();
      $secondposts = Posts::orderBy('id','desc')->skip(6)->take(4)->get();
      
      $randnews = Posts::inRandomOrder()->take('7')->get(['id','header','slug','updated_at','catId','content']);

      $firstvideo = Posts::where('movie','!=',NULL)->orderBy('id','desc')->take(1)->get();
      $secondvideoposts = Posts::where('movie','!=',NULL)->orderBy('id','desc')->skip(1)->take(10)->get();
      
      $mostcommentpost = Posts::withCount('comment')->orderby('comment_count','desc')->take(6)->get();
      $comments = Comment::where('success','=',1)->where('reply','=', NULL )->orderBy('id','desc')->take(5)->get();

      return view('site.home.home',
      compact(array('sliderfirstposts','slidersecondposts',
                'firstposts','secondposts',
                'randnews','mostcommentpost','comments',
                'firstvideo','secondvideoposts')));
       
    }//end index





    public function categoryNews($id,$slug){

      $cat =Category::where('slug','=',$slug)->find($id);
      if ($cat) { 
          $catnews = Posts::where('catId','=',$id)->orderBy('updated_at','desc')->paginate('5') ;
         // $righrbar = Posts::where('catId','=',$id)->orderBy('updated_at','desc')->take('8')->get();

          $mostcommentpost = Posts::withCount('comment')->orderby('comment_count','desc')->take(6)->get();
          $comments = Comment::where('success','=',1)->where('reply','=', NULL )->orderBy('id','desc')->take(8)->get();

          $randnews = Posts::inRandomOrder()->take('8')->get(); 
  
        return view('site.category.home',compact(['cat','catnews', 'mostcommentpost','comments']) );
         
        }else{
          return redirect()->route('notfound404');
         // return view('404');
        }
     
     }//end category






    public function detailNews($id,$slug){
      $news = Posts::where('slug','=',$slug)->find($id);

      if ($news){

          $catnews = Posts::inRandomOrder()->where('id','!=',$news->id)->where('catId','=',$news->catId)->take('8')->get();
          $randnews = Posts::inRandomOrder()->where('id','!=',$news->id)->take('8')->get();
          $comments = Comment::where('postId','=',$id)->where('success','=',1)->where('reply','=', NULL )->get();

          return view('site.newsdetail.detail',compact(['news','catnews','randnews','comments']));
      }else{
        return redirect()->route('home');
      }
       
    }//end detailNews




    public function search(request $request){


      $this->validate(request(),['searchword'=>'required']);

      $word = request('searchword');

      $result =Posts::where('header','LIKE','%'.$word.'%')->orWhere('content','LIKE','%'.$word.'%')->latest()->paginate(3);
    $result->appends($request->all()) ;
      $mostcommentpost = Posts::withCount('comment')->orderby('comment_count','desc')->take(6)->get();
      $comments = Comment::where('success','=',1)->where('reply','=', NULL )->orderBy('id','desc')->take(8)->get();

      return view('site.search.home',compact(['result','mostcommentpost','comments']));

    }


}//end class
