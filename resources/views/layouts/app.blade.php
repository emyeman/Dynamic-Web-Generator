
<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en-US">

<head>
    <meta charset="UTF-8">

    <!-- for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="format-detection" content="telephone=no"/>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/vnd.microsoft.icon"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-ico"/>

    <title>ALTOS Agency &#8211; Creative HTML Theme</title>

    <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/defaults.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/css/demo.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/bootstrap-theme.min.css')}}">
   
    <link rel="stylesheet" href="{{ url('/assets/css/emy.css') }}">
     <link rel="stylesheet" href="{{ url('/assets/bootstrap-3.2.0/css/bootstrap.min.css')}}"/>
<!-- Bootstrap-Iconpicker -->
    <link rel="stylesheet" href="{{ url('/assets/bootstrap-iconpicker/css/bootstrap-iconpicker.min.css')}}"/>

    <link rel="stylesheet" href="{{ url('/assets/bootstrap-3.2.0/css/bootstrap.min.css')}}"/>
<!-- Bootstrap-Iconpicker -->
    <link rel="stylesheet" href="{{ url('/assets/bootstrap-iconpicker/css/bootstrap-iconpicker.min.css')}}"/>

    <link rel='stylesheet' href='{{ url("assets/DynamicWebGenerator/revslider/public/assets/css/settings.css")}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ url("assets/DynamicWebGenerator/css/animsition.css")}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ url("assets/DynamicWebGenerator/css/fontello.css")}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ url("assets/DynamicWebGenerator/css/font-awesome.css")}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ url("assets/DynamicWebGenerator/css/owl.carousel.css")}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ url("assets/DynamicWebGenerator/css/owl.transitions.css")}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ url("assets/DynamicWebGenerator/css/pe-icon-7-stroke.css")}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ url("assets/DynamicWebGenerator/css/prettyPhoto.css")}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ url("assets/DynamicWebGenerator/css/style.css")}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ url("assets/DynamicWebGenerator/css/media.css")}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ url("assets/DynamicWebGenerator/css/js_composer.min.css")}}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ url("assets/DynamicWebGenerator/css/isotope.min.css")}}' type='text/css' media='all'/>

    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Montserrat%3A400%2C700%7CRaleway%3A400%2C700&amp;ver=1.0.0' type='text/css' media='all'/>
    <link href="http://fonts.googleapis.com/css?family=Raleway%3A300%2C900%2C100%2C600%2C400%2C500%2C800" rel="stylesheet" property="stylesheet" type="text/css" media="all"/>
    <link href="http://fonts.googleapis.com/css?family=Raleway%3A800%2C300%2C500" rel="stylesheet" property="stylesheet" type="text/css" media="all"/>


</head>

