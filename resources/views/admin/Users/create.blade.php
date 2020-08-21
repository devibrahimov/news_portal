@extends('admin.template')

@section('css')
@endsection
@section('breadcramp')
    <div id="content-header">
        <div id="breadcrumb">
            <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
            <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Categories</a>
        </div>
    </div>
@endsection

@section('content')

    <div class="row-fluid">
         
            {{-- <div class="alert alert-success alert-block"> <a class="close" data-dismiss="alert" href="#">×</a> 
                <h4 class="alert-heading">Success!</h4> 
                Tou're not looking too good. Nulla vitae elit libero, a pharetra augue.
                 Praesent commodo cursus magna, vel scelerisque nisl consectetur et. </div>  --}}
           



        <div class="span9">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>User </h5>
                </div>
                <div class="widget-content nopadding">
                    <form class="form-horizontal" method="POST" action="{{ route('user.register') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                    <div class="control-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="control-label">New User :</label>
                        <div class="controls">
                                <input id="name" type="text" class="span11" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                        <div class="control-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="control-label">E-mail :</label>
                            <div class="controls">
                            <input type="email" id="email" class="span11" name="email" value="{{old('email')}} "required>
                           @if($errors->has('email'))
                           <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                           @endif
                        </div>
                        </div>

                        <div class="control-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="control-label">Password:</label>
                                <div class="controls">
                                        <input id="password" type="password" class="span11" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                            </div>
                            </div>

                            <div class="control-group">
                                    <label for="password-confirm" class="control-label">Confirm Password</label>
        
                                    <div class="controls">
                                        <input id="password-confirm" type="password" class="span11" name="password_confirmation" required>
                                    </div>
                                </div>
        


 
                            <div class="control-group{{ $errors->has('status') ? ' has-error' : '' }}">
                           <label class="control-label">User status</label>
                           <div class="controls">
                               <select class="span6" name="status" required>
                                    <option value="0"> User </option>
                                    <option value="2"> Modirator </option>
                                   <option value="1"> Admin </option>
                               </select>
                           </div>
                       </div>

                       <div class="control-group {{ $errors->has('image') ? ' has-error' : '' }}">
                        <label class="control-label">User avatar image :</label>
                        <div class="controls">
                        <input type="file" id="image" class="span6" name="image" value="{{old('image')}} "required>
                       @if($errors->has('image'))
                       <span class="help-block">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                       @endif
                    </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                    </form>

                </div>
            </div>


        </div>
    </div>
@endsection




@section('js')
@endsection