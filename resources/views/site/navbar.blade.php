<div class="header-bottom-area hidden-sm hidden-xs ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="menu-wrapper  bg-theme clearfix">
                        <div class="row">
                            <div class="col-md-11">
                        <div class="mainmenu-area">
                            <nav class="primary-menu uppercase">
                                <ul class="clearfix">
                                    
                                @foreach ($categories as $cat)

                                <li class="drop"> 

                                        @if ($cat->child_category->count() )
                                        {{-- eyer alt kategoriyasi varsa link olmasin --}}
                                        <a href="#"> {{$cat->name}} </a>

                                        {{--  alt kategoriyasi varsa dropdown olsun --}}
                                        @if ($cat->child_category->count() )
                                        <ul class="dropdown arrow-left">
    

                                        @foreach ($cat->child_category as $item) 
                                        <li> 
                                                <a href="/{{$item->id}}/{{$item->slug}}">{{$item->name}}</a>
                                                
                                                {{--  @if ($item->child_category->count() )
                                                <ul class="dropdown arrow-left" style="left: 48px;">
                                                    @foreach ($item->child_category as $cats) 
                                                        <li> 
                                                            <a href="/{{$cats->id}}/{{$cats->slug}}">{{$cats->name}}</a>
                                                        </li>
                                                    @endforeach  
                                                </ul>
                                                @endif --}}
                                            
                                        </li>
                                        @endforeach 
    
                                        </ul>
                                        @endif

                                        @else
                                          {{-- yox eyer alt kategoriyasi yoxdur link olsun --}}
                                        <a href="/{{$cat->id}}/{{$cat->slug}}"> {{$cat->name}} </a>
                                        @endif
                                   

                                   

                                </li> 
                                
                                @endforeach 
                                    
                                        
                                        
                                </ul>
                            </nav>
                        </div>
                            </div>
                            <div class="col-md-1">
                                <div class="search-wrap pull-right">
                                    <div class="search-btn"><i class="fa fa-search"></i></div>
                                    <div class="search-form">
                                    <form action="/searching" method="GET" role="search">
                                        {{ csrf_field() }}
                                            <input type="search" placeholder="Axrar" name="searchword">
                                            <button type="submit"><i class='fa fa-search'></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area hidden-md hidden-lg">
        <div class="fluid-container">
            <div class="mobile-menu clearfix">
                <div class="search-wrap mobile-search">
                    <div class="mobile-search-btn"><i class="fa fa-search"></i></div>
                    <div class="mobile-search-form">
                        <form action="#">
                            <input type="text" placeholder="Search">
                            <button type="submit"><i class='fa fa-search'></i></button>
                        </form>
                    </div>
                </div>
                <nav id="mobile_dropdown">
                    <ul>
                            @foreach ($categories as $cat)

                            <li ><a href="/{{$cat->id}}/{{$cat->slug}}"> {{$cat->name}} </a>

                                @if ($cat->child_category->count() )
                                <ul >

                                    @foreach ($cat->child_category as $item) 
                                <li><a href="/{{$cat->id}}/{{$cat->slug}}">{{$item->name}}</a></li>
                                    @endforeach 

                                </ul>
                                @endif

                            </li> 
                           
                            @endforeach 
                                
                    </ul>
                </nav>
            </div>       
        </div>
    </div>
    <!-- mobile-menu-area end -->   