@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')
	{!! Html::style('assets/css/table-scroll.css') !!}
<div class="col-md-offset-1 col-sm-11">
	<div>
        <img style="min-width: 30%; margin-left: 400px;" src="{{url('assets/reseller_assets/images/15.png')}}" class="img-responsive"> 
        </div>
	<div class="row">
        <div id="table-wrapper">
            <div id="table-scroll">
                <table class='table table-hover' style="table-layout: fixed;">
                    <thead>
                        <tr>
                            <th><span class="text">Sender</span></th>
                            <th><span class="text"> &nbsp; &nbsp; &nbsp; E-mail</span></th>
                            <th><span class="text"> &nbsp; &nbsp; &nbsp; Date</span></th>
                            <th><span class="text">Subject</span></th>
                            <th><span class="text">Message</span></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $message)
	                        @if($message->is_seen == true)
	                            <tr>  
	                        @else
	                        	<tr style='background-color:lightyellow;'>  
	                       	@endif
                                <td><a href='/message/{{$message->id}}'>{{$message->name}}</a></td>
                                <td><a href='/message/{{$message->id}}'>{{$message->email}}</a></td>
                                <td>{{$message->created_at}}</td>
                                <td><a href='/message/{{$message->id}}'>{{$message->subject}}</a></td>
                                <td>{{substr($message->content,0,50)}}</td>
                                
                                <td><span class="glyphicon glyphicon-remove delete" id="{{$message->id}}"></span></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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