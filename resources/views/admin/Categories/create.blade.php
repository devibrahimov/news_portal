@extends('admin.template')

@section('css')

    <style>
        .bg-pink{color: #fff;background-color: #f06292 !important}
    </style>
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
                    <h5>Site-info</h5>
                </div>
                <div class="widget-content nopadding">
            {!! Form::open(['route' => ['categories.store'], 'method'=>'POST', 'class'=>'form-horizontal']) !!}

                    <div class="control-group">
                        <label class="control-label">New Category :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="name"   />
                        </div>
                    </div>

                       <div class="control-group">
                           <label class="control-label">Parent Category :</label>
                           <div class="controls">
                               <select class="span11" name="parentCategory" id="parentCategory">
                                   <option value="0"> Parent Category </option>
                               @foreach ($parents as $cat)
                                   <option value="{{$cat->id}}"> {{$cat->name}} </option>
                               @endforeach

                               </select>
                           </div>
                       </div>




                    <div class="control-group" id="color">
                        <label for="checkboxes" class="control-label">Color check :</label>
                        <div class="controls">

                            <label class="btn btn-info" >
                                <input type="radio" name="color"  value="1" />
                                <span>primary</span>
                            </label>


                            <label class="btn btn-success" >
                                <input type="radio" name="color"  value="2" />
                                <span >success</span>
                            </label>

                            <label class="btn btn-warning" >
                                <input type="radio" name="color"  value="3" />
                                <span >warning</span>
                            </label>

                            <label class="btn  btn-warning bg-pink" >
                                <input type="radio" name="color"  value="4" />
                                <span >pink</span>
                            </label>


                            <label class="btn btn-danger" >
                                <input type="radio" name="color"  value="5" />
                                <span >danger</span>
                            </label>
 
                        </div>
                    </div>






                                   <div class="control-group">
                        <label class="control-label">Category about</label>
                        <div class="controls">
                            <textarea class="span11" name="about"  >  </textarea>
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

{{--
 color id-si color
 parentCategory
 --}}

<script !src="">
    // $(function () {
    // var select = document.getElementById('parentCategory');
    //
    // })
</script>
@endsection