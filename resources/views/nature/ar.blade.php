<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
   @if(isset($header))

                 <title>{{ $header->company_name }}</title>
        @endif
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
     <link href="{{ url('/assets/bootstrap-3.2.0/css/bootstrap.min.css')}}" rel="stylesheet">
     
    <link rel="stylesheet" type="text/css"  href="{{ url('/assets/Temp2/en/css/bootstrap.css')}}">
      <link rel="stylesheet" type="text/css"  href="{{ url('/assets/Temp2/en/css/bootstrap.min.css')}}">
   
   
     <link rel="stylesheet" type="text/css"  href="{{ url('/assets/Temp2/en/css/animate.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/Temp2/en/fonts/font-awesome/css/font-awesome.css')}}">

    <!-- Slider
    ================================================== -->
    <link href="{{ url('/assets/Temp2/en/css/owl.carousel.css')}}" rel="stylesheet" media="screen">
    <link href="{{ url('/assets/Temp2/en/css/owl.theme.css')}}" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="{{ url('assets/Temp2/en/css/style.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ url('/assets/Temp2/en/css/languages.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/Temp2/en/css/responsive.css')}}">
    <!--  <link rel="stylesheet" type="text/css"  href="css/bootstrap-rtl.css"> --> 

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="{{ url('/assets/Temp2/en/js/modernizr.custom.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="{{ url('/assets/engine0/style.css')}}" />
	<script type="text/javascript" src="{{ url('/assets/engine0/jquery.js')}}"></script>
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
    .hover-text h2{
        color:{{ $mysite[0]->text_color }};
    }


  </style>

  </head>
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
    $menuearray_static=[];
    $pagearray_static=[];
