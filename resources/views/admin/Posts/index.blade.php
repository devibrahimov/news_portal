@extends('admin.template')



@section('content')

<div class="row-fluid">
      
               <h1><a href="#" class="span2">2020</a></h1>
               <h1><a href="#" class="span2">2021</a></h1>
               <h1><a href="#" class="span2">2022</a></h1>
               <h1><a href="#" class="span2">2023</a></h1>
               <h1><a href="#" class="span2">2024</a></h1>
               <h1><a href="#" class="span2">2025</a></h1>
               <h1><a href="#" class="span2">2026</a></h1>
               <h1><a href="#" class="span2">2027</a></h1>
        
</div>
    <div class="row-fluid">
        <div class="span12">
    <div class="widget-box">
        <div class="widget-title">
            <a href="{{route('news.create')}}"class="btn  btn-success "><i class="icon-pencil "></i> Publish News</a>

        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>image </th>
                    <th>News </th>
                    <th>category</th>
                    <th>Author</th>
                    <th>Buttons</th>
                </tr>
                </thead>
                <tbody>

                @foreach($newsdata as $news)
                <tr class="gradeX">
                    <td> {{$news->id  }}  </td>
                    <td>   
                        <div style="width:100px;height:80px;background-image:url({{$news->image}});background-size:100%;background-position:relative"></div>
                       </td>
                    <td>{{$news->header}}</td>
                    <td>  {{$news->CategoryNews->name}}

                    </td>
                    <td> {{$news->authorUser->name}}</td>
                    <td class="center">
                        <a href="{{route('news.edit',$news->id)}}"class="btn btn-primary btn-mini"><i class="icon-edit "> </i> Edit</a>
                      
                        {!! Form::model($news,['route'=>['news.destroy',$news->id],'method'=>'DELETE' ]) !!}
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
 
@endsection

@section('js')

   
@endsection