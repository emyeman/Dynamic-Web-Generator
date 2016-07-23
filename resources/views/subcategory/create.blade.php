@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')
    <h2><div class='col-lg-1 col-ms-1'>
        <a href="{{url('/subcategory')}}"><span class="glyphicon glyphicon-backward"></span></a>
    </div></small> </h2>  

    <h2 class='page-header'>Add New Sub Category</h2> 
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
    {!!Form::open(['route'=>'subcategory.store','files'=>true,'method'=>'post','class'=>'form-horizontal']) !!}
       <div class='form-group'>
            <label class='col-md-2'>Category</label>
            <div class='col-md-10 input-group'>
                <select class='form-control'id='category_id' name='category_id' >
                    <option value="">choose a category</option>
                    @foreach ($subcategories as $subcategory) 

                        
                            @if($subcategory->category_id == NULL)
                                <option  value="{{$subcategory->id}}">{{$subcategory->name}} &nbsp; &nbsp;{{$subcategory->ar_name}}</option>
                            @endif
                        

                    @endforeach    
                </select>           
             </div>
        </div>
        <div class='form-group'>
            <label class='col-md-2'>English Title *</label>
            <div class='col-md-10 input-group'>                
                <input placeholder='PLZ,enter title ...' class='form-control title_subcategory' id='title_subcategory' name='title_subcategory' type='text' value="{{old('title_subcategory')}}"/>
            </div>
            <span id="title_err" style="color:red; size:12px; margin-left:170px;padding:10px 100px;font-weight:bold;background-color:lightpink;">This sub category already exists</span>
        </div> 
        <div class='form-group'>
            <label class='col-md-2'>Arabic Title *</label>
            <div class='col-md-10 input-group'>                
                <input placeholder='من فضلك ادخل اسم القسم الفرعى' class='form-control' name='ar_title_subcategory' type='text' value="{{old('ar_title_subcategory')}}"/>
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>Image</label>
            <div class='col-md-10 input-group'>        
                <input class='form-control' name='image_subcategory' type='file' />
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>English Description*</label>
            <div class='col-md-10 input-group'>                
                <textarea placeholder='PLZ,enter description ...' class='form-control' rows='3' name='subdescription'>{{old('subdescription')}}</textarea> 
            </div>
        </div>
        <div class='form-group'>
            <label class='col-md-2'>Arabic Description *</label>
            <div class='col-md-10 input-group'>                
                <textarea placeholder='من فضلك ادخل الوصف' class='form-control' rows='3' name='ar_subdescription'>{{old('ar_subdescription')}}</textarea> 
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
    $('.title_subcategory').on('blur',function(event) {            
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
        
        $.get("{{url('/subcategory/is_exit/')}}/"+title,function(data){
            console.log(data);
            console.log($(this));
            if (data=='true') {
               document.getElementById('title_err').style.display = "block";
                // $('.title_subcategory').focus();
               $('.title_subcategory').select();
            }else{
                document.getElementById('title_err').style.display = "none";
            }
            
        
            });
        });

  </script>
@endsection


    