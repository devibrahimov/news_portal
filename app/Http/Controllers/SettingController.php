<?php

namespace App\Http\Controllers;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::find(1)->first();
//        SELECt * From settings where id =1
        $menu ='setting';
        return view('admin.setting.create',compact(['setting','menu']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $this->validate(request(),[
            'headerSite'=>'required',
            'aboutSite'=>'required',
            'email'=>'required',
            'phone'=>'required'
        ]);

        $data = Setting::find(1);
        $data->headerSite = request('headerSite');
        $data->aboutSite  = request('aboutSite');
        $data->email      = request('email');
        $data->phone      = request('phone');

        if(request()->hasFile('logo')){
        $this->validate(request(),['logo'=>'image|mimes:png,jpg,jpeg,gif,svg|max:5048']);
        }else{
            //if  you don't want to uploading file
            $data->save(); //update data
            return back();
        }

        $imageLogo = request()->file('logo');
        //print_r($imageLogo);die;
        $imagename = 'logo' . '-' . time(). '.' .$imageLogo->extension();//make image name

        if($imageLogo->isValid()){
            $directory = 'uploads/setting';
            $filedir = '/'.$directory.'/'.$imagename;//for save to db
            $imageLogo->move($directory,$imagename);//save file

            $data->logo = $filedir; //save to db
        }

        $data->save(); //update data
        if($data){

           return back();
        }else{

            return back();
        }
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
}
