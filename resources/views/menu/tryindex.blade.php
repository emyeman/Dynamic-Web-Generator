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
        @if(Session::has('update_success'))
            <div class="alert alert-success alert-autocloseable" role="alert">{{session('update_success')}}</div>
        @endif
        <div >
            <!-- *************************** -->
            <div id="table-wrapper">
              <div id="table-scroll">
                <table class='table table-hover' style="table-layout: fixed;">
                    <thead>
                        <tr>
                            
                            <th width='20%'><span class="text">English Title</span></th>
                            <th width='20%'><span class="text">Arabic Title</span></th>
                            <th width='30%'><span class="text">Parent</span></th>
                            <th width='25%'><span class="text">Page</span></th>
                            <th width='5%'></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $row)
                            <tr> 
                                <td class='wrap'><a href="{{url('/menu/'.$row->menu_id.'/edit')}}">{{$row->menu_title}}<a/></td>
                                <td class='wrap'><a href="{{url('/menu/'.$row->menu_id.'/edit')}}">{{$row->menu_ar_title}}<a/></td>
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
     <!-- <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Brand</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ol class="nav navbar-nav">
                <li class="active" id='item_a'><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li id='item_b'><a href="#">Link</a></li>
                <li class="dropdown" id='item_c'>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ol class="dropdown-menu">
                    <li id='item_c1'>
                        <a href="#">Action</a>
                    </li>
                    <li id='item_c2'><a href="#">Another action</a></li>
                    <li><a href="#" id='item_c3'>Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li id='item_c4'><a href="#">Separated link</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ol>
                </li>
              </ol>
            </div>
          </div>
        </nav> -->

        <!-- <div class='span4'>
          <ol class='limited_drop_targets vertical'>
            <li class='highlight' id='item_a'>Item 1</li>
            <li id='item_b'>Item 2</li>
            <li class='highlight' id='item_c'>Item 3</li>
            <li id='item_d'>Item 4</li>
            <li class='highlight' id='item_e'>Item 5</li>
            <li id='item_f'>Item 6</li>
          </ol>
        </div> -->
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
            .scroll {
                height: 380px;
                overflow: auto;
                margin-top: 50px;
            }
        </style>

        <ul class='sortable-list'>
            @foreach ($rows as $row)
                @if($row->parent_id == null)
                    <li id="{{$row->menu_id}}">
                        <div class='dd-handle'>{{$row->menu_title}}</div>
                        @foreach($rows as $submenu)
                            @if($row->menu_id == $submenu->parent_id)
                                @include('menu.submenus',['menus'=>$rows,'parent_menu'=>$submenu])
                            @endif
                        @endforeach
                    </li>
                @endif
           @endforeach
        </ul>


        <!-- <ul class='hhh'>
           <li id='item_a'>
              <div style='background-color: red;'>Whatever you want here a</div>
              <ul>
                 <li id='item_b'><div style='background-color: red;'>Nested list item b </div></li>
                 <li id='item_c'><div>Another item c</div></li>
              </ul>
           </li>
        </ul> -->

        <!-- <input type='button' id='update_menus' value='save'> -->
</div><!--end leftsideof from-->

 <br/><br/><hr/><hr/>

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