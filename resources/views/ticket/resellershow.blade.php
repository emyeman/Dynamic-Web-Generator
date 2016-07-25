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
    <div class="box-footer">
    <form action="#" method="post">
            <img class="img-responsive img-circle img-sm" style="height:45px; width:40px;" src="{{url($reseller->image)}}" alt="Alt Text">
        <!-- .img-push is used to add margin to elements next to floating images -->
        <div class="img-push">
            <input type="text" class="form-control input-sm" placeholder="Press enter to send an E-mail">

        </div>
    </form>
</div>
    </section>
 
@endsection