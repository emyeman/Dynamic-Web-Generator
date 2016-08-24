@extends('layouts.UserDashboard')

@section('content')
<div class="container">

@include('../UserDashboardHeader')

{!! Html::style('assets/css/table-scroll.css') !!}

<!-- Main content -->
<section class="content">
    <div class="row text-uppercase" style="text-align: center;">
        <div class="row">
        <div class="col-md-4 col-md-offset-4"> 
        <img style="min-width: 30%;" src="{{url('assets/reseller_assets/images/4c.png')}}" class="img-responsive"> 
        </div>
        </div>
       <hr style="display: inline-block; width: 40px; height: 2px; background: #cccccc;">  
    </div>

    @if(Session::has('update_success'))
            <div class="alert alert-success alert-autocloseable" role="alert">{{session('update_success')}}</div>
        @endif
        
            <!-- *************************** -->
            <style type="text/css">
                .dd-handle {
                    display: block;
                    height: 30px;
                    margin: 5px 0;
                    cursor: move;
                    padding: 5px 10px;
                    color: #333;
                    text-decoration: none;
                    font-weight: 400;
                    border: 1px solid #ccc;
                    background: lightblue;
                    box-sizing: border-box;
                }
                ul
                {
                    list-style-type: none;
                }
                /* #table-scroll {
                    height: 200px;
                    overflow: auto;
                    margin-top: 30px;
                } */
        </style>

    
     <div class="row">
    <div class="col-md-9 col-md-offset-1">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title" style="color: #01A4A4; font-weight:bold;" >View your Menu</h3>

              <div class="pull-right">
               <a href="{{url('/menu/create')}}">
              <i class="fa fa-plus fa-3x" aria-hidden="true" style="color: #00a65a;"></i>
              </a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tr>
                    <th>English Title</th>
                    <th>Arabic Title</th>
                    <!-- <th>Parent</th> -->
                    <th>Page</th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach ($rows as $row)
                    <tr> 
                        <td><a href="{{url('/menu/'.$row->menu_id.'/edit')}}">{{$row->menu_title}}<a/></td>
                        <td><a href="{{url('/menu/'.$row->menu_id.'/edit')}}">{{$row->menu_ar_title}}<a/></td>
                        <!-- <td><a href="{{url('/menu/'.$row->parent_id.'/edit')}}">{{$row->parent_title}}</a></td> -->
                        <td><a href="{{url('/menu/'.$row->menu_id.'/edit')}}">{{$row->page_title}}</a></td>
                        <td>
                          <a href="{{url('/menu/'.$row->menu_id.'/edit')}}">
                          <!-- <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true" style="color:#3c8dbc;"></i> -->
                          <span style="color: blue;" class="glyphicon glyphicon-edit" id="{{$row->menu_id}}"></span>
                          </a>
                        </td>
                        <td><span style="color: red;" class="glyphicon glyphicon-trash delete" id="{{$row->menu_id}}"></span></td>
                    </tr>
                @endforeach
              </table>
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
</script>

{!! Html::script('assets/js/jquery-sortable-lists.min.js') !!}

<!-- {!! Html::style('assets/css/jquery-ui.min.css') !!}
{!! Html::script('assets/js/jquery-ui.min.js') !!}
{!! Html::script('assets/js/jquery-sortable.js') !!} -->

<script type="text/javascript">
    // $("ol.nav").sortable
    // ({
    //   group: 'nav',
    //   nested: false,
    //   vertical: false,
    //   exclude: '.divider-vertical',
    //   onDragStart: function($item, container, _super) 
    //   {
    //     $item.find('ol.dropdown-menu').sortable('disable');
    //     _super($item, container);
    //   },
    //   onDrop: function($item, container, _super) 
    //   {
    //     $item.find('ol.dropdown-menu').sortable('enable');
    //     _super($item, container);
    //   },
    //   serialize: function (parent, children, isContainer) {
    //      // _super($item, container);
    //     return isContainer ? children.join() : parent.attr('id');
    //   },
    // });

    // $("ol.dropdown-menu").sortable({
    //   group: 'nav'
    // });

    // $('#show_ser').click(function(){
    //     data=$('ol.nav').sortable("serialize").get();
    //      var jsonString = JSON.stringify(data);
    //     console.log(jsonString);
    // });
    //--------------------------------------------
    // var group = $("ol.limited_drop_targets").sortable({
    //   group: 'limited_drop_targets',
    //   isValidTarget: function  ($item, container) {
    //     if($item.is(".highlight"))
    //       return true;
    //     else
    //       return $item.parent("ol")[0] == container.el[0];
    //   },
    //   onDrop: function ($item, container, _super) {
    //     $('#serialize_output').text(
    //       group.sortable("serialize").get().join("\n"));
    //     _super($item, container);
    //   },
    //   serialize: function (parent, children, isContainer) {
    //     return isContainer ? children.join() : parent.text();
    //   },
    //   tolerance: 6,
    //   distance: 10
    // });

    // $('#show_ser').click(function(){
    //     data=$('ol.limited_drop_targets').sortable("serialize");
    //     console.log(data.get());
    //     // alert(data);
    // });
    //-------------------------------------------


    var options = {
    // Like a css class name. Class will be removed after drop.
    // currElClass: 'currElemClass',
    // or like a jQuery css object. Note that css object settings can't be removed
    currElCss: {'background-color':'green', 'color':'#fff'},
    placeholderCss: {'background-color':'yellow'},
    hintCss: {'background-color':'green', 'border':'1px dashed white'},
    insertZonePlus: true

}
    $('.sortable-list').sortableLists(options);
    $('#update_menus').click(function(){
        data=$('.sortable-list').sortableListsToHierarchy();
        // console.log(data);
        $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "{{url('/menu/updateall')}}", //resource
                data:   { _token :token, data: data },
                success: function(deleted_menus) { 
                    // arr=jQuery.parseJSON(deleted_menus);
                    // console.log(arr);
                    k=deleted_menus;
                    console.log(deleted_menus);
                },
                error: function (data) {
                    console.log(data);
                }
            });
        // alert(data);
    });
</script>
@endsection   