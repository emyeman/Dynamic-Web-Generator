@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')
      <!-- <h2>
      <div class='col-lg-1 col-ms-1'>
            <a href="{{url('/product')}}"><span class="glyphicon glyphicon-backward"></span></a>
        </div>
        </small>Edit Product</h2> -->
    <h2 class='page-header'>Edit Product</h2>
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
    {!!Form::open(['route'=>['product.update',$product->id],'files'=>true,'method'=>'put','class'=>'form-horizontal']) !!}
       <div class='form-group'>
            <label class='col-md-2'>Category</label>
            <div class='col-md-10 input-group'>            
                <select class='form-control getrequest' id='category_id' name='category_id' >
                    <option value="{{$category->id}}"> {{$category->name}}</option>
                    @if (Auth::user()->id == $category->site_id)
                        @foreach ($categories as $sel_category) 
                            <!-- for no repeat name of category-->
                            @if($category->name !=$sel_category->name)
                                <option value="{{$sel_category->id}}">{{$sel_category->name}}</option>
                            @endif    
                        @endforeach 
                    @endif
                </select>           
             </div>
        </div>

        <div class='form-group' id="beforselect" style="display:show">
            <label class='col-md-2'>Sub Category</label>
            <div class='col-md-10 input-group'>               
                <select class='form-control' id='subcategory_id' name='subcategory_id'>
                    <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                     @if (Auth::user()->id == $subcategory->site_id)
                        @foreach ($subcategories as $sel_subcategory) 
                            <!-- ************for no repeat name of subcategory*****************-->
                             @if($subcategory->name !=$sel_subcategory->name)
                                <option value="{{$sel_subcategory->id}}">{{$sel_subcategory->name}}</option>
                            @endif
                        @endforeach 
                    @endif     
                </select>           
             </div>
        </div>
        <div class='form-group'id="afterselect" style="display:none">
            <label class='col-md-2'>Select Sub Category</label>
                <div class='col-md-10 input-group'id='subcategorydata' >
                   
                </div>
        </div>
        <!-- end select of subcategory -->

        <div class='form-group'>
            <label class='col-md-2'>Title</label>
            <div class='col-md-10 input-group'>               
                <input value='{{$product->name}}' class='form-control' name='title_product' type='text'/>
            </div>
        </div>

        <div class='col-lg-offset-4' style='margin-bottom:20px;'><img width='300px' height='300px' src="{{url('/assets/images/'.$product->image)}}"></div>
        <div class='form-group'>
            <label class='col-md-2'>Image</label>
            <div class='col-md-10 input-group'>                
                <!-- <label class='form-control'>{{$product->image}}</label> -->
                <input class='form-control' name='image_product' type='file' />
            </div>
        </div>  
        <div class='form-group'>
            <label class='col-md-2'>Description</label>
            <div class='col-md-10 input-group'>                
                <textarea  class='form-control' name='description'>{{$product->description}}</textarea> 
            </div>
        </div>  

        <div class='form-group'>
            <label class='col-md-2'>Price</label>
            <div class='col-md-10 input-group'>                
                <input value="{{$product->price}}" class='form-control' name='price_product' type='number'/>
            </div>
        </div>     
        <span class='col-md-2'></span>
        <input type='submit' class='col-md-10 btn btn-primary btn-lg' name='ok' value='Edit' />
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
            $.get("{{url('/product/create/"+id"')}}",function(data){
                // console.log(data[0]);
                // console.log(data);
                var showdata;
                // for(i=0;i<data.length;i++){
                //   for(j in data[i]){
                        // showdata+=j+": "+data[i][j]+'<br/>';
                //   }   
                // }
                         
                showdata="<label class='form-control'>Old Your Select : {{$subcategory->name}}</label>";
                showdata+="<select class='form-control'id='subcategory_id' name='subcategory_id'>";
                    showdata+="<option value=''>Select SubCategory</option>";
                    for(i=0;i<data.length;i++){
                        showdata+="<option value="+data[i]['id']+">"+data[i]['name']+"</option>";
                    }      
                showdata+="</select>";
                $('#subcategorydata').html(showdata);
            });//end get to obtain data from control
        }
    });  //end get request when press and select category 
</script>

@endsection


    