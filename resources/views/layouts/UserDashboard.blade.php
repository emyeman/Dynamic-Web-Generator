<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Reseller | Dashboard</title>
	<style type="text/css">
i{
	margin-left: 25px;

}

.hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all 0.4s ease-in;
  transition: all 0.4s ease-in;
}

.hovereffect:hover img {
  filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feColorMatrix type="matrix" color-interpolation-filters="sRGB" values="0.2126 0.7152 0.0722 0 0 0.2126 0.7152 0.0722 0 0 0.2126 0.7152 0.0722 0 0 0 0 0 1 0" /><feGaussianBlur stdDeviation="3" /></filter></svg>#filter');
  filter: grayscale(1) blur(3px);
  -webkit-filter: grayscale(1) blur(3px);
  -webkit-transform: scale(1.2);
  -ms-transform: scale(1.2);
  transform: scale(1.2);
}

.hovereffect h2 {
  text-transform: uppercase;
  text-align: center;
  position: relative;
  font-size: 17px;
  padding: 10px;
  background: rgba(0, 0, 0, 0.6);
}

.hovereffect a.info {
	width: 50%;
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  border: 1px solid #fff;
  margin: 20px 0 0 0;
  background-color: transparent;
}

.hovereffect a.info:hover {
  box-shadow: 0 0 5px #fff;
}

.hovereffect a.info, .hovereffect h2 {
  -webkit-transform: scale(0.7);
  -ms-transform: scale(0.7);
  transform: scale(0.7);
  -webkit-transition: all 0.4s ease-in;
  transition: all 0.4s ease-in;
  opacity: 0;
  filter: alpha(opacity=0);
  color: #fff;
  text-transform: uppercase;
}

