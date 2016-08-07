<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
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
  <link rel="stylesheet" type="text/css" href="{{ url('assets/Temp2/en/engine0/style.css') }}"/>

  <script type="text/javascript" src="{{ url('assets/Temp2/en/engine0/jquery.js') }}"></script>
  <!-- End WOWSlider.com HEAD section -->
  <style type="text/css" media="screen">

    .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
      color: {{ $mysite[0]->primary_color }} !important;
    }  

    #wowslider-container0 a.ws_next:after, #wowslider-container0 a.ws_prev:after {
       color:{{ $mysite[0]->primary_color }};
    }

    #wowslider-container0 .ws-title {
       color:{{ $mysite[0]->text_color }};
    }

    #wowslider-container0 .ws_bullets a
    {
       box-shadow: inset 0 0 0 1px {{ $mysite[0]->primary_color }};
    }

    #wowslider-container0 .ws_bullets a.ws_selbull
    {
      background:{{ $mysite[0]->primary_color }};
    }

    #wowslider-container0 .ws_playpause
    {
      color:{{ $mysite[0]->primary_color }};
    }

    .section-title.center hr {
       border-top: 4px solid {{ $mysite[0]->primary_color }};
     }

    .section-title.center .line {
       border-top: 4px solid {{ $mysite[0]->primary_color }};
    }

    #services i.fa {
        border: 4px solid {{ $mysite[0]->primary_color }};
      }

      button.btn.tf-btn.btn-default {
     background: {{ $mysite[0]->primary_color }};
  }
  </style>

  </head>
  <body>
    <!-- Navigation
    ==========================================-->

    
  

    <!--News section-->
    
  <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->


    <!-- Navigation
    ==========================================-->
<?php  
    $flagelang=0;
    $static=0;
    $outside='';
    $menuearray_static=[];
    $pagearray_static=[];
?>

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




        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">

            <li>
                        
          <div class="btn-group dropdown" >
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><a href="{{url('/'.$subdomain.'/static_page/ar')}}"><span class="lang-sm lang-lbl" lang="ar"></span></a>
          </button>
          <ul class="dropdown-menu" >
            <li><a href="{{url('/'.$subdomain.'/static_page/en')}}"><span class="lang-sm lang-lbl" lang="en"></span></a></li>
          </ul>
        </div>

        @for ($x = 0; $x < count($urlpages); $x++)

            @if($urlpages[$x]=='page_top')
              <li>
                  <a class="page-scroll droid-arabic-kufi" href="{{url($subdomain.'/en')}}">{{$en_menupages[$x]}}</a>
              </li>
            @endif 
            @if($urlpages[$x]=='services')
                <li>
                    <a class="page-scroll droid-arabic-kufi" href="{{url($subdomain.'/en')}}">{{$en_menupages[$x]}}</a>
                </li>
            @endif
            @if($urlpages[$x]=='about')
                <li>
                    <a class="page-scroll droid-arabic-kufi" href="{{url($subdomain.'/en')}}">{{$en_menupages[$x]}}</a>
                </li>
            @endif
            @if($urlpages[$x]=='gallery')
                <li>
                  <a class="page-scroll droid-arabic-kufi" href="{{url($subdomain.'/en')}}">{{$en_menupages[$x]}}</a>
                </li>
            @endif
            @if($urlpages[$x]=='news')
                <li>
                    <a class="page-scroll droid-arabic-kufi" href="{{url($subdomain.'/en')}}">{{$en_menupages[$x]}}</a>
                </li>
            @endif
            @if($urlpages[$x]=='promotion')
                <li>
                    <a class="page-scroll droid-arabic-kufi" href="{{url($subdomain.'/en')}}">{{$en_menupages[$x]}}</a>
                </li>
            @endif
            @if($urlpages[$x]=='contact')
                <li>
                    <a class="page-scroll droid-arabic-kufi" href="{{url($subdomain.'/en')}}">{{$en_menupages[$x]}}</a>
                </li>
            @endif 

            <!-- for static page -->
          @if($urlpages[$x]!='contact' and $urlpages[$x]!='promotion' and $urlpages[$x]!='gallery' and $urlpages[$x]!='news' and $urlpages[$x]!='page_top' and $urlpages[$x]!='services' and $urlpages[$x]!='about')
              <li>
                  <a class="page-scroll droid-arabic-kufi" href="{{url($subdomain.'/en')}}">{{$en_menupages[$x]}}</a>
              </li>
          @endif   
          @endfor


             <!-- for static page outside -->
        @if($url_outside_pages)
          @for ($x = 0; $x < count($url_outside_pages); $x++)
            <li>
                  <a class="page-scroll droid-arabic-kufi" href="#{{str_replace(' ', '', str_replace('&', '', $url_outside_pages[$x]))}}">{{$en_outside_menupages[$x]}}</a>
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
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>



@for($static=0; $static< count($url_outside_pages);$static++) 
    <div style="background-color:#d6d1d1;" id="<?php echo str_replace(' ', '', str_replace('&', '', $pagearray_static[$static]));?>">
        <div class="container">
            <div class="row">
    <div class="section-title center wow fadeInDown" data-wow-delay="0.1s" >
        <br/><br/><br/><br/><br/>

        <h2 class="text-center"><strong><?php echo $menuearray_static[$static];?></strong></h2>
        <div class="line">
            <hr>
        </div>
    </div>
    <br/><br/>
        <div class="col-md-12">
            <!-- <div class="about-text wow fadeInRight" data-wow-delay="0.2s"> -->

               <?php echo "$containpages[$static]";?>
               <br/><br/><br/><br/>

            <!-- </div> -->
        </div>

    </div>
</div>
</div>
 @endfor







<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <script type="text/javascript" src="{{ url('/assets/Temp2/en/js/jquery.1.11.1.js')}}"></script>
   
    <script type="text/javascript" src="{{ url('/assets/Temp2/en/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{ url('/assets/Temp2/en/js/SmoothScroll.js')}}"></script>
    <script type="text/javascript" src="{{ url('/assets/Temp2/en/js/jquery.isotope.js')}}"></script>

    <script src="{{ url('/assets/Temp2/en/js/owl.carousel.js')}}"></script>

     <script src="{{ url('/assets/Temp2/en/js/jquery.appear.js')}}"></script>
     <script src="{{ url('/assets/Temp2/en/js/wow.js')}}"></script>
    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="{{ url('/assets/Temp2/en/js/main.js')}}"></script>

  </body>
</html>