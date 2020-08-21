@extends('admin.template')



@section('content')

<div class="quick-actions_homepage">
        <ul class="quick-actions"> 
                <li class="bg_ls span3"> <a href="error404.html"> <i class="icon-tint"></i> Bu Günün Şərhləri</a> </li>

             <li class="bg_lg span3"> <a href="charts.html"> <i class="icon-check"></i> Təsdiqlənmiş Şərhlər</a> </li> 
          <li class="bg_lr"> <a href="error404.html"> <i class="icon-remove"></i> Təsdiqlənməmiş Şərhlər</a> </li>
          <li class="bg_lb"> <a href="error404.html"> <i class="icon-th-list"></i> Cavablandırılmış Şərhlər</a> </li>

        </ul>
      </div>


    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title">
 
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered data-table">
                        <thead>
                        <tr>
                            <th>#</th>
                            {{-- <th>id</th> --}}
                            <th>Post </th>
                            <th>User</th>
                            <th>Comment</th>
                            <th>Buttons</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($comments as $c)
                            <tr class="gradeX">
                                {{-- <td>
                                    <input type="checkbox">
                                </td> --}}
                                <td>{{$c->id}}</td>
                                <td> {{$c->post->header}} </td>
                                <td>   {{$c->user->name}}  </td>
                                <td> {{$c->comment}}</td>
                                <td class="center" width="8%">
                                    
                                        <a href="{{route('comments.create',[$c->id,$c->post->id,$c->user->id])}}"class="btn btn-info btn-mini"><i class="icon-reply "> </i> Cavabla  </a>

                                   @if ($c->success == 0)

                                    <a href="{{route('comments.access',$c->id)}}"class="btn btn-success btn-mini"><i class="icon-check "> </i> to Confirm </a>  
                                    @else
                                    <a href="{{route('comments.remove',$c->id)}}"class="btn btn-warning btn-mini"><i class="icon-remove bordered "> </i> Gizlə </a>   
                                   
                                    @endif

                                   {!! Form::model($c,['route'=>['comments.destroy',$c->id],'method'=>'DELETE' ]) !!}
                                   <button class="btn btn-danger btn-mini"> <i class="icon-trash "> </i> Sil </button>
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