<body class="home page page-id-4 page-parent page-template page-template-template-one-pager page-template-template-one-pager-php wpb-js-composer js-comp-ver-4.11.2.1 vc_responsive">
    <div class="overlay overlay-slidedown">
        <div class="overlay-close pe-7s-close"></div>
        <div class="popup-search-wrapper">
            <form method="get" id="searchform" class="search-form" action="index.html">
                <div>
                    <input type="text" id="s" name="s" value="Type text and hit enter" onfocus="if(this.value=='Type text and hit enter')this.value='';" onblur="if(this.value=='')this.value='Type text and hit enter';" autocomplete="off">
                </div>
            </form>
        </div>
    </div>
    <div class="animsition global-wrapper">

        <div id="header" class="header-wrapper">
            <div class="header-inside">
                <div class="logo">
                    <a href="index.html" title="ALTOS Agency"><img class="logoImage" src="{{ url('assets/DynamicWebGenerator/images/logo.png')}}" alt="ALTOS Agency"/><img class="logoImageRetina" src="{{ url('assets/DynamicWebGenerator/images/logo-retina.png')}}" alt="ALTOS Agency"/></a>
                    <div class="clear"></div>
                </div>
                <div class="menu-wrapper">
                    <div class="menu-icons">
                        <div class="menu-icons-inside">
                            <div class="menu-icon menu-icon-standard"><span class="menu-icon-create"></span></div>
                            <div class="menu-icon menu-icon-mobile"><span class="menu-icon-create"></span></div>
                        </div>
                        <div id="trigger-overlay" class="header-search pe-7s-search"></div>
                    </div>
                    <div class="main-menu">
                        <div class="menu-main-nav-menu-container">
                            <ul id="menu-main-nav-menu" class="sf-menu">

                            <li class="menu-item current-menu-item current_page_item menu-item-has-children"><a href="{{ url('/') }}">Home</a>
                                    <ul class="submenu_1">
                                        <li class="menu-item"><a href="{{ url('/') }}">Home #2</a></li>
                                    </ul>
                                </li>

                                @if (Auth::guest())
                                    <li class="menu-item one-page-subsite"><a href="{{ url('/login') }}">Login</a></li>

                                    <li class="menu-item one-page-subsite"><a href="{{ url('/register') }}">Register</a></li>

                                    <li class="menu-item one-page-subsite"><a href="{{ url('/login') }}">Create My Site</a></li>
                                @else
                                    <li class="menu-item one-page-subsite"><a href="{{ url('/logout') }}">Logout</a></li>
                                @endif


                            @if (Request::path() == '/')

                                <li class="menu-item"><a href="index.html#about">About us</a></li>
                                <li class="menu-item"><a href="index.html#services">Services</a></li>
                                <li class="menu-item"><a href="index.html#portfolio-items">Portfolio</a></li>


                                <li class="menu-item"><a href="index.html#our-contact">Contact</a></li>
                            @endif
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="mobile-menu-wrapper">
            <div class="menu-main-nav-menu-container">
                <ul id="menu-main-nav-menu-1" class="mobile-menu">
                    <li class="menu-item current-menu-item current_page_item menu-item-has-children"><a href="index.html#home">Home</a>
                        <ul class="submenu_1">
                            <li class="menu-item"><a href="http://psd2html5.in/demo/wpm/altos/home-2/#home-2">Home #2</a></li>
                        </ul>
                    </li>
                    <li class="menu-item one-page-subsite"><a href="index.html#about">About us</a></li>
                    <li class="menu-item one-page-subsite"><a href="index.html#services">Services</a></li>
                    <li class="menu-item one-page-subsite"><a href="index.html#portfolio-items">Portfolio</a></li>
                   {{--  <li class="menu-item one-page-subsite"><a href="index.html#blog">Blog</a></li> --}}
                   <li class="menu-item one-page-subsite"><a href="index.html#portfolio-items">Login</a></li>

                   <li class="menu-item one-page-subsite"><a href="index.html#portfolio-items">Register</a></li>

                    <li class="menu-item one-page-subsite"><a href="index.html#our-contact">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="header-wrapper header2">
            <div class="header-inside">
                <div class="logo">
                    <a href="index.html" title="ALTOS Agency"><img class="logoImage" src="{{ url('assets/DynamicWebGenerator/images/logo.png')}}" alt="ALTOS Agency"/><img class="logoImageRetina" src="{{ url('assets/DynamicWebGenerator/images/logo-retina.png')}}" alt="ALTOS Agency"/></a>
                    <div class="clear"></div>
                </div>
                <div class="menu-wrapper">
                    <div class="menu-icons">
                        <div class="menu-icons-inside">
                            <div class="menu-icon menu-icon-standard"><span class="menu-icon-create"></span></div>
                        </div>
                        <div id="trigger-overlay-sticky" class="header-search pe-7s-search"></div>
                    </div>
                    <div class="main-menu">
                        <div class="menu-main-nav-menu-container">
                            <ul id="menu-main-nav-menu-2" class="sf-menu">
                                <li class="menu-item current-menu-item current_page_item menu-item-has-children"><a href="index.html#home">Home</a>
                                    <ul class="submenu_1">
                                        <li class="menu-item"><a href="home-2.html#home-2">Home #2</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="index.html#about">About us</a></li>
                                <li class="menu-item"><a href="index.html#services">Services</a></li>
                                <li class="menu-item"><a href="index.html#portfolio-items">Portfolio</a></li>

                                <li class="menu-item one-page-subsite"><a href="index.html#portfolio-items">Login</a></li>
=======
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Dashboard | Melon - Flat &amp; Responsive Admin Template</title>
>>>>>>> 1b0c63b018a29fa45932bca74f0b72b43885b6ba

                                <li class="menu-item one-page-subsite"><a href="index.html#portfolio-items">Register</a></li>

<<<<<<< HEAD
                                <li class="menu-item"><a href="index.html#our-contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>

        @yield('content')

        <div id="footer" class="footer">
            <div class="footer-inner">
                <div class="footer-left">
                    <img id="logoFooterImage" class="footer-logo" src="{{ url('assets/DynamicWebGenerator/images/logo-footer.png')}}" alt="ALTOS Agency"/>
                    <img class="footer-logo" id="logoFooterImageRetina" src="images/logo-footer-retina.png" alt="ALTOS Agency"/>
                </div>
                <div class="footer-right">
                    45 street Los Angeles, California / Phone: <span>1.800.123 456789</span> </div>
                <div class="scroll_to_top pe-7s-up-arrow"></div>
            </div>
            <div class="clear"></div>
            <div class="footer-under-center">
                <div class="footer-inner">
                    Copyright 2016 - Altos. Powered by <a href="index.html#" title="HTML5 Themes">HTML5</a>. Made by <a href="http://themeforest.net/user/max-themes/portfolio" title="Pego Premium HTML5 Themes">max-themes</a>. </div>
            </div>