?>
    
	

    <!--News section-->
    
  @if(isset($crusals) && $crusals != null)

  <div id="wowslider-container0">

  <div class="ws_images">
    <ul>
    <?php $count=0; ?>
    <?php 

    $crusals =  array_slice($crusals, 0, 4); 
    ?>
    
    @foreach($crusals as $crusal)
        <li><img src="{{ url('/assets/images/')}}{{ $crusal->image }}" alt="{{ $crusal->title }}" title="{{ $crusal->ar_title }}" id="wows0_{{ $count }}"/></li> 
        <?php $count++; ?>  
    @endforeach
    </ul>
  </div>

  <div class="ws_bullets">
  <div>
     @foreach($crusals as $crusal)
    <a href="#" title="{{ $crusal->ar_title }}"><span><img src="{{ url('/assets/images/')}}/{{ $crusal->image }}" alt="{{ $crusal->ar_title }}"/>
    </span></a>
    @endforeach
  </div>
  </div>

  <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">css slider</a> by WOWSlider.com v8.7
  </div>
  <div class="ws_shadow">
    
  </div>


  </div>  

  @endif

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
          @if(isset($header))
            <a class="navbar-brand" href="index.html"><img id="mylogo" src="{{ url('/') }}{{ $header->logo }}" ></a>
            <span style="font-size:32px;" class="comp_name">{{ $header->ar_company_name }}</span>
          @endif
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
                  <a class="page-scroll droid-arabic-kufi" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
              </li>
              <?php $findpage_top=1;
              $mypage_top=$ar_menupages[$x];?>
            @endif 
            @if($urlpages[$x]=='services')
                <li>
                    <a class="page-scroll droid-arabic-kufi" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                </li>
                <?php $findservices=1;
                $myservices=$ar_menupages[$x];?>
            @endif
            @if($urlpages[$x]=='about')
                <li>
                    <a class="page-scroll droid-arabic-kufi" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                </li>
                <?php $findabout=1;
                 $myabout=$ar_menupages[$x];?>
            @endif
            @if($urlpages[$x]=='gallery')
                <li>
                  <a class="page-scroll droid-arabic-kufi" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                </li>
                <?php $findgallery=1;
                $mygallery=$ar_menupages[$x];?>
            @endif
            @if($urlpages[$x]=='news')
                <li>
                    <a class="page-scroll droid-arabic-kufi" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                </li>
                <?php $findnews=1;
                $mynews=$ar_menupages[$x];?>
            @endif
            @if($urlpages[$x]=='promotion')
                <li>
                    <a class="page-scroll droid-arabic-kufi" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                </li>
                <?php $findpromotion=1;
                $mypromotion=$ar_menupages[$x];?>
            @endif
            @if($urlpages[$x]=='contact')
                <li>
                    <a class="page-scroll droid-arabic-kufi" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                </li>
                 <?php $findcontact=1;
                 $mycontact=$ar_menupages[$x];?>
            @endif  
            <!-- for static page -->
              @if($urlpages[$x]!='contact' and $urlpages[$x]!='promotion' and $urlpages[$x]!='gallery' and $urlpages[$x]!='news' and $urlpages[$x]!='page_top' and $urlpages[$x]!='services' and $urlpages[$x]!='about')
                  <li>
                      <a class="page-scroll" href="#{{str_replace(' ', '', str_replace('&', '', $urlpages[$x]))}}">{{$ar_menupages[$x]}}</a>
                  </li>
                   <?php
                    // $count_static+=1;
                   array_push($pagearray_static, $urlpages[$x]);
                   array_push($menuearray_static, $ar_menupages[$x]);?>
              @endif   
             @endfor

              @if($url_outside_pages)
                  @for ($x = 0; $x < count($url_outside_pages); $x++)
                      <li>
                          <a class="page-scroll" href="{{url($subdomain.'/static_page/ar')}}">{{$ar_outside_menupages[$x]}}</a>
                      </li>
                  
                  @endfor
              @endif


          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


    <!-- About Us Page
    ==========================================-->

    @if(isset($aboutus) && $aboutus != null)

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
                    <img id="myimg" src="{{ url('/assets/images/')}}{{ $aboutus->image }}" class="img-responsive wow fadeInLeft" data-wow-delay="0.2s">
                </div>
                <div class="col-md-6">
                    <div class="about-text wow fadeInRight" data-wow-delay="0.2s">

                        <p class="intro">{{ $aboutus->ar_description }}</p>
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

   @endif

    <!-- Services Section
    ==========================================-->
    @if(isset($services) && $services != null)

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

            <?php $services =  array_slice($services, 0, 4) ?>

            @for($i = 0; $i < count($services) ; $i++)
                 @if($i <= 1)
                  <div class="col-md-3 col-sm-6 service wow fadeInLeft" data-wow-delay="0.2s">
                      <i class="glyphicon {{ $services[$i]->icon }}" style="font-size: 50px;color:{{ $mysite[0]->text_color }};"></i>
                      <h4><strong>{{ $services[$i]->ar_title }}</strong></h4>
                      <p>{{ $services[$i]->ar_description }}</p>
                  </div>
                  @else
                  <div class="col-md-3 col-sm-6 service wow fadeInRight" data-wow-delay="0.2s">
                      <i class="glyphicon {{ $services[$i]->icon }}"></i>
                      <h4><strong>{{ $services[$i]->ar_title }}</strong></h4>
                      <p>{{ $services[$i]->ar_description }}</p>
                  </div>
                  @endif
               @endfor

            </div>
        </div>
    </div>

  @endif

     <!-- promotion Section
    ==========================================-->
    @if(isset($promotions) && $promotions != null)

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
                <div id="clients" class="owl-carousel owl-theme">


                @foreach($promotions as $promotion)

                    <div class="item">
                        <a href="#{{ $promotion->id }}"  data-toggle="modal" data-target="#{{ $promotion->id }}">
                        <div class="panel">
                                 <div class="panel-heading">
                                     <img src="{{ url('/assets/images/')}}{{ $promotion->image }}" width="160" height="181">
                                          <div class="panel-heading">
                                            <h1 class="panel-title">العرض</h1>
                                          </div>
                                 </div>
                            <div class="panel-body">
                               <h3><strong>{{ $promotion->ar_title }}</strong></h3>
                                 <hr class="myline">
                                 <h3 >{{ $promotion->ar_description }}</h3>
                                  <hr class="myline">
                                 <p ><strong>From:</strong>{{ $promotion->start_date }}</p>
                                <p ><strong>To:</strong>{{ $promotion->end_date }}</p>
                            </div>
                                </div>    
                                </a>
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
    @if(isset($cats_and_subcats) && $cats_and_subcats != null)

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

                            <li> <button class="btn btn-default btn-xs" type="button" id="buton1" style="margin-top: -42px;" ><a href="#" data-filter="*" class="active">الكل</a>
                            </button></li>

                            @foreach($cats_and_subcats as $cat_and_subcats)
                               <li>
                                  <div class="dropdown">
                                      <button class="btn btn-default btn-xs dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                          <a href="#" data-filter=".{{ $cat_and_subcats->name }}" class="active">{{ str_replace(' ', '', $cat_and_subcats->ar_name) }}</a>
                                          <span class="caret"></span>
                                      </button>

                                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

                                        @foreach($cat_and_subcats->subcategories as $sub)
                                              <li><a href="#" data-filter=".{{ $sub->name }}">{{ str_replace(' ', '', $sub->ar_name) }}</a></li>
                                        @endforeach
                                      </ul>
                                  </div>
                              </li>
                              @endforeach
                            
                        </ol>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div id="lightbox" class="row">

                @foreach($cats_and_subcats as $cat_and_subcats)
                  @foreach($cat_and_subcats->subcategories as $subcategory)
                    @foreach($subcategory->products as $product)

                      <div class="col-sm-6 col-md-3 col-lg-3 {{ $subcategory->name }} {{ $cat_and_subcats->name }}">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="#">
                                    <div class="hover-text">
                                        <h2>{{ $product->ar_name }}</h2>
                                        <small style="color:white">{{ $product->ar_price }}</small>
                                        <div class="clearfix"></div>
                                        <i class="fa fa-plus"></i>
                                    </div>
                                    <img src="{{ url('/assets/images') }}/{{$product->image}}" style="width: 300px;height: 300px;" class="img-responsive" alt="...">
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


    @foreach($cats_and_subcats as $cat_and_subcats)
        @foreach($cat_and_subcats->subcategories as $subcategory)
            @foreach($subcategory->products as $product)
                <div class="modal fade" id="product{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">

                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">{{ $product->ar_name }}</h4>
                            </div>
                            <div class="modal-body">
                                <p><img class="img-responsive" src="{{ url('/assets/images') }}/{{$product->image}}" alt="" ></p><br>
                                <p>{{ $product->ar_description }}</p><br>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div>
                </div>
            @endforeach
        @endforeach
    @endforeach

