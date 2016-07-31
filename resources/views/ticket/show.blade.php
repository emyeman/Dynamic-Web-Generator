@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')

{!! Html::style('assets/css/table-scroll.css') !!}

<!-- Main content -->
        <section class="content">
        <!-- <div>
        <img src="{{url('assets/reseller_assets/images/13.png')}}" class="img-responsive"> 
        </div> -->

    <div class="row text-uppercase" style="text-align: center;">
        <h1 style="color:#01A4A4;">
        <span style="font-size:34px; font-weight: 700;">
          Show Ticket<br>
        </span>
        </h1>
       <hr style="display: inline-block; width: 40px; height: 2px; background: #cccccc; ">  
        </div>

     <div class="row">
    <div class="col-md-10 col-md-offset-1">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title" style="color:#01A4A4; font-weight:blod;">
                 <a href="{{url('/ticket')}}"><span class="glyphicon glyphicon-backward"></span></a>
				&nbsp; &nbsp; View your Ticket</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding col-md-offset-1">
            

			<h2>{{$ticket->subject}}</h2>
			<span class='glyphicon glyphicon-user'> {{$user->name}}</span>
			<b>|</b> <span class='glyphicon glyphicon-envelope'> {{$user->email}}</span>
			<b>|</b> <span class='glyphicon glyphicon-calendar'> {{$ticket->created_at}}</span> &nbsp;
			@if($ticket->is_solved==1) 
				<b>|</b>  &nbsp;  &nbsp;  &nbsp; <span style="color:green" class='glyphicon glyphicon-ok'> solved</span>
			@else
				<b>|</b>  &nbsp;  &nbsp;  &nbsp; <a href="{{url('/ticket/solve_show/'.$ticket->id)}}"><span style="color:red" class='glyphicon glyphicon-remove'> unsolved</span></a>
			@endif
			<br><br>
			<div class='col-md-10'>{{$ticket->message}} <br/><br/></div>
			 </div>
 </div>

<!-- for make comment  and show -->
<div class="box">
            <div class="box-header">
              <h3 class="box-title" style="color:#01A4A4; font-weight:blod;">
                &nbsp; &nbsp; Comment your Ticket</h3>
            </div>
            <!-- /.box-header -->
    <div class="box-body no-padding col-md-offset-1">
           @foreach ($comments as $comment)   
            <?php $flag_comment=0;?>
            @foreach ($user_comments as $user_comment) 
                @if($flag_comment==0)
                    @if($user_comment->id==$comment->user_id)
                    <?php $flag_comment=1;?>
                      <div class="row">
                        <div class="col-sm-11" style="background-color:rgb(248, 243, 249);">
                              <div class="col-sm-2 text-center">
                                <img src="{{url($user_comment->image)}}" class="img-circle" height="65" width="65" alt="Avatar">
                              </div>
                          <div class="col-sm-9">
                            <font size="4px" color="blue">{{$user_comment->name}} : &nbsp; 
                            </font><font size="2px">{{$comment->comment}}</font><br/>
                            created_at : &nbsp; <small>{{$comment->created_at}}</small><br/><br/>
                          </div>
                        </div>
                      </div>
                    @endif
                @endif
              @endforeach
            @endforeach
              <hr/>
        <!-- form add comment -->
          <h4>ADD Comment:</h4>
  {!!Form::open(['route'=>'comment.store','method'=>'post']) !!}
            <div class="form-group col-sm-11">
              <textarea class="form-control" rows="3" placeholder='Write comment ...' required  name='comment'>{{old('comment')}}</textarea>
              <input value="{{$ticket->id}}" id='ticket_id' name='ticket_id' type='hidden'/>
              <input value="user_ticket" id='redirect_ticket' name='redirect_ticket' type='hidden'/>
                <div class="box-header">
                        <div class="box-footer clearfix">
                       <div class="input-group-btn">
                            <input type='submit' class='btn-flat pull-right form-control btn btn-primary' name='ok' value='ADD Comment' />   
                       </div>
                    </div>
                  </div>
               </div>
  {!!Form::close() !!}


</div>

</div>
<!-- end comment --> 
  <!-- /.box -->
</div>
     </div>
</section>
<!-- /.content -->
</div>


@endsection