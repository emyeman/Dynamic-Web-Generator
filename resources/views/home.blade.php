@extends('layouts.app')

@section('content')
<div class="container">




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

Hoooooooooooooooooooooooooooome
<hr />
<h1>Test values:</h1>
base_path(): {{ base_path() }}
<br />
public_path(): {{ public_path() }}
<br />
app_path(): {{ app_path() }}
<br />
storage_path(): {{ storage_path() }}
<br />
URL::full(): {{ URL::full() }}
<br />
url(''): {{ url('') }}

</div>
@endsection
