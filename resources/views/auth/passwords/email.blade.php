@extends('layouts.outside')

@section('content')

<div class="container">
<div class="row">
<h5 class="col-md-4 col-md-offset-3" style="margin-top:120px;">Reset <font color="red">Password</font></h5>
<hr class="col-md-10 col-md-offset-2" style="margin-top:0px;"/>

<div class="col-md-10 col-md-offset-2">


                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-envelope"></i> Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
      

                    </div>
                </div>
            </div>
        <div style="height:356px;">

    </div>
@endsection
