<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">

    <!-- for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="format-detection" content="telephone=no"/>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ url('assets/DynamicWebGenerator/images/favicon.ico')}}" type="image/vnd.microsoft.icon"/>
    <link rel="icon" href="{{ url('assets/DynamicWebGenerator/images/favicon.ico')}}" type="image/x-ico"/>

    <title>Dynamic Website Generate</title>

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
    <style type="text/css" media="screen">

.demo-2 {
    position:relative;
    width:300px;
    height:150px;
    overflow:hidden;
    float:left;
    margin-right:20px;
    background-color:rgba(26,76,110,0.5)
}
.demo-2 p,.demo-2 h2 {
    color:#fff;
    padding:10px;
    left:-20px;
    top:20px;
    position:relative
}
.demo-2 p {
    font-family:'Lato';
    font-size:12px;
    line-height:18px;
    margin:0
}
.demo-2 h2 {
    font-size:20px;
    line-height:24px;
    margin:0;
    font-family:'Lato'
}
.effect img {
    position:absolute;
    left:0;
    bottom:0;
    cursor:pointer;
    margin:-12px 0;
    -webkit-transition:bottom .3s ease-in-out;
    -moz-transition:bottom .3s ease-in-out;
    -o-transition:bottom .3s ease-in-out;
    transition:bottom .3s ease-in-out
}
.effect img.top:hover {
    bottom:-96px;
    padding-top:100px
}
h2.zero,p.zero {
    margin:10px;
    padding:0
}

            .thumbnail
            {
                width:222px;
            }

            .container {
            position:relative;
            margin-left:20px;
            overflow:hidden;
            }
            .container .textbox {
            width:200px;
            height:150px;
            position:absolute;
            top:0;
            left:0;
            margin-top:-160px;
            border-radius:5px;
            background-color: rgba(0,0,0,0.75);
            -webkit-box-shadow: inset 0px 0px 5px 2px rgba(255,255,255,.75);
            box-shadow: inset 0px 0px 5px 2px rgba(255,255,255,.75);
            }
            .container:hover .textbox {
            margin-top:0;
            }
            .text {
            padding-top: 50px;
            
            }
            .textbox {
            margin-left: 18px;
            -webkit-transition: all 0.7s ease;
            transition: all 0.7s ease;
            }   
    </style>


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
                                
                               

                            @if (Request::path() == '/')

                                <li class="menu-item"><a href="#about">About us</a></li>
                                <li class="menu-item"><a href="#services">Services</a></li>
                                <li class="menu-item"><a href="#portfolio-items">Portfolio</a></li>


                                <li class="menu-item"><a href="#our-contact">Contact</a></li>
                            @endif

                             @if (Auth::guest())
                                    <li class="menu-item one-page-subsite"><a href="{{ url('/login') }}">Login</a></li>

                                    <li class="menu-item one-page-subsite"><a href="{{ url('/register') }}">Register</a></li>

                                @else
                                    
                                <li class="menu-item current-menu-item current_page_item menu-item-has-children"><a href="#home"><img style="width:45px;height:30px;overflow:visible" src="{{ url('/') }}{{ Auth::user()->image }}" class="img-circle"></a>
                                     <ul class="submenu_1">
                                        <li class="menu-item one-page-subsite"><a href="{{ url('/logout') }}">Logout</a></li>
                                  
                                      <li class="menu-item one-page-subsite"><a href="{{ url('/user/edit/') }}/{{ Auth::user()->id }}">Edit Profile</a></li>
                                  
                                    @if (isset($site) && Auth::user()->status =! 'reseller')
                                        <li class="menu-item one-page-subsite"><a href="{{ url('/dashboard') }}">Dashboard</a></li>

                                        <li class="menu-item one-page-subsite"><a href="{{ url('/site/edit/') }}/{{ Auth::user()->site->id }}">my site</a></li>
                                    @else
                                        <li class="menu-item one-page-subsite"><a href="{{  url('/site/create') }}">Create WebSite</a></li>
                                    @endif
                                     </ul>
                                    </li>
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
                   <li class="menu-item current-menu-item current_page_item menu-item-has-children"><a href="{{ url('/') }}">Home</a>
                                    <ul class="submenu_1">
                                        <li class="menu-item"><a href="{{ url('/') }}">Home #2</a></li>
                                    </ul>
                                </li>
                                
                               

                            @if (Request::path() == '/')

                                <li class="menu-item"><a href="#about">About us</a></li>
                                <li class="menu-item"><a href="#services">Services</a></li>
                                <li class="menu-item"><a href="#portfolio-items">Portfolio</a></li>


                                <li class="menu-item"><a href="#our-contact">Contact</a></li>
                            @endif

                             @if (Auth::guest())
                                    <li class="menu-item one-page-subsite"><a href="{{ url('/login') }}">Login</a></li>

                                    <li class="menu-item one-page-subsite"><a href="{{ url('/register') }}">Register</a></li>

                                @else
                                    
                                <li class="menu-item current-menu-item current_page_item menu-item-has-children"><a href="#home"><img style="width:45px;height:30px;overflow:visible" src="{{ url('/') }}{{ Auth::user()->image }}" class="img-circle"></a>
                                     <ul class="submenu_1">
                                        <li class="menu-item one-page-subsite"><a href="{{ url('/logout') }}">Logout</a></li>

                                        <li class="menu-item one-page-subsite"><a href="{{ url('/user/edit/') }}/{{ Auth::user()->id }}">Edit Profile</a></li>
                                  
                                    @if (isset($site) && Auth::user()->status =! 'reseller')
                                        <li class="menu-item one-page-subsite"><a href="{{ url('/dashboard') }}">Dashboard</a></li>

                                        <li class="menu-item one-page-subsite"><a href="{{ url('/site/edit/') }}/{{ Auth::user()->site->id }}">my site</a></li>
                                    @else
                                        <li class="menu-item one-page-subsite"><a href="{{  url('/site/create') }}">Create WebSite</a></li>
                                    @endif

                                     </ul>
                                    </li>
                                @endif
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
                                <li class="menu-item current-menu-item current_page_item menu-item-has-children"><a href="{{ url('/') }}">Home</a>
                                    <ul class="submenu_1">
                                        <li class="menu-item"><a href="{{ url('/') }}">Home #2</a></li>
                                    </ul>
                                </li>
                                
                               

                            @if (Request::path() == '/')

                                <li class="menu-item"><a href="#about">About us</a></li>
                                <li class="menu-item"><a href="#services">Services</a></li>
                                <li class="menu-item"><a href="#portfolio-items">Portfolio</a></li>


                                <li class="menu-item"><a href="#our-contact">Contact</a></li>
                            @endif

                             @if (Auth::guest())
                                    <li class="menu-item one-page-subsite"><a href="{{ url('/login') }}">Login</a></li>

                                    <li class="menu-item one-page-subsite"><a href="{{ url('/register') }}">Register</a></li>

                                @else
                                    
                                <li class="menu-item current-menu-item current_page_item menu-item-has-children"><a href="#home"><img style="width:45px;height:30px;overflow:visible" src="{{ url('/') }}{{ Auth::user()->image }}" class="img-circle"></a>
                                     <ul class="submenu_1">
                                        <li class="menu-item one-page-subsite"><a href="{{ url('/logout') }}">Logout</a></li>
                                  
                                       <li class="menu-item one-page-subsite"><a href="{{ url('/user/edit/') }}/{{ Auth::user()->id }}">Edit Profile</a></li>
                                  

                                    @if (isset($site) && Auth::user()->status =! 'reseller')
                                        <li class="menu-item one-page-subsite"><a href="{{ url('/dashboard') }}">Dashboard</a></li>

                                        <li class="menu-item one-page-subsite"><a href="{{ url('/site/edit/') }}/{{ Auth::user()->site->id }}">my site</a></li>
                                    @else
                                        <li class="menu-item one-page-subsite"><a href="{{  url('/site/create') }}">Create WebSite</a></li>
                                    @endif
                                     </ul>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>

        @yield('content')

        <div id="footer" class="footer">
            {{-- <div class="footer-inner">
                <div class="footer-left">
                    <img id="logoFooterImage" class="footer-logo" src="{{ url('assets/DynamicWebGenerator/images/logo-footer.png')}}" alt="ALTOS Agency"/>
                    <img class="footer-logo" id="logoFooterImageRetina" src="images/logo-footer-retina.png" alt="ALTOS Agency"/>
                </div>
                <div class="footer-right">
                    45 street Los Angeles, California / Phone: <span>1.800.123 456789</span> </div>
                <div class="scroll_to_top pe-7s-up-arrow"></div>
            </div> --}}
            <div class="clear"></div>
            <div class="footer-under-center">
                <div class="footer-inner">
                    Copyright 2016 - Altos. Powered by <a href="index.html#" title="HTML5 Themes">HTML5</a>. Made by <a href="http://themeforest.net/user/max-themes/portfolio" title="Pego Premium HTML5 Themes">max-themes</a>. </div>
            </div>
            </div>

<script type="text/javascript" src="{{ url('/assets/bootstrap-3.2.0/js/bootstrap.min.js') }}"></script>
<!-- Bootstrap-Iconpicker Iconset for Glyphicon -->
<script type="text/javascript" src="{{ url('/assets/bootstrap-iconpicker/js/iconset/iconset-glyphicon.min.js') }}"></script>
<!-- Bootstrap-Iconpicker -->
<script type="text/javascript" src="{{ url('/assets/bootstrap-iconpicker/js/bootstrap-iconpicker.min.js') }}"></script>
    {{-- <script src="{{ elixir('j/assets/js/s/app.js') }}"></script> --}}
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="{{ url('/assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/assets/js/accordion.js') }}"></script>

    <script type="text/javascript" src="{{ url('/colorPicker/colors.js') }}"></script>
   <script type="text/javascript" src="{{ url('/colorPicker/jqColorPicker.min.js') }}"></script>


    <script type="text/javascript">
         $('.picker').colorPicker(/* optinal options */); // that's it
    </script>




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
</body>
</html>

