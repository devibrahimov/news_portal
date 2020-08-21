<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu ='comment'; 
        $comments = Comment::orderBy('id','DESC')->get();
        return view('admin.comment.index',compact('menu','comments'));
    }


    
    public function checkedcomment(){
        $menu ='comment'; 
        $comments = Comment::where('success','=','1')->orderBy('id','DESC')->get();
        return view('admin.comment.index',compact('menu','comments'));
    }
    public function notcheckcomment(){
        $menu ='comment'; 
        $comments = Comment::where('success','=','0')->orderBy('id','DESC')->get();
        return view('admin.comment.index',compact('menu','comments'));
    }
    public function dailycomment(){
        $menu ='comment'; 
        $date =  date('Y-m-d') ;
        $comments = Comment::where('created_at','LIKE','%'.$date.'%')->orderBy('id','DESC')->latest()->get();
        return view('admin.comment.index',compact('menu','comments'));
    }
    public function replycomment(){
        $menu ='comment'; 
        $comments = Comment::where('reply','!=',NULL)->orderBy('id','DESC')->get();
        return view('admin.comment.index',compact('menu','comments'));
    }
    











    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($commentid,$postid,$userid)
    { 
        $menu = 'comment';
         

        $comment = Comment::find($commentid);

        $newscomments = Comment::where('postId','=',$postid)
                                ->where('success','=','1')
                                ->where('reply','=',NULL)
                                ->where('id','!=',$commentid)
                                ->get();
        $replycomments = Comment::where('reply','=',$commentid)
                                ->get();

        return view('admin.comment.reply',compact(['menu','comment','postid','userid','newscomments','replycomments']));
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
            'content'=>'required|max:800',
         ]);

         $comment = new Comment();

         $comment->comment = request('content');
         $comment->postId = request('post');
         $comment->userId = request('user');
         $comment->reply = request('reply');
         $comment->notification = '0';
         $comment->success = '1';
         $comment->save();
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




/**
 * Comment access column update 1
 */

    public function access($id)
    {
        
       $comment = Comment::find($id);

       $comment->success = '1';
       $comment->save();
       return back();
    }
    

    
/**
 * Comment access column update 0
 */
    public function remove($id)
    {
        
       $comment = Comment::find($id);

       $comment->success = '0';
       $comment->save();
       return back();
    }
    



}
