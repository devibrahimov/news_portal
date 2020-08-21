@extends('admin.template')



@section('content')
    <div class="row-fluid">
        <div class="span12">
    <div class="widget-box">
        <div class="widget-title">
            <a href="{{route('admin.adduser')}}"class="btn  btn-success "><i class="icon-user "></i> Add new User</a>

        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Avatar </th>
                    <th>User </th>
                    <th>E-mail</th>
                    <th>Stusat</th>
                    <th>Buttons</th>
                </tr>
                </thead>
                <tbody>

                @foreach($users as $user)
                <tr class="gradeX">
                    <td>{{$user->id}}</td>
                    <td>   
                        <div style="width:50px;height:50px;background-image:url({{$user->avatar}});background-size:100%;background-position:relative"></div>
                       </td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @if ($user->statusUser==1)
                        {{'admin'}}
                        @else
                        {{'user'}}  
                        @endif
                       </td>
                    <td class="center">
                        <a href="{{route('admin.updateuser',$user->id)}}"class="btn btn-primary btn-mini"><i class="icon-edit "> </i> Edit</a>
                      
                        {!! Form::model($user,['route'=>['admin.deleteuser',$user->id],'method'=>'DELETE' ]) !!}
                        <button class="btn btn-danger btn-mini"> <i class="icon-trash "> </i> Delete</button>
                        {!! Form::close(); !!}
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
        </div>
    </div>
@endsection



@section('css')
    <link rel="stylesheet" href="/admin/template/css/uniform.css" />
    <link rel="stylesheet" href="/admin/template/css/select2.css" />
@endsection

@section('js')

    <script src="/admin/template/js/excanvas.min.js"></script>
    <script src="/admin/template/js/jquery.min.js"></script>
    <script src="/admin/template/js/jquery.ui.custom.js"></script>
    <script src="/admin/template/js/bootstrap.min.js"></script>

    <script src="/admin/template/js/jquery.dataTables.min.js"></script>
    <script src="/admin/template/js/matrix.js"></script>
    <script src="/admin/template/js/matrix.tables.js"></script>
@endsection