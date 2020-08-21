<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todolist;
class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $menu = 'todolist';
       $list = Todolist::where('checked','=','0')->get();
       $checkedlist = Todolist::where('checked','=','1')->get();
       return view('admin.todolist.home',compact('menu','list','checkedlist') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = 'todolist';
        
        return view('admin.todolist.create',compact('menu') ) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate(request(),[
          'header'=>'required'
      ]);

       $todolist = new Todolist();

       $todolist->header  = request('header');
       $todolist->content = request('content');
       $todolist->userId = request('userId');

       if (request()->hasFile('image')) {
            $this->validate(request(),['file'=>'image|mimes:jpg,png,jpeg|size:2048']);
            $image = request()->file('image');
            $newimagename = time().'.'.$image->extension();
     
            if($image->isValid()){
                $directory = 'uploads/todoscreens/'.date('y').'/'.date('m').'/'.date('d');
                $imagedata = '/'.$directory.'/'.$newimagename;
                $image->move($directory,$newimagename);
                $todolist->image = $imagedata;
            }
            
        }
        $todolist->save();
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
        $menu = 'todolist';
        
        $todo =Todolist::find($id);
        if( !$todo ){
            return redirect()-> route('admin404');
        }else{
            return view('admin.todolist.show',compact('menu','todo') ) ;
          
        }
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function todocheck($id){

        $row = Todolist::find($id);
        $row->checked  = 1;
        $row->save();
        return back();

    }
}
