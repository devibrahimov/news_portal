  <!-- Start Right sidebar -->
  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 sidebar-warp columns">
    <div class="row">
       <!-- Start Advertisement -->
       <div class="advertisement">
            <div class="row  ">
                <div class="col-md-12 text-center">
                    <a href="#"><img src="/site/images/ad/ad_sidebar.png" alt=""></a>
                </div>
            </div>
        </div>
        <!-- End Advertisement -->
        <!-- Start post layout E -->
        <aside class="zm-post-lay-e-area col-md-12 col-sm-6 col-lg-12 mt-60">
            <div class="row mb-40">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-title">
                        <h2 class="h6 header-color inline-block uppercase">Most Commented</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="zm-posts">


                         
                        <!-- Start single post layout E -->

                        @foreach ($mostcommentpost as $news)



                        <article class="zm-post-lay-e zm-single-post clearfix">
                                <div class="zm-post-thumb f-left">
                                    <a href="/xeber/{{$news->id}}/{{$news->slug}}" style="height:70px;background: url('{{$news->image}}') no-repeat;
                                        background-size: cover;background-position: center center !important;">
                                        {{-- <img src="{{$news->image}}" alt="img"> --}}
                                    </a> 
                                </div>
                                <div class="zm-post-dis f-right">
                                    <div class="zm-post-header">
                                        <h2 class="zm-post-title"><a href="/xeber/{{$news->id}}/{{$news->slug}}">{{$news->header}}</a></h2>
                                        <div class="zm-post-meta">
                                            <ul>
                                                    <li class="s-meta"><a href="#" class="zm-author">{{$news->authorUser->name}}</a></li>
                                                    <li class="s-meta"><a href="#" class="zm-date">{{ date('d.M.Y',strtotime($news->updated_at)) }}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>


                            
                        @endforeach
                        
                        <!-- Start single post layout E -->



                        
                    </div>
                </div>
            </div>
        </aside>
        <!-- End post layout E -->
        <aside class="zm-post-lay-f-area col-md-12 col-sm-6 col-lg-12 mt-60 sm-mt-60">
            <div class="row mb-40">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-title">
                        <h2 class="h6 header-color inline-block uppercase">Recent Commented</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="zm-posts">


                        <!-- Start single post layout F -->
                        @foreach ($comments as $item)
                        <a class="zm-post-lay-f zm-single-post clearfix">
                            <div class="zm-post-dis">
                                <p><a  href="/xeber/{{$item->postId}}/{{$item->post->slug}}"><strong>{{$item->post->header}} </strong></a> - <em>“ {{substr(strip_tags($item->comment),0,150)}} ...”</em>   </p>
                            </div>
                        </a>
                        @endforeach
                       
                        <!-- Start single post layout F -->
                         

                        
                    </div>
                </div>
            </div>
        </aside>
        <aside class="zm-post-lay-a-area col-md-12 col-sm-6 col-lg-12 mt-60">
            <div class="row mb-40">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-title">
                        <h2 class="h6 header-color inline-block uppercase">Today’s Tips</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="zm-posts">
                        <article class="zm-post-lay-a sidebar">
                            <div class="zm-post-thumb">
                                <a href="blog-single-image.html"><img src="/site/images/post/b/2.jpg" alt="img"></a>
                            </div>
                            <div class="zm-post-dis">
                                <div class="zm-post-header">
                                    <h2 class="zm-post-title h2"><a href="blog-single-image.html">Consectetur adipisicing elit sed eiusmod tempor incididunt.</a></h2>
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
</div>
<!-- End Right sidebar -->