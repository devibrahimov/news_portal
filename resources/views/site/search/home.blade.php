@extends('site.template')

@section('css')
    
@endsection



@section('content')
    


 
 <!-- Start page content -->
 <section id="page-content" class="page-wrapper">
    <div class="zm-section bg-white pt-30 xs-pt-30 sm-pt-30 pb-40">
        <div class="container">
            <div class="row">
                <!-- Start left side -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 columns">
                    <div class="row mb-40">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-title">
                                <h2 class="h6 header-color inline-block uppercase"> axtarilan kelime neticeleri </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="zm-posts">

                                <!-- Start single post layout C -->
                                @foreach ($result as $news)
                                <article class="zm-post-lay-c zm-single-post clearfix">
                                        <div class="zm-post-thumb f-left">
                                            <a href="/xeber/{{$news->id}}/{{$news->slug}}" style="height:235.67px;background: url('{{$news->image}}') no-repeat;
                                                    background-size: cover; background-position: center center !important;"> </a>
                                        </div>
                                        <div class="zm-post-dis f-right">
                                            <div class="zm-post-header">
                                                <div class="zm-category"><a href="#" class="bg-cat-{{$news->CategoryNews->color}} cat-btn">{{$news->CategoryNews->name}}</a></div>
                                                <h2 class="zm-post-title"><a href="/xeber/{{$news->id}}/{{$news->slug}}">{{$news->header}}</a></h2>
                                                <div class="zm-post-meta">
                                                    <ul>
                                                        <li class="s-meta"><a href="#" class="zm-author">{{$news->authorUser->name}}</a></li>
                                                        <li class="s-meta"><a href="#" class="zm-date">{{ date('d.M.Y',strtotime($news->updated_at)) }}</a></li>
                                                    </ul>
                                                </div>
                                                <div class="zm-post-content">
                                                    <p> {{substr(strip_tags($news->content),0,200)}} ... </p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach
                             

                                <!-- Start single post layout C -->
                                 
                                <!-- Start Advertisement -->
                                <div class="advertisement">
                                    <div class="row mtb-40">
                                        <div class="col-md-12 text-center">
                                            <a href="#"><img src="/site/images/ad/3.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Advertisement -->
                             
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End left side -->
              @include('site.category.rightbar')
            </div>
            <!-- Start pagination area -->
            <div class="row hidden-xs">
                <div class="zm-pagination-wrap mt-70">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                              
                                {{$result->links()}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End pagination area -->
            <!-- Start Advertisement -->
            <div class="advertisement">
                <div class="row mt-40">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <a href="#"><img src="/site/images/ad/2.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <!-- End Advertisement -->
        </div>
    </div>
</section>
<!-- End page content -->










@endsection




@section('js')
    
@endsection