<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\Posts;
use function Psy\debug;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $menu = 'news';
        $newsdata = Posts::orderBy('id','DESC')->get();
        $cats = Category::all();
        return view('admin.posts.index',compact(['menu','newsdata','cats']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {$menu = 'addnews';
        $cats = Category::where('parentId','!=','0')->get();
        return view('admin.posts.create',compact(['menu','cats']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),array(
            'header' =>'required',
            'catId' =>'required',
            'content'=>'required'));

        $news = new Posts();

        $news->header  = request('header');
        $news->slug  = str_slug(request('header') );
        $news->catId  =  request('catId');
        $news->slider  =  request('slider');
        $news->movie  =  request('movie');
        $news->content  =  request('content');
        $news->userId  =  1;

        if(request()->hasFile('image')){
            $this->validate(request(),['file'=>'image|mimes:jpg,jpeg,png|max:4200']);

        }
        $image = request()->file('image');
        $newimagename = time().'.'.$image->extension();

        if($image->isValid()){
            $directory = 'uploads/news/'.date('y').'/'.date('m').'/'.date('d');
            $imagedata = '/'.$directory.'/'.$newimagename;
            $image->move($directory,$newimagename);
            $news->image = $imagedata;
        }
        $news->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {$menu = 'news';
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $menu = 'news';
       $newsrow = Posts::find($id);
       $cats = Category::where('id','!=',$newsrow->catId)->where('parentId','!=','0')->get();
       return view('admin.posts.edit',compact(['menu','newsrow','cats']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(),array(
            'header' =>'required',
            'catId' =>'required',
            'content'=>'required'));

        $news = Posts::find($id);

        $news->header  = request('header');
        $news->slug  = str_slug(request('header') );
        $news->catId  =  request('catId');
        $news->slider  =  request('slider');
        $news->movie  =  request('movie');
        $news->content  =  request('content');
        $news->userId  =  1;

        if(request()->hasFile('image')){
            $this->validate(request(),['file'=>'image|mimes:jpg,jpeg,png|max:2048']);

            $image = request()->file('image');
            $newimagename = time().'.'.$image->extension();
            if($image->isValid()){
                $directory = 'uploads/news/'.date('y').'/'.date('m').'/'.date('d');
                $imagedata = '/'.$directory.'/'.$newimagename;
                $image->move($directory,$newimagename);
                $news->image = $imagedata;
              
            }
        
        }
      
        $news->save(); 
     return back();
        
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Posts::destroy($id);
        return back();
    }
}
