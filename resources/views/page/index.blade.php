@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

{!! Html::style('assets/css/table-scroll.css') !!}

<div class="col-sm-9">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Show Pages
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class='col-lg-offset-11 col-ms-1'>
                <a href='/page/create'><span class="glyphicon glyphicon-plus"></span></a>
            </div>
        
            <div >
                <!-- *************************** -->
                <div id="table-wrapper">
                  <div id="table-scroll">
                    <table class='table table-hover' style="table-layout: fixed;">
                        <thead>
                            <tr>
                                <th width='40%'><span class="text">name</span></th>
                                <th width='40%'><span class="text">content</span></th>
                                <th width='20%'></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rows as $row)
                                <tr>
                                    <td class='wrap'><a href='/page/{{$row->id}}/edit'>name<a/></td> 
                                    <td class='wrap'>{{substr($row->content,0,100)}}</td>
                                    <td><span class="glyphicon glyphicon-remove delete" id="{{$row->id}}"></span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <hr/>
</div><!--end leftsideof from-->

</div>
<meta name="_token" id='token' content="{!! csrf_token() !!}" />
<script type="text/javascript" src='/assets/js/jquery-2.1.4.min.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){
        
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
                url: '/page/'+ id, //resource
                data:   { _token :token },
                success: function(affectedRows) { 
                    affected_row.parent().parent().remove();
                },
                error: function (data) {
                    console.log(data);
                }
            });
        });
        // deleteRow($('.delete').attr('id'));
        // alert();

    });
</script>
@endsection


    