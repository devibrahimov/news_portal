@extends('admin.template')

@section('css')

    <link rel="stylesheet" href="/admin/template/css/bootstrap-wysihtml5.css" />
@endsection
@section('breadcramp')
    <div id="content-header">
        <div id="breadcrumb">
            <a href="{{route('admin.home')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
            <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-th"></i> News</a>
            <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-pencil"></i> {{$newsrow->header}}</a>
        </div>
    </div>
@endsection

@section('content')


<div class="row-fluid">

        <div class="span9">
            @if ($newsrow->movie != null )
            <div class="widget-box">
                    <div class="widget-title">
                    <h5> News Movie </h5>
                    </div>
                    <div class="widget-content nopadding"> 
                        <iframe src="{{$newsrow->movie}}" autostart="false" class="widget-content nopadding" width="100%" height="300px"></iframe>
                    </div>
                </div>
            @endif
        </div>

        <div class="span3">
           <div class="widget-box">
                    <div class="widget-title">
                       <h5> News Image </h5>
                    </div>
                      <div class="widget-content nopadding">
                            <img src="{{$newsrow->image}}" alt="" width="100%"  srcset="">
                      </div>
                </div> 
            </div>

  </div>
    <div class="row-fluid">

        {{--        <div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>--}}
        {{--            <h4 class="alert-heading">Success!</h4>--}}
        {{--            Tou're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. </div>--}}

        {{--           --}}


        <div class="span12">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Edit News : {{$newsrow->header}}</h5>
                </div>
                <div class="widget-content nopadding">

            {!! Form::model($newsrow,['route'=>['news.update',$newsrow->id],'method'=>'PUT','files'=>true,'class'=>'form-horizontal']) !!}
                    <div class="control-group">
                        <label class="control-label">News Header:</label>
                        <div class="controls">
                            <input type="text" class="span11" name="header" value="{{$newsrow->header}}">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">News Category </label>
                        <div class="controls">
                            <select class="span11" name="catId">
                            <option value="{{$newsrow->CategoryNews->id}}"> {{$newsrow->CategoryNews->name}}</option>
                                @foreach ($cats as $cat)
                                    <option value="{{$cat->id}}"> {{$cat->name}} </option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">News Image :</label>
                    
                        <div class="controls">
                            <input type="file" class="span11" name="image">
                        </div>
                    </div>
                    <div class="control-group">
                            <label class="control-label">News Movie :</label>

                            <div class="controls"> 
                             <input type="text" class="span11 btn btn-danger" name="movie" value="{{$newsrow->movie}}"> 
                            </div>

                        </div>
                    <div class="control-group">
                            <label for="checkboxes" class="control-label">Slider check :</label>
                            <div class="controls">
                                    <label class="btn btn-primary"> 
                                            <input type="checkbox" name="slider"  value="1" 
                                            @if($newsrow->slider == 1)
                                            {{'checked'}} 
                                            @endif />
                                            <span>News Show in slider at Home</span>
                                    </label>
                                    
                            </div>
                          </div>
                    <div class="control-group"> 

                            <div class="widget-content">
                                <div class="control-group">
                                    <label class="control-label">News Content :</label>

                                        <div class="controls">
                                            <textarea class="content span12" name="content" rows="20"  >{!! $newsrow->content !!}</textarea>
                                        </div>

                                </div>
                            </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>


        </div>
        
        
    </div>
@endsection




@section('js')

    <script src="/admin/template/js/wysihtml5-0.3.0.js"></script>
    <script src="/admin/template/js/jquery.peity.min.js"></script>
    <script src="/admin/template/js/bootstrap-wysihtml5.js"></script>
    <script>
        $('.content').wysihtml5();
    </script>
@endsection