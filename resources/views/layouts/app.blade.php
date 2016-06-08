<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>web site generator</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Abeezee:400|Open+Sans:400,600,700|Source+Sans+Pro:400,600">
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/defaults.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/demo.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/bootstrap-theme.min.css')}}">
   
    <link rel="stylesheet" href="{{ url('/assets/css/emy.css') }}">
     <link rel="stylesheet" href="{{ url('/assets/bootstrap-3.2.0/css/bootstrap.min.css')}}"/>
<!-- Bootstrap-Iconpicker -->
    <link rel="stylesheet" href="{{ url('/assets/bootstrap-iconpicker/css/bootstrap-iconpicker.min.css')}}"/>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Dynamic Web Generator 
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <!-- <li><a href="{{ url('/home') }}">Home</a></li> -->
                    @if (Session::get('site_id') != null)
                        <!-- <li><a href="{{ url('/home') }}">Home</a></li> -->
                        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li><a href="#">Contact Us</a></li>
                   @endif 
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li><img id="profile" class="img-circle" src="{{ url('/') }}{{ Auth::user()->image }}" alt=""></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a> 
                            <ul class="dropdown-menu mydrop">
                             @if (Session::get('site_id') != null)
                                <li class="dropdown-item"><a href="{{ url('/site/edit/') }}/{{ Session::get('site_id') }}" >my site</a></li>
                             @endif
                                <li class="dropdown-item"><a href="{{ url('/user/edit/') }}/{{ Auth::user()->id }}" >edit my profile</a></li>
                            </ul>
                        </li>

                            <!-- <ul class="dropdown-menu" role="menu"> -->
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            <!-- </ul> -->
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>


    @yield('content')

    <!-- JavaScripts -->
     <footer class="container-fluid">
      <!-- <p>Footer Text</p> -->
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script type="text/javascript" src="/assets/jquery/jquery-1.10.2.min.js"></script>
        <!-- color picker -->

<script type="text/javascript" src="{{ url('/assets/bootstrap-3.2.0/js/bootstrap.min.js') }}"></script>
<!-- Bootstrap-Iconpicker Iconset for Glyphicon -->
<script type="text/javascript" src="{{ url('/assets/bootstrap-iconpicker/js/iconset/iconset-glyphicon.min.js') }}"></script>
<!-- Bootstrap-Iconpicker -->
<script type="text/javascript" src="{{ url('/assets/bootstrap-iconpicker/js/bootstrap-iconpicker.min.js') }}"></script>
    {{-- <script src="{{ elixir('j/assets/js/s/app.js') }}"></script> --}}
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="{{ url('/assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/js/accordion.js') }}"></script>

    <script type="text/javascript" src="{{ url('/colorPicker/colors.js') }}"></script>
   <script type="text/javascript" src="{{ url('/colorPicker/jqColorPicker.min.js') }}"></script>


    <script type="text/javascript">
         $('.picker').colorPicker(/* optinal options */); // that's it
    </script>

</body>
</html>
