<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<head>
  <!-- Basic -->
  <title>KICKCUBE</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  
  <link rel="stylesheet" href="{{ url('assets/bootstrap-3.2.0/css/bootstrap.min.css') }}" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{ url('assets/kickcube/en/css/font-awesome.min.css') }}" type="text/css" media="screen">

  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="{{ url('assets/kickcube/en/css/slicknav.css') }}" media="screen">

  <!-- KICKCUBE CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="{{ url('assets/kickcube/en/css/style.css') }}" media="screen">

  <!-- languages CSS Styles  -->
   <link rel="stylesheet" type="text/css"  href="{{ url('assets/kickcube/en/css/languages.min.css') }}">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="{{ url('assets/kickcube/en/css/responsive.css') }}" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="{{ url('assets/kickcube/en/css/animate.css') }}" media="screen">

  <!-- Color CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="{{ url('assets/kickcube/en/css/colors/red.css') }}" title="red" media="screen" />


  <!-- KICKCUBE JS  -->
  <script type="text/javascript" src="{{ url('assets/kickcube/en/js/jquery-2.1.4.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/en/js/jquery.migrate.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/en/js/modernizrr.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/en/asset/js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/en/js/jquery.fitvids.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/en/js/owl.carousel.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/en/js/nivo-lightbox.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/en/js/jquery.isotope.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/en/js/jquery.appear.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/en/js/count-to.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/en/js/jquery.textillate.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/en/js/jquery.lettering.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/en/js/jquery.easypiechart.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/en/js/jquery.nicescroll.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/en/js/jquery.parallax.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/en/js/mediaelement-and-player.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/kickcube/en/js/jquery.slicknav.js') }}"></script>
  


  <style type="text/css" media="screen">
    .primary
    {
      background-color:{{ $mysite[0]->primary_color }}; 
    }

    .navbar-default .navbar-nav > li > a.active, .navbar-default .navbar-nav > li:hover > a 
    {
    border-color: {{ $mysite[0]->primary_color }};
    }

    .navbar-default .navbar-nav > li:hover > a, .navbar-default .navbar-nav > li > a.active
    {
    color: {{ $mysite[0]->primary_color }};
    }

    a.main-button, input[type="submit"] {
    background-color: {{ $mysite[0]->primary_color }};
    }

    .classic-title span {
    border-bottom-color: {{ $mysite[0]->primary_color }};
    }

    .primary-text
    {
      color:{{ $mysite[0]->text_color }};
    }

    .btn-system.border-btn {
        border-color: {{ $mysite[0]->primary_color }};
        color: {{ $mysite[0]->primary_color }};
    }
  </style>

  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>

  <!-- Full Body Container -->
  <div id="container">


    <!-- Start Header Section -->
    <div class="hidden-header"></div>
    <header class="clearfix">

      <!-- Start Top Bar -->
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <!-- Start Contact Info -->
              @if(isset($header))
              <img alt="" src="{{ url('/') }}{{ $header->logo }}">
              <!-- End Contact Info -->
              @endif
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-5">
              <!-- Start Social Links -->
              <ul class="social-list">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a class="dribbble itl-tooltip" data-placement="bottom" title="Dribble" href="#"><i class="fa fa-dribbble"></i></a>
                </li>
                <li>
                  <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a class="flickr itl-tooltip" data-placement="bottom" title="Flickr" href="#"><i class="fa fa-flickr"></i></a>
                </li>
                <li>
                  <a class="tumblr itl-tooltip" data-placement="bottom" title="Tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                </li>
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a class="vimeo itl-tooltip" data-placement="bottom" title="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
                </li>
                <li>
                  <a class="skype itl-tooltip" data-placement="bottom" title="Skype" href="#"><i class="fa fa-skype"></i></a>
                </li>
              </ul>
              <!-- End Social Links -->
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .top-bar -->
      <!-- End Top Bar -->


      <!-- Start  Logo & Naviagtion  -->
    
      <div class="navbar navbar-default navbar-top">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
             @if(isset($header))
            <a class="navbar-brand" href="index.html">
              <img alt="" src="{{ url('/') }}{{ $header->logo }}">
            </a>
            @endif
          </div>
          <div class="navbar-collapse collapse">
    


            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a  href="#page_top" class="primary-link page-scroll">Home</a>
              </li>
              <li>
                <a href="#about" class="page-scroll">About</a>
              </li>
              <li>
                <a href="#services" class="page-scroll">Services</a>
              </li>
              <li>
                <a href="#gallery" class="page-scroll">Gallery</a>
              </li>
              <li>
                <a href="#news" class="page-scroll">News</a>
              </li>
              <li>
                <a href="#promotion" class="page-scroll">Promotion</a>
              </li>
              <li><a href="#contact" class="page-scroll">Contact</a>
              </li>
                <li>
                <a  href="{{ url('/') }}/{{ explode("/",\Request::path(), 2)[0] }}/en"><span class="lang-sm lang-lbl" lang="en"></span> <span class="caret"></span></a>
                <ul class="dropdown">
                  <li>
                    <a href="{{ url('/') }}/{{ explode("/",\Request::path(), 2)[0] }}/ar">
                  <span class="lang-sm lang-lbl" lang="ar"></span>
                  </a>
                  </li>
               </ul>
              </li>

          </ul>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li>
              <a class="active" href="#page_top">Home</a>
              </li>
              <li>
                <a href="#about" class="page-scroll">About</a>
              </li>
              <li>
                <a href="#services" class="page-scroll">Services</a>
              </li>
              <li>
                <a href="#gallery" class="page-scroll">Gallery</a>
              </li>
              <li>
                <a href="#news" class="page-scroll">News</a>
              </li>
              <li>
                <a href="#promotion" class="page-scroll">Promotion</a>
              </li>
              <li><a href="#contact" class="page-scroll">Contact</a>
              </li>

              <li>

                <a  href="{{ url('/') }}{{ explode("/",\Request::path(), 2)[0] }}/en"><span class="lang-sm lang-lbl" lang="en"></span> <span class="caret"></span></a>
                <ul class="dropdown">
                 <li>
                  <a href="{{ url('/') }}{{ explode("/",\Request::path(), 2)[0] }}/ar">
                  <span class="lang-sm lang-lbl" lang="ar"></span>
                  </a>
                 </li>
               </ul>
              </li>
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header Logo & Naviagtion -->
      
    </header>
    <!-- End Header Section -->


    <!-- Start page_top Page Slider -->
     @if(isset($crusals))
    <section id="page_top">
      <!-- Carousel -->
     
      <div id="main-slide" class="carousel slide" data-ride="carousel">
        <?php $crusals =  array_slice($crusals, 0, 3) ?>
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
          <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
          <?php $count=0; ?>
          

          @foreach($crusals as $crusal)
            @if($count == 0)
              <div class="item active">
                <img class="img-responsive" src="{{ url('/assets/images/')}}{{ $crusal->image }}" alt="slider">
                <div class="slider-content">
                  <div class="col-md-12 text-center">
                    <h2 class="animated2">
                                  <span>Welcome to <strong class="primary-text">{{ $crusal->title }}</strong></span>
                                  </h2>
                    <h3 class="animated3">
                                    <span>{{ $crusal->description }}</span>
                                  </h3>
                    <p class="animated4"><a href="#" class="primary slider btn btn-system btn-large">Check Now</a>
                    </p>
                  </div>
                </div>
              </div>
              @else
              <div class="item">
                <img class="img-responsive" src="{{ url('/assets/images/')}}{{ $crusal->image }}" alt="slider">
                <div class="slider-content">
                  <div class="col-md-12 text-center">
                    <h2 class="animated2">
                                  <span>Welcome to <strong class="primary-text">{{ $crusal->title }}</strong></span>
                                  </h2>
                    <h3 class="animated3">
                                    <span>{{ $crusal->description }}</span>
                                  </h3>
                    <p class="animated4"><a href="#" class="primary slider btn btn-system btn-large">Check Now</a>
                    </p>
                  </div>
                </div>
              </div>
              @endif
          <?php $count++; ?>
          @endforeach
          <!--/ Carousel item end -->
        </div>
        <!-- Carousel inner end-->
        <!-- Controls -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
          <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
          <span><i class="fa fa-angle-right"></i></span>
        </a>
      </div>

      
      <!-- /carousel -->
    </section>
    @endif
    <!-- End page_top Page Slider -->


  <!-- Start Full Width Section 2 -->
  @if(isset($aboutus))

  <div id="about">
      <div class="section" style="padding-top:60px; padding-bottom:60px; border-top:1px solid #eee; border-bottom:1px solid #eee; background:#f9f9f9;">
        <div class="container">

          <div class="row">

            <!-- Start Left Side -->
            <div class="col-md-6" data-animation="fadeInUp">

              <!-- Start Big Heading -->
              <div class="big-title">
                <h1><strong class="primary-text">About Us</strong> </h1>
                <p class="title-desc">Some Words About Our Company</p>
              </div>
              <!-- End Big Heading -->

              <!-- Some Text -->
              <p>{{ $aboutus->description }}</p>

              <!-- Divider -->
              <div class="hr1" style="margin-bottom:14px;"></div>

              <!-- Start Icons Lists -->
              
              <!-- End Icons Lists -->

              <!-- Divider -->
              <div class="hr1" style="margin-bottom:20px;"></div>

              <!-- Button -->
              <a class="primary btn-system btn-small" data-toggle="modal" href="#aboutmodal">Read More About Us</a>
            </div>
            <!-- End Left Side -->

            <!-- Vimeo Iframe -->
            <div class="col-md-6" data-animation="fadeInDown">
              
                                <div class="img1">
                                    <figure><img class="img-responsive" src="{{ url('/assets/images/')}}{{ $aboutus->image }}" alt="image"></figure> 
                                </div>
                                <div class="img2">
                                    <figure><img class="img-responsive" src="{{ url('/assets/images/')}}{{ $aboutus->image }}" alt="image"></figure>
                                </div>
            </div>

          </div>

        </div>
      </div>
      </div>

      <div class="modal fade" id="aboutmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">About Us</h4>
                    </div>
                    <div class="modal-body">
                      <p><img class="img-responsive" src="{{ url('/assets/images/')}}{{ $aboutus->image }}" alt="" ></p><br>
                      <p>{{ $aboutus->description }}   </p><br>
                      <p><b><a href="#" class="primary">Visit Site</a></b></p>
                    </div>
                    <div class="modals-footer">
                      <button type="button" class="primary btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
      @endif
      <!-- End Full Width Section 2 -->











    <!-- Start Services Section -->
    @if(isset($services))
        <div class="row" id="services">
          <div class="col-md-10 col-md-offset-1">
            <!-- Start Services Carousel -->
            <div class="our-services">

              <div class="big-title text-center" data-animation="fadeInUp">
                <h1><strong class="primary-text">Our Services</strong> </h1>
                <p class="title-desc">Some Words About Our Services</p>
              </div> 

              <!-- Classic Heading -->
              <h4 class="classic-title"><span>Take a look at our Services</span></h4>

              <div class="services-carousel custom-carousel touch-carousel" data-appeared-items="4">


                <!-- Client 1 -->
        @foreach($services as $service)

        <div class="service-item item">         
          <!-- Start Service Icon 2 -->
          <div class="service-box service-center">
            <div class="service-boxed">
              <div class="service-icon" style="margin-top:-25px;">
                <i class="glyphicon {{ $service->icon }} icon-medium-effect icon-effect-2"></i>
              </div>
              <div class="service-content">
                <h4>{{ $service->title }}</h4>
                <p>{{ $service->description }}</p>
              </div>
            </div>
          </div>
          <!-- End Service Icon 2 -->
          </div>
          @endforeach
              </div>
            </div>
            <!--End services Carousel-->
          </div>
         
        </div>
