@extends('admin.template')

@section('css')
 
    <link rel="stylesheet" href="/admin/template/css/bootstrap-wysihtml5.css" />

@endsection
@section('breadcramp')

@endsection

@section('content')

    <div class="row-fluid">

        {{--        <div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>--}}
        {{--            <h4 class="alert-heading">Success!</h4>--}}
        {{--            Tou're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. </div>--}}

        {{--           --}}



        <div class="span9">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>News add</h5>
                </div>
                <div class="widget-content nopadding">

            {!! Form::open(['route'=>['news.store'],'method'=>'POST','class'=>'form-horizontal','files'=>'true']) !!}
            
            <div class="control-group">
                        <label class="control-label">News Header :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="header">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">News Category </label>
                        <div class="controls">
                            <select class="span11" name="catId">
                        {{--<option value="0"> Parent Category </option>--}}
                                @foreach ($cats as $cat)
                                    <option value="{{$cat->id}}"> {{$cat->name}} </option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">News Image :</label>
                        <div class="controls"> 
                                    <input type="file" class=" btn btn-info" name="image"/> 
                            
                        </div>
                    </div>
                    <div class="control-group">
                            <label class="control-label">News Movie :</label>

                            <div class="controls"> 
                             <input type="text" class="span11 btn btn-danger" name="movie" placeholder="paste video link"> 
                            </div>

                        </div>
                    <div class="control-group">
                            <label for="checkboxes" class="control-label">Slider check :</label>
                            <div class="controls">
                                    <label class="btn btn-primary"> 
                                            <input type="checkbox" name="slider"  value="1" />
                                            <span>News Show in slider at Home</span>
                                    </label>
                                    
                            </div>
                          </div>
        
                    <div class="control-group">
                            <div class="widget-content">
                                <div class="control-group">
                                    <label class="control-label">News Content :</label>

                                        <div class="controls">
                                            <textarea class="content span12" name="content" rows="6"  ></textarea>
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
<script src="/admin/template/js/jquery.uniform.js"></script> 
    <script src="/admin/template/js/wysihtml5-0.3.0.js"></script>
    <script src="/admin/template/js/jquery.peity.min.js"></script>
    <script src="/admin/template/js/bootstrap-wysihtml5.js"></script>
    <script>
        $('.content').wysihtml5();
    </script>
@endsection