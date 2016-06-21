<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Dashboard | Melon - Flat &amp; Responsive Admin Template</title>

    <li class="menu-item one-page-subsite"><a href="index.html#portfolio-items">Register</a></li>


    <!-- ******************************************************* -->
  
    <!-- ********************************************************************* -->
    
    {!! Html::style('assets/bootstrap-3.2.0/css/bootstrap.min.css') !!}
    <!-- jQuery UI -->
    <!--<link href="plugins/jquery-ui/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />-->
    <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="plugins/jquery-ui/jquery.ui.1.10.2.ie.css"/>
    <![endif]-->

    <!-- Theme -->
    <!-- <link href="assets/css/main.css" rel="stylesheet" type="text/css" /> -->
    {!! Html::style('assets/css/main.css') !!}
    {!! Html::style('assets/css/plugins.css') !!}
    {!! Html::style('assets/css/responsive.css') !!}
    {!! Html::style('assets/css/icons.css') !!}
    {!! Html::style('assets/css/fontawesome/font-awesome.min.css') !!}
    <!--[if IE 7]>
        <link rel="stylesheet" href="assets/css/fontawesome/font-awesome-ie7.min.css">
    <![endif]-->

    <!--[if IE 8]>
        <link href="assets/css/ie8.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap-Iconpicker -->
    {!! Html::style('assets/bootstrap-iconpicker/css/bootstrap-iconpicker.min.css') !!}
    <!-- <link rel="stylesheet" href="{{ url('/assets/bootstrap-iconpicker/css/bootstrap-iconpicker.min.css')}}"/> -->
    <!--=== JavaScript ===-->

    
    {!! Html::script('assets/js/jquery-1.12.0.min.js') !!}
    
    {!! Html::script('assets/bootstrap/js/bootstrap.min.js') !!}
    
    {!! Html::script('assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js') !!}
    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="assets/js/libs/html5shiv.js"></script>
    <![endif]-->

    <!-- Smartphone Touch Events -->
    
    {!! Html::script('assets/plugins/touchpunch/jquery.ui.touch-punch.min.js') !!}
    
    {!! Html::script('assets/plugins/event.swipe/jquery.event.move.js') !!}
    
    {!! Html::script('assets/plugins/event.swipe/jquery.event.swipe.js') !!}
    <!-- General -->
    
    {!! Html::script('assets/js/libs/breakpoints.js') !!}
    
    {!! Html::script('assets/plugins/respond/respond.min.js') !!}
    
    {!! Html::script('assets/plugins/cookie/jquery.cookie.min.js') !!}
    
    {!! Html::script('assets/plugins/slimscroll/jquery.slimscroll.min.js') !!}
    
    {!! Html::script('assets/plugins/slimscroll/jquery.slimscroll.horizontal.min.js') !!}
    <!-- Page specific plugins -->
    <!-- Charts -->
    <!--[if lt IE 9]>
        <script type="text/javascript" src="plugins/flot/excanvas.min.js"></script>
    <![endif]-->
   
    {!! Html::script('assets/plugins/sparkline/jquery.sparkline.min.js') !!}
    
    {!! Html::script('assets/plugins/flot/jquery.flot.min.js') !!}
    
    {!! Html::script('assets/plugins/flot/jquery.flot.tooltip.min.js') !!}
   
    {!! Html::script('assets/plugins/flot/jquery.flot.resize.min.js') !!}
   
    {!! Html::script('assets/plugins/flot/jquery.flot.time.min.js') !!}
   
    {!! Html::script('assets/plugins/flot/jquery.flot.growraf.min.js') !!} 
   
    {!! Html::script('assets/plugins/easy-pie-chart/jquery.easy-pie-chart.min.js') !!}
   
    {!! Html::script('assets/plugins/daterangepicker/moment.min.js') !!}
   
    {!! Html::script('assets/plugins/daterangepicker/daterangepicker.js') !!}
   
    {!! Html::script('assets/plugins/blockui/jquery.blockUI.min.js') !!}
   
    {!! Html::script('assets/plugins/fullcalendar/fullcalendar.min.js') !!}
    <!-- Noty -->
   
    {!! Html::script('assets/plugins/noty/jquery.noty.js') !!}
   
    {!! Html::script('assets/plugins/noty/layouts/top.js') !!}
   
    {!! Html::script('assets/plugins/noty/themes/default.js') !!}

    <!-- Forms -->
   
    {!! Html::script('assets/plugins/uniform/jquery.uniform.min.js') !!}
   
    {!! Html::script('assets/plugins/select2/select2.min.js') !!}
    <!-- App -->
   
    {!! Html::script('assets/js/app.js') !!}
   
    {!! Html::script('assets/js/plugins.js') !!}
   
    {!! Html::script('assets/js/plugins.form-components.js') !!}
    <!-- color picker -->
    {!! Html::script('colorPicker/jqColorPicker.min.js') !!}
    <script>
    $(document).ready(function(){
        "use strict";

        App.init(); // Init layout and core plugins
        Plugins.init(); // Init all plugins
        FormComponents.init(); // Init all form-specific plugins

        $('.picker').colorPicker(/* optinal options */); // that's it
    });
    </script>
    <script type="text/javascript">
        $(function(){
            $('.alert-autocloseable').delay(5000).slideUp( 1000);
        });
    </script>
    <meta name="_token" id='token' content="{!! csrf_token() !!}" />
    <script type="text/javascript">
            var token = $('#token').attr('content');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "GET",
                url: "{{url('/message/unseen') }}",
                data:   { _token :token },
                success: function(data) { 
                    data_arr=$.parseJSON(data);
                    $('.num-notifications').append(data_arr[1]);
                    $.each(data_arr[0],function(index,message){
                        str='<li><a href="/message/'+message.id+'">'
                        str+='<span class="subject"><span class="from">';
                        str+=message.name;
                        str+='</span></span><span class="text">';
                        str+=message.subject;
                        str+='</span></a></li>';
                        $('.notification').prepend(str);
                    });
                },
                error: function (data) {
                    console.log('error :(');
                }
            });
    </script>


    <!-- Demo JS -->
    <!-- <script type="text/javascript" src="assets/js/custom.js"></script> -->
    {!! Html::script('assets/js/custom.js') !!}
    <!-- <script type="text/javascript" src="assets/js/demo/pages_calendar.js"></script> -->
    {!! Html::script('assets/js/demo/pages_calendar.js') !!}
    <!-- <script type="text/javascript" src="assets/js/demo/charts/chart_filled_blue.js"></script> -->
    {!! Html::script('assets/js/demo/charts/chart_filled_blue.js') !!}
    <!-- <script type="text/javascript" src="assets/js/demo/charts/chart_simple.js"></script> -->
    {!! Html::script('assets/js/demo/charts/chart_simple.js') !!}
