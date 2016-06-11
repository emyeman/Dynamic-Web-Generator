<!DOCTYPE html>
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
    <!-- {{ url('/assets/bootstrap-3.2.0/css/bootstrap.min.css')}} -->
    <link href="{{ url('/assets/bootstrap-3.2.0/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css"  href="{{ url('assets/Temp2/en/css/bootstrap.css') }}">
     <link rel="stylesheet" type="text/css"  href="{{ url('assets/Temp2/en/css/animate.css') }}">
    
    <link rel="stylesheet" type="text/css" href="{{ url('assets/Temp2/en/fonts/font-awesome/css/font-awesome.css') }}">

    <!-- Slider
    ================================================== -->
    <link href="{{ url('assets/Temp2/en/css/owl.carousel.css') }}" rel="stylesheet" media="screen">
    <link href="{{ url('assets/Temp2/en/css/owl.theme.css') }}" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="{{ url('assets/Temp2/en/css/style.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ url('assets/Temp2/en/css/languages.min.css') }}">

   
    
    <link rel="stylesheet" type="text/css" href="{{ url('assets/Temp2/en/css/responsive.css') }}">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="{{ url('assets/Temp2/en/js/modernizr.custom.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="{{ url('assets/Temp2/en/engine0/style.css') }}" />
	<script type="text/javascript" src="{{ url('assets/Temp2/en/engine0/jquery.js') }}"></script>
	<!-- End WOWSlider.com HEAD section --></head>
  <body>
    <!-- Navigation
    ==========================================-->

    
	

    <!--News section-->
    
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
  @if(isset($crusals))

	<div id="wowslider-container0">

	<div class="ws_images">
    <ul>
    <?php $count=0; ?>
    <?php $crusals =  array_slice($crusals, 0, 4) ?>
    @foreach($crusals as $crusal)
        <li><img src="{{ url('/assets/images/')}}{{ $crusal->image }}" alt="{{ $crusal->title }}" title="{{ $crusal->title }}" id="wows0_{{ $count }}"/></li> 
        <?php $count++; ?>  
    @endforeach

  		{{-- <li><img src="data0/images/8.jpg" alt="Welcome" title="Welcome" id="wows0_0"/></li>
  		<li><img src="data0/images/1.jpg" alt="Creating a unique look." title="Creating a unique look." id="wows0_1"/></li>
  		<li><a href="http://wowslider.com/vi"><img src="data0/images/3.jpg" alt="cssslider" title="Never been easier." id="wows0_2"/></a></li>
  		<li><img src="data0/images/5.jpg" alt="Creating a unique look." title="Creating a unique look." id="wows0_3"/></li> --}}
  	</ul>
  </div>

	<div class="ws_bullets">
  <div>
		<a href="#" title="{{ $crusals[0]->title }}"><span><img src="{{ url('assets/Temp2/en/data0/tooltips/8.jpg') }}" alt="{{ $crusals[0]->title }}"/>1</span></a>

		<a href="#" title="{{ $crusals[1]->title }}"><span><img src="{{ url('assets/Temp2/en/data0/tooltips/1.jpg') }}" alt="{{ $crusals[1]->title }}"/>2</span></a>

		<a href="#" title="{{ $crusals[2]->title }}"><span><img src="{{ url('assets/Temp2/en/data0/tooltips/3.jpg') }}" alt="{{ $crusals[2]->title }}"/>3</span></a>

		<a href="#" title="{{ $crusals[3]->title }}"><span><img src="{{ url('assets/Temp2/en/data0/tooltips/5.jpg') }}" alt="{{ $crusals[3]->title }}"/>4</span></a>
	</div>
  </div>

  <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">css slider</a> by WOWSlider.com v8.7
  </div>
	<div class="ws_shadow">
    
  </div>


	</div>	

  @endif

	<script type="text/javascript" src="{{ url('assets/Temp2/en/engine0/wowslider.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/Temp2/en/engine0/script.js') }}"></script>
	<!-- End WOWSlider.com BODY section -->

<!--start promotion-->
  <nav id="myn" class="navbar navbar-default navbar-fixed-top">
        <div>
          <marquee><p id="myadd">This is our latest news please stay with us to know more</p></marquee>  
        </div>
    </nav>
<!--end promotion-->

    <nav id="page_top" class="navbar navbar-default navbar-fixed-top">
      <div class="container" id="nav2">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          @if(isset($header))
          <a class="navbar-brand" href="index.html"><img id="mylogo" src="{{ url('/') }}{{ $header->logo }}" ></a>
          @endif
          
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#wowslider-container0" class="page-scroll">Home</a></li>
            <li><a href="#about" class="page-scroll">About</a></li>
            <li><a href="#promotion" class="page-scroll">Promotions</a></li>
            <li><a href="#services" class="page-scroll">Services</a></li>
            <li><a href="#gallery" class="page-scroll">Products</a></li>
            <li><a href="#news" class="page-scroll">News</a></li>
            <li><a href="#contact" class="page-scroll">Contact</a></li>



            <li>
    <div id="mydropdown">
   <div class="btn-group dropdown" >
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <span class="lang-sm lang-lbl" lang="en"></span> <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" >
    <li><center><span class="lang-sm lang-lbl" lang="ar"></span></center></li>
   
  </ul>
