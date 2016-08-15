@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')
      
    <!-- Main content -->
    <section class="content">
        <div class="row">
        <div class="col-md-4 col-md-offset-4"> 
        <img style="min-width: 30%;" src="{{url('assets/reseller_assets/images/3b.png')}}" class="img-responsive"> 
        </div>
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

    {!!Form::open(['route'=>['category.update',$category->id],'files'=>true,'method'=>'put','class'=>'form-horizontal']) !!}

     <div class="row">
    <div class="col-md-10 col-md-offset-1 ">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Title Category</h3>
            <!--   <div class="pull-right">
                <a href="{{url('/category')}}"><span class="glyphicon glyphicon-backward"></span></a>
              </div> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body col-md-offset-1">
                <!-- text input -->
                <div class="form-group col-md-12">
                  <label>English Title *</label>
                   <input  class='form-control title_category' name='title_category' id='title_category' type='text' value="{{$category->name}}"/>
                </div>
                <div class="form-group col-md-12">
                  <label>Arabic Title *</label>
                <input placeholder='من فضلك ادخل اسم القسم' class='form-control' name='ar_title_category' type='text' value="{{$category->ar_name}}"/>
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
                <center><img  width='300px' height='300px' src="{{url('/assets/images/'.$category->image)}}" class="img-responsive" alt="brand"></center>
            </div>
            <div class="box-footer clearfix">
               <div class="input-group-btn col-md-offset-1">
                    <input class='form-control' name='image_category' type='file' />
                    <!-- <button id="add-new-event" type="button" class="btn btn-info btn-flat pull-right form-control">Browse</button>   -->
               </div>
            </div>  
       </div>
        </div>
   
          
        <div class="col-md-5 col-xs-12 col-md-offset-1" >      
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">English Description
                <small>Write some words descriping this Categorie ...</small>
              </h3>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <textarea style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name='description'>{{$category->description}}</textarea>
            </div>
            </div>
            </div>
        <div class="col-md-5 col-xs-12 "> 
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">Arabic Description
                <small>من فضلك ادخل وصف لهذا القسم ...</small>
              </h3>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <textarea style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"name='ar_description'>{{$category->ar_description}}</textarea>
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
                     <div class="row">
                     <div class="col-md-4">
                       <a href="{{url('/category')}}"><input id="add-new-event" type="button" class="btn btn-primary  pull-left "  value='Back' style="width:250px;"></a>
                      </div>
                      <div class="col-md-4"></div>
                      <div class="col-md-4">
                          <input type='submit' class='pull-right btn btn-primary ' name='ok' value='EDIT' style="width:250px;"/>   
                       </div>
                       </div>  
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
 </div>


@endsection
 


    