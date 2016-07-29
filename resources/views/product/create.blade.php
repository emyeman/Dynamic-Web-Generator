@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')
    <!-- Main content -->
        <section class="content" style="background-image: url({{url('assets/reseller_assets/images/18a.png')}});">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
    @if(Session::has('insert_success'))
        <div class="alert alert-success alert-autocloseable" role="alert">{{session('insert_success')}}</div>
    @endif
    
    <br>
<div class="info">
  <h1 style="font-size:34px; font-weight: 700;">
    <a href="{{url('/product')}}"><span class="glyphicon glyphicon-backward"></span></a>
 Add Products </h1>
</div>

{!!Form::open(['route'=>'product.store','files'=>true,'method'=>'post','class'=>'form-horizontal']) !!}

    <!-- <div class="row" style="margin-top:15px;"> -->
    <div class="col-md-10 col-md-offset-1 ">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Category & Sub Category</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <!-- text input -->
                <div class="form-group col-md-12">
                  <label >Choose Category *</label>
                    <select class='form-control getrequest' id='category_id' name='category_id'>
                        <option value="">Select Category</option>
                        @foreach ($categories as $category) 
                            
                            <option value="{{$category->id}}">{{$category->name}} &nbsp; {{$category->ar_name}}</option>
                           
                        @endforeach 
                    </select> 
                </div>
                <div class="form-group col-md-12" id="beforselect" style="display:show">
                  <label>Choose Sub Category *</label>
                  <!-- <select class='form-control' id='subcategory_id' name='subcategory_id'>
                        <option value="">Select SubCategory</option>
                        @foreach ($subcategories as $subcategory) 
                            @if(Auth::user()->id == $subcategory->site_id)
                                <option  value="{{$subcategory->id}}">{{$subcategory->name}} &nbsp; {{$subcategory->ar_name}}</option>
                            @endif
                        @endforeach 
                    </select> -->
                    <select class='form-control' id='subcategory_id' name='subcategory_id'>
                        <option value="">Select SubCategory</option>
                    </select>
                </div>


                <div class="form-group col-md-12" id="afterselect" style="display:none">
                  <label>Choose Sub Category *</label>
                  <div id='subcategorydata' ></div>
                </div>


            </div>
        </div>
        </div>
    <!-- </div> -->

   <!-- <div class="row"> -->
    

<div class="col-md-10 col-md-offset-1 ">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Product</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <!-- text input -->
                <div class="form-group col-md-12">
                  <label >English Title *</label>
                    <input placeholder='Plz,enter title ...' class='form-control title_product' id='title_product' name='title_product' type='text' value="{{old('title_product')}}"/>
                   <span id="title_err" style="color:red; size:12px; padding:10px 100px;font-weight:bold;background-color:lightpink;">This sub category already exists</span>
                </div>
                <div class="form-group col-md-12">
                  <label>Arabic Title *</label>
                    <input placeholder='من فضلك ادخل اسم المنتج' class='form-control' name='ar_title_product' type='text' value="{{old('ar_title_product')}}"/>
                </div>

                <div class="form-group col-md-12">
                  <label>English Price *</label>
                    <input placeholder='Plz,enter price ...' class='form-control' name='price_product' type='decimal' />
                </div>
                <div class="form-group col-md-12">
                  <label>Arabic Price *</label>
                    <input placeholder='من فضلك ادخل سعر المنتج' class='form-control' name='ar_price_product' type='decimal' />
                </div>
            </div>
        </div>
        </div>


<div class="row">
    <div class="col-md-10 col-md-offset-1" >
        <div class="box">
            <div class="box-header with-border">
             <center> <h3 class="box-title">Choose Picture</h3></center>
            </div>
            <!-- <div class="box-body">
             <center><img src="image/11.jpg" class="img-responsive" alt="brand"></center>
            </div> -->
            <div class="box-footer clearfix">
               <div class="input-group-btn">
                    <input class='form-control' name='image_product' type='file' />
                    <!-- <button id="add-new-event" type="button" class="btn btn-info btn-flat pull-right form-control">Browse</button>   -->
               </div>
            </div>  
       </div>
        </div>
   <div class="col-md-5 col-xs-12 col-md-offset-1" >      
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">English Description
                <small>Write some words descriping this Product ...</small>
              </h3>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name='description'>{{old('description')}}</textarea>
            </div>
            </div>
            </div>
        <div class="col-md-5 col-xs-12 "> 
         <div class="box">
            <div class="box-header">
              <h3 class="box-title">Arabic Description
                <small>من فضلك ادخل وصف لهذا المنتج ...</small>
              </h3>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <textarea class="textarea" placeholder="من فضلك ادخل الوصف" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name='ar_description'>{{old('ar_description')}}</textarea>
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
                    <input type='submit' class='btn-flat pull-right form-control btn btn-primary' name='ok' value='ADD' />   
               </div>
            </div>
            </div>
          <!-- /.box --> 
     </div>
       
     </div>
     <!-- </div> -->
      
 {!!Form::close() !!}
        </section>
        <!-- /.content -->
</div>  
        

<meta name="_token" id='token' content="{!! csrf_token() !!}" />
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-2.1.4.min.js')}}"></script> -->
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-1.12.0.min.js')}}"></script> -->
<script type="text/javascript">
    console.log('hiiiiiii');
    document.getElementById('title_err').style.display = "none";
    $('.getrequest').click(function() {            
        event.preventDefault();
        // alert($(this).text());
        document.getElementById('beforselect').style.display = "none";
        document.getElementById('afterselect').style.display = "block";
        console.log("emy");
        //Declaration
        var token = $('#token').attr('content');
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        console.log($(this));
        // id=$(this).attr('id');
        id=$(this).val();
        console.log(id);

        $.get("{{url('/product/create/')}}/"+id,function(data){
            console.log(data[0]);
            // console.log(data);
            var showdata;
            // for(i=0;i<data.length;i++){
            //   for(j in data[i]){
                    // showdata+=j+": "+data[i][j]+'<br/>';
            //   }   
            // }
            showdata="<select class='form-control'id='subcategory_id' name='subcategory_id'>";
                showdata+="<option value=''>Select SubCategory</option>";
                for(i=0;i<data.length;i++){
                    showdata+="<option value="+data[i]['id']+">"+data[i]['name']+"  "+data[i]['ar_name']+"</option>";
                }      
            showdata+="</select>";
            $('#subcategorydata').html(showdata);
        });//end get to obtain data from control
    });  //end get request when press and select category 

        
        // for check about product aleary exit or not
    $('.title_product').on('blur',function(event) {            
        event.preventDefault();
        // alert($(this).text());
        console.log("emy");
        
        console.log($(this));
        title=$(this).val();
        console.log(title);
        
        //Declaration
        var token = $('#token').attr('content');
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.get("{{url('/product/is_exit/')}}/"+title,function(data){
            console.log(data);
            console.log($(this));
            if (data=='true') {
               document.getElementById('title_err').style.display = "block";
                // $('.title_product').focus();
               $('.title_product').select();
            }else{
                document.getElementById('title_err').style.display = "none";
            }
            
        
            });
    });  //end get title and check product aleary exit or not

</script>

@endsection


    