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
        <div>
        <img style="min-width: 30%; margin-left: 400px;" src="{{url('assets/reseller_assets/images/14-c.png')}}" class="img-responsive"> 
        </div>

       <hr style="display: inline-block; width: 40px; height: 2px; background: #cccccc; ">  
        </div>

    @if(Session::has('update_success'))
        <div class="alert alert-success alert-autocloseable" role="alert">{{session('update_success')}}</div>
    @endif
     <div class="row">
    <div class="col-md-12 col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title" style="color:#01A4A4; font-weight:blod;">View your Tickets</h3>

              <div class="pull-right">
               <a href="{{url('/ticket/create/')}}">
              <i class="fa fa-plus fa-3x" aria-hidden="true" style="color: #00a65a;"></i></a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
            <div id="table-scroll">
              <table class="table">
                    <tr>
                      <th width='20%'>Sender</th>
                        <th width='20%'>&nbsp; Reseller</th>
                        <th width='15%'>&nbsp; &nbsp; &nbsp; Date</th>
                        <th width='20%'>Subject</th>
                        <th width='30%'>Message</th>
                        <th width='15%'>Seen</th>
                        <th width='15%'>Solve</th>
                        <th width='5%'></th>
                    </tr>
                @foreach ($tickets as $ticket) 
                    @if($ticket->is_solved == true)
                        <tr style='background-color:rgb(203, 240, 203);'>  
                    @else
                        <tr style='background-color:pink;'>  
                    @endif
                        <td><a href='{{url('/ticket/'.$ticket->id)}}'>{{substr($user->email,0,12)}} </a><br/>{{$user->name}}</td>
                        <td><a href='{{url('/ticket/'.$ticket->id)}}'>{{substr($reseller->email,0,12)}} </a><br/>{{$reseller->name}}</td>
                        <td>{{$ticket->created_at}}</td>
                        <td><a href='{{url('/ticket/'.$ticket->id)}}'>{{$ticket->subject}}</a></td>
                        <td>{{substr($ticket->message,0,100)}}</td>
                        
                        @if($ticket->is_seen==1)
                            <td> &nbsp; <span style="color:green" class='glyphicon glyphicon-eye-open'> Seen</span></td>
                        @else
                            <td> &nbsp; <span style="color:red" class='glyphicon glyphicon-eye-close'> unseen</span></td>
                        @endif

                        @if($ticket->is_solved==1)
                            <td> &nbsp; <span style="color:green" class='glyphicon glyphicon-ok'> solved</span></td>
                        @else
                            <td> <a href="{{url('/ticket/solve_index/'.$ticket->id)}}"> &nbsp; <span style="color:red" class='glyphicon glyphicon-remove'> unsolved</span></a></td>
                        @endif

                        <td>
                        <!-- <a class="btn btn-danger" href="/ticket/destroy/{{$ticket->id}}">Remove ticket <span class="glyphicon glyphicon-remove"></span></a> -->

                        <span style="color:red" class="glyphicon glyphicon-trash delete" id="{{$ticket->id}}"></span>
                        </td>
                    </tr>
                  @endforeach  
                </table>
                </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
             </div>
        </section>
        <!-- /.content -->
</div>

<meta name="_token" id='token' content="{!! csrf_token() !!}" />
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-2.1.4.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
<script type="text/javascript">
    $('.delete').on('click',function(event){
        event.preventDefault();
        //Declaration
        var token = $('#token').attr('content');
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });
        del_ticket=$(this);
        id=$(this).attr('id');
        $.ajax({
            type: "DELETE",
            url: "{{url('/ticket/destroy') }}/"+id, //resource
            data:   { _token :token },
            success: function(del_tickets) { 
                del_ticket.parent().parent().remove();
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
</script>
@endsection   

