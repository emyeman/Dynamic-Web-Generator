<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Reseller | Dashboard</title>
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


	<link rel="stylesheet" href="{{ url('assets/reseller_assets/dist/css/table-scroll.css')}}">
	<link rel="stylesheet" href="{{ url('assets/reseller_assets/dist/css/main.css')}}">
	<link rel="stylesheet" href="{{ url('assets/reseller_assets/dist/css/bootstrap.min.css')}}">


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

		<header class="main-header">
			<!-- Logo -->
			<a href="{{ url('/reseller') }}" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>A</b>LT</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>Reseller</b>Panel</span>
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
							</ul>
						</li>

					</ul>
				</div>
			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<!--<div class="user-panel">
	<div class="pull-left image">
		<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
	</div>
				<div class="pull-left info">
					<p>Alexander Pierce</p>

				</div>
	</div>-->
	<!-- search form -->
	<form action="#" method="get" class="sidebar-form">
		<div class="input-group">
			<input type="text" name="q" class="form-control" placeholder="Search...">
			<span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
		</div>
	</form>
	<!-- /.search form -->
	<!-- sidebar menu: : style can be found in sidebar.less -->
	<ul class="sidebar-menu">

		<li class="active">
			<a href="{{ url('/reseller') }}">
				<i class="fa fa-users"></i><span>Current Customers</span>
				<span class="label label-info pull-right">25</span>
				<!--<i class="fa fa-angle-left pull-right"></i>-->
			</a>
			<!--	<ul class="treeview-menu">
							<li class="active"><a href="index.html"><i class="fa fa-circle-o"></i>Vi</a></li>
							<li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
						</ul>-->
		</li>
		<li class="treeview">
			<a href="#">
				<i class="fa fa-plus-square"></i>
				<span>Create</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{url('reseller/create')}}"><i class="fa fa-circle-o"></i>create an account</a></li>

            </ul>
		</li>

<!-- for email -->
		<!-- <li class="treeview">
			<a href="#">
				<i class="fa fa-envelope"></i>
				<span>E-mail</span>
				<i class="fa fa-angle-left pull-right"></i>
			</a>
			<ul class="treeview-menu">
				<li><a href="#"><i class="fa fa-circle-o"></i>inbox</a></li>
				<li><a href="pages/email.html"><i class="fa fa-circle-o"></i>send E-mail</a></li>

			</ul>
		</li> -->



		<li>
			<a href="{{url('/domain/reseller_index')}}">
				<i class="fa fa-share-square-o"></i>
				<span>Domain</span>

                <span class="label label-success pull-right">{{$domaincount_unseen}}</span>
			</a>

		</li>

		<li>
			<a href="{{url('/ticket/reseller_index')}}">
				<i class="fa fa-list-alt"></i>
				<span>Tickets</span>

                <span class="label label-danger pull-right">{{$count_unseen}}</span>
			</a>

		</li>

	</ul>
	</section>
	<!-- /.sidebar -->
	</aside>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
        Dashboard
        <small>Reseller panel</small>
      </h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</section>


		{{-- the main content --}}

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
	<script>
        $(document).ready(function() {
             $("input[type=file]").on('change',function(event) {
                 // body...
                 $(this).parent().parent().append("<label style='margin-left:5px;'>"+$(this).val().substring(12)+"</label>");
             })
        })
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
	<!-- AdminLTE App -->
	<script src="{{ url('assets/reseller_assets/dist/js/app.min.js') }}"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="{{ url('assets/reseller_assets/dist/js/pages/dashboard.js') }}"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="{{ url('assets/reseller_assets/dist/js/demo.js') }}"></script>

</body>

</html>