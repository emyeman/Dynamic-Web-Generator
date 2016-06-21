@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')


{!! Html::style('assets/css/table-scroll.css') !!}

    <h1 class="page-header">
        @if($type=='promotion')
            Promotions
        @else
            News
        @endif
    </h1>
    <div class="row">
        <div class='col-lg-offset-11 col-ms-1'>
            <a href="{{url('/news_promotion/create/'.$type)}}"><span class="glyphicon glyphicon-plus"></span></a>
        </div>
    </div >
    @if(Session::has('update_success'))
        <div class="alert alert-success alert-autocloseable" role="alert">{{session('update_success')}}</div>
    @endif
    <div class="row">
        <div id="table-wrapper">
            <div id="table-scroll">
                <table class='table table-hover' style="table-layout: fixed;">
                    <thead>
                        <tr>
                            <th width='15%'></th>
                            <th width='20%'><span class="text">title</span></th>
                            <th width='25%'><span class="text">description</span></th>
                            <th width='15%'><span class="text">start date</span></th>
                            <th width='15%'><span class="text">end date</span></th>
                            <th width='5%'></th>
                            <th width='5%'></th> <!-- edit operation -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $row)
                            <tr> 
                                <td>
                                    <a href="{{url('/news_promotion/'.$row->id.'/edit')}}">
                                        <img src="{{url('/assets/images'.$row->image)}}" width='100px' height='100px'></td>
                                    </a>
                                <td class='wrap'><a href="{{url('/news_promotion/'.$row->id.'/edit')}}">{{$row->title}}<a/></td>
                                <td class='wrap'>{{substr($row->description,0,100)}}</td>
                                <td>{{$row->start_date}}</td>
                                <td>{{$row->end_date}}</td> 
                                <td>
                                    <a href="{{url('/news_promotion/'.$row->id.'/edit')}}">
                                        <span class="glyphicon glyphicon-edit edit" id="{{$row->id}}"></span>
                                    </a>
                                </td> 
                                <td><span class="glyphicon glyphicon-remove delete" id="{{$row->id}}"></span></td>
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
        affected_row=$(this);
        id=$(this).attr('id');
        $.ajax({
            type: "DELETE",
            url: "{{url('/news_promotion') }}/"+id, //resource
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