@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')
      <!-- Main content -->
        <section class="content">
      <div>
        <img style="min-width: 30%; margin-left: 400px;" src="{{url('assets/reseller_assets/images/9b.png')}}"  class="img-responsive">    
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
    <br>
    {!!Form::open(['route'=>['subcategory.update',$subcategory->id],'files'=>true,'method'=>'put','class'=>'form-horizontal']) !!}
      
     <div class="row">
    <div class="col-md-10 col-md-offset-1 ">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Category Name</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body col-md-offset-1">
                <!-- text input -->
                <div class="form-group col-md-12">
                  <label >Choose Category</label>
                  <select class='form-control' id='category_id' name='category_id'>
                    <option value="{{$category->id}}">{{$category->name}} &nbsp; &nbsp;{{$category->ar_name}}</option>
                    @foreach ($categories as $sel_category) 
                        @if (Auth::user()->id == $sel_category->site_id)
                            @if($sel_category->category_id ==NULL)
                                <!-- for no repeat name of category-->
                                @if($category->name !=$sel_category->name)
                                    <option class='form-control' value="{{$sel_category->id}}">{{$sel_category->name}}&nbsp; &nbsp;{{$sel_category->ar_name}}</option>
                                @endif
                            @endif
                        @endif
                    @endforeach    
                </select>  

                </div>
            </div>
        </div>
        </div>

     <div class="col-md-10 col-md-offset-1 ">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Title Sub Category</h3>
            <!--   <div class="pull-right">
                <a href="{{url('/subcategory')}}"><span class="glyphicon glyphicon-backward"></span></a>
              </div> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body col-md-offset-1">
                <!-- text input -->
                <div class="form-group col-md-12">
                  <label >English Title *</label>
                   <input class='form-control title_subcategory' name='title_subcategory' id='title_subcategory' type='text' value="{{$subcategory->name}}"/>
                </div>
                <div class="form-group col-md-12">
                  <label>Arabic Title *</label>
                  <input class='form-control' name='ar_title_subcategory' type='text' value="{{$subcategory->ar_name}}"/>
                </div>
            </div>
        </div>
        </div>
    
    <div class="col-md-10 col-md-offset-1" >
        <div class="box">
            <div class="box-header with-border">
             <center> <h3 class="box-title">Choose Picture</h3></center>
            </div>
            <div class="box-body col-md-offset-1">
             <center><img width='300px' height='300px' src="{{url('/assets/images/'.$subcategory->image)}}" class="img-responsive" alt="brand"></center>
            </div>
            <div class="box-footer clearfix">
               <div class="input-group-btn">
                    <input class='form-control' name='image_subcategory' type='file' />
                    <!-- <button id="add-new-event" type="button" class="btn btn-info btn-flat pull-right form-control">Browse</button>   -->
               </div>
            </div>  
       </div>
        </div>
   
        <div class="col-md-5 col-xs-12 col-md-offset-1" >      
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">English Description
                <small>Write some words descriping this Sub Categorie ...</small>
              </h3>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <textarea style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name='subdescription'>{{$subcategory->description}}</textarea>
            </div>
            </div>
            </div>
        <div class="col-md-5 col-xs-12 "> 
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">Arabic Description
                <small>من فضلك ادخل وصف لهذا القسم الفرعى ...</small>
              </h3>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <textarea style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"name='ar_subdescription'>{{$subcategory->ar_description}}</textarea>
            </div>
            </div>               
          <!-- /.box --> 
     </div>
        <!-- <span class='col-md-2'></span> col-xs-8 -->
     <div class="col-md-10 col-md-offset-1">       
         <div class="box">
            <div class="box-header">
                <div class="box-footer clearfix">
               <div class="input-group-btn">
                    <input type='submit' class='btn-flat pull-right form-control btn btn-primary' name='ok' value='EDIT' />   
               </div>
            </div>
            </div>
          <!-- /.box --> 
     </div>
       
     </div>
     </div>
      
 {!!Form::close() !!}
    
        <!-- /.col -->
        </section>
        <!-- /.content -->
</div> 
@endsection


    