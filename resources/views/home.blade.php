@extends('layouts.app')

@section('content')
<div class="container">


<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
                    @if (Session::get('site_id') == null)
						<a href="{{ url('/site/create') }}">create your own website
                        </a>
                    @endif
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
