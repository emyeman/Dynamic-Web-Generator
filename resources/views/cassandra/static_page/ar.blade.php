@include('../cassandra/header')
<!--Arabic language -->
    <link href="{{url('assets/css/bootstrap-rtl.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/arabic-style.css')}}" rel="stylesheet">

</head>

<!-- use "theme-invert" class on bright backgrounds, also try "text-shadows" class -->
<body class="theme-invert">

<nav class="mainmenu">
  <div class="container-fluid hidden-lg hidden-md">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header ">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
   
    </div>
<!-- ********************************************************************** -->
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav hidden-lg hidden-md ">
        <?php  
        $flagelang=0;
        $static=0;
        $outside='';
        $menuearray_static=[];
        $pagearray_static=[];
        ?>

        @for ($x = 0; $x < count($urlpages); $x++)

            @if($urlpages[$x]=='page_top')
                 <li>
                    <a class="notaDiv" href="{{url($subdomain.'/ar')}}">{{$ar_menupages[$x]}}</a>
                </li>
            @endif 
            @if($urlpages[$x]=='services')   
                <li>
                    <a  class="notaDiv" href="{{url($subdomain.'/ar')}}">{{$ar_menupages[$x]}}</a>
                </li>
            @endif
            @if($urlpages[$x]=='about')
                <li>
                    <a class="notaDiv"  href="{{url($subdomain.'/ar')}}">{{$ar_menupages[$x]}}</a>
                </li>
            @endif
            @if($urlpages[$x]=='gallery')
                <li>
                    <a class="notaDiv"  href="{{url($subdomain.'/ar')}}">{{$ar_menupages[$x]}}</a>
                </li>
            @endif
            @if($urlpages[$x]=='news')
                <li>
                    <a class="notaDiv"  href="{{url($subdomain.'/ar')}}">{{$ar_menupages[$x]}}</a>
                </li>
            @endif
            @if($urlpages[$x]=='promotion')
                <li>
                    <a class="notaDiv"  href="{{url($subdomain.'/ar')}}">{{$ar_menupages[$x]}}</a>
                </li>
            @endif
            @if($urlpages[$x]=='contact')
                <li>
                    <a class="notaDiv" href="{{url($subdomain.'/ar')}}">{{$ar_menupages[$x]}}</a>
                </li>
            @endif 
            <!-- for static page -->
            @if($urlpages[$x]!='contact' and $urlpages[$x]!='promotion' and $urlpages[$x]!='gallery' and $urlpages[$x]!='news' and $urlpages[$x]!='page_top' and $urlpages[$x]!='services' and $urlpages[$x]!='about')
                <li>
                    <a class="notaDiv" href="{{url($subdomain.'/ar')}}">{{$ar_menupages[$x]}}</a>
                </li>
            @endif
            @endfor
             <!-- for static page outside -->
            @if($url_outside_pages)
            <?php $fstatic=0;?>
                @for ($x = 0; $x < count($url_outside_pages); $x++)
                    <li>
                        @if($fstatic==0)
                            <a class="active"  href="#{{str_replace(' ', '', str_replace('&', '', $url_outside_pages[$x]))}}">{{$ar_outside_menupages[$x]}}</a>
                            <?php $fstatic=1;?>
                        @else
                            <a  href="#{{str_replace(' ', '', str_replace('&', '', $url_outside_pages[$x]))}}">{{$ar_outside_menupages[$x]}}</a>
                        @endif
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
                                    
        
    <div class="container header fixed clearfix navbar navbar-fixed-top hidden-xs hidden-sm">
        <div class="row">
            <div class="col-md-offset-3 col-md-7">
                <ol class="breadcrumb" id="menu">
                    @for ($x = 0; $x < count($urlpages); $x++)

                        @if($urlpages[$x]=='page_top')
                             <li>
                                <a class="notaDiv" href="#head">{{$ar_menupages[$x]}}</a>
                            </li>
                        @endif 
                        @if($urlpages[$x]=='services')   
                            <li>
                                <a class="notaDiv"  href="{{url($subdomain.'/ar')}}">{{$ar_menupages[$x]}}</a>
                            </li>
                        @endif
                        @if($urlpages[$x]=='about')
                            <li>
                                <a class="notaDiv"  href="{{url($subdomain.'/ar')}}">{{$ar_menupages[$x]}}</a>
                            </li>
                        @endif
                        @if($urlpages[$x]=='gallery')
                            <li>
                                <a class="notaDiv"  href="{{url($subdomain.'/ar')}}">{{$ar_menupages[$x]}}</a>
                            </li>
                        @endif
                        @if($urlpages[$x]=='news')
                            <li>
                                <a class="notaDiv"  href="{{url($subdomain.'/ar')}}">{{$ar_menupages[$x]}}</a>
                            </li>
                        @endif
                        @if($urlpages[$x]=='promotion')
                            <li>
                                <a class="notaDiv"  href="{{url($subdomain.'/ar')}}">{{$ar_menupages[$x]}}</a>
                            </li>
                        @endif
                        @if($urlpages[$x]=='contact')
                            <li>
                                <a class="notaDiv" href="{{url($subdomain.'/ar')}}">{{$ar_menupages[$x]}}</a>
                            </li>
                        @endif 
                        <!-- for static page -->
                        @if($urlpages[$x]!='contact' and $urlpages[$x]!='promotion' and $urlpages[$x]!='gallery' and $urlpages[$x]!='news' and $urlpages[$x]!='page_top' and $urlpages[$x]!='services' and $urlpages[$x]!='about')
                            <li>
                                <a class="notaDiv" href="{{url($subdomain.'/ar')}}">{{$ar_menupages[$x]}}</a>
                            </li>
                            
                        @endif
                        @endfor
                        <!-- for static page outside -->
                        @if($url_outside_pages)
                        <?php $fstaic=0;?>
                            @for ($x = 0; $x < count($url_outside_pages); $x++)
                                <li>
                                    @if($fstaic==0)
                                        <a class="active"  href="#{{str_replace(' ', '', str_replace('&', '', $url_outside_pages[$x]))}}">{{$ar_outside_menupages[$x]}}</a>
                                        <?php $fstaic=1;?>
                                    @else
                                        <a  href="#{{str_replace(' ', '', str_replace('&', '', $url_outside_pages[$x]))}}">{{$ar_outside_menupages[$x]}}</a>
                                    @endif
                                </li>
                            
                            @endfor
                        @endif
                    </ol>
                </div>
    
    
    <div class="btn-group btn-default dropdown">
        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
            <span class="lang-sm lang-lbl" lang="ar"></span> <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
        <li class="space"></li>
            <li><a href="{{url('/'.$subdomain.'/ar')}}" class="notaDiv"><span class="lang-sm lang-lbl" lang="ar"></span></a></li>                               
            <li><a href="{{url('/'.$subdomain.'/en')}}" class="notaDiv"><span class="lang-sm lang-lbl" lang="en"></span></a></li>                               
        </ul>
    </div> 

        </div> 
        
    </div>
    </nav>



<!-- ========================================================= -->
<!-- start staticpage -->

@for($static=0; $static< count($url_outside_pages);$static++) 

<section class="section" id="<?php echo str_replace(' ', '', str_replace('&', '', $pagearray_static[$static]));?>">
    <div class="container">
    
        <h2 class="text-center title"><?php echo $staticpages[$static];?></h2>
        <div class="row backg">
        <?php echo "$containpages[$static]";?>
        </div>
    </div>
</section>
@endfor        

<!-- end staticpage -->
<!-- =========================================================== -->


@include('../cassandra/footer')

