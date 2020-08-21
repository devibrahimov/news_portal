 <!-- Start Popular News  -->
 <div class="zm-section bg-white ptb-70">
        <div class="container">
            <div class="row mb-40">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                    <div class="section-title">
                        <h2 class="h6 header-color inline-block uppercase">Popular News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12 col-lg-6">
                    <div class="zm-posts">
                        <article class="zm-post-lay-a">
                            <div class="zm-post-thumb">
                                <a href="/xeber/{{$firstposts[0]->id}}/{{$firstposts[0]->slug}}"><img src="{{$firstposts[0]->image}}"height="300px" alt="{{$firstposts[0]->header}}"></a>
                            </div>
                            <div class="zm-post-dis">
                                <div class="zm-post-header">
                                    <div class="zm-category"><a href="#" class="bg-cat-{{$firstposts[0]->CategoryNews->color}} cat-btn">{{$firstposts[0]->CategoryNews->name}} </a></div>
                                    <h2 class="zm-post-title h2"><a href="/xeber/{{$firstposts[0]->id}}/{{$firstposts[0]->slug}}">{{$firstposts[0]->header}}</a></h2>
                                    <div class="zm-post-meta">
                                        <ul>
                                            {{-- <li class="s-meta"><a href="#" class="zm-author">{{$item->authorUser->name}}</a></li> --}}
                                            <li class="s-meta"><a href="#" class="zm-date">{{date('d-M-Y',strtotime($item->updated_at) )}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="zm-post-content">
                              {{substr(strip_tags($firstposts[0]->content),0,400)}} 
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12 col-lg-6">
                    <div class="zm-posts">
                            @foreach ($secondposts as $item)
                        <!-- Start single post layout D -->
                        <article class="zm-post-lay-d clearfix">
                            <div class="zm-post-thumb f-left">
                                <a href="/xeber/{{$item->id}}/{{$item->slug}}"><img src="{{$item->image}}" height="113px" alt="{{$item->header}}"></a>
                            </div>
                            <div class="zm-post-dis f-right">
                                <div class="zm-post-header">
                                <div class="zm-category"><a href="#" class="bg-cat-{{$item->CategoryNews->color}} cat-btn">{{$item->CategoryNews->name}}</a></div>
                                    <h2 class="zm-post-title"><a href="/xeber/{{$item->id}}/{{$item->slug}}">{{$item->header}}</a></h2>
                                    <div class="zm-post-meta">
                                        <ul>
                                            {{-- <li class="s-meta"><a href="#" class="zm-author">{{$item->authorUser->name}}</a></li> --}}
                                        <li class="s-meta"><a href="#" class="zm-date">{{date('d-M-Y',strtotime($item->updated_at) )}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Start single post layout D -->
                       @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Popular News  -->