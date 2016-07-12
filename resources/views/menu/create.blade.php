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
                <input placeholder='english title...' class='form-control' name='title' type='text' value="{{old('title')}}"/>
            </div>
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
@endif
@endsection