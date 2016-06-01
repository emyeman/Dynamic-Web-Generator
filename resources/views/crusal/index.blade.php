@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')
<!-- {!! Html::script('js/jquery-2.1.4.min.j') !!} -->
{!! Html::style('assets/css/table-scroll.css') !!}

<div class="col-sm-9">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Crusal</h1>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <div class='col-lg-offset-11 col-ms-1'>
                <a href='/crusal/create'><span class="glyphicon glyphicon-plus"></span></a>
            </div>
        
            <div >
                <!-- *************************** -->
                <div id="table-wrapper">
                  <div id="table-scroll">
                    <table class='table table-hover' style="table-layout: fixed;">
                        <thead>
                            <tr>
                                <th width='15%'></th> <!-- image -->
                                <th width='40%'><span class="text">title</span></th>
                                <th width='45%'><span class="text">description</span></th>
                                <th width='5%'></th> <!-- delete operation -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rows as $row)
                                <tr> 
                                    <td>
                                        <a href='/crusal/{{$row->id}}/edit'>
                                            <img src="/assets/images{{$row->image}}" width='100px' height='100px'></td>
                                        </a>
                                    <td class='wrap'><a href='/crusal/{{$row->id}}/edit'>{{$row->title}}<a/></td> 
                                    <td class='wrap'>{{substr($row->description,0,100)}}</td> 
                                    <td><span class="glyphicon glyphicon-remove delete" id="{{$row->id}}"></span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
        <!-- /.row -->
        <hr/>
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>

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
                url: '/crusal/'+ id, //resource
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


    