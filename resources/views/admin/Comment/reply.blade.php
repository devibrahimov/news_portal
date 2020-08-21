@extends('admin.template')

@section('content')
   
    <div class="row-fluid">

        <div class="span6">
              
            
            <div class="widget-box">
                        <div class="widget-title bg_lg">
                            <span class="icon"><i class="icon-signal"></i></span>
                            <a href="{{route('comments.access',$comment->id)}}"style="float:right;margin-right:7px;margin-top:7px;" class="btn btn-success btn-mini"><i class="icon-check "> </i> to Confirm </a>  

                        </div>
                        <div class="widget-content" >
                            
                                <div class="control-group">
                                        
                                        <div class="user-thumb">
                                                <img alt="User" src="{{$comment->user->avatar}}" style="width:45px; height:45px;"  >
                                                </div>
                        
                                                <div class="article-post"> 
                                                    <span class="user-info">User By: <strong>{{$comment->user->name}}</strong>  <br />
                                                     Date: {{date('d-m-y',strtotime($comment['created_at']))}} | Time: {{date('G,i',strtotime($comment['created_at']))}} </span>
                                                <p>  ... 
                                                      <br />
                                                      <strong> {{$comment->comment}}</strong> </p>
                                                </div>
                                </div>
                                <hr/>
                                <div class="control-group bordered">

                                    {!!Form::open(['route'=>['comments.store'],'method'=>'POST'])!!}
                                    <input type="hidden" name="user" value="1">
                                <input type="hidden" name="post" value="{{$comment->post->id}}">
                                    <input type="hidden" name="reply" value="{{$comment->id}}">
                                    <textarea class="content span12" name="content" rows="6" maxlength="800"  ></textarea>
                                  

                                    <div>
                                    <button class="btn btn-warning btn-mini">Cevapla</button>
                                    </div>
                                    {!!Form::close()!!}
                                    
                              
                                </div>
                        </div>
                </div>


                <div class="widget-box">
                        <div class="widget-title"><span class="icon"><i class="icon-user"></i></span>
                          <h5>Reply Comments </h5>
                        </div>
                        <div class="widget-content nopadding fix_hgt" style="height:300px">
                          <ul class="recent-posts">
                          
                          @foreach ($replycomments as $item)
                              <li>
                                <div class="user-thumb"> <img  style="width:45px;height:45px" alt="User" src="{{$item->user->avatar}}"> </div>
                                <div class="article-post"> <span class="user-info">{{$item->user->name}}</span>
                                <p>{{$item->comment}}</p>
                                </div>
                              </li>
                          @endforeach
                          
                             
                          </ul>
                        </div>
                      </div>

                      <div class="widget-box">
                            <div class="widget-title"><span class="icon"><i class="icon-user"></i></span>
                              <h5>Other Comments </h5>
                            </div>
                            <div class="widget-content nopadding fix_hgt" style="height: 500px">
                              <ul class="recent-posts">
                              
                              @foreach ($newscomments as $item)
                                  <li>
                                    <div class="user-thumb"> <img  style="width:45px;height:45px" alt="User" src="{{$item->user->avatar}}"> </div>
                                    <div class="article-post"> <span class="user-info">{{$item->user->name}}</span>
                                    <p>{{$item->comment}}</p>
                                    </div>
                                    <a href="{{route('comments.create',[$item->id,$item->post->id,$item->user->id])}}" class="btn btn-info btn-mini">comment</a>
                                  </li>
                              @endforeach
                              
                                 
                              </ul>
                            </div>
                          </div>
              
        </div>
   {{-- ------------------------------------------- --}}

        <div class="span6">
            <div class="widget-box">
                <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span></div>
                <div class="widget-content" > 
                
                    <img alt="User" src="{{$comment->post->image}}" style="width:100%; "  >
                    <h5>   {{$comment->post->header}}</h5>
                           {!!substr($comment->post->content,0,3000)!!} ... 
                         
                </div>
        </div>
    </div>

    </div>
@endsection



@section('css')
     
@endsection

@section('js')
 
@endsection
