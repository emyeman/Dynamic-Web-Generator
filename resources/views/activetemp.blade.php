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
  <div class="row col-md-10 col-md-offset-2">
    @foreach($temps as $temp)
<a href="/activetemp/{{ $temp->id }}">
<ul class="demo-2 effect" id="{{ $temp->id }}">
    <li>
       <h2 class="zero">{{ $temp->name }}</h2>
       <p class="zero">{{ $temp->name }}</p>
    </li>
    <li><img class="top" src="{{ url('assets/DynamicWebGenerator/upload/bg-slider4.jpg')}}" alt=""/></li>
</ul>
</a>
{{-- 

      <div class="col-sm-6 col-md-4 container" >
        <div class="thumbnail" id="{{ $temp->id }}">
        <a href="/activetemp/{{ $temp->id }}">
          <img src="{{$temp->image}}" />
          <div class="textbox">
          <p class="text" style="text-align:center;"><strong>
          <font color="gray" style="font-size:20px;">{{ $temp->name }}</font></strong></p>
          </div>
          </a>
        </div>
      </div>
 --}}    @endforeach  
  </div>
  <script type="text/javascript">
    var id={{Auth::user()->site->template_id}};
    document.getElementById(id).style.border = '5px solid lightblue';
  </script>
@endsection
