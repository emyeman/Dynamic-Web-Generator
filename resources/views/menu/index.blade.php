@extends('layouts.app')

@section('content')
<div class="container">

@include('../header')

{!! Html::style('assets/css/table-scroll.css') !!}

<div class="col-sm-9">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Menus
                <!-- <small><i>Hello current_user</i></small> -->
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class='col-lg-offset-11 col-ms-1'>
            <a href="{{url('/menu/create')}}"><span class="glyphicon glyphicon-plus"></span></a>
        </div>
    
        <div >
            <!-- *************************** -->
            <div id="table-wrapper">
              <div id="table-scroll">
                <table class='table table-hover' style="table-layout: fixed;">
                    <thead>
                        <tr>
                            
                            <th width='35%'><span class="text">title</span></th>
                            <th width='35%'><span class="text">parent</span></th>
                            <th width='25%'><span class="text">page</span></th>
                            <th width='5%'></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $row)
                            <tr> 
                                <td class='wrap'><a href="{{url('/menu/'.$row->menu_id.'/edit')}}">{{$row->menu_title}}<a/></td>
                                <td class='wrap'><a href="{{url('/menu/'.$row->parent_id.'/edit')}}">{{$row->parent_title}}</a></td>
                                <td><a href="{{url('/page/'.$row->page_id.'/edit')}}">{{$row->page_title}}</a></td>
                                <td><span class="glyphicon glyphicon-remove delete" id="{{$row->menu_id}}"></span></td>
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

 <br/><br/><hr/><hr/>

</div>
<meta name="_token" id='token' content="{!! csrf_token() !!}" />
<script type="text/javascript" src="{{url('/assets/js/jquery-2.1.4.min.js')}}"></script>
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
                url: "{{url('/menu/')}}/"+id, //resource
                data:   { _token :token },
                success: function(deleted_menus) { 
                    arr=jQuery.parseJSON(deleted_menus);
                    $.each(arr,function(index,id){
                        console.log(id);
                        $('.delete[id='+id+']').parent().parent().remove();
                    });
                    affected_row.parent().parent().remove();
                },
                error: function (data) {
                    console.log(data);
                }
            });
        });
    });
</script>
@endsection   