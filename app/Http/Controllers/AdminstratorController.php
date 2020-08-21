<?php

namespace App\Http\Controllers;

use App\User;
use App\Comment;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminstratorController extends Controller
{

    public function index()
    {   $menu = 'home';

        $comments = Comment::where('notification','=','1')->where('success','!=','1')->get();
        return view('admin.index',compact(['menu','comments']));
    }


    public function usersList(){
        $menu = 'users' ;
        $users = User::all();
        return view('admin.users.index',compact(['menu','users']));
    }
    public function userCreate(){
        $menu = 'users';
        return view('admin.users.create',compact(['menu']));
    }

    public function userStore(){

        $this->validate(request(),[
            'name'=>'required|string|max:100',
            'email'=>'required|string|email|max:200|unique:users',
            'status'=>'required|integer',
            'password'=>'required|string|min:6|confirmed'
        ]);

            $user = new User();

            $user->name = request('name');
            $user->email = request('email');
            $user->isAdmin = request('status');
            // $user-> = request('');

        if (request('password') != request('password_confirmation')) { return back();  }
            else{
                $user->password = Hash::make(request('password'));  }

                if(request()->hasFile('image')){
                    $this->validate(request(),['image'=>'image|mimes:jpg,jpeg,png|max:2048']);
                }
                $image = request()->file('image');
                $newimagename = 'avatar-'.request('name').time().'.'.$image->extension();

                if ($image->isValid()) {
                    # code...
                    $directory = 'uploads/users/'.date('y').'/'.date('m');
                    $imagedata = '/'.$directory.'/'.$newimagename;
                    $image->move($directory,$newimagename);
                    $user->avatar = $imagedata;

                }

            $user->save();
                $feedback = 'feedback';
                return  back();

    }

    public function updateUser($id){
        $menu = 'users';
        $user = User::find($id);
        return view( 'admin.users.update',compact(['menu','user']) );
    }


    public function editUser(Request $request, $id){


            $user =User::find($id);


            $user->name = request('name');
            $user->email = request('email');
            $user->isAdmin = request('status');
            // $user-> = request('');

        if (request('password') != request('password_confirmation')) { return back();  }
            else{
                $user->password = Hash::make(request('password'));  }

                if(request()->hasFile('avatar')){
                    $this->validate(request(),['image'=>'image|mimes:jpg,jpeg,png|max:2048']);
                    $image = request()->file('avatar');
                    $newimagename = 'avatar-'.request('name').time().'.'.$image->extension();

                    if ($image->isValid()) {
                        # code...
                        $directory = 'uploads/users/'.date('y').'/'.date('m');
                        $imagedata = '/'.$directory.'/'.$newimagename;
                        $image->move($directory,$newimagename);
                        $user->avatar = $imagedata;

                    }
                }


            $user->save();
                $feedback = 'feedback';
                return  back();
    }

public function destroyUser($id){
    $user = User::find($id)->delete();
      return back();
}






}
