@extends('layouts.reseller')
@section('content')

    <!-- Box Comment -->
      @foreach($domains as $domain) 
      <div class="box box-widget">
            <div class="box-header with-border">
                <div class="user-block">
                @foreach ($user_domains as $user)
                    @if($user->id==$domain->site_id)
                        <img class="img-circle" src="{{url($user->image)}}" alt="User Image">
                        <span class="username"><a href='{{url('/domain/resellershow/'.$domain->id)}}'>{{$user->name}}</a>  &nbsp;  &nbsp;  
                        <!-- <span class='glyphicon glyphicon-envelope'> --> {{$user->email}}<!-- </span> --></span>
                        @if($domain->is_seen==1)
                           <a href="{{url('/domain/resellershow/'.$domain->id)}}"> <span style="color:green" class='glyphicon glyphicon-eye-open'> </span></a>
                        @else
                           <a href="{{url('/domain/resellershow/'.$domain->id)}}"> <span style="color:red" class='glyphicon glyphicon-eye-close'> </span></a>
                        @endif
                    @endif
                @endforeach    
                </div>
                <!-- /.user-block -->
                <div class="box-tools">
                    @if($domain->is_solved==1)
                        <button type="button" class="btn btn-box-tool" data-toggle="tooltip" style="color:green;" title="Mark as solved">
                        <i style="color:green;" class="fa fa-check">&nbsp; Selling</i></button>
                     @else
                        <button type="button" class="btn btn-box-tool" data-toggle="tooltip" style="color:red;" title="Mark as unsolved">
                       <a href="{{url('/domain/solve_resellerindex/'.$domain->id)}}"><i style="color:red;" class="fa fa-check">&nbsp; Not Selling</i></a></button>
                     @endif   
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
                <!-- /.box-tools -->
            </div>
             
            <!-- /.box-header -->
            <div class="box-body">
                <!-- post text -->
                <p>{{$domain->Domain_name}}</p>
            </div>
        </div>
    @endforeach    


    </section>
@endsection