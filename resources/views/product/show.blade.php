@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')
      <h2><div class='col-lg-1 col-ms-1'>
            <a href="{{url('/product')}}"><span class="glyphicon glyphicon-backward"></span></a>
        </div></small></h2>

        <h2 class='page-header'>Add New Product</h2>
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
        {!!Form::open(['route'=>'product.store','files'=>true,'method'=>'post','class'=>'form-horizontal']) !!}
            <div class='form-group'>
                <label class='col-md-2'>Category *</label>
                <div class='col-md-10 input-group'>                    
                    <select class='form-control getrequest' id='category_id' name='category_id'>
                        <option value="">Select Category</option>
                        @foreach ($categories as $category) 
                            
                                <option value="{{$category->id}}">{{$category->name}} &nbsp; {{$category->ar_name}}</option>
                                
                           
                        @endforeach 
                    </select>           
                </div>
            </div>
            <div class='form-group'id="beforselect" style="display:show">
                <label class='col-md-2'>Sub Category *</label>
                <div class='col-md-10 input-group' >                    
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
            </div>
            <div class='form-group'id="afterselect" style="display:none">
                <label class='col-md-2'>Select Sub Category</label>
                <div class='col-md-10 input-group'id='subcategorydata' ></div>
            </div>
            <!-- end select of subcategory -->
            <div class='form-group'>
                <label class='col-md-2'>English Title *</label>
                <div class='col-md-10 input-group'>                   
                    <input placeholder='Plz,enter title ...' class='form-control title_product' id='title_product' name='title_product' type='text' value="{{old('title_product')}}"/>
                </div>
                <span id="title_err" style="color:red; size:12px; margin-left:170px;padding:10px 100px;font-weight:bold;background-color:lightpink;">This product already exists</span>                
            </div>
            <div class='form-group'>
                <label class='col-md-2'>Arabic Title *</label>
                <div class='col-md-10 input-group'>                   
                    <input placeholder='من فضلك ادخل اسم المنتج' class='form-control' name='ar_title_product' type='text' value="{{old('ar_title_product')}}"/>
                </div>
            </div>  
            <div class='form-group'>
                <label class='col-md-2'>Image *</label>
                <div class='col-md-10 input-group'>                    
                    <input class='form-control' name='image_product' type='file' />
                </div>
            </div>  
            <div class='form-group'>
                <label class='col-md-2'>English Description *</label>
                <div class='col-md-10 input-group'>                    
                    <textarea placeholder='Plz,enter description ...' rows='5' class='form-control' name='description'>{{old('description')}}</textarea> 
                </div>
            </div> 
            <div class='form-group'>
                <label class='col-md-2'>Arabic Description *</label>
                <div class='col-md-10 input-group'>                    
                    <textarea placeholder='من فضلك ادخل وصف المنتج..' rows='5' class='form-control' name='ar_description'>{{old('description')}}</textarea> 
                </div>
            </div> 

            <div class='form-group'>
                <label class='col-md-2'>English Price *</label>
                <div class='col-md-10 input-group'>                    
                    <input placeholder='Plz,enter price ...' class='form-control' name='price_product' type='decimal' />
                </div>
            </div>
            <div class='form-group'>
                <label class='col-md-2'>Arabic Price *</label>
                <div class='col-md-10 input-group'>                    
                    <input placeholder='من فضلك ادخل سعر المنتج' class='form-control' name='ar_price_product' type='decimal' />
                </div>
            </div>     
            <span class='col-md-2'></span>
            <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='ADD' />
        {!!Form::close() !!}

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


    