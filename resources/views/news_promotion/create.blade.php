@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')

    @if($type=='promotion')
        <!-- <a href="{{url('/news_promotion/promotion')}}"><span class="glyphicon glyphicon-backward"></span></a> -->
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
        <img style="min-width: 30%; " src="{{url('assets/reseller_assets/images/6a.png')}}" class="img-responsive"> 
        </div>
        </div>
     @else
        <!-- <a href="{{url('/news_promotion/news')}}"><span class="glyphicon glyphicon-backward"></span></a> -->
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
        <img style="min-width: 30%; " src="{{url('assets/reseller_assets/images/2a.png')}}" class="img-responsive"> 
        </div>
        </div>
     @endif
       <section class="content">
       <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">
                    @if($type=='promotion')
                        Add New Promotion
                    @else
                        Add New News
                    @endif
              </h3>
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
            <!-- /.box-header -->
            @if(Session::has('insert_success'))
            <div class="alert alert-success alert-autocloseable" role="alert">{{session('insert_success')}}</div>
            @endif
            <div class="box-body">
        {!!Form::open(['route'=>'news_promotion.store','method'=>'post','files'=>true,'class'=>'form-horizontal']) !!}
                <!-- text input -->
                <div class="form-group">

    <div class="row">
     <div class="col-md-5 col-md-offset-1 ">
     <label>English Title</label>
      <input type="text" class="form-control" name='title' placeholder="" value="{{old('title')}}">
      </div>
    </div>

    <span id="title_err" style="color:red; size:12px; margin-left:170px;padding:10px 100px;font-weight:bold;background-color:lightpink;">This <?php echo $type;?> already exists</span>

    <div class="row">
      <div class="col-md-5 col-md-offset-1 ">
      <label>Arabic Title</label>
      <input type="text" class="form-control" name='ar_title' placeholder="" value="{{old('ar_title')}}">
      </div>
    </div>  

    <div class="row" style="margin-top:15px;">
    <div class="col-md-5 col-md-offset-1 ">
     <label>English Description</label>
        <textarea placeholder='description...' class='form-control' name='description'  rows="4" style='resize: none;'>{{old('description')}}</textarea>
      </div>
    </div>

    <div class="row" style="margin-top:15px;">
    <div class="col-md-5 col-md-offset-1 ">
     <label>Arabic Description</label>
       <textarea placeholder='description...' class='form-control' name='ar_description'  rows="4" style='resize: none;'>{{old('ar_description')}}</textarea>
      </div>
    </div>

    <input type='hidden' value="{{$type}}" name='type'>

    <div class="row" style="margin-top:15px;">
     <div class="col-md-5 col-md-offset-1 ">
     <label class="btn btn-default btn-file">
                    Choose Picture <input id="image" type="file" name="image" style="display: none;">
    </label>
    </div>
   </div>

   <div class="row" style="margin-top:15px;">
     <div class="col-md-5 col-md-offset-1 ">
     <label>Start Date</label>
      <input type='text' style='position: absolute; z-index: 5;' name='start_date' class='form-control required' value="<?= date('Y-m-d');?>">
      </div>
    </div>

    <div class="row" style="margin-top:40px;"> 
     <div class="col-md-5 col-md-offset-1 ">
     <label>End Date</label>
      <input type='text' style='position: absolute; z-index: 5;' name='end_date' class='form-control required' value="<?= date('Y-m-d');?>">
      </div>
    </div>
<br/>
        <div class="box-footer clearfix col-md-5 col-md-offset-1" style="margin-top:30px;">
            <div class="input-group-btn">
               <div class="row">
               <div class="col-md-4">
              @if($type=='promotion')
                 <a href="{{url('/news_promotion/promotion')}}"><input id="add-new-event" type="button" class="btn btn-primary  pull-left "  value='Back' style="width:200px;"></a>
              @else
                <a href="{{url('/news_promotion/news')}}"><input id="add-new-event" type="button" class="btn btn-primary  pull-left "  value='Back' style="width:200px;"></a>
              @endif                

              </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <input type='submit' class='pull-right btn btn-primary ' name='ok' value='ADD' style="width:200px;"/>   
                 </div>
                 </div>  
            </div>
        </div>
            {!!Form::close() !!}
             </div>
            </div>
        </div>
        </section>




    {!! Html::style('assets/css/jquery-ui.min.css') !!}
    {!! Html::script('assets/js/jquery-ui.min.js') !!}
   <script>

    $( "[name=end_date]" ).datepicker({dateFormat: "yy-mm-dd"});
    $( "[name=start_date]" ).datepicker({dateFormat: "yy-mm-dd"});
  </script>

<meta name="_token" id='token' content="{!! csrf_token() !!}" />
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-2.1.4.min.js')}}"></script> -->
<!-- <script type="text/javascript" src="{{url('/assets/js/jquery-1.12.0.min.js')}}"></script> -->
<script type="text/javascript">
    console.log('hiiiiiii');
    document.getElementById('title_err').style.display = "none";
    $('.title_news_promotion').on('blur',function(event) {            
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
        
        $.get("{{url('/news_promotion/is_exit/'.$type)}}/"+title,function(data){
            console.log(data);
            console.log($(this));
            if (data=='true') {
               document.getElementById('title_err').style.display = "block";
                // $('.title_news_promotion').focus();
               $('.title_news_promotion').select();
            }else{
                document.getElementById('title_err').style.display = "none";
            }
            
        
            });
        });

  </script>

@endsection