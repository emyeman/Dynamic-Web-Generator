@extends('layouts.outside')

@section('content')

<!-- <body class="hold-transition register-page"> -->
<div class="register-box">
  <div class="register-logo">
    <!--<a href="../../index2.html"><b>Admin</b>LTE</a>-->
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">MAKE YOUR WEB SITE</p>

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
      <div class="form-group has-feedback {{ $errors->has('name') ? ' has-error' : '' }}">
        <input id="name" type="text" placeholder="Company Name" class="form-control" name="name" value="{{ old('name') }}">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
          @if ($errors->has('name'))
              <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
          @endif
      </div>

      <div class="form-group has-feedback {{ $errors->has('name') ? ' has-error' : '' }}">
        <input id="name" placeholder="Enter Your Mobile" type="number" class="form-control" name="mobile" value="{{ old('mobile') }}">
        <span class="glyphicon glyphicon-erase form-control-feedback"></span>
        @if ($errors->has('mobile'))
            <span class="help-block">
                <strong>{{ $errors->first('mobile') }}</strong>
            </span>
        @endif
      </div>

       <div class="form-group has-feedback {{ $errors->has('name') ? ' has-error' : '' }}">
        <input id="email" placeholder="Email"  placeholder="E-Mail Address" type="email" class="form-control" name="email" value="{{ old('email') }}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
      </div>


      <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
        <input id="password"  placeholder="Password" type="password" class="form-control" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
         <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
         @if ($errors->has('password_confirmation'))
            <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
        @endif
      </div>


      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <!-- <input type="checkbox"> I agree to the <a href="#">terms</a> -->
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div> -->

    <a href="{{url('/login')}}" class="text-center">I already have an account</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

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


@endsection

