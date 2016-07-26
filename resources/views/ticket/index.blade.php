@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')
	{!! Html::style('assets/css/table-scroll.css') !!}
    <h1 class="page-header">Show All Tickets</h1>
    <div class="row">
        <div class='col-lg-offset-11 col-ms-1'>
            <a href="{{url('/ticket/create')}}"><span class="glyphicon glyphicon-plus"></span></a>
        </div>
    </div>
	<div class="row">
        <div id="table-wrapper">
            <div id="table-scroll">
                <table class='table table-hover' style="table-layout: fixed;">
                    <thead>
                        <tr>
                            <th width='20%'><span class="text">Sender</span></th>
                            <th width='20%'><span class="text"> &nbsp; Reseller</span></th>
                            <th width='15%'><span class="text"> &nbsp; &nbsp; &nbsp; Date</span></th>
                            <th width='20%'><span class="text">Subject</span></th>
                            <th width='30%'><span class="text">Message</span></th>
                            <th width='15%'><span class="text">Seen</span></th>
                            <th width='15%'><span class="text">Solve</span></th>
                            <th width='5%'></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tickets as $ticket)
	                        @if($ticket->is_solved == true)
	                            <tr style='background-color:rgb(203, 240, 203);'>  
	                        @else
	                        	<tr style='background-color:pink;'>  
	                       	@endif
                                <td class='wrap'><a href='{{url('/ticket/'.$ticket->id)}}'>{{$user->email}} </a><br/>{{$user->name}}</td>
                                <td class='wrap'><a href='{{url('/ticket/'.$ticket->id)}}'>{{$reseller->email}} </a><br/>{{$reseller->name}}</td>
                                <td>{{$ticket->created_at}}</td>
                                <td class='wrap'><a href='{{url('/ticket/'.$ticket->id)}}'>{{$ticket->subject}}</a></td>
                                <td class='wrap'>{{substr($ticket->message,0,100)}}</td>
                                
                                @if($ticket->is_seen==1)
                                    <td><span style="color:green" class='glyphicon glyphicon-eye-open'> Seen</span></td>
                                @else
                                    <td><span style="color:red" class='glyphicon glyphicon-eye-close'> unseen</span></td>
                                @endif

                                @if($ticket->is_solved==1)
                                    <td><span style="color:green" class='glyphicon glyphicon-ok'> solved</span></td>
                                @else
                                    <td><a href="{{url('/ticket/solve_index/'.$ticket->id)}}"><span style="color:red" class='glyphicon glyphicon-remove'> unsolved</span></td></a>
                                @endif

                                <td><span class="glyphicon glyphicon-trash delete" id="{{$ticket->id}}"></span></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
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
            url: "{{url('/ticket/') }}/"+id, //resource
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