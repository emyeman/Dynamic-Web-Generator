@extends('layouts.app')

@section('sidebar')
    @include('../header')
@endsection

@section('content')

  {!! Html::script('assets/tinymce/tinymce.js') !!}
  <h2><div class='col-lg-1 col-ms-1'>
            <a href="{{url('/page')}}"><span class="glyphicon glyphicon-backward"></span></a>
        </div></small></h2>
  <h2 class='page-header'>Add New Page</h2>
  @if(Session::has('insert_success'))
      <div class="alert alert-success alert-autocloseable" role="alert">{{session('insert_success')}}</div>
  @endif
  {!!Form::open(['route'=>'page.store','method'=>'post']) !!}
    <div class='form-group' id='ourpage'>
      <label class='col-md-2'>Select Your Page</label>
      <div class='col-md-8'>
          <select class='form-control'id='findtitle' name='findtitle' >
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
    <!-- for display select between write address and use google map -->
    <div class='col-lg-offset-10 col-ms-2' id="sel_getpage"> 
      <a id="id_getbage" class="getbage"><input type='button>' class='btn btn-info' value='Create New Page'/></a>
      <a id="backbage" class="oldbage" href="{{url('/page/create')}}"><input type='button>' class='btn btn-info' value='Back to Our Page'/></a>
    </div> 
    <br/>
    <div id="enternewbage">
      <div class='form-group'>
        <label class='col-md-2'>Title *</label>
        <div class='col-md-10'>
            <input placeholder='title ...' class='form-control' name='title' type='text' value="{{old('title')}}"/>
        </div>
      </div>  
      <br><br><br>   
      <textarea  name='content'>{{old('title')}}</textarea> 
    </div>   
    <br>
    <input type='submit' class='col-md-12 btn btn-primary' name='ok' value='ADD' />
  {!!Form::close() !!}

<meta name="_token" id='token' content="{!! csrf_token() !!}" />

<script>

    console.log('hii');
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
</script>
@endsection


    