=======
    <!-- ******************************************************* -->
  
    <!-- ********************************************************************* -->
    
    {!! Html::style('assets/bootstrap/css/bootstrap.min.css') !!}
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
>>>>>>> 1b0c63b018a29fa45932bca74f0b72b43885b6ba

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

<<<<<<< HEAD



    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/jquery/jquery.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/jquery/jquery-migrate.min.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/DynamicWebGenerator/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/DynamicWebGenerator/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/DynamicWebGenerator/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/DynamicWebGenerator/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/DynamicWebGenerator/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/DynamicWebGenerator/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/DynamicWebGenerator/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/DynamicWebGenerator/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{ url('assets/DynamicWebGenerator/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script type="text/javascript">
        function revslider_showDoubleJqueryError(sliderID) {
            var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
            errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
            errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
            errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
            errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
            jQuery(sliderID).show().html(errorMessage);
        }
    </script>

    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/contact-form.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/jquery.ticker.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/modernizr.custom.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/jquery.localscroll.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/toScroll.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/jquery.animsition.min.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/superfish.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/waypoints/waypoints.min.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/jquery.mobilemenu.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/custom.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/snap.svg-min.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/classie.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/js_composer_front.min.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/jquery.countTo.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/bower/skrollr/dist/skrollr.min.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/dynamics.min.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/main.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/bower/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/bower/isotope/dist/isotope.pkgd.min.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/prettyphoto/js/jquery.prettyPhoto.min.js')}}"></script>
    <script type='text/javascript' src="{{ url('assets/DynamicWebGenerator/js/owl.carousel.js')}}"></script>

    <script>
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = "";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    <script>
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = ".tp-caption.NotGeneric-Title,.NotGeneric-Title{color:rgba(255,255,255,1.00);font-size:70px;line-height:70px;font-weight:800;font-style:normal;font-family:Raleway;padding:10px 0px 10px 0;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0 0 0 0px}.tp-caption.NotGeneric-SubTitle,.NotGeneric-SubTitle{color:rgba(255,255,255,1.00);font-size:13px;line-height:20px;font-weight:500;font-style:normal;font-family:Raleway;padding:0 0 0 0px;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0 0 0 0px;letter-spacing:4px;text-align:left}.tp-caption.NotGeneric-Button,.NotGeneric-Button{color:rgba(255,255,255,1.00);font-size:14px;line-height:14px;font-weight:500;font-style:normal;font-family:Raleway;padding:10px 30px 10px 30px;text-decoration:none;background-color:rgba(0,0,0,0);border-color:rgba(255,255,255,0.50);border-style:solid;border-width:1px;border-radius:0px 0px 0px 0px;letter-spacing:3px;text-align:left}.tp-caption.NotGeneric-Button:hover,.NotGeneric-Button:hover{color:rgba(255,255,255,1.00);text-decoration:none;background-color:transparent;border-color:rgba(255,255,255,1.00);border-style:solid;border-width:1px;border-radius:0px 0px 0px 0px;cursor:pointer}";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    <script type="text/javascript">
        /******************************************
                        -   PREPARE PLACEHOLDER FOR SLIDER  -
                    ******************************************/

        var setREVStartSize = function() {
            try {
                var e = new Object,
                    i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                e.c = jQuery('#rev_slider_3_1');
                e.gridwidth = [1240];
                e.gridheight = [868];

                e.sliderLayout = "fullscreen";
                e.fullScreenAutoWidth = 'off';
                e.fullScreenAlignForce = 'off';
                e.fullScreenOffsetContainer = '';
                e.fullScreenOffset = '';
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function(e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })

            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };

        setREVStartSize();

        var tpj = jQuery;

        var revapi3;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_3_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_3_1");
            } else {
                revapi3 = tpj("#rev_slider_3_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "//pegodesign.com/wp-themes/altos/wp-content/plugins/revslider/public/assets/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            }
                        }
                    },
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: 1240,
                    gridheight: 868,
                    lazyType: "none",
                    parallax: {
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                        type: "mouse",
                        disable_onmobile: "on"
                    },
                    shadow: 0,
                    spinner: "spinner2",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready*/
    </script>
    <script>
        var htmlDivCss = ' #rev_slider_3_1_wrapper .tp-loader.spinner2{ background-color: #FFFFFF !important; } ';
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>

    <script>
    // start all the timers
    jQuery(document).ready(function($) {
        // custom callback when counting completes
        jQuery("#counter_5670").data("countToOptions", {
            onComplete: function(value) {
                jQuery(".counter-specific-wrapper-5670 span.after-counter-text").css({
                    "display": "inline-block"
                });
            }
        });

        function count(options) {
            var $this = $(this);
            options = $.extend({}, options || {}, $this.data("countToOptions") || {});
            $this.countTo(options);
        }

        if (typeof jQuery.fn.waypoint !== "undefined") {
            jQuery("#counter_5670").waypoint(function($) {
                jQuery(".counter-specific-wrapper-5670 span.after-counter-text").css({
                    "display": "none"
                });
                jQuery("#counter_5670").each(count);
            }, {
                offset: "95%"
            });
        }
    });
</script>
                <script>
                    // start all the timers
                    jQuery(document).ready(function($) {

                        // custom callback when counting completes
                        jQuery("#counter_832").data("countToOptions", {
                            onComplete: function(value) {
                                jQuery(".counter-specific-wrapper-832 span.after-counter-text").css({
                                    "display": "inline-block"
                                });
                            }
                        });

                        function count(options) {
                            var $this = $(this);
                            options = $.extend({}, options || {}, $this.data("countToOptions") || {});
                            $this.countTo(options);
                        }

                        if (typeof jQuery.fn.waypoint !== "undefined") {
                            jQuery("#counter_832").waypoint(function($) {
                                jQuery(".counter-specific-wrapper-832 span.after-counter-text").css({
                                    "display": "none"
                                });
                                jQuery("#counter_832").each(count);
                            }, {
                                offset: "95%"
                            });
                        }
                    });
                </script>
                <script>
                    // start all the timers
                    jQuery(document).ready(function($) {

                        // custom callback when counting completes
                        jQuery("#counter_9977").data("countToOptions", {
                            onComplete: function(value) {
                                jQuery(".counter-specific-wrapper-9977 span.after-counter-text").css({
                                    "display": "inline-block"
                                });
                            }
                        });

                        function count(options) {
                            var $this = $(this);
                            options = $.extend({}, options || {}, $this.data("countToOptions") || {});
                            $this.countTo(options);
                        }

                        if (typeof jQuery.fn.waypoint !== "undefined") {
                            jQuery("#counter_9977").waypoint(function($) {
                                jQuery(".counter-specific-wrapper-9977 span.after-counter-text").css({
                                    "display": "none"
                                });
                                jQuery("#counter_9977").each(count);
                            }, {
                                offset: "95%"
                            });
                        }
                    });
                </script>
                <script>
                    // start all the timers
                    jQuery(document).ready(function($) {

                        // custom callback when counting completes
                        jQuery("#counter_6785").data("countToOptions", {
                            onComplete: function(value) {
                                jQuery(".counter-specific-wrapper-6785 span.after-counter-text").css({
                                    "display": "inline-block"
                                });
                            }
                        });

                        function count(options) {
                            var $this = $(this);
                            options = $.extend({}, options || {}, $this.data("countToOptions") || {});
                            $this.countTo(options);
                        }

                        if (typeof jQuery.fn.waypoint !== "undefined") {
                            jQuery("#counter_6785").waypoint(function($) {
                                jQuery(".counter-specific-wrapper-6785 span.after-counter-text").css({
                                    "display": "none"
                                });
                                jQuery("#counter_6785").each(count);
                            }, {
                                offset: "95%"
                            });
                        }
                    });
                </script>
                <script>
                    // start all the timers
                    jQuery(document).ready(function($) {

                        // custom callback when counting completes
                        jQuery("#counter_7258").data("countToOptions", {
                            onComplete: function(value) {
                                jQuery(".counter-specific-wrapper-7258 span.after-counter-text").css({
                                    "display": "inline-block"
                                });
                            }
                        });

                        function count(options) {
                            var $this = $(this);
                            options = $.extend({}, options || {}, $this.data("countToOptions") || {});
                            $this.countTo(options);
                        }

                        if (typeof jQuery.fn.waypoint !== "undefined") {
                            jQuery("#counter_7258").waypoint(function($) {
                                jQuery(".counter-specific-wrapper-7258 span.after-counter-text").css({
                                    "display": "none"
                                });
                                jQuery("#counter_7258").each(count);
                            }, {
                                offset: "95%"
                            });
                        }
                    });
                </script>
    <script>
        jQuery(document).ready(function($) {
            (function() {
                document.documentElement.className = "js";
                var slideshow = new CircleSlideshow(document.getElementById("slideshow2992"));
            })();
        });
    </script>
    <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
    <script>
        function initialize() {
            var mapOptions = {
                zoom: 11,
                center: new google.maps.LatLng(40.733942, -74.060645),
                scrollwheel: false,
                styles: [{
                    'featureType': 'landscape',
                    'stylers': [{
                        'saturation': -100
                    }, {
                        'lightness': 65
                    }, {
                        'visibility': 'on'
                    }]
                }, {
                    'featureType': 'poi',
                    'stylers': [{
                        'saturation': -100
                    }, {
                        'lightness': 51
                    }, {
                        'visibility': 'simplified'
                    }]
                }, {
                    'featureType': 'road.highway',
                    'stylers': [{
                        'saturation': -100
                    }, {
                        'visibility': 'simplified'
                    }]
                }, {
                    'featureType': 'road.arterial',
                    'stylers': [{
                        'saturation': -100
                    }, {
                        'lightness': 30
                    }, {
                        'visibility': 'on'
                    }]
                }, {
                    'featureType': 'road.local',
                    'stylers': [{
                        'saturation': -100
                    }, {
                        'lightness': 40
                    }, {
                        'visibility': 'on'
                    }]
                }, {
                    'featureType': 'transit',
                    'stylers': [{
                        'saturation': -100
                    }, {
                        'visibility': 'simplified'
                    }]
                }, {
                    'featureType': 'administrative.province',
                    'stylers': [{
                        'visibility': 'off'
                    }]
                }, {
                    'featureType': 'water',
                    'elementType': 'labels',
                    'stylers': [{
                        'visibility': 'on'
                    }, {
                        'lightness': -25
                    }, {
                        'saturation': -100
                    }]
                }, {
                    'featureType': 'water',
                    'elementType': 'geometry',
                    'stylers': [{
                        'hue': '#ffff00'
                    }, {
                        'lightness': -25
                    }, {
                        'saturation': -97
                    }]
                }]
            }
            var map = new google.maps.Map(document.getElementById('map_canvas'),
                mapOptions);

            setMarkers(map, places);
        }

        /**
         * Data for the markers consisting of a name, a LatLng and a zIndex for
         * the order in which these markers should display on top of each
         * other.
         */
        var places = [
            ["Place1", 40.733942, -74.060645, 1]
        ];

        function setMarkers(map, locations) {
            // Add markers to the map

            // Marker sizes are expressed as a Size of X,Y
            // where the origin of the image (0,0) is located
            // in the top left of the image.

            // Origins, anchor positions and coordinates of the marker
            // increase in the X direction to the right and in
            // the Y direction down.
            var image = {
                url: 'upload/map-pin.png',
                // This marker is 20 pixels wide by 32 pixels tall.
                //size: new google.maps.Size(20, 32),
                // The origin for this image is 0,0.
                origin: new google.maps.Point(0, 0),
                // The anchor for this image is the base of the flagpole at 0,32.
                anchor: new google.maps.Point(0, 32)
            };
            // Shapes define the clickable region of the icon.
            // The type defines an HTML &lt;area&gt; element 'poly' which
            // traces out a polygon as a series of X,Y points. The final
            // coordinate closes the poly by connecting to the first
            // coordinate.
            var shape = {
                coords: [1, 1, 1, 20, 18, 20, 18, 1],
                type: 'poly'
            };
            for (var i = 0; i < locations.length; i++) {
                var beach = locations[i];
                var myLatLng = new google.maps.LatLng(beach[1], beach[2]);
                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    icon: image,
                    shape: shape,
                    title: beach[0],
                    zIndex: beach[3]
                });
            }
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
=======
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
                            <span class="badge">1</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <li class="title">
                                <p>You have 3 new messages</p>
                            </li>
                            <li>
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
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span class="photo"><img src="/assets/img/demo/avatar-2.jpg" alt="" /></span>
                                    <span class="subject">
                                        <span class="from">Jane Doe</span>
                                        <span class="time">45 mins</span>
                                    </span>
                                    <span class="text">
                                        Sed diam nonumy...
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span class="photo"><img src="/assets/img/demo/avatar-3.jpg" alt="" /></span>
                                    <span class="subject">
                                        <span class="from">Patrick Nilson</span>
                                        <span class="time">6 hours</span>
                                    </span>
                                    <span class="text">
                                        No sea takimata sanctus...
                                    </span>
                                </a>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View all messages</a>
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
>>>>>>> 1b0c63b018a29fa45932bca74f0b72b43885b6ba
</body>
</html>

