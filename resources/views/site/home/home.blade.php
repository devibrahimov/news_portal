@extends('site.template')

@section('content')
<div class="trending-post-area">
        <div class="container-fluid">
            <div class="row">
                <div class="trend-post-list zm-lay-c-wrap zm-posts clearfix">

                    <!-- Start single trend post -->
                    <div class="col-md-6 col-sm-12 col-xs-12 p-0">
                        <article class="zm-trending-post zm-lay-c large zm-single-post" data-dark-overlay="2.5"  data-scrim-bottom="9" data-effict-zoom="1">
                            <div class="zm-post-thumb">
                                <img src="{{$sliderfirstposts[0]->image}}"  height="600px" alt="img">
                            </div>
                            <div class="zm-post-dis text-white">
                            <div class="zm-category"><a href="#" class="bg-cat-{{$sliderfirstposts[0]->CategoryNews->color}} cat-btn">{{$sliderfirstposts[0]->CategoryNews->name}}</a></div>
                            <h2 class="zm-post-title"><a href="/xeber/{{$sliderfirstposts[0]->id}}/{{$sliderfirstposts[0]->slug}} ">{{$sliderfirstposts[0]->header}}</a></h2>
                                <div class="zm-post-meta">
                                    <ul>
                                        <li class="s-meta"><a href="#" class="zm-author">{{$sliderfirstposts[0]->authorUser->name}}</a></li>
                                        <li class="s-meta"><a href="#" class="zm-date">{{ date('d.M.Y',strtotime($sliderfirstposts[0]->updated_at)) }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- End single trend post -->
                    <!-- Start single trend post -->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            @foreach ($slidersecondposts as $item)
                            <div class="col-md-6 col-sm-6 p-0">
                                    <article class="zm-trending-post zm-lay-c zm-single-post" data-dark-overlay="2.5"  data-scrim-bottom="9" data-effict-zoom="1">
                                        <div class="zm-post-thumb" style="height:300.67px;background: url('{{$item->image}}') no-repeat;
                                                background-size: cover; background-position: center center !important;">
                                         
                                        </div>
                                        <div class="zm-post-dis text-white">
                                        <div class="zm-category"><a href="#" class="bg-cat-{{$item->CategoryNews->color}} cat-btn">{{$item->CategoryNews->name}} </a></div>
                                        <h2 class="zm-post-title"><a href="/xeber/{{$item->id}}/{{$item->slug}}"> {{$item->header}} </a></h2>
                                            <div class="zm-post-meta">
                                                <ul>
                                                    <li class="s-meta"><a href="#" class="zm-author">{{$item->authorUser->name}}</a></li>
                                                    <li class="s-meta"><a href="#" class="zm-date">{{ date('d.M.Y',strtotime($item->updated_at)) }}</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                           
                             
                    </div>
                    <!-- End single trend post -->

                </div>
            </div>
        </div>
    </div>

    

@include('site.home.popular')
    

@include('site.home.video')

<!-- Start News Posts  -->

<div class="zm-section bg-white pt-50 xs-pt-30 sm-pt-30 pb-70">
        <div class="container">
            <div class="row">
                <!-- Start left side -->
                @include('site.home.latest')
                <!-- End left side -->
                @include('site.home.sidebar')
            </div>
        </div>
    </div>
<!-- End News Posts  -->
   
@endsection

@section('css')
    
@endsection

@section('js')

@endsection