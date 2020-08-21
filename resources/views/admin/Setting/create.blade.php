@extends('admin/template')

@section('css')
@endsection
{{-- @section('breadcramp')
    <div id="content-header">
        <div id="breadcrumb">
            <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
            <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Setting</a>
        </div>
    </div>
    @endsection --}}

@section('content')

    <div class="row-fluid">

{{--        <div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>--}}
{{--            <h4 class="alert-heading">Success!</h4>--}}
{{--            Tou're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. </div>--}}

{{--           --}}



        <div class="span9">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Site-info</h5>
                </div>
                <div class="widget-content nopadding">
{{--                    <form action="#" method="get" class="form-horizontal">--}}
                   {!! Form::model($setting, ['route' => ['setting.update', 1], 'method'=>'PUT', 'files'=>true, 'class'=>'form-horizontal']) !!}

                        <div class="control-group">
                            <label class="control-label">Site name :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="headerSite"  value="{{$setting->headerSite}}" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email :</label>
                            <div class="controls">
                                <input type="text" class="span11" name="email" value="{{$setting->email}}" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Phone </label>
                            <div class="controls">
                                <input type="text"  class="span11" name="phone"  value="{{$setting->phone}}"  />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Logo:</label>
                            <div class="controls">
                                <input type="file" name="logo"  class="span11" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Site about</label>
                            <div class="controls">
                                <textarea class="span11" name="aboutSite"  > {{$setting->aboutSite}} </textarea>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    {!! Form::close() !!}
{{--                    </form>--}}
                </div>
            </div>


        </div>
     
        <div class="span3">
                <div class="widget-box">
                    <div class="widget-title">
                       <h5> News Image </h5>
                    </div>
                      <div class="widget-content nopadding">
                            <img src="{{$setting->logo}}" alt="" width="100%"  srcset="">
                      </div>
                </div>
                 
            </div>
    </div>

@endsection




@section('js')
@endsection