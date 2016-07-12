@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')
	{!! Html::style('assets/css/table-scroll.css') !!}
	<h2>All Messages</h2>
	<div class="row">
        <div id="table-wrapper">
            <div id="table-scroll">
                <table class='table table-hover' style="table-layout: fixed;">
                    <thead>
                        <tr>
                            <th width='15%'><span class="text">Sender</span></th>
                            <th width='15%'><span class="text"> &nbsp; &nbsp; &nbsp; E-mail</span></th>
                            <th width='15%'><span class="text"> &nbsp; &nbsp; &nbsp; Date</span></th>
                            <th width='25%'><span class="text">Subject</span></th>
                            <th width='30%'><span class="text">Message</span></th>
                            <th width='5%'></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $message)
	                        @if($message->is_seen == true)
	                            <tr>  
	                        @else
	                        	<tr style='background-color:lightyellow;'>  
	                       	@endif
                                <td class='wrap'><a href='/message/{{$message->id}}'>{{$message->name}}</a></td>
                                <td class='wrap'><a href='/message/{{$message->id}}'>{{$message->email}}</a></td>
                                <td>{{$message->created_at}}</td>
                                <td class='wrap'><a href='/message/{{$message->id}}'>{{$message->subject}}</a></td>
                                <td class='wrap'>{{substr($message->content,0,50)}}</td>
                                
                                <td><span class="glyphicon glyphicon-remove delete" id="{{$message->id}}"></span></td>
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
            url: "{{url('/message') }}/"+id,
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