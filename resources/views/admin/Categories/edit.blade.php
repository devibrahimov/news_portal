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

{{--                <div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>--}}
{{--                    <h4 class="alert-heading">Success!</h4>--}}
{{--                    Tou're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. </div>--}}





        <div class="span9">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>{{$cat->name}} category-Edit</h5>
                </div>
                <div class="widget-content nopadding">
                    {!! Form::model($cat,['route' => ['categories.update',$cat->id], 'method'=>'PUT', 'class'=>'form-horizontal']) !!}

                    <div class="control-group">
                        <label class="control-label">New Category :</label>
                        <div class="controls">
                            <input type="text" class="span11" name="name"  value="{{$cat->name}} "  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Parent Category :</label>
                        <div class="controls">
                            <select class="span11" name="parentCategory">
                                
                                     
                                 
                                    @if($cat->child_category->count() > 0)
                                    <option disabled style="background-color:#f06292;color:#fff"> 
                                     <b > Alt kategoriylari oldugu ucun bu kategoriyaya USt kategoriya secile bilmez </b>
                                    </option>
                                  @else
                                 
                                  @foreach ($categories as $c)
                                  @if($c->parentId==0)
                               
                                  <option value="{{$c->id}}" {{$c->id == old('parentId',$cat->parentId) ? 'selected': ''}}> {{$c->name}}  </option>
                                  @endif
                                @endforeach
                                <option  {{$cat->parentId == old('parentId',0) ? 'selected': ''}} value="">Ana Category </option>
                                  @endif
                                    

                            </select>
                        </div>
                    </div>







                    <div class="control-group" id="color">
                            <label for="checkboxes" class="control-label">Color check :</label>
                            <div class="controls">
    
                                <label class="btn btn-info" >
                                    <input type="radio" name="color" @if ($cat->color==1) {{'checked'}} @endif value="1" />
                                    <span>primary</span>
                                </label>
    
    
                                <label class="btn btn-success" >
                                    <input type="radio" name="color" @if ($cat->color==2) {{'checked'}} @endif  value="2" />
                                    <span >success</span>
                                </label>
    
                                <label class="btn btn-warning" >
                                    <input type="radio" name="color" @if ($cat->color==3) {{'checked'}} @endif  value="3" />
                                    <span >warning</span>
                                </label>
    
                                <label class="btn  btn-warning bg-pink" >
                                    <input type="radio" name="color" @if ($cat->color==4) {{'checked'}} @endif  value="4" />
                                    <span >pink</span>
                                </label>
    
    
                                <label class="btn btn-danger" >
                                    <input type="radio" name="color" @if ($cat->color==5) {{'checked'}} @endif  value="5" />
                                    <span >danger</span>
                                </label>
     
                            </div>
                        </div>
    

                        








                    <div class="control-group">
                        <label class="control-label">Category about</label>
                        <div class="controls">
                            <textarea class="span11" name="about"  >   {{$cat->about}}    </textarea>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>


        </div>
    </div>
@endsection




@section('js')
@endsection