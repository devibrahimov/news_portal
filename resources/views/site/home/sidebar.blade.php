 
 
   <!-- Start Right sidebar -->
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 sidebar-warp columns">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12 columns md-mt-40">
                <aside class="zm-post-lay-a2-area sm-mt-50 xs-mt-50">
                    <div class="row mb-40">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-title">
                                <h2 class="h6 header-color inline-block uppercase">Popular News</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                               
                            <div class="zm-posts responsive-fix">

                                @foreach ($mostcommentpost as $post)
                                <article class="zm-post-lay-a2">
                                        <div class="zm-post-thumb">
                                            <a href="/xeber/{{$post->id}}/{{$post->slug}}"><img src="{{$post->image}} " height="140px;" alt="{{$post->header}}"></a>
                                        </div>
                                        <div class="zm-post-dis">
                                            <div class="zm-post-header">
                                                <h2 class="zm-post-title h2"><a href="/xeber/{{$post->id}}/{{$post->slug}}">{{$post->header}}</a></h2>
                                                <div class="zm-post-meta">
                                                    <ul>
                                                        <li class="s-meta"><a href="#" class="zm-author">{{$post->CategoryNews->name}}</a></li>
                                                        <li class="s-meta"><a href="#" class="zm-date">{{date('d-M-Y',strtotime($post->created_at) )}}</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                  
                                @endforeach
                               
                                   
                            </div>
                        </div>

                        <div class="col-xs-12  mt-10 mb-10">
                                <div class="advertisement">
                                    <a href="#"><img src="/site/images/ad/ad_sidebar.png" alt=""></a>
                                </div>
                            </div>
                    </div>
                    
                </aside>
            </div>



            
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12 columns md-mt-40">
                <aside class="zm-post-lay-a4-area sm-mt-50">
                    <div class="row mb-40">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-title">
                                <h2 class="h6 header-color inline-block uppercase">Maraqlı Xəbərlər</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 mb-40">
                            <div class="advertisement">
                                <a href="#"><img src="/site/images/ad/ad_sidebar.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                          
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="zm-posts"> 

                               @foreach ($randnews as $item)
                               <article class="zm-post-lay-a4">
                                    <div class="zm-post-dis">
                                        <div class="zm-post-header">
                                        <h2 class="zm-post-title h2"><a href="/xeber/{{$item->id}}/{{$item->slug}}">{{$item->header}}</a></h2>
                                            <div class="zm-post-meta">
                                                <ul>
                                                    <li class="s-meta"><a href="#" class="zm-category">{{$item->CategoryNews->name}}</a></li>
                                                    <li class="s-meta"><a href="#" class="zm-date">{{date('d-M-Y',strtotime($item->updated_at) )}}</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="zm-post-content">
                                           <em>“ {{substr(strip_tags($item->content),0,100)}} ...” </em> 
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                               
                           








                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
        <div class="row mt-10 hidden-md">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 columns">
                    <div class="section-title">
                            <h2 class="h6 header-color inline-block uppercase">Şərhlər</h2>
                        </div>
                
                        @foreach ($comments as $item)
                        <article class="zm-post-lay-a4">
                             <div class="zm-post-dis">
                                 <div class="zm-post-header">
                                 {{-- <h2 class="zm-post-title h2"><a href="/xeber/{{$item->postId}}/{{$item->post->slug}}">{{$item->post->header}}</a></h2> --}}
                                     <div class="zm-post-meta">
                                         {{-- <ul>
                                             <li class="s-meta"><a href="#" class="zm-category">{{$item->user->name}}</a></li>
                                             <li class="s-meta"><a href="#" class="zm-date">{{date('d-M-Y',strtotime($item->created_at) )}}</a></li>
                                         </ul> --}}
                                     </div>
                                 </div>
                                 <a href="/xeber/{{$item->postId}}/{{$item->post->slug}}"> 
                                    <div class="zm-post-content">
                                    <em>“ {{substr(strip_tags($item->comment),0,150)}} ...” </em> 
                                    </div>
                                </a>
                             </div>
                         </article>
                         @endforeach




            </div>
            
        </div>
    </div>
    <!-- End Right sidebar -->
 