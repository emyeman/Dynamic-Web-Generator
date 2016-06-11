trans('arabic_english.'.$menupages[$x])<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Template </title>

    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="{{ url('/assets/css/bootstrap.css')}}">
      <link rel="stylesheet" type="text/css"  href="{{ url('/assets/css/bootstrap.min.css')}}">
   
   
     <link rel="stylesheet" type="text/css"  href="{{ url('/assets/css/animate.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/fonts/font-awesome/css/font-awesome.css')}}">

    <!-- Slider
    ================================================== -->
    <link href="{{ url('/assets/css/owl.carousel.css')}}" rel="stylesheet" media="screen">
    <link href="{{ url('/assets/css/owl.theme.css')}}" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="{{ url('/assets/css/sahar/style.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{ url('/assets/css/languages.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/responsive.css')}}">
    <!--  <link rel="stylesheet" type="text/css"  href="css/bootstrap-rtl.css"> --> 

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="{{ url('/assets/js/modernizr.custom.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="{{ url('/assets/engine0/style.css')}}" />
	<script type="text/javascript" src="{{ url('/assets/engine0/jquery.js')}}"></script>
	<!-- End WOWSlider.com HEAD section --></head>
  <body>
    <!-- Navigation
    ==========================================-->
<?php  
    $findpage_top=0;
    $findservices=0;
    $findabout=0;
    $findgallery=0;
    $findnews=0;
    $findpromotion=0;
    $findcontact=0;
    $myservices='';
    $mypage_top='';
    $myabout='';
    $mycontact='';
    $mynews='';
    $mypromotion='';
    $mygallery='';
