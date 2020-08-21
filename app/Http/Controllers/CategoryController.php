<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $menu ='category';
        $categorylist = Category::all(); 
//

       return view('admin.categories.index',compact(['menu','categorylist' ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  $menu ='newcategory';

       $parents = Category::Where('parentId',0)->get();
      // $cats = Category::all();
       return view('admin.categories.create',compact(['menu','parents','cats']));
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
            'name'=>'required',
            'about'=>'required'
        )); 

        $cat= new Category();
 
        $cat->name = request('name');
        $cat->slug = str_slug(request('name'));
        $cat->about = request('about');
        $cat->color = request('color');
        if(request('parentCategory')== NULL){ $cat->parentId = 0; }
        else{ $cat->parentId = request('parentCategory'); }
         $cat->save();
         return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {$menu ='category';
        $cat = Category::find($id);
        $cats = Category::all();
         return view('admin.categories.edit',compact(['menu','cat','cats']));
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
            'name'=>'required',
            'about'=>'required'
        ));

        $category = Category::find($id);

        $category->name = request('name');
        $category->slug = str_slug( request('name'));
        $category->about= request('about');
        $category->color = request('color');
        $category->parentId = request('parentCategory');

        if(request('parentCategory')== NULL){ $category->parentId = 0; }

        $category->save();
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cats = Category::where('parentId',$id)->get();
        foreach($cats as $c){
            Category::destroy($c->id);
        }
        Category::destroy($id);
        return redirect()->route('categories.index');
    }



}