@endif
    <!-- End Content -->
    <!-- End Services Section -->


    <!-- Start Purchase Section -->
    <div id="mypro">
    <div class="section purchase">
      <div class="container">

        <!-- Start Video Section Content -->
        <div class="section-video-content text-center">

          <!-- Start Animations Text -->
          <h1 class="fittext wite-text uppercase tlt">
                      <span class="texts">
                        <span>Modern</span>
                        <span>Clean</span>
                        <span>Awesome</span>
                        <span>Cool</span>
                        <span>Great</span>
                      </span>
            KICKCUBE Template is Ready for <br/>Business, Agency <strong>or</strong> Creative Portfolios
                    </h1>
          <!-- End Animations Text -->


          <!-- Start Buttons -->
          <a href="#" class="primary btn-system btn-large"><i class="fa fa-tasks"></i> Check Out Features</a>
          <a href="#" class="primary btn-system btn-large btn-wite"><i class="fa fa-download"></i> Purchase This Now</a>

        </div>
        <!-- End Section Content -->

      </div>
      <!-- .container -->
    </div>
    </div>
    <!-- End Purchase Section -->


    <!-- Start Portfolio Section -->
      @if(isset($cats_and_subcats))

    <div id="gallery">

    <div class="section full-width-portfolio" style="border-top:0; border-bottom:0; background:#fff;">

      <!-- Start Big Heading -->
      <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01">
        <h1>This is Our Latest <strong class="primary-text">Work</strong></h1>
      </div>
      <!-- End Big Heading -->

      <p class="text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
        <br/>veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>


      <!-- Start Recent Projects Carousel -->
   
        <div class="container"> <!-- Container -->
            
            <div class="space"></div>

            <div class="categories">
                
                <ul class="cat">
                  
                    <li class="pull-left wow fadeInRight">
                        <ol class="type">

                            <li>
                             <div>
                                    <button class="btn-system btn-medium border-btn dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <a href="#" data-filter="*" class="active">All Catgeory</a>
                                   
                                    </button>

                                </div> 
                                </li>

                          @foreach($cats_and_subcats as $cat_and_subcats)
                            <li>
                                <div class="dropdown">
                                    <button class="btn-system btn-medium border-btn dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <a href="#" data-filter=".web" class="active">{{ str_replace(' ', '', $cat_and_subcats->name) }}</a>
                                        <span class="caret"></span>
                                    </button>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    @foreach($cat_and_subcats->subcategories as $sub)
                                        <li><a href="#" data-filter=".{{ $sub->name }}">{{ str_replace(' ', '', $sub->name) }}</a></li>
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

              @foreach($cats_and_subcats as $cat_and_subcats)
                  @foreach($cat_and_subcats->subcategories as $subcategory)
                    @foreach($subcategory->products as $product)

                <div class="col-sm-6 col-md-3 col-lg-3 {{ $subcategory->name }}">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                 <a class="lightbox" title="This is an image title" href="img/portfolio/1.jpg" data-lightbox-gallery="gallery1">
                                <div class="hover-text">
                                    <h4>{{ $product->name }}</h4>
                                    <small>{{ $product->price }}</small>
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
      <!-- End Recent Projects Carousel -->
    </div>
    @endif
    <!-- End Portfolio Section -->


    <!-- Start News Section -->  
    @if(isset($news))
    <div id="news">
     <div class="section" style="padding-top:60px; padding-bottom:60px; border-top:1px solid #eee; border-bottom:1px solid #eee; background:#f9f9f9;">
      <div class="container">
         <div class="big-title text-center" data-animation="fadeInDown" >
                <h1><strong class="primary-text">Our News</strong> </h1>
                <p class="title-desc">Some Words About Our Latest news</p>
              </div>   
      
        <div class="row">
          <div class="col-md-8 col-md-offset-2" data-animation="fadeInUp">

            <!-- Start Recent Posts Carousel -->
            <div class="latest-posts">
              <h4 class="classic-title"><span>Latest News</span></h4>
              <div class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="2">

                <!-- Posts 1 -->
                 @foreach($news as $new)

                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">28</span><span class="month">Dec</span></div>
                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                  </div>
                  <h3 class="post-title"><a href="#">{{ $new->title }}  </a></h3>
                  <div class="post-content">
                    <p>{{ $new->description }}    
                  <button type="button" class="primary btn btn-default btn-sm read-more" data-toggle="modal" href="#myModal">Read More... </button></p>
                  </div>
                </div>
                @endforeach
        
              </div>
            </div>
            </div>

                 @foreach($news as $new)
           <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">{{ $new->title }}</h4>
                    </div>
                    <div class="modal-body">
                      <p><img class="img-responsive" src="{{ url('/assets/images/')}}{{ $new->image }}" alt="" ></p><br>
                      <p>{{ $new->description }}    </p><br>
                      <p><b><a href="#" class="primary">Visit Site</a></b></p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="primary btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
              @endforeach
    </div>
            </div>
             </div>
             </div>
             @endif
            <!-- End Recent Posts Carousel -->


    <!-- Start Promotions Section -->
    @if(isset($promotions))
    <div id="promotion" >
      <div class="container">
        <div class="row">

          <!-- Start Big Heading -->
          <div class="big-title text-center" data-animation="fadeInUp">
            <h1>Our Latest <strong class="primary-text">Promotions</strong></h1>
            
          </div>
          <!-- End Big Heading -->

          <!--Start Promotions Carousel-->
          <div class="our-Promotions">
            <div class="Promotions-carousel custom-carousel touch-carousel navigation-3" data-appeared-items="5" data-navigation="true">


              <!-- Promotions 1 -->
               @foreach($promotions as $promotion)
              <div class="Promotion-item item">
              <div class="pricing-tables">
                <div class="pricing-table">
              <div class="plan-name">
                <h3>{{ $promotion->title }}</h3>
              </div>
              <div class="plan-price">
                {{-- <div class="price-value">$49<span>.00</span></div>
                <div class="interval">per month</div> --}}
                <p>{{ $promotion->description }}</p>
              </div>
              <div class="plan-list">
                <ul>
                  <li><strong class="primary-text">Start Date</strong> {{ $promotion->start_date }}</li>
                  <li><strong class="primary-text">End Date</strong> {{ $promotion->end_date }}</li>
                  
                </ul>
              </div>
             
            </div>
            </div>
              </div>
              @endforeach
            

            </div>
          </div>
          <!-- End Promotion Carousel -->
        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
    </div>
    @endif
    <!-- End Promotion Section -->

    <!-- Start Footer Section -->
    <footer>
      <div class="container" id="contact">
        <div class="row footer-widgets">


          <!-- Start Subscribe & Social Links Widget -->
           @if(isset($contacts))  
          <div class="col-md-3 col-xs-12">
            <div class="footer-widget mail-subscribe-widget">
              <h4>Get in touch<span class="head-line"></span></h4>
              <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
              <form class="subscribe">
                <input type="text" placeholder="mail@example.com">
                <input type="submit" class="primary btn-system" value="Send">
              </form>
            </div>
            <div class="footer-widget social-widget">
              <h4>Follow Us<span class="head-line"></span></h4>
              <ul class="social-icons">
              @if(!empty($contacts->facebook))
                <li>
                  <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
              @endif

              @if(!empty($contacts->twitter))
              <li>
                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
              @endif

              @if(!empty($contacts->google_plus)) 
              <li>
                  <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                </li>
              @endif

              @if(!empty($contacts->skype))
              <li>
                  <a class="skype" href="#"><i class="fa fa-skype"></i></a>
                </li>
              @endif

              @if(!empty($contacts->linkedin)) 
              <li>
                  <a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
                </li>
              @endif

              @if(!empty($contacts->flickr))
              <li>
                  <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                </li>
              @endif

                              
              </ul>
            </div>
          </div>

          @endif
          <!-- .col-md-3 -->
          <!-- End Subscribe & Social Links Widget -->

           <div class="col-md-3 col-xs-12">
           <div class="footer-widget">
           <h4>Find Us<span class="head-line"></span></h4>
            <div id="map" data-position-latitude="30.04442" data-position-longitude="31.23571"></div>
           </div>
          </div>
          <!-- Start Twitter Widget -->
         <div class="col-md-3 col-xs-12 ">
          <div class="footer-widget">
         <h4>Contact Us<span class="head-line"></span></h4>
         </div>
        <form action="#" method="post" class="tm-contact-form">
          <div class="tm-contact-form-input">
            <div class="form-group">
              <input type="text" id="contact_name" class="form-control" placeholder="NAME" />
            </div>
            <div class="form-group">
              <input type="email" id="contact_email" class="form-control" placeholder="EMAIL" />
            </div>
            <div class="form-group">
              <input type="text" id="contact_subject" class="form-control" placeholder="SUBJECT" />
            </div>
            <div class="form-group">
              <textarea id="contact_message" class="form-control" rows="6" placeholder="MESSAGE"></textarea>
            </div>
            <div class="form-group">
             <!--  <button class="tm-submit-btn" type="submit" name="submit">Submit now</button>  -->
             <input type="submit" class="primary btn-system" value="Submit now" id="mysubmit">
            </div>               
          </div>
        </form>
      </div>
          <!-- End Flickr Widget -->


          <!-- Start Contact Widget -->
          <div class="col-md-3 col-xs-12">
            <div class="footer-widget contact-widget">
            @if(isset($header))
              <h4><img src="{{ url('/') }}{{ $header->logo }}" class="img-responsive" alt="Footer Logo" /></h4>
            @endif

              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              <ul>
                <li><span>Phone Number:</span> +01 234 567 890</li>
                <li><span>Email:</span> company@company.com</li>
                <li><span>Website:</span> www.yourdomain.com</li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Contact Widget -->


        </div>
        <!-- .row -->

        <!-- Start Copyright -->
        <div class="copyright-section">
          <div class="row">
            <div class="col-md-6">
              <p>&copy; 2016 kickcube - All Rights Reserved  </p>
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-6">
              <ul class="footer-nav">
                <li><a href="#">Sitemap</a>
                </li>
                <li><a href="#">Privacy Policy</a>
                </li>
                <li><a href="#">Contact</a>
                </li>
              </ul>
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- End Copyright -->

      </div>
    </footer>
    <!-- End Footer Section -->

  </div>
  <!-- End Full Body Container -->

 
  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <div id="loader">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>


 <script type="text/javascript" src="{{ url('assets/kickcube/ar/js/script.js') }}"></script>

