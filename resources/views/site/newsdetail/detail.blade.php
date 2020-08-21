@extends('site.template')




@section('content')


    <!-- Start page content -->
    <div id="page-content" class="page-wrapper">
            <div class="zm-section single-post-wrap bg-white ptb-70 xs-pt-30">
                <div class="container">
                    <div class="row">
                        <!-- Start left side -->
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 columns">
                            <div class="row mb-40">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="section-title">
                                        <h2 class="h6 header-color inline-block uppercase">{{$news->CategoryNews->name}}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Start single post image formate-->
                                <div class="col-md-12">
                                    <article class="zm-post-lay-single">
                                        <div class="zm-post-thumb">
                                            @if ( $news->movie )
                                                {{-- <iframe src="{{$news->movie}}" width="100%" height="500px" frameborder="0"></iframe> --}}
                                                <iframe  width="100%" height="500px" " src="{{$news->movie}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                @else
                                                <a href="/xeber/{{$news->id}}/{{$news->slug}}"><img src="{{$news->image}}" alt="img"></a>
                                            @endif
                                       
                                        </div>
                                        <div class="zm-post-dis">
                                            <div class="zm-post-header">
                                                <h2 class="zm-post-title h2"><a href="blog-single-image.html">{{$news->header}}</a></h2>
                                                <div class="zm-post-meta">
                                                    <ul>
                                                        <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                        <li class="s-meta"><a href="#" class="zm-date">{{date('d-M-Y',strtotime($news->updated_at))}}</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="zm-post-content"> {!! $news->content !!}</div>

                                            <!-- Start Advertisement -->
                                            <div class="advertisement">
                                                <div class="row mtb-40">
                                                    <div class="col-md-12 text-center">
                                                        <a href="#"><img src="/site/images/ad/3.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Advertisement -->
                                            <div class="entry-meta-small clearfix ptb-40 mtb-40 border-top border-bottom">
                                                <div class="meta-list pull-left">
                                                    <span class="post-title">Tags</span> 
                                                    <a href="#">Travel</a>,<a href="#">Nature</a>,<a href="#">Environment</a>,<a href="#">Entertainment</a>
                                                </div>
                                                <div class="share-social-link pull-right">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a href="#"><i class="fa fa-rss"></i></a>
                                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </article>
                                </div>
                                <!-- End single post image formate -->
                            
                                <!--Start Similar post -->
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <aside class="zm-post-lay-a2-area">
                                        <div class="post-title mb-40">
                                            <h2 class="h6 inline-block">Similar Posts For You</h2>
                                        </div>
                                        <div class="row">
                                            <div class="zm-posts clearfix">
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                                    <article class="zm-post-lay-a2">
                                                        <div class="zm-post-thumb">
                                                            <a href="blog-single-image.html"><img src="/site/images/post/a/a2/11.jpg" alt="img"></a>
                                                        </div>
                                                        <div class="zm-post-dis">
                                                            <div class="zm-post-header">
                                                                <h2 class="zm-post-title h2"><a href="blog-single-image.html">Lorem ipsum dolor sit amet consectetur.</a></h2>
                                                                <div class="zm-post-meta">
                                                                    <ul>
                                                                        <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                                        <li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                                    <article class="zm-post-lay-a2">
                                                        <div class="zm-post-thumb">
                                                            <a href="blog-single-image.html"><img src="/site/images/post/a/a2/12.jpg" alt="img"></a>
                                                        </div>
                                                        <div class="zm-post-dis">
                                                            <div class="zm-post-header">
                                                                <h2 class="zm-post-title h2"><a href="blog-single-image.html">Lorem ipsum dolor sit amet consectetur.</a></h2>
                                                                <div class="zm-post-meta">
                                                                    <ul>
                                                                        <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                                        <li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-4 hidden-md col-lg-4 hidden-sm">
                                                    <article class="zm-post-lay-a2">
                                                        <div class="zm-post-thumb">
                                                            <a href="blog-single-image.html"><img src="/site/images/post/a/a2/13.jpg" alt="img"></a>
                                                        </div>
                                                        <div class="zm-post-dis">
                                                            <div class="zm-post-header">
                                                                <h2 class="zm-post-title h2"><a href="blog-single-image.html">Lorem ipsum dolor sit amet consectetur.</a></h2>
                                                                <div class="zm-post-meta">
                                                                    <ul>
                                                                        <li class="s-meta"><a href="#" class="zm-author">Thomson Smith</a></li>
                                                                        <li class="s-meta"><a href="#" class="zm-date">April 18, 2016</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                                <!-- End similar post -->
                            @include('site.newsdetail.comment')

                            </div>
                        </div>
                        <!-- End left side -->
                        <!-- Start Right sidebar -->
                       
                        @include('site.newsdetail.rightbar')
                        
                        <!-- End Right sidebar -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End page content -->







@endsection

 

@section('css')
    
@endsection

@section('js')

@endsection