<!DOCTYPE html>
<html lang="en">
<head>
<title>{{$setting->headerSite}}</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/admin/template/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/admin/template/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/admin/template/css/colorpicker.css" />
    <link rel="stylesheet" href="/admin/template/css/datepicker.css" />
    <link rel="stylesheet" href="/admin/template/css/fullcalendar.css" />
    <link rel="stylesheet" href="/admin/template/css/matrix-style.css" />
    <link rel="stylesheet" href="/admin/template/css/matrix-media.css" />
    <link href="/admin/template/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="/admin/template/css/jquery.gritter.css" />
    @yield('css')
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
    <h1><a href="dashboard.html"> Admin Panel</a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse"  >
    <ul class="nav">
        
        
        <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
        <li class="">
                <form action="{{ route('logout') }}" method="POST">
                    {{ csrf_field() }}
                    <button type="submit">Logout </button>
                </form>
                <i class="icon icon-share-alt"></i> <span class="text">Logout</span></li>
    </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
    <input type="text" placeholder="Search here..."/>
    <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="{{route('admin.home')}}" class="visible-phone"><i class="icon icon-home"></i> Home</a>
    <ul>
        <li  <?php if($menu=='home'){echo 'class="active"';} ?> ><a href="{{route('admin.home')}}"><i class="icon icon-home"></i> <span>Home</span></a> </li>
        <li <?php if($menu=='newcategory'){echo 'class="active"';} ?> ><a href="{{route('categories.create')}}"><i class="icon icon-list"></i> <span>Create new Category</span></a> </li>
        <li <?php if($menu=='category'){echo 'class="active"';} ?> ><a href="{{route('categories.index')}}"><i class="icon icon-th-list"></i> <span>Categories</span></a> </li>
        <li <?php if($menu=='addnews'){echo 'class="active"';} ?> ><a href="{{route('news.create')}}"><i class="icon icon-pencil"></i> <span>Publish News</span></a> </li>
        <li <?php if($menu=='news'){echo 'class="active"';} ?> ><a href="{{route('news.index')}}"><i class="icon icon-th-large"></i> <span>News</span></a> </li>
        <li <?php if($menu=='comment'){echo 'class="active"';} ?> ><a href="{{route('comments.index')}}"><i class="icon icon-comments"></i> <span>Comments</span></a> </li>
        <li <?php if($menu=='users'){echo 'class="active"';} ?> ><a href="{{route('admin.users')}}"><i class="icon icon-user"></i> <span>Users</span></a> </li>
        <li  <?php if($menu=='setting'){echo 'class="active"';} ?>  ><a href="{{route('setting.index')}}"><i class="icon icon-cogs"></i> <span>Setting</span></a> </li>
        <li  <?php if($menu=='todolist'){echo 'class="active"';} ?>  ><a  style="color:gold"  href="{{route('todolist.index')}}"><i class="icon icon-bullhorn" ></i> <span>To do List</span></a> </li>

    </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
   @yield('breadcramp')
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
       @yield('content')
    </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
    <div id="footer" class="span12"> 2020 &copy; Xəbərlər Admin.</div>
</div>

<!--end-Footer-part-->

<script src="/admin/template/js/excanvas.min.js"></script>
<script src="/admin/template/js/jquery.min.js"></script>
<script src="/admin/template/js/jquery.ui.custom.js"></script>
<script src="/admin/template/js/bootstrap.min.js"></script>
<script src="/admin/template/js/jquery.flot.min.js"></script>
<script src="/admin/template/js/jquery.flot.resize.min.js"></script>
<script src="/admin/template/js/jquery.peity.min.js"></script>
<script src="/admin/template/js/matrix.js"></script> 
<script src="/admin/template/js/matrix.dashboard.js"></script>
<script src="/admin/template/js/jquery.gritter.min.js"></script>
<script src="/admin/template/js/matrix.interface.js"></script>
<script src="/admin/template/js/jquery.validate.js"></script>
<script src="/admin/template/js/matrix.form_validation.js"></script>
<script src="/admin/template/js/jquery.wizard.js"></script>
<script src="/admin/template/js/jquery.uniform.js"></script>
<script src="/admin/template/js/select2.min.js"></script>

 @yield('js')
</body>
</html>
