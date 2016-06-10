@extends('layouts.app')

@section('content')
<div class="container">

<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-5">
                      @if (Auth::guest())
						<a href="{{ url('/login') }}" class="btn btn-primary">create your own website
                        </a>
                      @elseif (Session::get('site_id') == null) 
                        <!--  <a href="{{ url('site/create') }}" class="btn btn-primary">create your own website
                         </a> -->
                    @endif
					</div>
          <div>
            @foreach($temps as $temp)
              <img src="{{ $temp->image }}" />
              <h1><a href="/activetemp/{{ $temp->id }}">{{ $temp->name }}</a></h1>
            @endforeach
          </div>
				</div>
</div>


<!--     <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Hoooooooooooooooooooooooome

                </div>
            </div>
        </div>
    </div> -->






</div>
@endsection
