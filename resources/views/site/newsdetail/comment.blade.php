    <!-- Start Comment box  -->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="review-area mt-50 ptb-70 border-top">
                <div class="post-title mb-40">
                    <h2 class="h6 inline-block"> Comments </h2>
                </div>
                <div class="review-wrap">
                    <div class="review-inner">


                        @foreach ($comments as $comment)
                            <!-- Start Single Review -->
                            
                                <div class="single-review clearfix">
                                    <div class="reviewer-img">
                                     
                                        <img src="{{$comment->user->avatar}}" width="50px" height="50px" alt="">
                                    </div>
                                    <div class="reviewer-info">
                                        <h4 class="reviewer-name"><a href="#">{{$comment->user->name}}</a></h4>
                                        <span class="date-time">{{date('d-M-Y',strtotime($comment->created_at))}}</span>
                                        <p class="reviewer-comment">{{$comment->comment}}</p>
                                        {{-- <a href="#" class="reply-btn">Reply</a>--}}
                                    </div>
                                </div>
                                 
                              
                                <!-- End Single Review -->

                               <!-- Start Single Review -->
                               @if ($comment->replycomment->count() )
                                 
                               @foreach ($comment->replycomment as $item)
                               <div class="single-review second-comment clearfix">
                                    <div class="reviewer-img">
                                        <img src="{{$item->user->avatar}}" width="50px" height="50px" alt="">
                                    </div>
                                    <div class="reviewer-info">
                                        <h4 class="reviewer-name"><a href="#">{{$item->user->name}}</a></h4>
                                        <span class="date-time">{{date('d-M-Y',strtotime($item->created_at))}}</span>
                                        <p class="reviewer-comment">{{$item->comment}} </p>

                                    </div>
                                </div>
                          
                               @endforeach
                              
                                
                               @endif
                               <!-- End Single Review -->


                        @endforeach



                    </div>
                </div>
            </div>
        </div>
        <!-- End Comment box  -->
        <!-- Start comment form -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="comment-form-area">
                <div class="post-title mb-40">
                    <h2 class="h6 inline-block">leave a comment</h2>
                </div>
                <div class="form-wrap">



                     
                      {!! Form::open(['route'=> 'usercomment.store', 'method'=>'POST'])!!}
                        <div class="form-inner clearfix">
                            <input type="hidden" name="post" value="{{$news->id}}">
                            <input type="hidden" name="user" value="{{'14'}}">
                            <div class="single-input">
                                <textarea class="textarea"name="comment" maxlength="590" placeholder="Type your comment..."></textarea>
                            </div>
                            <button class="submit-button" type="submit">Şərhi Yayınla</button>
                        </div>
                        {!!Form::close()!!}
                 




                </div>
            </div>
        </div>
        <!-- End comment form -->