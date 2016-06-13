@extends('layouts.app')

@section('content')
  <h2 class='page-header'>Templates</h2>
	<div class="row">
		<div class="col-md-8 col-md-offset-5">
      @if (Auth::guest())
				<a href="{{ url('/login') }}" class="btn btn-primary">create your own website</a>
		  @endif
    </div>
  </div>
  <div class="row">
    @foreach($temps as $temp)
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail" id="{{ $temp->id }}">
          <img src="{{ $temp->image }}" />
          <center><h3><a href="/activetemp/{{ $temp->id }}">{{ $temp->name }}</a></h3></center>
        </div>
      </div>
    @endforeach  
  </div>
  <script type="text/javascript">
    var id={{Auth::user()->site->template_id}};
    document.getElementById(id).style.border = '5px solid lightblue';
  </script>
@endsection
