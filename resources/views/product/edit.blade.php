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
        
<div class="info">
  <h1 style="font-size:34px; font-weight: 700;">
    <a href="{{url('/product')}}"><span class="glyphicon glyphicon-backward"></span></a>
 Edit Products </h1>
</div>
<br/>
  
  {!!Form::open(['route'=>['product.update',$product->id],'files'=>true,'method'=>'put','class'=>'form-horizontal']) !!}

    <!-- <div class="row" style="margin-top:15px;"> -->
    <div class="col-md-10 col-md-offset-1 ">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Category & Sub Category</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body col-md-offset-1">
                <!-- text input -->
                <div class="form-group col-md-12">
                  <label >Choose Category *</label>
                    <select class='form-control getrequest' id='category_id' name='category_id' >
                    <option value="{{$category->id}}"> {{$category->name}} &nbsp; {{$category->ar_name}}</option>
                    @if (Auth::user()->id == $category->site_id)
                        @foreach ($categories as $sel_category) 
                            <!-- for no repeat name of category-->
                            @if($category->name !=$sel_category->name)
                                <option value="{{$sel_category->id}}">{{$sel_category->name}} &nbsp; {{$sel_category->ar_name}}</option>
                            @endif    
                        @endforeach 
                    @endif
                </select>
                </div>
                <div class="form-group col-md-12" id="beforselect" style="display:show">
                  <label>Choose Sub Category *</label>
                  <select class='form-control' id='subcategory_id' name='subcategory_id'>
                    <option value="{{$subcategory->id}}">{{$subcategory->name}} &nbsp; {{$subcategory->ar_name}}</option>
                     @if (Auth::user()->id == $subcategory->site_id)
                        @foreach ($subcategories as $sel_subcategory) 
                            <!-- ************for no repeat name of subcategory*****************-->
                             @if($subcategory->name !=$sel_subcategory->name)
                                <option value="{{$sel_subcategory->id}}">{{$sel_subcategory->name}} &nbsp; {{$sel_subcategory->ar_name}}</option>
                            @endif
                        @endforeach 
                    @endif     
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
            <div class="box-body col-md-offset-1">
                <!-- text input -->
                <div class="form-group col-md-12">
                  <label >English Title *</label>
                  <input value='{{$product->name}}' class='form-control' name='title_product' type='text'/>
                </div>
                <div class="form-group col-md-12">
                  <label>Arabic Title *</label>
                  <input value='{{$product->ar_name}}' class='form-control' name='ar_title_product' type='text'/>
                </div>

                <div class="form-group col-md-12">
                  <label>English Price *</label>
                  <input value="{{$product->price}}" class='form-control' name='price_product' type='double'/>
                </div>
                <div class="form-group col-md-12">
                  <label>Arabic Price *</label>
                  <input value="{{$product->ar_price}}" class='form-control' name='ar_price_product' type='double'/>
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
            <div class="box-body">
             <center><img width='300px' height='300px' src="{{url('/assets/images/'.$product->image)}}" class="img-responsive" alt="brand"></center>
            </div>
            <div class="box-footer clearfix">
               <div class="input-group-btn col-md-offset-1">
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
                <textarea class="textarea" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name='description'>{{$product->description}}</textarea>
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
                <textarea class="textarea" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name='ar_description'>{{$product->ar_description}}</textarea>
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
                    <input type='submit' class='btn-flat pull-right form-control btn btn-primary' name='ok' value='Edit' />   
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
<script type="text/javascript" src="{{url('/assets/js/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/jquery-1.12.0.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
    console.log('hiiiiiii');
    $('.getrequest').click(function() {            
        event.preventDefault();
        // alert($(this).text());
        
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
        console.log({{$category->id}});
        if (id=={{$category->id}}) {
            document.getElementById('beforselect').style.display = "block";
            document.getElementById('afterselect').style.display = "none";
            console.log("emy not change");
         }else{
            
            document.getElementById('beforselect').style.display = "none";
            document.getElementById('afterselect').style.display = "block";
            console.log("emy change");
            $.get("{{url('/product/create/')}}/"+id,function(data){
                // console.log(data[0]);
                // console.log(data);
                var showdata;
                // for(i=0;i<data.length;i++){
                //   for(j in data[i]){
                        // showdata+=j+": "+data[i][j]+'<br/>';
                //   }   
                // }
                         
                showdata="<label class='form-control'>Old Your Select : {{$subcategory->name}}  {{$subcategory->ar_name}}</label>";
                showdata+="<select class='form-control'id='subcategory_id' name='subcategory_id'>";
                    showdata+="<option value=''>Select SubCategory</option>";
                    for(i=0;i<data.length;i++){
                        showdata+="<option value="+data[i]['id']+">"+data[i]['name']+"  "+data[i]['ar_name']+"</option>";
                    }      
                showdata+="</select>";
                $('#subcategorydata').html(showdata);
            });//end get to obtain data from control
        }
    });  //end get request when press and select category 
</script>

@endsection


    