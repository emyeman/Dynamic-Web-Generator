@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')

  {!! Html::script('assets/tinymce/tinymce.js') !!}
  <!-- Main content -->
    <section class="content">
       <div class="row">
      <div class="col-md-4 col-md-offset-4 ">
    <img style="min-width: 30%;" src="{{url('assets/reseller_assets/images/8a.png')}}" class="img-responsive" style="margin-top:-15px; margin-left: 12px;"> 
    </div>
    </div>
@if(Session::has('insert_success'))
      <div class="alert alert-success alert-autocloseable" role="alert">{{session('insert_success')}}</div>
  @endif

   <!-- <a href="{{url('/page')}}"><span class="glyphicon glyphicon-backward"></span></a> -->

  {!!Form::open(['route'=>'page.store','method'=>'post']) !!}
    <div class='form-group' id='ourpage'>
      <!-- <label class='col-md-2'>Select Your Page</label> -->
      <!-- <div class="box-header with-border"> -->
          <h3 class="box-title">&nbsp;   Select Your Page</h3>
      <!-- </div> -->
      <div class='col-md-10'>
      <div class="box box-warning">
          <div class="box-body">
          <select class='form-control findtitle' id='findtitle' name='findtitle' >
              <option value="">PLZ,Select Name Page</option>
                <option  value="page_top">Home</option>
                <option  value="services">Services</option>
                <option  value="about">About Us</option>
                <option  value="contact">Contact Us</option>
                <option  value="gallery">Category</option>
                <option  value="news">News</option>
                <option  value="promotion">Promotion</option>
          </select>           
      </div>
      </div>
      <span id="find_err" style="color:red; size:12px; margin-left:170px;padding:10px 100px;font-weight:bold;background-color:lightpink;">This page already exists </span>            
    </div>
    </div>
    <!-- for display select between write address and use google map -->
    <div class='col-lg-offset-10 col-ms-2' id="sel_getpage"> 
      <a id="id_getbage" class="getbage"><input type='button>' class='btn btn-info' value='Create New Page'/></a>
      <!-- <a id="backbage" class="oldbage" href="{{url('/page/create')}}"><input type='button>' class='btn btn-info' value='Back to Our Page'/></a> -->
    </div> 
  

    <div id="enternewbage">
      <div class='form-group'>
        <!-- <label class='col-md-2'>Title *</label> -->
        <!-- <div class="box-header with-border"> -->
          <h3 class="box-title">&nbsp; Write Your Title of Page</h3>
      <!-- </div> -->
        <div class='col-md-10'>
        <div class="box box-warning">
          <div class="box-body">
            <input placeholder='title ...' class='form-control title_page' id='title_page' name='title' type='text' value="{{old('title')}}"/>
        </div>
        </div>
        <span id="title_err" style="color:red; size:12px; margin-left:170px;padding:10px 100px;font-weight:bold;background-color:lightpink;">This page already exists</span>            
      </div>
      </div> 

      <div class='col-lg-offset-10 col-ms-2' id="sel_getpage"> 
      <!-- <a id="id_getbage" class="getbage"><input type='button>' class='btn btn-info' value='Create New Page'/></a> -->
      <a id="backbage" class="oldbage" href="{{url('/page/create')}}"><input type='button>' class='btn btn-info' value='Back to Our Page'/></a>
    </div> 

      <br><br>  
      <textarea  name='content' style="height:295px;">{{old('title')}}</textarea> 
      <br/>
      <label class="col-lg-offset-1" ></label>
      <label class="radio-inline" style="color:#33395a; font-weight:bold;" >
        <input type="radio" name="type_static" checked value="0">Display this page in same main web page
      </label>
      <label class="col-lg-offset-3" ></label>
      <label class="radio-inline" style="color:#33395a; font-weight:bold;" >
        <input type="radio" name="type_static" value="1">Display this page in page outside  main web page
      </label>

    </div>   
    <br/><br/>

    <!-- <span class='col-md-2'></span> col-xs-8 -->
     <div class="col-md-10 col-md-offset-1">       
         <div class="box">
            <div class="box-header">
                <div class="box-footer clearfix">
               <div class="input-group-btn">
               <div class="row">
               <div class="col-md-4">
                 <a href="{{url('/page')}}"><input id="add-new-event" type="button" class="btn btn-primary  pull-left "  value='Back' style="width:250px;"></a>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <input type='submit' class='pull-right btn btn-primary ' name='ok' value='ADD' style="width:250px;"/>   
                 </div>
                 </div>  
            </div>
            </div>
            </div>
          <!-- /.box --> 
     </div>
       
     </div>
  {!!Form::close() !!}
</section>
    <!-- /.content -->
</div>  


<meta name="_token" id='token' content="{!! csrf_token() !!}" />

<script>

    console.log('hii');
    document.getElementById('find_err').style.display = "none";
    document.getElementById('title_err').style.display = "none";

    document.getElementById('ourpage').style.display = "block";
    document.getElementById('enternewbage').style.display = "none";

    document.getElementById('id_getbage').style.display = "block";
    document.getElementById('backbage').style.display = "none";
    
    $('.getbage').click(function() {
      document.getElementById('ourpage').style.display = "none";
      document.getElementById('enternewbage').style.display = "block";

    document.getElementById('id_getbage').style.display = "none";
    document.getElementById('backbage').style.display = "block";
      // var newpage; 
      // newpage="<div class='form-group has-warning'>";
      //       newpage+="<label class='col-md-2'>Title Page</label>";
      //       newpage+="<div class='col-md-10 input-group'>";
      //         newpage+="<span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>";
      //           newpage+="<input placeholder='PlZ,enter page title ...' class='form-control' name='title' type='text'/>";
      //       newpage+="</div>";
      //   newpage+="</div>";     
      //   newpage+="<textarea  name='content'></textarea>";
      //   $('#enternewbage').html(newpage);



});

  var editor_config = {
    path_absolute : "/",
    selector: "textarea",
    plugins: [
      "textcolor colorpicker advlist autolink lists emoticons link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect fontsizeselect forecolor backcolor | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | emoticons",
    fontsize_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt',
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);


    console.log('hiiiiiii');
    $('.findtitle').on('blur',function(event) {            
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
        
        $.get("{{url('/page/is_exit/')}}/"+title,function(data){
            console.log(data);
            console.log($(this));
            if (data=='true') {
               document.getElementById('find_err').style.display = "block";
                // $('.findtitle').focus();
               $('.findtitle').select();
            }else{
                document.getElementById('find_err').style.display = "none";
            }
            
        
            });
        });


    $('.title_page').on('blur',function(event) {            
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
        
        $.get("{{url('/page/is_exit/')}}/"+title,function(data){
            console.log(data);
            console.log($(this));
            if (data=='true') {
               document.getElementById('title_err').style.display = "block";
                // $('.title_page').focus();
               $('.title_page').select();
            }else{
                document.getElementById('title_err').style.display = "none";
            }
            
        
            });
        });

  </script>

@endsection


    