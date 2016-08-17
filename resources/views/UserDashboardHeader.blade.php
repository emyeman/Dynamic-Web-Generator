		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				
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
	<ul class="sidebar-menu" style="margin-left: -20px;">
	
	 <li class="treeview">
			<a href="#">
				<i class="fa fa-gratipay"></i>
				<span>Branding</span>
				<i class="fa fa-angle-left pull-right"></i>
			</a>
			<ul class="treeview-menu">
				<li><a href="{{ url('/branding') }}"><i class="fa fa-circle-o"></i> Show Branding</a></li>
			</ul>
		</li>
		<li class="treeview">
			<a href="#">
				<i class="fa fa-pie-chart"></i>
				<span>Categories</span>
				<i class="fa fa-angle-left pull-right"></i>
			</a>
			<ul class="treeview-menu">
				<li><a href="{{ url('/category')}}"><i class="fa fa-circle-o"></i> Show Categories</a></li>
				<li><a href="{{ url('/category/create')}}"><i class="fa fa-circle-o"></i> Add NewCategories</a></li>
			</ul>
		</li>
		<li class="treeview">
			<a href="#">
				<i class="fa fa-database"></i>
				<span>Sub Categories</span>
				<i class="fa fa-angle-left pull-right"></i>
			</a>
			<ul class="treeview-menu">
			    <li><a href="{{ url('/subcategory')}}"><i class="fa fa-circle-o"></i>Show Sub Categories</a></li>
				<li><a href="{{ url('/subcategory/create')}}"><i class="fa fa-circle-o"></i>Add Sub Categories</a></li>
				
			</ul>
		</li>
		<li class="treeview">
			<a href="#">
				<i class="fa fa-product-hunt"></i> <span>Products</span>
				<i class="fa fa-angle-left pull-right"></i>
			</a>
			<ul class="treeview-menu">
                <li><a href="{{ url('/product')}}"><i class="fa fa-circle-o"></i> Show Products</a></li>
				<li><a href="{{ url('/product/create')}}"><i class="fa fa-circle-o"></i> Add Products</a></li>
			</ul>
		</li>
		<li class="treeview">
			<a href="#">
				<i class="fa fa-slideshare"></i> <span>Crusal</span>
				<i class="fa fa-angle-left pull-right"></i>
			</a>
			<ul class="treeview-menu">
			    <li><a href="{{ url('/crusal')}}"><i class="fa fa-circle-o"></i> Show Image</a></li>
				<li><a href="{{ url('/crusal/create')}}"><i class="fa fa-circle-o"></i> ADD Image</a></li>
				
			</ul>
		</li>
	
		<li class="treeview">
			<a href="#">
				<i class="fa fa-tasks"></i> <span>Promotions</span>
				<i class="fa fa-angle-left pull-right"></i>
			</a>
			<ul class="treeview-menu">
			    <li><a href="{{ url('/news_promotion/promotion')}}"><i class="fa fa-circle-o"></i> Show Promotion</a></li>
				<li><a href="{{ url('/news_promotion/create/promotion')}}"><i class="fa fa-circle-o"></i> Add Promotion</a></li>
			</ul>
		</li>

		<li class="treeview">
			<a href="#">
				<i class="fa fa-newspaper-o"></i> <span>News</span>
				<i class="fa fa-angle-left pull-right"></i>
			</a>
			<ul class="treeview-menu">
			    <li><a href="{{ url('/news_promotion/news')}}"><i class="fa fa-circle-o"></i> Show News</a></li>
				<li><a href="{{ url('/news_promotion/create/news')}}"><i class="fa fa-circle-o"></i> Add News</a></li>
			</ul>
		</li>

		<li class="treeview">
			<a href="#">
				<i class="fa fa-file-text-o"></i> <span>Pages</span>
				<i class="fa fa-angle-left pull-right"></i>
			</a>
			<ul class="treeview-menu">
			    <li><a href="{{ url('/page')}}"><i class="fa fa-circle-o"></i> Show Page</a></li>
				<li><a href="{{ url('/page/create')}}"><i class="fa fa-circle-o"></i> Add Page</a></li>
			</ul>
		</li>

		<li class="treeview">
			<a href="#">
				<i class="fa fa-bars"></i> <span>Menus</span>
				<i class="fa fa-angle-left pull-right"></i>
			</a>
			<ul class="treeview-menu">
			    <li><a href="{{ url('/menu')}}"><i class="fa fa-circle-o"></i> Show Menus</a></li>
				<li><a href="{{ url('/menu/create')}}"><i class="fa fa-circle-o"></i> Add Menu</a></li>
			</ul>
		</li>

		<li class="treeview">
			<a href="#">
				<i class="fa fa-archive"></i> <span>Services</span>
				<i class="fa fa-angle-left pull-right"></i>
			</a>
			<ul class="treeview-menu">
			    <li><a href="{{ url('/service') }}"><i class="fa fa-circle-o"></i> Show Service</a></li>
				<li><a href="{{ url('/service/create')}}"><i class="fa fa-circle-o"></i> Add Service</a></li>
			</ul>
		</li>

		<li class="treeview">
			<a href="#">
				<i class="fa fa-phone-square"></i> <span>Contact Us</span>
				<i class="fa fa-angle-left pull-right"></i>
			</a>
			<ul class="treeview-menu">
			    <li><a href="{{ url('/contactus') }}"><i class="fa fa-circle-o"></i> Show Contact Us</a></li>
			</ul>
		</li>

		<li><a href="{{ url('/aboutus/create')}}"><i class="fa fa-users"></i> <span>About Us</span></a></li>

		<li><a href="{{ url('/template')}}"><i class="fa fa-television"></i> <span>Templets</span></a></li>
		<li><a href="{{ url('/domain')}}"><i class="fa fa-share-square-o"></i> <span>Domain</span></a></li>

		<!-- <li><a href="Notification.html"><i class="fa fa-flag-o"></i> <span>Notification</span></a></li> -->

		<li class="treeview">
			<a href="#">
				<i class="fa fa-list-alt"></i> <span>Ticket</span>
				<i class="fa fa-angle-left pull-right"></i>
			</a>
			<ul class="treeview-menu">
			    <li><a href="{{ url('/ticket') }}"><i class="fa fa-circle-o"></i> Show Ticket</a></li>
				<li><a href="{{ url('/ticket/create')}}"><i class="fa fa-circle-o"></i> Add Ticket</a></li>
			</ul>
		</li>
	</ul>
	</section>
	<!-- /.sidebar -->
	</aside>