.hovereffect:hover a.info, .hovereffect:hover h2 {
	
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.myim{
    border: 10px solid transparent;
    padding: 15px;
    border-image-source:url({{ url('assets/reseller_assets/images/bor.png') }});
    border-image-repeat: round;
    border-image-slice: 77;
    border-image-width: 64px;

}

</style>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	{{-- {{ url("assets/reseller_assets/revslider/public/assets/css/settings.css")}} --}}
	<link rel="stylesheet" href="{{ url('assets/reseller_assets/bootstrap/css/bootstrap.min.css') }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ url('assets/reseller_assets/dist/css/AdminLTE.min.css') }}">
	<link rel="stylesheet" href="{{ url('assets/reseller_assets/dist/css/AdminLTE.css') }}">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="{{ url('assets/reseller_assets/dist/css/skins/skin-red.css') }}">
	<!-- iCheck -->
	<link rel="stylesheet" href="{{ url('assets/reseller_assets/plugins/iCheck/flat/blue.css') }}">
	<!-- Morris chart -->
	<link rel="stylesheet" href="{{ url('assets/reseller_assets/plugins/morris/morris.css') }}">
	<!-- jvectormap -->
	<link rel="stylesheet" href="{{ url('assets/reseller_assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
	<!-- Date Picker -->
	<link rel="stylesheet" href="{{ url('assets/reseller_assets/plugins/datepicker/datepicker3.css') }}">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="{{ url('assets/reseller_assets/plugins/daterangepicker/daterangepicker-bs3.css') }}">
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="{{ url('assets/reseller_assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Abeezee:400|Open+Sans:400,600,700|Source+Sans+Pro:400,600">	
    {!! Html::style('assets/css/plugins.css') !!}
   {!! Html::style('assets/bootstrap-iconpicker/css/bootstrap-iconpicker.min.css') !!}
    <!-- <link rel="stylesheet" href="{{ url('/assets/bootstrap-iconpicker/css/bootstrap-iconpicker.min.css')}}"/> -->
    <!--=== JavaScript ===-->

	<link rel="stylesheet" href="{{ url('assets/css/lightbox.css')}}">
	<link rel="stylesheet" href="{{ url('assets/reseller_assets/dist/css/table-scroll.css')}}">
	<link rel="stylesheet" href="{{ url('assets/reseller_assets/dist/css/main.css')}}">
	<link rel="stylesheet" href="{{ url('assets/reseller_assets/dist/css/bootstrap.min.css')}}">

    
    {!! Html::script('assets/bootstrap/js/bootstrap.min.js') !!}
    
    {!! Html::script('assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js') !!}
    {!! Html::script('assets/js/jquery-1.12.0.min.js') !!}

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
        $(document).ready(function() {
             $("input[type=file]").on('change',function(event) {
                 // body...
                 $(this).parent().parent().append("<label style='margin-left:5px;'>"+$(this).val().substring(12)+"</label>");
             })
        })
    </script>
      
    <script>
    $(document).ready(function(){
        "use strict";

        App.init(); // Init layout and core plugins
        Plugins.init(); // Init all plugins
        FormComponents.init(); // Init all form-specific plugins

        $('.picker').colorPicker(); // that's it
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

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="#" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>A</b>LT</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>User</b>Panel</span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Messages: style can be found in dropdown.less-->
						<li class="dropdown messages-menu">
						 <a target="_blank" href="{{url('/gotosite')}}">
                        	<strong>GO TO SITE</strong>
                    		</a>
                    	</li>

                    	@if(Auth::user()->status == 'reseller')
							<li class="dropdown messages-menu">
							 	<a target="_blank" href="{{url('/reseller')}}">
                        			<strong>GO TO RESELLER DASHBOARD</strong>
                    			</a>
                    		</li>                    		
                    	@endif

						<li class="dropdown messages-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-envelope-o"></i>
								<span class="label label-success">{{$count_message}}</span>
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
                                <a href="{{url('/message')}}">View all messages</a>
                            </li>
                        </ul>
						</li>


						<!-- Notifications: style can be found in dropdown.less -->
						<!-- <li class="dropdown notifications-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-bell-o"></i>
								<span class="label label-warning">10</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">You have 10 notifications</li>
								<li>-->
									<!-- inner menu: contains the actual data -->
									<!--<ul class="menu">
										<li>
											<a href="#">
												<i class="fa fa-users text-aqua"></i> 5 new members joined today
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-users text-red"></i> 5 new members joined
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-shopping-cart text-green"></i> 25 sales made
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-user text-red"></i> You changed your username
											</a>
										</li>
									</ul>
								</li>
								<li class="footer"><a href="#">View all</a></li>
							</ul>
						</li> -->


						<!-- Tasks: style can be found in dropdown.less -->

						<!-- User Account: style can be found in dropdown.less -->
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="{{ url('/') }}{{ Auth::user()->image }}" class="user-image" alt="User Image">
								<span class="hidden-xs">{{ Auth::user()->name }}</span>
							</a>
							<ul class="dropdown-menu">
								<!-- User image -->
								<li class="user-header">
									<img src="{{ url('/') }}{{ Auth::user()->image }}" class="img-circle" alt="User Image">
									<p>
										{{ Auth::user()->name }}
									</p>
								</li>
								<!-- Menu Body -->

								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-right">
										<a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Sign out</a>
									</div>
								</li>
								@if(isset(Auth::user()->site))
                      	<li class="dropdown-item"><a href="{{ url('/site/edit/') }}/{{ Auth::user()->site->id }}" >My Site</a></li>
                  	@endif
                      	<li class="dropdown-item"><a href="{{ url('/user/edit/') }}/{{ Auth::user()->id }}" >My Profile</a></li>
                  	<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Log Out</a></li>
							</ul>
						</li>

					</ul>
				</div>
			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		@yield('sidebar')
	<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">		<!-- /.content -->
		<section class="content-header"  style="background-color:#222d32;">
			<h1 style="color:#b8c7ce;">
        Dashboard
        <small>Control panel</small>
      </h1>
			<ol class="breadcrumb">
				<li><a href="#" style="color:#b8c7ce;"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active" style="color:#b8c7ce;">Dashboard</li>
			</ol>
		</section>
		
		@yield('content')
		</div>
	<!-- /.content-wrapper -->
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
			<b>Version</b> 1.1.1
		</div>
		<strong>Copyright &copy; 2016-2017 <a target="_blank" href="http://businessmonk.net/"> Businessmonk</a>.</strong> All rights reserved.
	</footer>


	

	</div>
	<!-- ./wrapper -->

	<!-- jQuery 2.2.0 -->
	
    
	<script src="{{ url('assets/reseller_assets/plugins/jQuery/jQuery-2.2.0.min.js') }}"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button);
	</script>
	<!-- Bootstrap 3.3.6 -->
	<script src="{{ url('assets/reseller_assets/bootstrap/js/bootstrap.min.js') }}"></script>
	<!-- Morris.js charts -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="{{ url('assets/reseller_assets/plugins/morris/morris.min.js') }}"></script>
	<!-- Sparkline -->
	<script src="{{ url('assets/reseller_assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
	<!-- jvectormap -->
	<script src="{{ url('assets/reseller_assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
	<script src="{{ url('assets/reseller_assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<!-- jQuery Knob Chart -->
	<script src="{{ url('assets/reseller_assets/plugins/knob/jquery.knob.js') }}"></script>
	<!-- daterangepicker -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
	<script src="{{ url('assets/reseller_assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
	<!-- datepicker -->
	<script src="{{ url('assets/reseller_assets/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
	<!-- Bootstrap WYSIHTML5 -->
	<script src="{{ url('assets/reseller_assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
	<!-- Slimscroll -->
	<script src="{{ url('assets/reseller_assets/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
	<!-- FastClick -->
	<script src="{{ url('assets/reseller_assets/plugins/fastclick/fastclick.js') }}"></script>
	<!--lightbox-->
	<script src="{{ url('assets/js/lightbox.js')}}"></script>
	<!-- AdminLTE App -->
	<script src="{{ url('assets/reseller_assets/dist/js/app.min.js') }}"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="{{ url('assets/reseller_assets/dist/js/pages/dashboard.js') }}"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="{{ url('assets/reseller_assets/dist/js/demo.js') }}"></script>
	 {!! Html::script('assets/bootstrap-iconpicker/js/iconset/iconset-glyphicon.min.js') !!}
    <!-- Bootstrap-Iconpicker -->
    {!! Html::script('assets/bootstrap-iconpicker/js/bootstrap-iconpicker.min.js') !!}
</body>

</html>