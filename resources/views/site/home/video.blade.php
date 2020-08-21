
               <!-- Start Video Post [View layout A]  -->
               <div class="video-post-area ptb-70 bg-dark">
                    <div class="container">
                        <div class="row mb-40">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="section-title">
                                    <h2 class="h6 header-color inline-block uppercase">Video Post</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="zm-video-post-list zm-posts  clearfix">
                                    <!-- Start single video post [video layout A] -->
                                    <div class="zm-video-post zm-video-lay-b zm-single-post">
                                        <div class="zm-video-thumb"  data-dark-overlay="2.5" >
                                            <img src="{{$firstvideo[0]->image}}" alt="video" height="420px">
                                            <a class="video-activetor" href="xeber/{{$firstvideo[0]->id}}/{{$firstvideo[0]->slug}}" >
                                                <i class="fa fa-play-circle-o"></i>
                                            </a>
                                        </div>
                                        <div class="zm-video-info text-white">
                                            <h2 class="zm-post-title"><a href="xeber/{{$firstvideo[0]->id}}/{{$firstvideo[0]->slug}}">{{$firstvideo[0]->header}}</a></h2>
                                            <div class="zm-post-meta">
                                                <ul> 

                                                    <li class="s-meta"><a href="#" class="zm-date">{{$firstvideo[0]->CategoryNews->name}}</a></li>
                                                    <li class="s-meta"><a href="#" class="zm-date">{{date('d-M-Y',strtotime($firstvideo[0]->updated_at) )}}</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End single video post [video layout A] -->
                                </div>
                            </div>



                            <div class="col-md-6 sm-mt-70 xs-mt-50">
                                <div class="zm-video-post-list layout-c zm-posts zm-scrollbar clearfix">


                                    <!-- Start single video post [video layout A] -->
                                    @foreach ($secondvideoposts as $post)
                                    <div class="zm-video-post zm-video-lay-c zm-single-post clearfix">
                                            <div class="zm-video-thumb"  data-dark-overlay="2.5" >
                                                <img src="{{$post->image}}" alt="video" width="252px" height="130px">
                                                <a class="video-activetor" href="xeber/{{$post->id}}/{{$post->slug}}">
                                                    <i class="fa fa-play-circle-o"></i>
                                                </a>
                                            </div>
                                            <div class="zm-video-info text-white">
                                            <h2 class="zm-post-title"><a href="xeber/{{$post->id}}/{{$post->slug}}">{{$post->header}}</a></h2>
                                                <div class="zm-post-meta">
                                                    <ul>
                                                        <li class="s-meta zm-post-time">{{$post->CategoryNews->name}}</li> 
                                                        <li class="s-meta"><a href="#" class="zm-date">{{date('d-M-Y',strtotime($post->updated_at) )}}</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                  
                                    <!-- End single video post [video layout A] -->
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Video Post [View layout A]  -->

