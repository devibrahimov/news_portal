@extends('admin.template')

@section('content')
<div class="row-fluid">
<a href="{{route('todolist.create')}} "class="btn btn-large btn-primary">Yeni Tapşırıq Əlavə Et</a>
</div>
<div class="row-fluid">
    <div class="span12">



            <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                      <h5>Ediləcəklər</h5>
                    </div>
                    <div class="widget-content nopadding">
                      <table class="table table-bordered data-table">
                        <thead>
                          <tr>
                            <th>Hata başlığı</th>
                            <th>İsdifadəçi</th>
                            <th>İstək Mətni</th>
                            <th>Engine version</th>
                          </tr>
                        </thead>
                        <tbody>
                                @foreach ($list as $item)
                                
                                <tr class="gradeX">
                                        <td>{{$item->header}}</td>
                                        <td>{{$item->user->name}}</td>
                                        <td> {{substr(strip_tags($item->content),0,20)}} ...</td>
                                        <td class="center">

                                             @if ( $item->checked==0 )
                                             <a href="{{route('todocheck',$item->id)}}" class="btn btn-info btn-mini">Check edin</a>
                                             <a href="{{route('todolist.show',$item->id)}}" class="btn btn-primary btn-mini">Bax</a>
                                             
                                              @endif
                                        </td>
                                    </tr>
                                    
                                @endforeach
                        </tbody>
                      </table>
                    </div>
            
            </div>






    </div>
  
</div>

<div class="row-fluid">
        <div class="span12">
    
    
    
                <div class="widget-box box-green">
                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                          <h5>Tamamlanmış Tapşırıqlar</h5>
                        </div>
                        <div class="widget-content nopadding">
                          <table class="table table-bordered data-table">
                            <thead>
                              <tr>
                                <th>Hata başlığı</th>
                                <th>İsdifadəçi</th>
                                <th>İstək Mətni</th>
                                <th>Engine version</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($checkedlist as $item)
                                
                            <tr class="gradeX">
                                    <td>{{$item->header}}</td>
                                    <td>{{$item->user->name}}</td>
                                    <td> {{substr(strip_tags($item->content),0,20)}} ...</td>
                                    <td class="center">
                                            @if ( $item->checked==1)
                                            <button class="btn btn-success  btn-mini">Tamamlandi</button>
                                               
                                                @endif    
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
<script src="/admin/template/js/matrix.tables.js"></script> 



@endsection