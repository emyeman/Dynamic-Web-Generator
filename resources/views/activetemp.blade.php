@extends('layouts.outside')

@section('content')
  <h2 class='page-header col-md-8 col-md-offset-2' style="margin-top:100px;">Templates</h2>
	<div class="row">
		<div class="col-md-8 col-md-offset-5">
      @if (Auth::guest())
				<a href="{{ url('/login') }}" class="btn btn-primary">create your own website</a>
		  @endif
    </div>
  </div>
  <div class="row col-md-6 col-md-offset-2">
    @foreach($temps as $temp)
      <div class="col-sm-6 col-md-4 container" >
        <div class="thumbnail" id="{{ $temp->id }}">
        <a href="/activetemp/{{ $temp->id }}">
          <img src="{{ url('assets/DynamicWebGenerator/upload/slider-city.jpg')}}" />
          <div class="textbox">
          <p class="text" style="text-align:center;"><strong>
          <font color="gray" style="font-size:20px;">{{ $temp->name }}</font></strong></p>
          </div>
          </a>
        </div>
      </div>
    @endforeach  
  </div>
  <script type="text/javascript">
    var id={{Auth::user()->site->template_id}};
    document.getElementById(id).style.border = '5px solid lightblue';
  </script>
@endsection