</head>
<body id="app-layout">
    <!-- Header -->
    <header class="header navbar navbar-fixed-top" role="banner">
        <!-- Top Navigation Bar -->
        <div class="container">

            <!-- Only visible on smartphones, menu toggle -->
            <ul class="nav navbar-nav">
                <li class="nav-toggle"><a href="javascript:void(0);" title=""><i class="icon-reorder"></i></a></li>
            </ul>

            <!-- Logo -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/assets/img/logo.png" alt="logo" />
                <strong>Dynamic</strong> WG
            </a>
            <!-- /logo -->

            <!-- Sidebar Toggler -->
            <a href="#" class="toggle-sidebar bs-tooltip" data-placement="bottom" data-original-title="Toggle navigation">
                <i class="icon-reorder"></i>
            </a>
            <!-- /Sidebar Toggler -->
            @if(isset(Auth::user()->site))
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a target="_blank" href="{{url('/'.Auth::user()->site->subdomain.'/en')}}">
                        <strong>GO TO SITE</strong>
                    </a>
                </li>
                <li>
                    <a href="{{url('/dashboard')}}">
                        <strong>DASHBOARD</strong>
                    </a>
                </li>
            </ul>
            @endif
            <!-- run website -->
            

            <!-- Top Right Menu -->
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                <!-- Messages -->
                    <li class="dropdown hidden-xs hidden-sm">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-envelope"></i>
                            <span class="badge num-notifications"></span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <!-- <li class="title">
                                <p>You have 3 new messages</p>
                            </li> -->
                            <!-- <li>
                                <a href="javascript:void(0);">
                                    <span class="photo"><img src="/assets/img/demo/avatar-1.jpg" alt="" /></span>
                                    <span class="subject">
                                        <span class="from">Bob Carter</span>
                                        <span class="time">Just Now</span>
                                    </span>
                                    <span class="text">
                                        Consetetur sadipscing elitr...
                                    </span>
                                </a>
                            </li> -->
                            <li class="footer">
                                <a href="/message">View all messages</a>
                            </li>
                        </ul>
                    </li>

                    <!-- User Login Dropdown -->
                    <li class="dropdown user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!--<img alt="" src="assets/img/avatar1_small.jpg" />-->
                            <i><img id="profile" class="img-circle" src="{{ url('/') }}{{ Auth::user()->image }}" height='20px' width='10px' alt=""></i>
                            <span class="username">{{ Auth::user()->name }}</span>
                            <i class="icon-caret-down small"></i>
                        </a>
                        <ul class="dropdown-menu">
                            @if(isset(Auth::user()->site))
                                <li class="dropdown-item"><a href="{{ url('/site/edit/') }}/{{ Auth::user()->site->id }}" >My Site</a></li>
                            @endif
                                <li class="dropdown-item"><a href="{{ url('/user/edit/') }}/{{ Auth::user()->id }}" >My Profile</a></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Log Out</a></li>
                        </ul>
                    </li>
                    <!-- /user login dropdown -->
                <!-- *********************************************** -->
                @endif
                
            </ul>
            <!-- /Top Right Menu -->
        </div>
        <!-- /top navigation bar -->
    </header> <!-- /.header -->
    <!-- ************************************************ -->
    @yield('sidebar')
    <!-- ************************************************ -->

    <div id="content" style='margin-top:80px;'>
        <div class="container">              
            <!--=== Page Content ===-->
                @yield('content')    
            <!-- /Page Content -->
        </div>
        <!-- /.container -->
    </div>
    
</div> <!-- /container -->

    <!-- Bootstrap-Iconpicker Iconset for Glyphicon -->
    {!! Html::script('assets/bootstrap-iconpicker/js/iconset/iconset-glyphicon.min.js') !!}
    <!-- Bootstrap-Iconpicker -->
    {!! Html::script('assets/bootstrap-iconpicker/js/bootstrap-iconpicker.min.js') !!}
</body>
</html>

