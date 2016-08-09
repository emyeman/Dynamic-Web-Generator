@extends('layouts.reseller')
@section('content')

    <h2><div class='col-lg-1 col-ms-1'>
        <a href="{{url('/ticket/reseller_index')}}"><span class="glyphicon glyphicon-backward"></span></a>
    </div></small></h2>

    <h2>{{$ticket->subject}}</h2>
    <img class="img-responsive img-circle img-sm" style="height:45px; width:40px;" src="{{url($user->image)}}" alt="Alt Text">
      &nbsp;  &nbsp; <br/><span> {{$user->name}}</span>
    <b>|</b> <span class='glyphicon glyphicon-envelope'> {{$user->email}}</span>
    <b>|</b> <span class='glyphicon glyphicon-calendar'> {{$ticket->created_at}}</span> &nbsp;
    @if($ticket->is_solved==1) 
        <b>|</b>  &nbsp;  &nbsp;  &nbsp; <span style="color:green" class='glyphicon glyphicon-ok'> solved</span>
    @else
        <b>|</b>  &nbsp;  &nbsp;  &nbsp; <a href="{{url('/ticket/solve_resellershow/'.$ticket->id)}}"><span style="color:red" class='glyphicon glyphicon-remove'> unsolved</span></a>
    @endif
    <br><br>
    
    <div class="box-body">
        <!-- post text -->
        <p>{{$ticket->subject}}</p>

        <p>{{$ticket->message}}</p>
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
                                @if($user_comment->image != null)
                                  <img src="{{url($user_comment->image)}}" class="img-circle" height="60" width="60" alt="Avatar">
                              @else
                                <img src="{{url('default.jpg')}}" class="img-circle" height="60" width="60" alt="emy">
                              @endif
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
              <input value="ticket" id='type_ticket' name='type_ticket' type='hidden'/>
              <input value="reseller_ticket" id='redirect_ticket' name='redirect_ticket' type='hidden'/>
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


    <!-- <div class="box-footer">
    <form action="#" method="post">
            <img class="img-responsive img-circle img-sm" style="height:45px; width:40px;" src="{{url($reseller->image)}}" alt="Alt Text">
        <div class="img-push">
            <input type="text" class="form-control input-sm" placeholder="Press enter to send an E-mail">

        </div>
    </form>
</div> -->
    </section>
 
@endsection