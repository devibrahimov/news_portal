@extends('admin.template')



@section('content')
    <div class="row-fluid">
        <div class="span12">
    <div class="widget-box">
        <div class="widget-title">
            <a href="{{route('categories.create')}}"class="btn  btn-success "><i class="icon-pencil "></i> Add new Category</a>

        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Category </th>
                    <th>Parent category</th>
                    <th>Category About</th>
                    <th>Buttons</th>
                </tr>
                </thead>
                <tbody>

                @foreach($categorylist as $cat)
                <tr class="gradeX">
                    <td>{{$cat->id}}</td>
                    <td>
                        @if ($cat->parentId == NULL)
                            <p class="label label-important">{{$cat->name}}</p>
                            @else
                            {{$cat->name}}
                        @endif

                    </td>

                    <td>
                        @if ($cat->parent_cat == NULL)
                            {{ '-------'}}
                            @else
                            {{$cat->parent_cat->name}}
                             @endif

                    </td>


                    <td> {{$cat->about}}</td>
                    <td class="center">
                        <a href="{{route('categories.edit',$cat->id)}}"class="btn btn-primary btn-mini"><i class="icon-edit "> </i> Edit</a>
                        {!! Form::model($cat,['route'=>['categories.destroy',$cat->id],'method'=>'DELETE' ]) !!}
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