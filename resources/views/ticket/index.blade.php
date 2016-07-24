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
                            <th width='15%'><span class="text">Status</span></th>
                            <th width='5%'></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tickets as $ticket)
	                        @if($ticket->is_solved == true)
	                            <tr>  
	                        @else
	                        	<tr style='background-color:lightyellow;'>  
	                       	@endif
                                <td class='wrap'><a href='/ticket/{{$ticket->id}}'>{{$user->email}} </a><br/>{{$user->name}}</td>
                                <td class='wrap'><a href='/ticket/{{$ticket->id}}'>{{$reseller->email}} </a><br/>{{$reseller->name}}</td>
                                <td>{{$ticket->created_at}}</td>
                                <td class='wrap'><a href='/ticket/{{$ticket->id}}'>{{$ticket->subject}}</a></td>
                                <td class='wrap'>{{substr($ticket->message,0,100)}}</td>
                                <td><span style="color:green" class='glyphicon glyphicon-ok'> test solve????</span></td>
                                <td><span class="glyphicon glyphicon-remove delete" id="{{$ticket->id}}"></span></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<meta name="_token" id='token' content="{!! csrf_token() !!}" />
<script type="text/javascript">
    $('.delete').on('click',function(event){
        event.preventDefault();
        var token = $('#token').attr('content');
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });
        affected_row=$(this);
        id=$(this).attr('id');
        $.ajax({
            type: "DELETE",
            url: "{{url('/ticket') }}/"+id,
            data:   { _token :token },
            success: function(affectedRows) { 
                affected_row.parent().parent().remove();
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
</script>
@endsection