@extends('layouts.outside')

@section('content')


@if(Session::get('user'))

    <!-- <body class="hold-transition login-page"> -->
    <div class="login-box">
      <div class="login-logo">
       <!-- <a href="../../index2.html"><b>Admin</b>LTE</a>-->
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Login</p>

        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
          <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" placeholder="E-Mail Address" type="email" class="form-control" name="email" value="{{ Session::get('user')->email }}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>

          <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
            <input id="password" type="password" class="form-control" name="password" value="{{ Crypt::decrypt(Session::get('user')->password) }}">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>

          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" name="remember"> Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <!-- <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
            Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
            Google+</a>
        </div> -->
        <!-- /.social-auth-links -->

        <a href="{{ url('/password/reset') }}">I forgot my password</a><br>
        <a href="{{ url('/register') }}" class="text-center">Make Your Web Site</a>

      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

@else

    <!-- <body class="hold-transition login-page"> -->
    <div class="login-box">
      <div class="login-logo">
       <!-- <a href="../../index2.html"><b>Admin</b>LTE</a>-->
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Login</p>

        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
          <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" type="email" placeholder="E-Mail Address" class="form-control" name="email" value="{{ old('email') }}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>

          <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
            <input id="password" type="password" placeholder="Password" class="form-control" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>

          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" name="remember"> Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <!-- <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
            Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
            Google+</a>
        </div> -->
        <!-- /.social-auth-links -->

        <a href="{{ url('/password/reset') }}">I forgot my password</a><br>
        <a href="{{ url('/register') }}" class="text-center">Make Your Web Site</a>

      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->



<!-- jQuery 2.2.0 -->
<script src="{{ url('assets/reseller_assets/plugins/jQuery/jQuery-2.2.0.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ url('assets/reseller_assets/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{ url('assets/reseller_assets/plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>


@endif
@endsection