<!-- Scrolling Nav JavaScript -->
    <script src="{{ url('assets/kickcube/ar/js/jquery.easing.min.js') }}"></script>
    <script src="{{ url('assets/kickcube/ar/js/scrolling-nav.js') }}"></script>



<script type="text/javascript" src="{{ url('assets/kickcube/ar/js/jquery.isotope.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/kickcube/ar/js/main.js') }}"></script>
<script>
      (function($) {
        $.fn.CustomMap = function(options) {

          var posLatitude = $('#map').data('position-latitude'),
            posLongitude = $('#map').data('position-longitude');

          var settings = $.extend({
            home: {
              latitude: posLatitude,
              longitude: posLongitude
            },
            text: '<div class="map-popup"><h4>Web Development | ZoOm-Arts</h4><p>A web development blog for all your HTML5 and WordPress needs.</p></div>',
            icon_url: $('#map').data('marker-img'),
            zoom: 15
          }, options);

          var coords = new google.maps.LatLng(settings.home.latitude, settings.home.longitude);

          return this.each(function() {
            var element = $(this);

            var options = {
              zoom: settings.zoom,
              center: coords,
              mapTypeId: google.maps.MapTypeId.ROADMAP,
              mapTypeControl: false,
              scaleControl: false,
              streetViewControl: false,
              panControl: true,
              disableDefaultUI: true,
              zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT
              },
              overviewMapControl: true,
            };

            var map = new google.maps.Map(element[0], options);

            var icon = {
              url: settings.icon_url,
              origin: new google.maps.Point(0, 0)
            };

            var marker = new google.maps.Marker({
              position: coords,
              map: map,
              icon: icon,
              draggable: false
            });

            var info = new google.maps.InfoWindow({
              content: settings.text
            });

            google.maps.event.addListener(marker, 'click', function() {
              info.open(map, marker);
            });

            var styles = [{
              "featureType": "landscape",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 65
              }, {
                "visibility": "on"
              }]
            }, {
              "featureType": "poi",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 51
              }, {
                "visibility": "simplified"
              }]
            }, {
              "featureType": "road.highway",
              "stylers": [{
                "saturation": -100
              }, {
                "visibility": "simplified"
              }]
            }, {
              "featureType": "road.arterial",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 30
              }, {
                "visibility": "on"
              }]
            }, {
              "featureType": "road.local",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 40
              }, {
                "visibility": "on"
              }]
            }, {
              "featureType": "transit",
              "stylers": [{
                "saturation": -100
              }, {
                "visibility": "simplified"
              }]
            }, {
              "featureType": "administrative.province",
              "stylers": [{
                "visibility": "on"
              }]
            }, {
              "featureType": "water",
              "elementType": "labels",
              "stylers": [{
                "visibility": "on"
              }, {
                "lightness": -25
              }, {
                "saturation": -100
              }]
            }, {
              "featureType": "water",
              "elementType": "geometry",
              "stylers": [{
                "hue": "#ffff00"
              }, {
                "lightness": -25
              }, {
                "saturation": -97
              }]
            }];

            map.setOptions({
              styles: styles
            });
          });

        };
      }(jQuery));

      jQuery(document).ready(function() {
        jQuery('#map').CustomMap();
      });
    </script>

<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>

</body>

</html>