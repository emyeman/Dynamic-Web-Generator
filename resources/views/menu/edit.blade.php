@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')
    
    <!-- Main content -->
    <section class="content">
    <div class="row text-uppercase" style="text-align: center;">
        <h1 style="color:#01A4A4;">
        <span style="font-size:34px; font-weight: 700; ">
          <a href="{{url('/menu')}}"><span class="glyphicon glyphicon-backward"></span></a> 
          Edit your "Menus" page<br>
        </span>
        </h1>
       <hr style="display: inline-block; width: 40px; height: 2px; background: #cccccc; ">  
        </div>
    
@if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
{{Form::model($row,['route'=>['menu.update',$row->id],'method'=>'put','class'=>'form-horizontal']) }}

<!-- <div class="row"> -->
 <div class="col-md-10 col-md-offset-1">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">English Title</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body col-md-offset-1">
                <!-- text input -->
                <div class="form-group col-md-12">
                    <input value="{{$row->title}}" class='form-control title_menu' id='title_menu' name='title' type='text' value="{{old('title')}}"/>
                    <!-- {{Form::text('title', old('title') ,['class'=>'col-ms-2 form-control'])}} -->
                    <span id="title_err" style="color:red; size:12px; padding:10px 70px;font-weight:bold;background-color:lightpink;">This menu already exists.PLZ,Write another title ...</span>                        
                </div>
            </div>
        </div>
        </div>

        <div class="col-md-10 col-md-offset-1 ">
          <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Arabic Title</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body col-md-offset-1">
                    <!-- text input -->
                    <div class="form-group col-md-12">
                    {{Form::text('ar_title', old('ar_title') ,['class'=>'col-ms-2 form-control'])}}
                    </div>
                </div>
            </div>
        </div>

<!--     <div class="col-md-10 col-md-offset-1 ">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Parent Name</h3>
            </div>
            <div class="box-body col-md-offset-1">
                <div class="form-group col-md-12">
                     <select class='form-control'id='parent_id' name='parent_id' >
                    <option value="{{$sel_menu->id}}">{{$sel_menu->title}}</option>
                    @foreach ($menus as $menu) 
                        @if($menu->title != $sel_menu->title)
                        <option  value="{{$menu->id}}">{{$menu->title}}</option> 
                        @endif                           
                    @endforeach    
                </select>
                </div>
            </div>
        </div>
        </div>
 -->

    <div class="col-md-10 col-md-offset-1 ">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Page Name</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body col-md-offset-1">
                <!-- text input -->
                <div class="form-group col-md-12">
                    <select class='form-control'id='route' name='route' >
                    <option value="{{$sel_page->id}}">{{$sel_page->title}}</option>
                    @foreach ($pages as $page) 
                        @if($page->title != $sel_page->title)
                        <option  value="{{$page->id}}">{{$page->title}}</option> 
                        @endif                           
                    @endforeach    
                </select> 
                </div>
            </div>
        </div>
        </div>
        
            <!-- <span class='col-md-2'></span> col-xs-8 -->
             <div class="col-md-10 col-md-offset-1">       
                 <div class="box">
                    <div class="box-header">
                        <div class="box-footer clearfix">
                       <div class="input-group-btn">
                            <input type='submit' class='btn-flat pull-right form-control btn btn-primary' name='ok' value='Edit' />   
                       </div>
                    </div>
                    </div>
                  <!-- /.box --> 
             </div>
               
             </div>

          <!-- /.box --> 
     <!-- </div> -->

   {!!Form::close() !!}
         

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
    @if($rows)
        <hr/>
    <div class="col-md-10 col-md-offset-1">  
        <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">
                Show Your Menus
            </h2>
        </div>
    </div>

        <ul class='sortable-list'>
            @foreach ($rows as $row_one)
                @if($row_one->parent_id == null)
                    <li id="{{$row->menu_id}}">
                        <div class='dd-handle'> 
                            <table>
                                <thead>
                                    <tr>
                                        <td width='30%'>{{$row_one->menu_title}}</td>
                                        <td width='20%' style="width:300px;">  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
                                        <td width='20%' style="width:300px;">  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
                                        <td width='30%'>{{$row_one->menu_ar_title}}</td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        @foreach($rows as $submenu)
                            @if($row_one->menu_id == $submenu->parent_id)
                                @include('menu.submenus',['menus'=>$rows,'parent_menu'=>$submenu])
                            @endif
                        @endforeach
                    </li>
                @endif
           @endforeach
        </ul>
@endif
</div>
</section>
        <!-- /.content -->
</div>  

<meta name="_token" id='token' content="{!! csrf_token() !!}"/>
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-2.1.4.min.js')}}"></script> -->
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-1.12.0.min.js')}}"></script> -->
<script type="text/javascript">
    console.log('hiiiiiii');
    document.getElementById('title_err').style.display = "none";
    $('.title_menu').on('blur',function(event) {            
        event.preventDefault();
        // alert($(this).text());
        console.log("emy");
        //Declaration
        var token = $('#token').attr('content');
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        console.log($(this));
        title=$(this).val();
        console.log(title);
        
        $.get("{{url('/menu/is_exit/')}}/"+title,function(data){
            console.log(data);
            console.log($(this));
            if (data=='true') {
               document.getElementById('title_err').style.display = "block";
                // $('.title_menu').focus();
               $('.title_menu').select();
            }else{
                document.getElementById('title_err').style.display = "none";
            }
            
        
            });
        });

  </script>
@endsection