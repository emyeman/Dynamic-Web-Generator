@include('../spirit/header')

        <link href="{{ url('/assets/css/ArabicStyle.css')}}" rel="stylesheet">

        <link href="{{ url('/assets/css/bootstrap-rtl.css')}}" type="text/css" rel="stylesheet">
        <link href="{{ url('/assets/css/emy.css')}}" rel="stylesheet">

    </head>
    
    <body class="no-trans" id="page_top">
        <!-- scrollToTop -->
        <!-- ================ -->
        <div class="scrollToTop"><i class="icon-up-open-big"></i></div>

        <!-- header start -->
        <!-- ================ --> 
        <header class="header fixed clearfix navbar navbar-fixed-top">
            <div class="container">

                        <!-- header-right start -->
                        <!-- ================ -->
                        <div class="header-right clearfix">

                            <!-- main-navigation start -->
                            <!-- ================ -->
                            <div class="main-navigation animated">

                                <!-- navbar start -->
                                <!-- ================ -->
                                <nav class="navbar navbar-default" role="navigation">
                                    <div class="container-fluid">

                                        <!-- Toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>

        <!-- ********************************************************** -->
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
                                <!-- <div class="navbar-brand site-name">monk</div> -->
                                <ul class="nav navbar-nav navbar-right">
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
                                                    <a class="page-scroll" href="{{url($subdomain.'/ar')}}">{{$ar_menupages[$x]}}</a>
                                                </li>
                                            @endif 
                                            @if($urlpages[$x]=='services')   
                                                <li>
                                                    <a class="page-scroll" href="{{url($subdomain.'/ar')}}">{{$ar_menupages[$x]}}</a>
                                                </li>
                                            @endif
                                            @if($urlpages[$x]=='about')
                                                <li>
                                                    <a class="page-scroll" href="{{url($subdomain.'/ar')}}">{{$ar_menupages[$x]}}</a>
                                                </li>
                                            @endif
                                        @endfor
                                            @if($flagelang==0)
                                               <li>
                                                    <div class="btn-group dropdown">
                                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                                            <span class="lang-sm lang-lbl" lang="ar"></span> <span class="caret"></span>            
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a  href="{{url('/'.$subdomain.'/static_page/ar')}}"><span class="lang-sm lang-lbl" lang="ar"></span></a></li>                   
                                                            <li><a href="{{url('/'.$subdomain.'/static_page/en')}}"><span class="lang-sm lang-lbl" lang="en"></span></a></li>                     
                                                        </ul>
                                                    </div>
                                                </li>
                                               <?php $flagelang=1?> 
                                             @endif  

 
                                            </ul>
                                            
                                        <ul class="nav navbar-nav navbar-left">

                                            @for ($x = 0; $x < count($urlpages); $x++)
                                            @if($urlpages[$x]=='gallery')
                                                <li>
                                                    <a class="page-scroll" href="{{url($subdomain.'/ar')}}">{{$ar_menupages[$x]}}</a>
                                                </li>
                                            @endif
                                            @if($urlpages[$x]=='news')
                                                <li>
                                                    <a class="page-scroll" href="{{url($subdomain.'/ar')}}">{{$ar_menupages[$x]}}</a>
                                                </li>
                                            @endif
                                            @if($urlpages[$x]=='promotion')
                                                <li>
                                                    <a class="page-scroll" href="{{url($subdomain.'/ar')}}">{{$ar_menupages[$x]}}</a>
                                                </li>
                                            @endif
                                            @if($urlpages[$x]=='contact')
                                                <li>
                                                    <a class="page-scroll" href="{{url($subdomain.'/ar')}}">{{$ar_menupages[$x]}}</a>
                                                </li>
                                            @endif 
                                            <!-- for static page -->
                                            @if($urlpages[$x]!='contact' and $urlpages[$x]!='promotion' and $urlpages[$x]!='gallery' and $urlpages[$x]!='news' and $urlpages[$x]!='page_top' and $urlpages[$x]!='services' and $urlpages[$x]!='about')
                                                <li>
                                                    <a class="page-scroll" href="{{url($subdomain.'/ar')}}">{{$ar_menupages[$x]}}</a>
                                                </li>
                                            @endif 
                                            @endfor
                                            <!-- for static page outside -->
                                            @if($url_outside_pages)
                                            	@for ($x = 0; $x < count($url_outside_pages); $x++)
	                                            	<li>
	                                                    <a class="page-scroll" href="#{{str_replace(' ', '', str_replace('&', '', $url_outside_pages[$x]))}}">{{$ar_outside_menupages[$x]}}</a>
	                                                </li>
	                                                <?php 
	                                                // $findpage_top=1;
	                                                $outside=$ar_outside_menupages[$x];
	                                                array_push($pagearray_static, $url_outside_pages[$x]);
	                                                array_push($menuearray_static, $ar_outside_menupages[$x]);
	                                                ?>
	                                            
                                          		@endfor
                                            @endif
                                        </ul>
                            </div>

                        </div>
                    </nav>
                    <!-- navbar end -->

                </div>
                <!-- main-navigation end -->

            </div>
            <!-- header-right end -->

        </div>
    </div>
</div>
</header>
<!-- header end -->
<br/><br/> <br/>
@for($static=0; $static< count($url_outside_pages);$static++) 

<div class="section_space"></div> 
        <div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 id="<?php echo str_replace(' ', '', str_replace('&', '', $pagearray_static[$static]));?>" class="title text-center"><?php echo $staticpages[$static];?></h1>
                       <!--  <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta officia, aspernatur.</p>
                        <div class="space"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-rounded" src="images/portfolio-10.jpg" alt="">
                            </div>
                            <div class="col-md-6 abouty">
                                <div class="space"></div>
                            
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi adipisci illo, voluptatum ipsam fuga error commodi architecto, laudantium culpa tenetur at id, beatae placeat deserunt iure quas voluptas fugit eveniet.</p>
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo ducimus explicabo quibusdam temporibus deserunt doloremque pariatur ea, animi a. Delectus similique atque eligendi, enim vel reiciendis deleniti neque aliquid, sit?</p>
                        </div>
                            </div> -->

                            <?php echo "$containpages[$static]";?>
                        </div>
                        <div class="space"></div>
                        </div>
                    </div>
                </div>

          <!--  </div>                                                                                                           
        </div>-->
        <!-- section end -->


      <!--  <div class="line">
            <hr>
        </div>-->
        <div class="section_space"></div>
@endfor

<!-- <br/><br/><br/> -->
	@if($static==1)
        <div class="section_space"></div>
        <div class="section_space"></div>
        <!-- <div class="section_space"></div> -->
	@endif


<!-- .subfooter start -->
<!-- ================ -->
<div class="subfooter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="text-center">حقوق الملكية محفوظة ل  <a target="_blank" href="http://www.businessmonk.com">Businessmonk</a>.</p>  </div>
        </div>
    </div>
</div>
<!-- .subfooter end -->

</footer>
<!-- footer end -->

@include('../spirit/footer') 
