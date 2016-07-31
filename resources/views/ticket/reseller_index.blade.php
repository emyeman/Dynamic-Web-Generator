@extends('layouts.reseller')
@section('content')

    <!-- Box Comment -->
    @foreach ($tickets as $ticket)
        <div class="box box-widget">
            <div class="box-header with-border">
                <div class="user-block">
                @foreach ($users as $user)
                    @if($user->id==$ticket->site_id)
                        <img class="img-circle" src="{{url($user->image)}}" alt="User Image">
                        <span class="username"><a href='{{url('/ticket/resellershow/'.$ticket->id)}}'>{{$user->name}}</a>  &nbsp;  &nbsp;  
                        <!-- <span class='glyphicon glyphicon-envelope'> --> {{$user->email}}<!-- </span> --></span>
                        @if($ticket->is_seen==1)
                           <a href='{{url('/ticket/resellershow/'.$ticket->id)}}'> <span style="color:green" class='glyphicon glyphicon-eye-open'> </span></a>
                        @else
                           <a href='{{url('/ticket/resellershow/'.$ticket->id)}}'> <span style="color:red" class='glyphicon glyphicon-eye-close'> </span></a>
                        @endif
                    @endif
                @endforeach    
                </div>
                <!-- /.user-block -->
                <div class="box-tools">
                    @if($ticket->is_solved==1)
                        <button type="button" class="btn btn-box-tool" data-toggle="tooltip" style="color:green;" title="Mark as solved">
                        <i style="color:green;" class="fa fa-check">&nbsp; Solved</i></button>
                     @else
                        <button type="button" class="btn btn-box-tool" data-toggle="tooltip" style="color:red;" title="Mark as unsolved">
                       <a href="{{url('/ticket/solve_resellerindex/'.$ticket->id)}}"><i style="color:red;" class="fa fa-check">&nbsp; Unsolved</i></a></button>
                     @endif   
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <!-- post text -->
                <p>{{$ticket->subject}}</p>

                <p>{{substr($ticket->message,0,100)}} ...<a href='{{url('/ticket/resellershow/'.$ticket->id)}}'>more</a></p>
            </div>
            <!-- /.box-body -->
                <!-- /.box-comment -->
                
                <!-- <div class="box-footer">
                    <form action="#" method="post">
                        @if($reseller->id==$ticket->reseller_id)
                            <img class="img-responsive img-circle img-sm" src="{{url($reseller->image)}}" alt="Alt Text">
                        @endif
                        <div class="img-push">
                            <input type="text" class="form-control input-sm" placeholder="Press enter to send an E-mail">

                        </div>
                    </form>
                </div>
                 -->
        </div>
    @endforeach    


    </section>
@endsection