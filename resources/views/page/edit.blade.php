@extends('layouts.UserDashboard')

@section('sidebar')
    @include('../UserDashboardHeader')
@endsection

@section('content')

  {!! Html::script('assets/tinymce/tinymce.js') !!}

  <!-- Main content -->
    <section class="content">
       <div class="row">
      <div class="col-md-10 col-md-offset-1 ">
    <img src="{{url('assets/reseller_assets/images/19a.png')}}" class="img-responsive" style="margin-top:-15px; margin-left: 12px;"> 
    </div>
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
    <br>
   <!-- <a href="{{url('/page')}}"><span class="glyphicon glyphicon-backward"></span></a> -->

  {{Form::model($row,['route'=>['page.update',$row->id],'method'=>'put','class'=>'form-horizontal']) }}

    <div id="enternewbage">
      <div class='form-group'>
        <!-- <label class='col-md-2'>Title *</label> -->
        <!-- <div class="box-header with-border"> -->
          <h3 class="box-title">&nbsp; <a href="{{url('/page')}}"><span class="glyphicon glyphicon-backward"></span></a> Edit Your Title of Page</h3>
      <!-- </div> -->
        <div class='col-md-12'>
        <div class="box box-warning">
          <div class="box-body">
          {{Form::text('title', old('title') ,['class'=>'form-control','placeholder'=>'page title ...'])}}
        </div>
        </div>
      </div>
      </div> 

      {{Form::textarea('content', old('content'))}}

      <br/>
      <label class="col-lg-offset-1" ></label>
        @if($row->type_static==0)
      <label class="radio-inline" style="color:#33395a; font-weight:bold;" >
        <input type="radio" name="type_static" checked value="0">Display this page in same main web page
      </label>
      <label class="col-lg-offset-3" ></label>
      <label class="radio-inline" style="color:#33395a; font-weight:bold;" >
        <input type="radio" name="type_static" value="1">Display this page in page outside  main web page
      </label>
      @else
      <label class="radio-inline" style="color:#33395a; font-weight:bold;" >
        <input type="radio" name="type_static"  value="0">Display this page in same main web page
      </label>
      <label class="col-lg-offset-3" ></label>
      <label class="radio-inline" style="color:#33395a; font-weight:bold;" >
        <input type="radio" name="type_static" checked value="1">Display this page in page outside  main web page
      </label>

      @endif
    
    </div>   
    <br>


    <!-- <span class='col-md-2'></span> col-xs-8 -->
     <div class="col-md-10 col-md-offset-1">       
         <div class="box">
            <div class="box-header">
                <div class="box-footer clearfix">
               <div class="input-group-btn">
                    <input type='submit' class='btn-flat pull-right form-control btn btn-primary' name='ok' value='EDIT' />   
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


    