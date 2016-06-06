@extends('layouts.app')

@section('content')
<div class="container">

  @include('../header')

  {!! Html::script('assets/tinymce/tinymce.js') !!}

  <div class="col-sm-9">
        <h2>Add New Page</h2>
        <br><br>
        {!!Form::open(['route'=>'page.store','method'=>'post']) !!}
          <!-- <div class='form-group has-warning'>
              <label class='col-md-2'>Page Name</label>
              <div class='col-md-10 input-group'>
                  <span class='input-group-addon'><i class='glyphicon glyphicon-pencil'></i></span>
                  <input placeholder='PlZ,enter page name' class='form-control' name='pagename' type='text'/>
              </div>
          </div>   -->   

    

          <textarea name='content'></textarea>
          <br><br>
          <input type='submit' class='col-md-offset-1 col-md-10 btn btn-primary btn-lg' name='ok' value='add' />
      {!!Form::close() !!}
  </div><!--end leftsideof from-->
</div>
<script>
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


    