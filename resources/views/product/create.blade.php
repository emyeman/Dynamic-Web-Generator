@extends('layouts.app')

@section('sidebar')
    @include('../header')
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
                            @if(Auth::user()->id == $category->site_id)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                
                            @endif
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
                                <option  value="{{$subcategory->id}}">{{$subcategory->name}}</option>
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
                <label class='col-md-2'>Title *</label>
                <div class='col-md-10 input-group'>                   
                    <input placeholder='title ...' class='form-control' name='title_product' type='text' value="{{old('title_product')}}"/>
                </div>
            </div>  
            <div class='form-group'>
                <label class='col-md-2'>Image*</label>
                <div class='col-md-10 input-group'>                    
                    <input class='form-control' name='image_product' type='file' />
                </div>
            </div>  
            <div class='form-group'>
                <label class='col-md-2'>Description </label>
                <div class='col-md-10 input-group'>                    
                    <textarea placeholder='description ...' class='form-control' name='description'>{{old('description')}}</textarea> 
                </div>
            </div> 

            <div class='form-group'>
                <label class='col-md-2'>Price</label>
                <div class='col-md-10 input-group'>                    
                    <input placeholder='price ...' class='form-control' name='price_product' type='decimal' />
                </div>
            </div>     
            <span class='col-md-2'></span>
            <input type='submit' class='col-md-10 btn btn-primary' name='ok' value='ADD' />
        {!!Form::close() !!}

<meta name="_token" id='token' content="{!! csrf_token() !!}" />
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/jquery-1.12.0.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
<script type="text/javascript">
    console.log('hiiiiiii');
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
            // console.log(data[0]);
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
                    showdata+="<option value="+data[i]['id']+">"+data[i]['name']+"</option>";
                }      
            showdata+="</select>";
            $('#subcategorydata').html(showdata);
        });//end get to obtain data from control
    });  //end get request when press and select category 
</script>

@endsection


    