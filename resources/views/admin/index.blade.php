@extends('admin.template')
<?php 
use App\User ;
use App\Posts ; 
 ?>

@section('css')
<style>
.site-stats li {
    width:20% !important;
}
.site-stats {
   
    text-align: left !important; 
}
</style>
@endsection


@section('content')

 
<!--Chart-box-->    
<div class="row-fluid">
        <div class="widget-box">
          <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
            <h5>Site Analytics</h5>
          </div>
          <div class="widget-content" >
            <div class="row-fluid">
              <div class="span7">
                <div class="chart"></div>
              </div>
              <div class="span5">
                <ul class="site-stats">
                        <li class="bg_lh"><i class="icon-user"></i> <strong>2540</strong> <small>Total Users</small></li>
                        <li class="bg_lh"><i class="icon-plus"></i> <strong>120</strong> <small>New Users </small></li>
                        <li class="bg_lh"><i class="icon-shopping-cart"></i> <strong>656</strong> <small>Total Shop</small></li>
                        <li class="bg_lh"><i class="icon-tag"></i> <strong>9540</strong> <small>Total Orders</small></li>
                        <li class="bg_lh"><i class="icon-repeat"></i> <strong>10</strong> <small>Pending Orders</small></li>
                        <li class="bg_lh"><i class="icon-globe"></i> <strong>8540</strong> <small>Online Orders</small></li>
                        <li class="bg_lh"><i class="icon-user"></i> <strong>2540</strong> <small>Total Users</small></li>
                        <li class="bg_lh"><i class="icon-plus"></i> <strong>120</strong> <small>New Users </small></li>
                        <li class="bg_lh"><i class="icon-shopping-cart"></i> <strong>656</strong> <small>Total Shop</small></li>
                        <li class="bg_lh"><i class="icon-user"></i> <strong>2540</strong> <small>Total Users</small></li>
                        <li class="bg_lh"><i class="icon-plus"></i> <strong>120</strong> <small>New Users </small></li>
                        <li class="bg_lh"><i class="icon-shopping-cart"></i> <strong>656</strong> <small>Total Shop</small></li>
                        </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
  <!--End-Chart-box--> 
  
<div class="row-fluid">
    <div class="span6">
            <div class="widget-box">
                    <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2"><span class="icon"><i class="icon-chevron-down"> </i></span>
                    <h5>Latest Comments </h5> 
                    <span class=" badge badge-important  " style="margin-top:9px"> {{count($comments)}} new comment</span>  
                    </div>
                    <div class="widget-content nopadding collapse in" id="collapseG2">
                      <ul class="recent-posts">

                @foreach (array_slice($comments->toArray(),0,5) as $item)
                       
                    <li> 
                        <div class="user-thumb">
                        <img alt="User" src="{{User::find($item['userId'])->avatar}} " style="width:45px; height:45px;"  >
                        </div>

                        <div class="article-post"> 
                            <span class="user-info"> By: <strong> {{User::find($item['userId'])->name}}</strong> | Date: {{date('d-m-y',strtotime($item['created_at']))}} | Time: {{date('G,i',strtotime($item['created_at']))}} </span>
                        <p> <strong>{{Posts::find($item['postId'])->header}}</strong> ... 
                              <br />
                              {{substr($item['comment'],0,200)}} ... </p>
                        </div> 
                        <div>
                                <a href="{{route('comments.create',[$item['id'],$item['postId'],$item['userId']])}}" class="btn btn-primary btn-mini">Reply</a>
                                <a href="{{route('comments.access',$item['id'])}}" class="btn btn-success btn-mini">to Confirm</a>
                                <button id="deletecomment" class="btn btn-danger btn-mini">Delete</button>
                        </div>
                     </li>
                    
                @endforeach
                        

                          <a href="" class="btn btn-warning btn-mini">View All</a>
                        </li>
                      </ul>
                    </div>
                  </div>
          
    </div>
</div>
@endsection




@section('js')

<script>
// === Make chart === //

$(document).ready(function(){
	
	var d1 = [];
    for (var i = 0; i <= 10; i += 1) d1.push([i, parseInt(Math.random() * 30)]);

	var data = new Array(); 
	data.push({
		data:d1,
        bars: {
            show: true, 
            barWidth: 0.4, 
            order: 1,
        }
    });    
	
	
    //Display graph
    var bar = $.plot($(".bars"), data, {
		legend: true
	});
	
});
	
    
      });
</script>

@endsection