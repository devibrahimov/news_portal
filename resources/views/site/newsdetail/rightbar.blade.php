

 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 sidebar-warp columns">

<div class="row">
    <aside class="zm-post-lay-a-area col-sm-6 col-md-12 col-lg-12 sm-mt-50 xs-mt-50">
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
                            <div class="advertisement">
                                <a href="#"><img src="/site/images/ad/ad_sidebar.png" alt=""></a>
                            </div>                        </div>

                    </article>
                </div>
            </div>
        </div>
    </aside>

    <!-- Start post layout E -->
    <aside class="zm-post-lay-e-area col-sm-6 col-md-12 col-lg-12 mt-70">
        <div class="row mb-40">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="section-title">
                    <h2 class="h6 header-color inline-block uppercase">{{$news->CategoryNews->name}}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="zm-posts">


                @foreach ($catnews as $news)
                    <!-- Start single post layout E -->
                        <article class="zm-post-lay-e zm-single-post clearfix">
                            <div class="zm-post-thumb f-left">
                                <a href="/xeber/{{$news->id}}/{{$news->slug}}"><img src="{{$news->image}}" height="81.2"alt="img"></a>
                            </div>
                            <div class="zm-post-dis f-right">
                                <div class="zm-post-header">
                                    <h2 class="zm-post-title"><a href="/xeber/{{$news->id}}/{{$news->slug}}">{{$news->header}}</a></h2>
                                    <div class="zm-post-meta">
                                        <ul>
                                            <li class="s-meta"><a href="#" class="zm-author">{{$news->CategoryNews->name}}</a></li>
                                            <li class="s-meta"><a href="#" class="zm-date">{{date('d-M-Y',strtotime($news->updated_at))}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Start single post layout E -->
                    @endforeach







                </div>
            </div>
        </div>
    </aside>
    <!-- End post layout E -->
    <aside class="zm-post-lay-f-area col-sm-6 col-md-12 col-lg-12 mt-70">
        <div class="row mb-40">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="section-title">
                    <h2 class="h6 header-color inline-block uppercase">Seçilmiş Xəbərlər</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="zm-posts">

                    <!-- Start single post layout F -->
                    @foreach($randnews as $news)
                    <div class="zm-post-lay-f zm-single-post clearfix">
                        <div class="zm-post-dis">
                            <p><a href="/xeber/{{$news->id}}/{{$news->slug}}"> {{$news->CategoryNews->name}} </a> - <em>“ {{substr(strip_tags($news->content),0,80)}} ...” </em>  <strong></strong></p>
                        </div>
                    </div>
                    @endforeach
                    <!-- Start single post layout F -->

                </div>
            </div>
        </div>
    </aside>
</div>


 </div>