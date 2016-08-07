<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<head>
  <!-- Basic -->
  @if(isset($header))

    <title>{{ $header->company_name }}</title>
  @endif
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
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-5">
              <!-- Start Social Links -->
               <ul class="social-list">
              @if(!empty($contacts[0]->facebook))
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
              @endif
              @if(!empty($contacts[0]->twitter))
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
              @endif
              @if(!empty($contacts[0]->google_plus)) 
                <li>
                  <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a>
                </li>
              @endif
              @if(!empty($contacts[0]->linkedin)) 
                <li>
                  <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                </li>
              @endif
              @if(!empty($contacts[0]->flickr))
                <li>
                  <a class="flickr itl-tooltip" data-placement="bottom" title="Flickr" href="#"><i class="fa fa-flickr"></i></a>
                </li>
              @endif

              @if(!empty($contacts[0]->instagram))
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
              @endif
              @if(!empty($contacts[0]->skype))
                <li>
                  <a class="skype itl-tooltip" data-placement="bottom" title="Skype" href="#"><i class="fa fa-skype"></i></a>
                </li>
              @endif
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
                <a class="navbar-brand" href="#">
                  <img style="width:50px;height:50px;" alt="" src="{{ url('/') }}{{ $header->logo }}">
                  <span style="font-size:32px;" class="comp_name">{{ $header->company_name }}</span>
                </a>

            @endif

          </div>
          <div class="navbar-collapse collapse">
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                  <a  href="{{url('/'.$subdomain.'/static_page/en')}}"><span class="lang-sm lang-lbl" lang="en"></span> <span class="caret"></span></a>
                  <ul class="dropdown">
                    <li>
                      <a href="{{url('/'.$subdomain.'/static_page/ar')}}">
                    <span class="lang-sm lang-lbl" lang="ar"></span>
                    </a>
                    </li>
                 </ul>
              </li>
                <?php  
                    $flagelang=0;
                    $static=0;
                    $outside='';
                    $menuearray_static=[];
                    $pagearray_static=[];
                ?>

              @for ($x = 0; $x < count($urlpages); $x++)

                  @if($urlpages[$x]=='page_top')
                      <!-- <li class="hidden">
                           <a href="#page-top"></a>
                       </li>-->
                      <li>
                          <a class="page-scroll" href="{{url($subdomain.'/en')}}">{{$en_menupages[$x]}}</a>
                      </li>
                  @endif 
                  @if($urlpages[$x]=='services')   
                      <li>
                          <a class="page-scroll" href="{{url($subdomain.'/en')}}">{{$en_menupages[$x]}}</a>
                      </li>
                  @endif
                  @if($urlpages[$x]=='about')
                      <li>
                          <a class="page-scroll" href="{{url($subdomain.'/en')}}">{{$en_menupages[$x]}}</a>
                      </li>
                  @endif
                   @if($urlpages[$x]=='gallery')
                        <li>
                            <a class="page-scroll" href="{{url($subdomain.'/en')}}">{{$en_menupages[$x]}}</a>
                        </li>
                    @endif
                    @if($urlpages[$x]=='news')
                        <li>
                            <a class="page-scroll" href="{{url($subdomain.'/en')}}">{{$en_menupages[$x]}}</a>
                        </li>
                    @endif
                    @if($urlpages[$x]=='promotion')
                        <li>
                            <a class="page-scroll" href="{{url($subdomain.'/en')}}">{{$en_menupages[$x]}}</a>
                        </li>
                    @endif
                    @if($urlpages[$x]=='contact')
                        <li>
                            <a class="page-scroll" href="{{url($subdomain.'/en')}}">{{$en_menupages[$x]}}</a>
                        </li>
                    @endif
                <!-- for static page -->
                    @if($urlpages[$x]!='contact' and $urlpages[$x]!='promotion' and $urlpages[$x]!='gallery' and $urlpages[$x]!='news' and $urlpages[$x]!='page_top' and $urlpages[$x]!='services' and $urlpages[$x]!='about')
                        <li>
                            <a class="page-scroll" href="#{{str_replace(' ', '', str_replace('&', '', $urlpages[$x]))}}">{{$en_menupages[$x]}}</a>
                        </li>
                         <?php
                          // $count_static+=1;
                         array_push($pagearray_static, $urlpages[$x]);
                         array_push($menuearray_static, $en_menupages[$x]);?>
                    @endif 
              @endfor
              <!-- for static page outside -->
              @if($url_outside_pages)
                @for ($x = 0; $x < count($url_outside_pages); $x++)
                  <li>
                        <a class="page-scroll" href="#{{str_replace(' ', '', str_replace('&', '', $url_outside_pages[$x]))}}">{{$en_outside_menupages[$x]}}</a>
                    </li>
                    <?php 
                    // $findpage_top=1;
                    $outside=$en_outside_menupages[$x];
                    array_push($pagearray_static, $url_outside_pages[$x]);
                    array_push($menuearray_static, $en_outside_menupages[$x]);
                    ?>
                
                @endfor
              @endif
          </ul>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          
          @for ($x = 0; $x < count($urlpages); $x++)

              @if($urlpages[$x]=='page_top')
                  <!-- <li class="hidden">
                       <a href="#page-top"></a>
                   </li>-->
                  <li>
                      <a class="active" href="{{url($subdomain.'/en')}}">{{$en_menupages[$x]}}</a>
                  </li>
                  <?php 
                  // $findpage_top=1;
                  $mypage_top=$en_menupages[$x];?>
              @endif 
              @if($urlpages[$x]=='services')   
                  <li>
                      <a class="page-scroll" href="{{url($subdomain.'/en')}}">{{$en_menupages[$x]}}</a>
                  </li>
              @endif
              @if($urlpages[$x]=='about')
                  <li>
                      <a class="page-scroll" href="{{url($subdomain.'/en')}}">{{$en_menupages[$x]}}</a>
                  </li>
              @endif
               @if($urlpages[$x]=='gallery')
                    <li>
                        <a class="page-scroll" href="{{url($subdomain.'/en')}}">{{$en_menupages[$x]}}</a>
                    </li>
                @endif
                @if($urlpages[$x]=='news')
                    <li>
                        <a class="page-scroll" href="{{url($subdomain.'/en')}}">{{$en_menupages[$x]}}</a>
                    </li>
                @endif
                @if($urlpages[$x]=='promotion')
                    <li>
                        <a class="page-scroll" href="{{url($subdomain.'/en')}}">{{$en_menupages[$x]}}</a>
                    </li>
                @endif
                @if($urlpages[$x]=='contact')
                    <li>
                        <a class="page-scroll" href="{{url($subdomain.'/en')}}">{{$en_menupages[$x]}}</a>
                    </li>
                @endif
                <!-- for static page -->
                  @if($urlpages[$x]!='contact' and $urlpages[$x]!='promotion' and $urlpages[$x]!='gallery' and $urlpages[$x]!='news' and $urlpages[$x]!='page_top' and $urlpages[$x]!='services' and $urlpages[$x]!='about')
                      <li>
                          <a class="page-scroll" href="#{{str_replace(' ', '', str_replace('&', '', $urlpages[$x]))}}">{{$en_menupages[$x]}}</a>
                      </li>
                  @endif 
          @endfor
          @if($url_outside_pages)
                @for ($x = 0; $x < count($url_outside_pages); $x++)
                  <li>
                        <a class="page-scroll" href="#{{str_replace(' ', '', str_replace('&', '', $url_outside_pages[$x]))}}">{{$en_outside_menupages[$x]}}</a>
                    </li>
                
                @endfor
              @endif
              <li>
                <a  href="{{url('/'.$subdomain.'/static_page/en')}}"><span class="lang-sm lang-lbl" lang="en"></span> <span class="caret"></span></a>
                <ul class="dropdown">
                  <li>
                    <a href="{{url('/'.$subdomain.'/static_page/ar')}}">
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
@for($static=0; $static< count($url_outside_pages);$static++) 
  <div id="<?php echo str_replace(' ', '', str_replace('&', '', $pagearray_static[$static]));?>">
      <div class="section" style="padding-top:60px; padding-bottom:60px; border-top:1px solid #eee; border-bottom:1px solid #eee; background:#f9f9f9;">
        <div class="container">

          <div class="row">

            <!-- Start Left Side -->
            <div class="col-md-12" data-animation="fadeInUp">

              <!-- Start Big Heading -->
              <div class="big-title">
                <h1><strong class="primary-text"><?php echo $staticpages[$static];?></strong> </h1>
                <!-- <p class="title-desc">Some Words About Our Company</p> -->
              </div>
              <!-- End Big Heading -->
                <?php echo "$containpages[$static]";?>

              <!-- Divider -->
              <div class="hr1" style="margin-bottom:14px;"></div>

              <!-- Start Icons Lists -->
              
              <!-- End Icons Lists -->

              <!-- Divider -->
              <div class="hr1" style="margin-bottom:20px;"></div>

              <!-- Button -->
              <a class="primary btn-system btn-small" data-toggle="modal" href="#<?php echo str_replace(' ', '', str_replace('&', '', $pagearray_static[$static]));?>modal">Read More <?php echo $menuearray_static[$static];?></a>
            </div>
            <!-- End Left Side -->

            <!-- Vimeo Iframe -->
            <!-- <div class="col-md-6" data-animation="fadeInDown">
              
                <div class="img1">
                    <figure><img class="img-responsive" src="" alt="image"></figure> 
                </div>
                <div class="img2">
                    <figure><img class="img-responsive" src="" alt="image"></figure>
                </div>
            </div> -->

          </div>

        </div>
      </div>
      </div>

      <div class="modal fade" id="<?php echo str_replace(' ', '', str_replace('&', '', $pagearray_static[$static]));?>modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title"><?php echo $menuearray_static[$static];?></h4>
                    </div>
                    <div class="modal-body">
                      <p><?php echo "$containpages[$static]";?></p><br>
                      <!-- <p><b><a href="#" class="primary">Visit Site</a></b></p> -->
                    </div>
                    <div class="modals-footer">
                      <button type="button" class="primary btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
      @endfor

<!-- end statiic page -->
<!-- ===================================================================================== -->




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

</body>

</html>