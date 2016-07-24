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
                        <span class="username"><a href="#">{{$user->name}}</a></span>
                    @endif
                @endforeach    
                </div>
                <!-- /.user-block -->
                <div class="box-tools">
                    <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as solved">
                        <i class="fa fa-check"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <!-- post text -->
                <p>{{$ticket->subject}}</p>

                <p>{{$ticket->message}}</p>
            </div>
            <!-- /.box-body -->
                <!-- /.box-comment -->
                <div class="box-footer">
                    <form action="#" method="post">
                        @if($reseller->id==$ticket->reseller_id)
                            <img class="img-responsive img-circle img-sm" src="{{url($reseller->image)}}" alt="Alt Text">
                        @endif
                        <!-- .img-push is used to add margin to elements next to floating images -->
                        <div class="img-push">
                            <input type="text" class="form-control input-sm" placeholder="Press enter to send an E-mail">

                        </div>
                    </form>
                </div>
                
        </div>
    @endforeach    


    </section>
@endsection