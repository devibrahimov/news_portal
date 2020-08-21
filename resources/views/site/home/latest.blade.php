<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 columns">
        <!-- Start trending post -->
         
        <!-- End trending post -->
        <div class="row mb-40">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="section-title">
                    <h2 class="h6 header-color inline-block uppercase">Latest News</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="zm-posts">




    @foreach ($slidersecondposts as $item)
         <!-- Start single post layout C -->
         <article class="zm-post-lay-c zm-single-post clearfix">
                <div class="zm-post-thumb f-left">
                <a href="/xeber/{{$item->id}}/{{$item->slug}}"><img src="{{$item->image}}" height="222.22" alt="{{$item->header}}"></a>
                </div>
                <div class="zm-post-dis f-right">
                    <div class="zm-post-header">
                        <div class="zm-category"><a href="#" class="bg-cat-{{$item->CategoryNews->color}} cat-btn">{{$item->CategoryNews->name}}</a></div>
                        <h2 class="zm-post-title"><a href="/xeber/{{$item->id}}/{{$item->slug}}">{{$item->header}}</a></h2>
                        <div class="zm-post-meta">
                            <ul>
                                <li class="s-meta"><a href="#" class="zm-author">{{$item->authorUser->name}}</a></li>
                            <li class="s-meta"><a href="#" class="zm-date">{{date('d-M-Y',strtotime($item->updated_at) )}}</a></li>
                            </ul>
                        </div>
                        <div class="zm-post-content">
                                {{substr(strip_tags($item->content),0,200)}} 
                        </div>
                    </div>
                </div>
            </article>
            <!-- End single post layout C -->
    @endforeach
              
<!-- Start Advertisement -->
<div class="advertisement">
        <div class="row mtb-40">
            <div class="col-md-12 text-center">
                <a href="#"><img src="/site/images/ad/3.jpg" alt=""></a>
            </div>
        </div>
    </div>
    <!-- End Advertisement -->

     
    @foreach ($secondposts as $item)
    <!-- Start single post layout C -->
    <article class="zm-post-lay-c zm-single-post clearfix">
           <div class="zm-post-thumb f-left">
               <a href="/xeber/{{$item->id}}/{{$item->slug}}"><img src="{{$item->image}}"height="222.22" alt="{{$item->header}}"></a>
           </div>
           <div class="zm-post-dis f-right">
               <div class="zm-post-header">
                   <div class="zm-category"><a href="#" class="bg-cat-{{$item->CategoryNews->color}} cat-btn">{{$item->CategoryNews->name}}</a></div>
                   <h2 class="zm-post-title"><a href="/xeber/{{$item->id}}/{{$item->slug}}">{{$item->header}}</a></h2>
                   <div class="zm-post-meta">
                       <ul>
                           <li class="s-meta"><a href="#" class="zm-author">{{$item->authorUser->name}}</a></li>
                           <li class="s-meta"><a href="#" class="zm-date">{{date('d-M-Y',strtotime($item->updated_at) )}}</a></li>
                       </ul>
                   </div>
                   <div class="zm-post-content">
                        {{substr(strip_tags($item->content),0,180)}} 
                    </div>
               </div>
           </div>
       </article>
       <!-- End single post layout C -->
@endforeach
         
                   
        <div class="global-table">
            <div class="global-row">
                <div class="global-cell">
                    <div class="advertisement ">
                       <a href="#" class="block"><img src="/site/images/ad/1.jpg" alt="ad img"></a>
                   </div>
                </div>
            </div>
        </div>
    
                   
                </div>
            </div>
        </div>
    </div>