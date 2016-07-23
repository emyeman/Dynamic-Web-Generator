@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')
      <h2><div class='col-lg-1 col-ms-1'>
            <a href="{{url('/menu')}}"><span class="glyphicon glyphicon-backward"></span></a>
        </div></small></h2>

    <h2 class='page-header'>
        Add New Menu
    </h2>
      @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <br><br>
    @if(Session::has('insert_success'))
        <div class="alert alert-success alert-autocloseable" role="alert">{{session('insert_success')}}</div>
    @endif
    {!!Form::open(['route'=>'menu.store','method'=>'post','class'=>'form-horizontal']) !!}
        <div class='form-group'>
            <label class='col-md-2'>English Title*</label>
            <div class='col-md-10 input-group'>
                <input placeholder='english title...' class='form-control title_menu' id='title_menu' name='title' type='text' value="{{old('title')}}"/>
            </div>
            <span id="title_err" style="color:red; size:12px; margin-left:170px;padding:10px 100px;font-weight:bold;background-color:lightpink;">This menu already exists</span>                        
        </div> 
        <div class='form-group'>
            <label class='col-md-2'>Arabic Title*</label>
            <div class='col-md-10 input-group'>
                <input placeholder='arabic title...' class='form-control' name='ar_title' type='text' value="{{old('ar_title')}}"/>
            </div>
        </div> 
        <div class='form-group'>
            <label class='col-md-2'>Parent</label>
            <div class='col-md-10 input-group'>
                <select class='form-control'id='parent_id' name='parent_id' >
                    <option value="">choose parent page</option>
                    @foreach ($menus as $menu) 
                        <option  value="{{$menu->id}}">{{$menu->title}}</option>                            
                    @endforeach    
                </select>
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>Page*</label>
            <div class='col-md-10 input-group'>
                <select class='form-control'id='route' name='route' >
                    <option value="">choose a page</option>
                    @foreach ($pages as $page) 
                        <option  value="{{$page->id}}">{{$page->title}}</option>                            
                    @endforeach    
                </select>           
            </div>
        </div>    
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='ADD' />
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
        <br/><br/><hr/>
        <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">
                Show Your Menus
            </h2>
        </div>
    </div>

        <ul class='sortable-list'>
            @foreach ($rows as $row)
                @if($row->parent_id == null)
                    <li id="{{$row->menu_id}}">
                        <div class='dd-handle'> 
                            <table>
                                <thead>
                                    <tr>
                                        <td>{{$row->menu_title}}</td>
                                        <td>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
                                        <td>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
                                        <td>{{$row->menu_ar_title}}</td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        @foreach($rows as $submenu)
                            @if($row->menu_id == $submenu->parent_id)
                                @include('menu.submenus',['menus'=>$rows,'parent_menu'=>$submenu])
                            @endif
                        @endforeach
                    </li>
                @endif
           @endforeach
        </ul>
@endif

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