@endif

    <!-- News Section
    ==========================================-->
    @if(isset($news) && $news != null )

    <div id="news" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center wow bounceInDown">
                    <h2><strong></strong>الاخبار</h2>
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
                                <h5>{{ $new->ar_title }}</h5>
                                <p>{{ $new->ar_description }}</p>
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

    <!-- static  Section
    ==========================================-->
@for($static=0; $static< count($pagearray_static);$static++) 
    <div id="<?php echo str_replace(' ', '', str_replace('&', '', $pagearray_static[$static]));?>">
        <div class="container">
            <div class="row">
    <div class="section-title center wow fadeInDown" data-wow-delay="0.1s" >
            <br/><br/>

        <h2 class="text-center"><strong><?php echo $menuearray_static[$static];?></strong></h2>
        <div class="line">
            <hr>
        </div>
    </div>
        <div class="col-md-6">
            <img id="myimg" src="" class="img-responsive wow fadeInLeft" data-wow-delay="0.2s">
        </div>
        <div class="col-md-12">
            <!-- <div class="about-text wow fadeInRight" data-wow-delay="0.2s"> -->

               <?php echo "$containpages[$static]";?>

            <!-- </div> -->
        </div>
    </div>
</div>
</div>

   @endfor



    <!-- Contact Section
    ==========================================-->
    @if(isset($contacts) && $contacts != null)
    
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
                    @if(!empty($contact->facebook))
                      <li class="facebook"><a target="_blank" href="https://www.facebook.com/{{$contact->facebook}}"><i class="fa fa-facebook"></i></a></li>
                    @endif
                              @if(!empty($contact->twitter))  
                                  <li class="twitter"><a target="_blank" href="https://twitter.com/{{$contact->twitter}}"><i class="fa fa-twitter"></i></a></li>
                      @endif
                              @if(!empty($contact->google_plus))    
                                  <li class="googleplus"><a target="_blank" href="http://plus.google.com/{{$contact->google_plus}}"><i class="fa fa-google-plus"></i></a></li>
                    @endif
                              @if(!empty($contact->skype))  
                                  <li class="skype"><a target="_blank" href="http://www.skype.com/{{$contact->skype}}"><i class="fa fa-skype"></i></a></li>
                    @endif
                              @if(!empty($contact->linkedin)) 
                                  <li class="linkedin"><a target="_blank" href="http://www.linkedin.com/{{$contact->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                    @endif
                              @if(!empty($contact->youtube))  
                                  <li class="youtube"><a target="_blank" href="http://www.youtube.com/{{$contact->youtube}}"><i class="fa fa-youtube"></i></a></li>
                    @endif
                              @if(!empty($contact->flickr)) 
                                  <li class="flickr"><a target="_blank" href="http://www.flickr.com/{{$contact->flickr}}"><i class="fa fa-flickr"></i></a></li>
                    @endif
                              @if(!empty($contact->pinterest))  
                                  <li class="pinterest"><a target="_blank" href="http://www.pinterest.com/{{$contact->pinterest}}"><i class="fa fa-pinterest"></i></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav> 

  @endif
   
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

    @foreach($promotions as $promotion)
        <div class="modal fade" id="{{ $promotion->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document" style="z-index: inherit">

                <div class="modal-content">
                    <div class="modal-header" style="background: #09ab9b;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">{{ $promotion->ar_title }}</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <img class="img-responsive" src="{{ url('/assets/images/')}}{{ $promotion->image }}" alt="" >
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <p> {{ $promotion->ar_description }}</p>
                                From:<span style="margin-left: 10px;color: blue;"><b>{{ $promotion->start_date }}</b></span>
                                <br>
                                To:<span style="margin-left: 12px;color: blue;"><b>{{ $promotion->end_date }}</b></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
                    </div>
                </div><!-- /.modal-content -->
            </div>
        </div>
    @endforeach

  </body>
</html>