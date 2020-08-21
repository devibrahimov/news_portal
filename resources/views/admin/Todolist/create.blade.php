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
                    <h5>Yeni Tapşırıq Əlavə Et</h5>
                </div>
                <div class="widget-content nopadding">

            {!! Form::open(['route'=>['todolist.store'],'method'=>'POST','class'=>'form-horizontal','files'=>'true']) !!}
            <input type="hidden" value="1" name="userId">
            <div class="control-group">
                        <label class="control-label"> Header :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="header">
                        </div>
                    </div>
 
                    <div class="control-group">
                        <label class="control-label"> Screenshort :</label>
                        <div class="controls"> 
                                    <input type="file" class=" btn btn-info" name="image"/> 
                            
                        </div>
                    </div>
                    
        
                    <div class="control-group">
                            <div class="widget-content">
                                <div class="control-group">
                                    <label class="control-label"> Content :</label>

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