</div>
    </div>
            </li>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


    <!-- About Us Page
    ==========================================-->
    @if(isset($aboutus))

    <div id="about">
        <div class="container">
            <div class="row">
    <div class="section-title center wow fadeInDown" data-wow-delay="0.1s" >
        <h2 class="text-center"><strong>About us</strong></h2>
        <div class="line">
            <hr>
        </div>
    </div>
                <div class="col-md-6">
                    <div class="about-text wow fadeInRight" data-wow-delay="0.2s">

                        <p class="intro">{{ $aboutus->description }}</p>
                        <ul class="about-list">
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Mission</strong> - <em>We deliver uniqueness and quality</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Skills</strong> - <em>Delivering fast and excellent results</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Clients</strong> - <em>Satisfied clients thanks to our experience</em>
                            </li>
                        </ul>
                    </div>
                </div>
    <div class="col-md-6">
    <img id="myimg" src="{{ url('/assets/images/')}}{{ $aboutus->image }}" class="img-responsive wow fadeInLeft" data-wow-delay="0.2s">
    </div>
            </div>
        </div>
    </div>

   @endif

    <!-- Services Section
    ==========================================-->
    @if(isset($services))

    <div id="services" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2 class="wow bounceInRight">Take a look at <strong>our services</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                <div class="wow fadeInUp" data-wow-delay="0.1s"><small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small></div>
            </div>
            <div class="space"></div>
            <div class="row">

              <?php $services =  array_slice($services, 0, 4) ?>
               @for($i = 0; $i < count($services) ; $i++)
                 @if($i <= 1)
                  <div class="col-md-3 col-sm-6 service wow fadeInLeft" data-wow-delay="0.2s">
                      <i class="glyphicon {{ $services[$i]->icon }}"></i>
                      <h4><strong>{{ $services[$i]->title }}</strong></h4>
                      <p>{{ $services[$i]->description }}</p>
                  </div>
                  @else
                  <div class="col-md-3 col-sm-6 service wow fadeInRight" data-wow-delay="0.2s">
                      <i class="glyphicon {{ $services[$i]->icon }}"></i>
                      <h4><strong>{{ $services[$i]->title }}</strong></h4>
                      <p>{{ $services[$i]->description }}</p>
                  </div>
                  @endif
               @endfor
            </div>
        </div>
    </div>

  @endif
 <!-- promotion
    ==========================================-->

@if(isset($promotions))

 <div id="promotion" class="text-center">
        <div class="overlay">
            <div class="container">

                <div class="section-title center wow fadeInUp" >
                    <h2>Some of <strong>Promotion</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
               <div class="wow bounceInRight" >
                <div id="clients" class="owl-carousel owl-theme ">

                @foreach($promotions as $promotion)

                    <div class="item">
                        
                        <div class="panel">
                                 <div class="panel-heading">
                                     <img src="{{ url('/assets/images/')}}{{ $promotion->image }}" width="160" height="181">
                                          <div class="panel-heading">
                                            <h1 class="panel-title">Promotion</h1>
                                          </div>
                                 </div>
                            <div class="panel-body">
                               <h3><strong>{{ $promotion->title }}</strong></h3>
                                 <hr class="myline">
                                 <h3 >{{ $promotion->description }}</h3>
                                  <hr class="myline">
                                 <p ><strong>From:</strong>{{ $promotion->start_date }}</p>
                                <p ><strong>To:</strong>{{ $promotion->end_date }}</p>
                            </div>
                                </div>     
                    </div>
                    
                @endforeach

                </div>
               </div> 

            </div>
        </div>
    </div>


