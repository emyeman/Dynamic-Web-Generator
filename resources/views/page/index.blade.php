@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')

{!! Html::style('assets/css/table-scroll.css') !!}

    <h1 class="page-header">Pages</h1>
    <div class="row">
        <div class='col-lg-offset-11 col-ms-1'>
            <a href="{{url('/page/create')}}"><span class="glyphicon glyphicon-plus"></span></a>
        </div>
    </div >
    @if(Session::has('update_success'))
        <div class="alert alert-success alert-autocloseable" role="alert">{{session('update_success')}}</div>
    @endif
    <div id="row">
        <div id="table-wrapper">
            <div id="table-scroll">
                <table class='table table-hover' style="table-layout: fixed;">
                    <thead>
                        <tr>
                            <th width='80%'><span class="text">name</span></th>
                            <th width='10%'></th>
                            <th width='10%'></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $row)
                            <tr>
                                @if(($row->title=='page_top')||($row->title=='services')||($row->title=='about')||($row->title=='gallery')||($row->title=='news')||($row->title=='promotion')||($row->title=='contact'))
                                    <td class='wrap'>{{$row->title}}</td>
                                    <td></td>
                                @else
                                    <td class='wrap'><a href="{{url('/page/'.$row->id.'/edit')}}">{{$row->title}}<a/></td>
                                    <td>
                                        <a href="{{url('/page/'.$row->id.'/edit')}}">
                                            <span class="glyphicon glyphicon-edit edit" id="{{$row->id}}"></span>
                                        </a>
                                    </td>
                                @endif
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
                url: "{{ url('/page')}}/"+ id, //resource
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


    