?>
    
	

    <!--News section-->
    
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="page_top">
	<div class="ws_images"><ul>
		<li><img src="data0/images/8.jpg" alt="Welcome" title="مرحبا" id="wows0_0"/></li>
		<li><img src="data0/images/1.jpg" alt="Creating a unique look." title="يوجد لدينا احدث التصميمات" id="wows0_1"/></li>
		<li><a href="http://wowslider.com/vi"><img src="data0/images/3.jpg" alt="cssslider" title="انتظروا المزيد" id="wows0_2"/></a></li>
		<li><img src="data0/images/5.jpg" alt="Creating a unique look." title="يوجد لدينا احدث التصميمات" id="wows0_3"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="مرحبا"><span><img src="data0/tooltips/8.jpg" alt="مرحبا"/>1</span></a>
		<a href="#" title="يوجد لدينا احدث التصميمات"><span><img src="data0/tooltips/1.jpg" alt="يوجد لدينا احدث التصميمات"/>2</span></a>
		<a href="#" title="انتظروا المزيد"><span><img src="data0/tooltips/3.jpg" alt="انتظروا المزيد"/>3</span></a>
		<a href="#" title="يوجد لدينا احدث التصميمات"><span><img src="data0/tooltips/5.jpg" alt="يوجد لدينا احدث التصميمات"/>4</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">css slider</a> by WOWSlider.com v8.7</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="{{ url('/assets/engine0/wowslider.js')}}"></script>
	<script type="text/javascript" src="{{ url('/assets/engine0/script.js')}}"></script>
	<!-- End WOWSlider.com BODY section --><nav id="myn" class="navbar navbar-default navbar-fixed-top">
        <div>
          <marquee><p id="myadd">لدينا افضل العروض واحدث المواقع إضافة إلى نشرة إعلانية وخدمات تحريرية أخري</p></marquee>
        </div>
    </nav>
    <!--End of news-->

    <nav id="page_top" class="navbar navbar-default navbar-fixed-top">
      <div class="container" id="nav2">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header navbar-right">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img id="mylogo" src="1.png" ></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">

            <li>
                        
          <div class="btn-group dropdown" >
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><a href="{{url('/'.$subdomain.'/ar')}}"><span class="lang-sm lang-lbl" lang="ar"></span></a>
          </button>
          <ul class="dropdown-menu" >
            <li><a href="{{url('/'.$subdomain.'/en')}}"><span class="lang-sm lang-lbl" lang="en"></span></a></li>
          </ul>
        </div>

        @for ($x = 0; $x < count($urlpages); $x++)

            @if($urlpages[$x]=='page_top')
              <li>
                  <a class="page-scroll droid-arabic-kufi" href="#{{$urlpages[$x]}}">{{trans('arabic_english.'.$menupages[$x])}}</a>
              </li>
              <?php $findpage_top=1;
              $mypage_top=trans('arabic_english.'.$menupages[$x]);?>
            @endif 
            @if($urlpages[$x]=='services')
                <li>
                    <a class="page-scroll droid-arabic-kufi" href="#{{$urlpages[$x]}}">{{trans('arabic_english.'.$menupages[$x])}}</a>
                </li>
                <?php $findservices=1;
                $myservices=trans('arabic_english.'.$menupages[$x]);?>
            @endif
            @if($urlpages[$x]=='about')
                <li>
                    <a class="page-scroll droid-arabic-kufi" href="#{{$urlpages[$x]}}">{{trans('arabic_english.'.$menupages[$x])}}</a>
                </li>
                <?php $findabout=1;
                 $myabout=trans('arabic_english.'.$menupages[$x]);?>
            @endif
            @if($urlpages[$x]=='gallery')
                <li>
                  <a class="page-scroll droid-arabic-kufi" href="#{{$urlpages[$x]}}">{{trans('arabic_english.'.$menupages[$x])}}</a>
                </li>
                <?php $findgallery=1;
                $mygallery=trans('arabic_english.'.$menupages[$x]);?>
            @endif
            @if($urlpages[$x]=='news')
                <li>
                    <a class="page-scroll droid-arabic-kufi" href="#{{$urlpages[$x]}}">{{trans('arabic_english.'.$menupages[$x])}}</a>
                </li>
                <?php $findnews=1;
                $mynews=trans('arabic_english.'.$menupages[$x]);?>
            @endif
            @if($urlpages[$x]=='promotion')
                <li>
                    <a class="page-scroll droid-arabic-kufi" href="#{{$urlpages[$x]}}">{{trans('arabic_english.'.$menupages[$x])}}</a>
                </li>
                <?php $findpromotion=1;
                $mypromotion=trans('arabic_english.'.$menupages[$x]);?>
            @endif
            @if($urlpages[$x]=='contact')
                <li>
                    <a class="page-scroll droid-arabic-kufi" href="#{{$urlpages[$x]}}">{{trans('arabic_english.'.$menupages[$x])}}</a>
                </li>
                 <?php $findcontact=1;
                 $mycontact=trans('arabic_english.'.$menupages[$x]);?>
            @endif    
             @endfor



          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


    <!-- About Us Page
    ==========================================-->
    <div id="about">
        <div class="container">
            <div class="row">
    <div class="section-title center wow fadeInDown" data-wow-delay="0.1s" >
        <h2 class="text-center"><strong>من نحن</strong></h2>
        <div class="line">
            <hr>
        </div>
    </div>
                <div class="col-md-6">
                    <img id="myimg" src="img/02.jpg" class="img-responsive wow fadeInLeft" data-wow-delay="0.2s">
                </div>
                <div class="col-md-6">
                    <div class="about-text wow fadeInRight" data-wow-delay="0.2s">

                        <p class="intro">باقة كاملة ذات مزايا متنوعة في حالة رعاية قسم خاص من الموقع يكون مرتبطا بالنشاط التجاري للراعي، يتم إعادة تصميم القسم بحيث يتناسب مع الألوان والتصميمات الخاصة بالشعار والعلامة التجارية للراعي، كما يحتكر كل المساحات الإعلانية في هذا القسم، إضافة إلى نشرة إعلانية وخدمات تحريرية أخرى.</p>
                        <ul class="about-list">
                            <li>

                                <strong>مهمتنا</strong> - <em>كما يحتكر كل المساحات الإعلانية في هذا القسم</em>
                                <span class="fa fa-dot-circle-o"></span>
                            </li>
                            <li>

                                <strong>القدرات</strong> - <em>كما يحتكر كل المساحات الإعلانية في هذا القسم</em>
                                <span class="fa fa-dot-circle-o"></span>
                            </li>
                            <li>

                                <strong>العملاء</strong> - <em>كما يحتكر كل المساحات الإعلانية في هذا القسم و الي الاضافه.</em>
                                <span class="fa fa-dot-circle-o"></span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

   

    <!-- Services Section
    ==========================================-->
    <div id="services" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2 class="wow bounceInRight"> <strong>الخدمات</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                <div class="wow fadeInUp" data-wow-delay="0.1s"><small><em>باقة كاملة ذات مزايا متنوعة في حالة رعاية قسم خاص من الموقع يكون مرتبطا بالنشاط التجاري للراعي،</em></small></div>
            </div>
            <div class="space"></div>
            <div class="row">
                <div class="col-md-3 col-sm-6 service wow fadeInLeft" data-wow-delay="0.2s">
                    <i class="fa fa-desktop"></i>
                    <h4><strong>التصميم الالكتروني</strong></h4>
                    <p>باقة كاملة ذات مزايا متنوعة في حالة رعاية قسم خاص من الموقع يكون مرتبطا بالنشاط التجاري للراعي،</p>
                </div>

                <div class="col-md-3 col-sm-6 service wow fadeInLeft" data-wow-delay="0.2s">
                    <i class="fa fa-mobile"></i>
                    <h4><strong>تطبيقات الهاتف</strong></h4>
                    <p>باقة كاملة ذات مزايا متنوعة في حالة رعاية قسم خاص من الموقع يكون مرتبطا بالنشاط التجاري للراعي،</p>
                </div>

                <div class="col-md-3 col-sm-6 service wow fadeInRight" data-wow-delay="0.2s">
                    <i class="fa fa-camera"></i>
                    <h4><strong>الفتوجرافي</strong></h4>
                    <p>باقة كاملة ذات مزايا متنوعة في حالة رعاية قسم خاص من الموقع يكون مرتبطا بالنشاط التجاري للراعي،</p>
                </div>

                <div class="col-md-3 col-sm-6 service wow fadeInRight" data-wow-delay="0.2s">
                    <i class="fa fa-bullhorn"></i>
                    <h4><strong>التسويق</strong></h4>
                    <p>باقة كاملة ذات مزايا متنوعة في حالة رعاية قسم خاص من الموقع يكون مرتبطا بالنشاط التجاري للراعي</p>
                </div>
            </div>
        </div>
    </div>

  

     <!-- promotion Section
    ==========================================-->
  <div id="promotion" class="text-center">
        <div class="overlay">
            <div class="container">

                <div class="section-title center wow fadeInUp" >
                    <h2> <strong>العروض</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
                <div class="wow bounceInRight">
                <div id="clients" class="owl-carousel owl-theme ">
                    <div class="item">
                            <div class="panel">
                       <div class="panel-heading">
                                     <img src="sale.png" width="160" height="181">
                                          <div class="panel-heading">
                                            <h1 class="panel-title">عروض الخصم</h1>
                                          </div>
                                 </div>
                            <div class="panel-body">
                               <h3>خصومات علي جميع المنتجات</h3>
                                 <hr class="myline">
                                 <h3 ><sup>$</sup>9.99</h3>
                                  <hr class="myline">
                                 <p >كل شهر</p>
                                <p >خصومات جديده</p>
                            </div>
                                </div>
                    </div>
                    <div class="item">
                            <div class="panel">
                       <div class="panel-heading">
                                     <img src="sale.png" width="160" height="181">
                                          <div class="panel-heading">
                                            <h1 class="panel-title">عروض الخصم</h1>
                                          </div>
                                 </div>
                            <div class="panel-body">
                               <h3>خصومات علي جميع المنتجات</h3>
                                 <hr class="myline">
                                 <h3 ><sup>$</sup>9.99</h3>
                                  <hr class="myline">
                                 <p >كل شهر</p>
                                <p >خصومات جديده</p>
                            </div>
                                </div>
                    </div>
                    <div class="item">
                            <div class="panel">
                       <div class="panel-heading"  style="background-color: #09ab9b;">
                                     <img src="sale.png" width="160" height="181">
                                          <div class="panel-heading"  style="background-color: #09ab9b;">
                                            <h1 class="panel-title">عروض الخصم</h1>
                                          </div>
                                 </div>
                            <div class="panel-body">
                               <h3>خصومات علي جميع المنتجات</h3>
                                 <hr class="myline">
                                 <h3 ><sup>$</sup>9.99</h3>
                                  <hr class="myline">
                                 <p >كل شهر</p>
                                <p >خصومات جديده</p>
                            </div>
                                </div>
                    </div>
                    <div class="item">
                            <div class="panel">
                       <div class="panel-heading">
                                     <img src="sale.png" width="160" height="181">
                                          <div class="panel-heading">
                                            <h1 class="panel-title">عروض الخصم</h1>
                                          </div>
                                 </div>
                            <div class="panel-body">
                               <h3>خصومات علي جميع المنتجات</h3>
                                 <hr class="myline">
                                 <h3 ><sup>$</sup>9.99</h3>
                                  <hr class="myline">
                                 <p >كل شهر</p>
                                <p >خصومات جديده</p>
                            </div>
                                </div>
                    </div>
                    <div class="item">
                           <div class="panel">
                       <div class="panel-heading">
                                     <img src="sale.png" width="160" height="181">
                                          <div class="panel-heading">
                                            <h1 class="panel-title">عروض الخصم</h1>
                                          </div>
                                 </div>
                            <div class="panel-body">
                               <h3>خصومات علي جميع المنتجات</h3>
                                 <hr class="myline">
                                 <h3 ><sup>$</sup>9.99</h3>
                                  <hr class="myline">
                                 <p >كل شهر</p>
                                <p >خصومات جديده</p>
                            </div>
                                </div>
                    </div>
                    <div class="item">
                            <div class="panel">
                       <div class="panel-heading">
                                     <img src="sale.png" width="160" height="181">
                                          <div class="panel-heading">
                                            <h1 class="panel-title">عروض الخصم</h1>
                                          </div>
                                 </div>
                            <div class="panel-body">
                               <h3>خصومات علي جميع المنتجات</h3>
                                 <hr class="myline">
                                 <h3 ><sup>$</sup>9.99</h3>
                                  <hr class="myline">
                                 <p >كل شهر</p>
                                <p >خصومات جديده</p>
                            </div>
                                </div>
                    </div>
                    <div class="item">
                           <div class="panel">
                       <div class="panel-heading">
                                     <img src="sale.png" width="160" height="181">
                                          <div class="panel-heading">
                                            <h1 class="panel-title">عروض الخصم</h1>
                                          </div>
                                 </div>
                            <div class="panel-body">
                               <h3>خصومات علي جميع المنتجات</h3>
                                 <hr class="myline">
                                 <h3 ><sup>$</sup>9.99</h3>
                                  <hr class="myline">
                                 <p >كل شهر</p>
                                <p >خصومات جديده</p>
                            </div>
                                </div>
                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Products Section
    ==========================================-->
    <div id="gallery">
        <div class="container"> <!-- Container -->
            <div class="section-title text-center center">
               <div class=" wow tada" data-wow-delay="0.1s"><h2> <strong>المنتجات</strong></h2></div>
                <div class="line">
                    <hr> </div>
                </div>
                <div class="clearfix"></div>
               <!--<div class="wow fadeInUp"> <small><em></div>-->
            <div class="space"></div>

            <div class="categories">
                
                <ul class="cat">

                    <li class="pull-right wow fadeInRight">
                        <ol class="type">

                            <li> <button class="btn btn-default btn-xs" type="button" id="buton1"  ><a href="#" data-filter="*" class="active">All</a>
                            </button></li>
                            <li>
                                <div class="dropdown">
                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <a href="#" data-filter=".web" class="active">الموقع الالكتروني</a>
                                        <span class="caret"></span>
                                    </button>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#" data-filter=".web">الموقع الاول</a></li>
                                        <li><a href="#" data-filter=".web">الموقع الثاني</a></li>
                                        <li><a href="#" data-filter=".web">الموقع الثالث</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li>

                                <div class="dropdown">
                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <a href="#" data-filter=".photography" class="active">التصوير الفوتوجرافي</a>
                                        <span class="caret"></span>
                                    </button>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#" data-filter=".photography">التصوير الفوتوجرافي 1</a></li>
                                        <li><a href="#" data-filter=".photography">التصوير الفوتوجرافي 2</a></li>
                                        <li><a href="#" data-filter=".photography">التصوير الفوتوجرافي 3</a></li>

                                    </ul>
                                </div>

                            </li>
                            <li>

                                <div class="dropdown">
                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <a href="#" data-filter=".app" class="active">التطبيقات الالكترونيه</a>
                                        <span class="caret"></span>
                                    </button>


                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#" data-filter=".app"> التطبيقات الالكترونيه 1</a></li>
                                        <li><a href="#" data-filter=".app">التطبيقات الالكترونيه 2</a></li>
                                        <li><a href="#" data-filter=".app">التطبيقات الالكترونيه 3</a></li>

                                    </ul>
                                </div>

                            </li>
                            <li>
                                <div class="dropdown">
                                    <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">

                                        <a href="#" data-filter=".branding" class="active">العلامات التجاريه</a>
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#" data-filter=".branding">العلامات التجاريه 1</a></li>
                                        <li><a href="#" data-filter=".branding">العلامات التجاريه 2</a></li>
                                        <li><a href="#" data-filter=".branding">العلامات التجاريه 3</a></li>

                                    </ul>
                                </div>
                            </li>
                        </ol>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div id="lightbox" class="row">

                <div class="col-sm-6 col-md-3 col-lg-3 branding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/01.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 photography app">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/02.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 branding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/03.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 branding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/04.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 web">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/05.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 app">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/06.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 photography web">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/07.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 web">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/08.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- News Section
    ==========================================-->
    <div id="news" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center wow bounceInDown">
                    <h2><strong></strong> الاخبار</h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div id="testimonial" class="owl-carousel owl-theme">
                            <div class="item wow lightSpeedIn">
                               <div class="row">
                                <div class="col-md-4 ">
                               <img src="news.png" width="300" height="236">
                            </div>
                               <div class="col-md-4 col-md-offset-2">
                                <h5>باقة كاملة ذات مزايا متنوعة في حالة رعاية قسم خاص من الموقع يكون مرتبطا بالنشاط التجاري للراعي،باقة كاملة ذات مزايا متنوعة في حالة رعاية قسم خاص من الموقع يكون مرتبطا بالنشاط التجاري للراعي،</h5>
                                <p><strong>Dean Martin</strong>, CEO Acme Inc.</p>
                            </div>
                           
                            </div>
                        </div>
                            <div class="item wow lightSpeedIn">
                               <div class="row">
                                <div class="col-md-4 ">
                               <img src="news.png" width="300" height="236">
                            </div>
                               <div class="col-md-4 col-md-offset-2">
                                <h5>باقة كاملة ذات مزايا متنوعة في حالة رعاية قسم خاص من الموقع يكون مرتبطا بالنشاط التجاري للراعي،باقة كاملة ذات مزايا متنوعة في حالة رعاية قسم خاص من الموقع يكون مرتبطا بالنشاط التجاري للراعي،</h5>
                                <p><strong>Dean Martin</strong>, CEO Acme Inc.</p>
                            </div>
                           
                            </div>
                        </div>

                            <div class="item wow lightSpeedIn">
                               <div class="row">
                                <div class="col-md-4 ">
                               <img src="news.png" width="300" height="236">
                            </div>
                               <div class="col-md-4 col-md-offset-2">
                                <h5>باقة كاملة ذات مزايا متنوعة في حالة رعاية قسم خاص من الموقع يكون مرتبطا بالنشاط التجاري للراعيباقة كاملة ذات مزايا متنوعة في حالة رعاية قسم خاص من الموقع يكون مرتبطا بالنشاط التجاري للراعي،.</h5>
                                <p><strong>Dean Martin</strong>, CEO Acme Inc.</p>
                            </div>
                           
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <!-- Contact Section
    ==========================================-->
    <div id="contact" class="text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title center">
                        <h2 class="wow bounceInLeft"> <strong>للاتصال بنا</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                        <small><em>باقة كاملة ذات مزايا متنوعة في حالة رعاية قسم خاص من الموقع يكون مرتبطا بالنشاط التجاري للراعي،" (باقة كاملة ذات مزايا متنوعة في حالة رعاية قسم خاص من الموقع يكون مرتبطا بالنشاط التجاري للراعي،</em></small>
                    </div>

                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">كلمه السر</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="الرمز السري">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">البريد الالكتروني</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ادخل بريدك">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">الرساله</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        
                        <button type="submit" class="btn tf-btn btn-default">ارسال</button>
                    </form>

                </div>
            </div>

        </div>
    </div>


 



    <nav id="footer">
        <div class="container">
            <div class="pull-left fnav">
                <p>2016  © حقوق الملكيه الفكريه محفوظه لعام  </p>
            </div>
            <div class="pull-right fnav">
                <ul class="footer-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <!--<li><a href="#"><i class="fa fa-vimeo"></i></a></li>-->
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </nav> 


   
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <script type="text/javascript" src="{{ url('/assets/js/jquery.1.11.1.js')}}"></script>
   
    <script type="text/javascript" src="{{ url('/assets/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{ url('/assets/js/SmoothScroll.js')}}"></script>
    <script type="text/javascript" src="{{ url('/assets/js/jquery.isotope.js')}}"></script>

    <script src="{{ url('/assets/js/owl.carousel.js')}}"></script>

     <script src="{{ url('/assets/js/jquery.appear.js')}}"></script>
     <script src="{{ url('/assets/js/wow.js')}}"></script>
    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="{{ url('/assets/js/main.js')}}"></script>

  </body>
</html>