@endif


    <!-- Products Section
    ==========================================-->
    @if(isset($cats_and_subcats))

    <div id="gallery">
        <div class="container"> <!-- Container -->
            <div class="section-title text-center center">
               <div class="wow fadeInUp"><h2>Take a look at <strong>Our Products</strong></h2></div> 
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
               <div class="wow fadeInUp"> <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small></div>
            </div>
            <div class="space"></div>

            <div class="categories">
                
                <ul class="cat">
                  
                    <li class="pull-right wow fadeInRight">
                        <ol class="type">
                            <li> <button class="btn btn-default btn-xs" type="button" id="buton1"  ><a href="#" data-filter="*" class="active">All</a>
                            </button></li>

                              {{-- display the category and sub categories --}}

                              @foreach($cats_and_subcats as $cat_and_subcats)
                               <li>
                                  <div class="dropdown">
                                      <button class="btn btn-default btn-xs dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                          <a href="#" data-filter=".{{ $cat_and_subcats->name }}" class="active">{{ $cat_and_subcats->name }}</a>
                                          <span class="caret"></span>
                                      </button>

                                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

                                        @foreach($cat_and_subcats->subcategories as $sub)
                                              <li><a href="#" data-filter=".{{ $sub->name }}">{{ $sub->name }}</a></li>
                                        @endforeach
                                      </ul>
                                  </div>
                              </li>
                              @endforeach

                        </ol>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div id="lightbox" class="row">
                {{-- display the product here --}}
                @foreach($cats_and_subcats as $cat_and_subcats)
                  @foreach($cat_and_subcats->subcategories as $subcategory)
                    @foreach($subcategory->products as $product)

                      <div class="col-sm-6 col-md-3 col-lg-3 {{ $subcategory->name }}">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="#">
                                    <div class="hover-text">
                                        <h4 style="color:white">{{ $product->name }}</h4>
                                        <small style="color:white">{{ $product->price }}</small>
                                        <div class="clearfix"></div>
                                        <i class="fa fa-plus"></i>
                                    </div>
                                    <img src="{{ url('/assets/images') }}/{{$product->image}}" class="img-responsive" alt="...">
                                </a>
                            </div>
                        </div>
                    </div>

                    @endforeach
                  @endforeach
                @endforeach

            </div>
        </div>
    </div>
@endif



    <!-- News Section
    ==========================================-->
    @if(isset($news))

    <div id="news" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center wow bounceInDown">
                    <h2><strong>Our Latest</strong> News</h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div id="testimonial" class="owl-carousel owl-theme">
                        <?php $news  = array_slice($news, -3); ?>
                        @foreach($news as $new)
                          <div class="item wow lightSpeedIn">
                               <div class="row">
                                <div class="col-md-4 ">
                               <img src="{{ url('/assets/images/')}}{{ $new->image }}" width="300" height="236">
                            </div>
                               <div class="col-md-4 col-md-offset-2">
                                <h5>{{ $new->description }}</h5>
                                <p>Dean Martin, CEO Acme Inc.</p>
                                </div>
                            </div>
                        </div>
                        
                        @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 





  @endif

    <!-- Contact Section
    ==========================================-->
    <div id="contact" class="text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title center">
                        <h2 class="wow bounceInLeft">Feel free to <strong>contact us</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                        <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>            
                    </div>

                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Message</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        
                        <button type="submit" class="btn tf-btn btn-default">Submit</button>
                    </form>

                </div>
            </div>

        </div>
    </div>


 

@if(isset($contacts))

    <nav id="footer">
        <div class="container">
            <div class="pull-left fnav">
                <p>ALL RIGHTS RESERVED. COPYRIGHT © 2016.  </p>
            </div>
            <div class="pull-right fnav">
                <ul class="footer-social">
                        @if(!empty($contacts->facebook))
                            <li><a href="{{ $contacts->facebook }}"><i class="fa fa-facebook"></i></a></li>
                        @endif

                        @if(!empty($contacts->twitter))  
                            <li><a href="{{ $contacts->twitter }}"><i class="fa fa-twitter"></i></a></li>
                        @endif

                        @if(!empty($contacts->google_plus))    
                            <li><a href="{{ $contacts->google_plus }}"><i class="fa fa-google-plus"></i></a></li>
                        @endif

                        @if(!empty($contacts->skype))  
                            <li><a href="{{ $contacts->skype }}"><i class="fa fa-skype"></i></a></li>
                        @endif

                        @if(!empty($contacts->linkedin)) 
                            <li><a href="{{ $contacts->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
                        @endif

                        @if(!empty($contacts->youtube))  
                            <li><a href="{{ $contacts->youtube }}"><i class="fa fa-youtube"></i></a></li>
                        @endif

                        @if(!empty($contacts->flickr)) 
                            <li><a href="{{ $contacts->flickr }}"><i class="fa fa-flicker"></i></a></li>
                        @endif

                        @if(!empty($contacts->pinterest))  
                            <li><a href="{{ $contacts->pinterest }}"><i class="fa fa-pinterest"></i></a></li>
                        @endif
                </ul>
            </div>
        </div>
    </nav> 

@endif
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ url('assets/Temp2/en/js/jquery.1.11.1.js') }}"></script>
   
    <script type="text/javascript" src="{{ url('assets/Temp2/en/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/Temp2/en/js/SmoothScroll.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/Temp2/en/js/jquery.isotope.js') }}"></script>

    <script src="{{ url('assets/Temp2/en/js/owl.carousel.js') }}"></script>

     <script src="{{ url('assets/Temp2/en/js/jquery.appear.js') }}"></script>
     <script src="{{ url('assets/Temp2/en/js/wow.js') }}"></script>
    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="{{ url('assets/Temp2/en/js/main.js') }}"></script>

  </body>
</html>