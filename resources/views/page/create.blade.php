@extends('layouts.app')

@section('content')
<div class="container">

  @include('../header')

  {!! Html::script('assets/tinymce/tinymce.js') !!}

  <div class="col-sm-9">
        <h2 class='page-header'>Add New Page</h2>
        <br><br>
        {!!Form::open(['route'=>'page.store','method'=>'post']) !!}

            <div class='form-group has-warning' id='ourpage'>
            <label class='col-md-2'>Select Your Page</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-flag'></i></span>
                <select class='form-control'id='title' name='title' >
                    <option value="">PLZ,Select Name Page</option>
                      <option  value="page_top">Home</option>
                      <option  value="services">Services</option>
                      <option  value="about">About Us</option>
                      <option  value="contact">Contact Us</option>
                      <option  value="gallery">Category</option>
                      <option  value="news">News</option>
                      <option  value="promotion">Promotion</option>
                      <!-- <option  value=""></option> -->
                </select>           
             </div>
        </div>

                <!-- for display select between write address and use google map -->
        <div class='col-lg-offset-10 col-ms-2' id="sel_getpage"> 
            <a id="id_getbage" class="btn btn-primary getbage">Enter Another Page  <span class="glyphicon glyphicon-modal-window"></span> </a>
            
        </div> 
        <br/>
        <div id="enternewbage">
          <div class='form-group has-warning'>
            <label class='col-md-2'>Title Page</label>
            <div class='col-md-10 input-group'>
                <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                <input placeholder='PlZ,enter page title ...' class='form-control' name='title' type='text'/>
            </div>
        </div>     
          <textarea  name='content'></textarea>
       </div>   
          <br><br>
          <input type='submit' class='col-md-offset-1 col-md-10 btn btn-primary btn-lg' name='ok' value='ADD' />
      {!!Form::close() !!}
  </div><!--end leftsideof from-->
</div>

<meta name="_token" id='token' content="{!! csrf_token() !!}" />
<script type="text/javascript" src="{{url('/assets/js/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/js/jquery-1.12.0.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){

    console.log('hii');
    document.getElementById('ourpage').style.display = "block";
    document.getElementById('enternewbage').style.display = "none";
    
    $('.getbage').click(function() {
      document.getElementById('ourpage').style.display = "none";
      document.getElementById('enternewbage').style.display = "block";
    });


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
</script>
@endsection


    