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
                                    // $count_static=1;
                                    // $findpage_top=0;
                                    // $findservices=0;
                                    // $findabout=0;
                                    // $findgallery=0;
                                    // $findnews=0;
                                    // $findpromotion=0;
                                    // $findcontact=0;
                                    $lat=0;
                                    $lng=0;
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

                                @for ($x = 0; $x < count($urlpages); $x++)

                                            @if($urlpages[$x]=='page_top')
                                                <!-- <li class="hidden">
                                                     <a href="#page-top"></a>
                                                 </li>-->
                                                <li>
                                                    <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                                                </li>
                                                <?php 
                                                // $findpage_top=1;
                                                $mypage_top=$ar_menupages[$x];?>
                                            @endif 
                                            @if($urlpages[$x]=='services')   
                                                <li>
                                                    <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                                                </li>
                                                <?php 
                                                // $findservices=1;
                                                $myservices=$ar_menupages[$x];?>
                                            @endif
                                            @if($urlpages[$x]=='about')
                                                <li>
                                                    <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                                                </li>
                                                <?php 
                                                // $findabout=1;
                                                 $myabout=$ar_menupages[$x];?>
                                            @endif
                                        @endfor
                                            @if($flagelang==0)
                                               <li>
                                                    <div class="btn-group dropdown">
                                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                                            <span class="lang-sm lang-lbl" lang="ar"></span> <span class="caret"></span>            
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a  href="{{url('/'.$subdomain.'/ar')}}"><span class="lang-sm lang-lbl" lang="ar"></span></a></li>                   
                                                            <li><a href="{{url('/'.$subdomain.'/en')}}"><span class="lang-sm lang-lbl" lang="en"></span></a></li>                     
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
                                                    <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                                                </li>
                                                <?php 
                                                // $findgallery=1;
                                                $mygallery=$ar_menupages[$x];?>
                                            @endif
                                            @if($urlpages[$x]=='news')
                                                <li>
                                                    <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                                                </li>
                                                <?php 
                                                // $findnews=1;
                                                $mynews=$ar_menupages[$x];?>
                                            @endif
                                            @if($urlpages[$x]=='promotion')
                                                <li>
                                                    <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                                                </li>
                                                <?php 
                                                // $findpromotion=1;
                                                $mypromotion=$ar_menupages[$x];?>
                                            @endif
                                            @if($urlpages[$x]=='contact')
                                                <li>
                                                    <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$ar_menupages[$x]}}</a>
                                                </li>
                                                 <?php
                                                  // $findcontact=1;
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


@if(isset($header) && $header != null)
<header>
<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8 hidden-sm hidden-xs object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn">
            <!--<h1 class="text-center"><span>Spirit</span></h1>-->
            <img class="img-responsive center-block" src="{{ url($header->logo)}}"/> 
            <h3 class="text-center">{{$header->ar_slogan}}</h3>

        </div>
    </div>
</div>
</header>
@endif

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

@if(isset($crusals) && $crusals != null)
<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
<?php $crusal_count=0;?>
@foreach($crusals as $crusal)
    @if($crusal_count == 0)
    <div class="item active">
    @else
    <div class="item">
    @endif
        <img src="{{ url('/assets/images/')}}/{{ $crusal->image }}" alt="image1">
    </div>
    <?php $crusal_count++; ?>
@endforeach

</div>
<!-- Controls -->
<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left hidden-sm hidden-xs" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right hidden-sm hidden-xs" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>


<!-- Indicators -->
<ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
@for($i=1 ;$i < count($crusals);$i++)
    <li data-target="#carousel-example-generic" data-slide-to="{{ $i }}"></li>
@endfor

</ol>
</div>

@endif
<div class="section_space"></div>

<!-- <div class="line">
<hr>
</div>
 -->
@if(isset($aboutus) && $aboutus != null)
<!-- section start -->
<!-- ================ -->

<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 id="about" class="title text-center"><?php echo $myabout;?></h1>
            <!-- <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta officia, aspernatur.</p> -->
            <div class="space"></div>
            <div class="row">
                <div class="col-md-6">
                    <?php $img='/assets/images'.$aboutus->image ?>
                    <img class="img-rounded" src="{{ url($img)}}" alt="">
                </div>
                <div class="col-md-6 abouty">
                    <div class="space"></div>
                        <p class='lead'>
                            {{$aboutus->ar_description}}
                        </p>
                    <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi adipisci illo, voluptatum ipsam fuga error commodi architecto, laudantium culpa tenetur at id, beatae placeat deserunt iure quas voluptas fugit eveniet.</p>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo ducimus explicabo quibusdam temporibus deserunt doloremque pariatur ea, animi a. Delectus similique atque eligendi, enim vel reiciendis deleniti neque aliquid, sit?</p> -->
            </div>
                </div>
            </div>
            <div class="space"></div>
            </div>
        </div>
    </div>
</div>
</div>
@endif
<!-- section end -->



<!-- <div class="line">
<hr>
</div> -->
<div class="section_space"></div>
<!-- section start -->
<!-- ================ -->
@if(isset($promotions) && $promotions != null)
<div class="section translucent-bg bg-image-2 pb-clear" style="background: url('{{ $mysite[0]->background_image }}') 50% 0px no-repeat;">
<div class="container object-non-visible" data-animation-effect="fadeIn">
    <h1 id="promotion" class="title text-center">العروض</h1>
    <div class="space"></div>
    <div id="move_p" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
        <?php $pro_count =0; ?>
        @foreach($promotions as $promotion)
             @if($pro_count == 0)
                <div class="item active pro-back"> 
            @else
                 <div class="item pro-back"> 
            @endif

            <div class="row">
                <div class="col-md-offset-1 col-md-4 ">
                    <img src="{{ url('/assets/images/')}}{{ $promotion->image }}" class="img-responsive img-pro">
                </div>
                <div class="col-md-offset-2"></div>
                <div class="col-md-4 col-md-push-2">
                    <div class="space"><p class="text-center">
                                        {{ $promotion->ar_description }}
                                        </p>
                                        </div>

                                        <div class="space"><span>من:</span>
                                        {{ $promotion->start_date }} 
                                        </div>
                                        <div class="space"><span>الي:</span>
                                        {{ $promotion->end_date }}
                                        </div>
                    <div class="space"></div>
                    <div>
                        <!-- <p><a class="btn view center-block" data-toggle="modal" data-target="#promotion-1" role="button">Know More</a></p> -->
                    </div>




                    <!-- Modal -->
                    <div class="modal fade" id="promotion-1" tabindex="-1" role="dialog" aria-labelledby="promotion-1-label" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"></span><span class="sr-only">غلاق</span></button>
                                    <h4 class="modal-title" id="promotion-1-label">promotion </h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">

                                            <p class="lead text-center">{{ $promotion->ar_description }} </p>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{ url('/assets/images/')}}{{ $promotion->image }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">اغلاق</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>

            <?php $pro_count++; ?>
        @endforeach
            </div>
        <ol class="carousel-indicators">
            <li data-target="#move_p" data-slide-to="0" class="active"></li>
             @for($i=1 ;$i < count($promotions);$i++)
                <li data-target="#move_p" data-slide-to="{{ $i }}"></li>
            @endfor
        </ol>
</div>
</div>
</div>
</div>
@endif


<!--end section-->
<!-- 
<div class="line">
<hr>
</div> -->
<div class="section_space"></div>
<!-- section start -->
<!-- ================ -->
@if(isset($services) && $services != null)
<div class="section" id="services">
<div class="container object-non-visible" data-animation-effect="fadeIn">
    <h1 class="text-center title"><?php echo $myservices;?></h1>
    <div class="space"></div>

    <div id="move_s" class="carousel slide" data-ride="carousel">


        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

        
            <?php $count=0; ?>
            @foreach($services as $service)
                @if($count == 0)
                    <div class="item active">
                         <div class="row">
                            <div class="col-md-offset-2 col-md-8 col-xs-12">
                                <div class="row text-center">
                @elseif($count % 3 == 0)
                         </div>
                        </div>
                      </div>
                    </div>

                
                    <div class="item">
                         <div class="row">
                            <div class="col-md-offset-2 col-md-8 col-xs-12">
                                <div class="row text-center">
                @endif

                
                    <div class="col-md-4 col-sm-8">
                    <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                <i class="glyphicon {{ $service->icon }} fa-stack-1x fa-inverse"></i>
                </span>
                                <h4 class="service-heading">{{ $service->ar_title }}</h4>
                                <p class="text-muted">{{ $service->ar_description }}</p>
                            </div>
                <?php $count++; ?>
            @endforeach

            @if($count % 3 != 0 )
                            </div>
                        </div>
                    </div>
                </div>
            @endif

           
        <?php $ind_num = ceil($count/3);?>
       
        </div>
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#move_s" data-slide-to="0" class="active"></li>
            @for($i =1;$i < $ind_num;$i++ )
                <li data-target="#move_s" data-slide-to="{{ $i }}"></li>
            @endfor
            
        </ol>

    </div>

</div>
</div>
<!-- section end -->
<!-- section start -->
<!-- ================ -->
<!-- <div class="default-bg space">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center">Let's Work Together!</h1>
        </div>
    </div>
</div>
</div> -->
<!-- section end -->
@endif 
<!-- <div class="line">
<hr>
</div> -->
<div class="section_space"></div>
<!--section Start-->
@if(isset($news) && $news != null)
<div class="section">
<div class="container object-non-visible" data-animation-effect="fadeIn">
    <h1 id="news"  class="text-center title"><?php echo $mynews;?></h1>
    <div class="space"></div>
    <!-- <p class="lead text-center">Know what is always new with us</p> -->
</div>
<div id="move" class="carousel slide" data-ride="carousel">


    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

         <?php $news_count=0; ?>
            @foreach($news as $new)
                @if($news_count == 0)
                   <div class="item active">
                        <div class="row">
                            <div class="col-md-offset-2 col-md-8 col-xs-12">
                                <div class="row">
                @elseif($news_count % 3 == 0)
                         </div>
                        </div>
                      </div>
                    </div>

                
                    <div class="item">
                         <div class="row">
                            <div class="col-md-offset-2 col-md-8 col-xs-12">
                                <div class="row">
                @endif
                    <div class="col-sm-4  wow fadeInDown text-center animated animated">
                            <img class="img-rounded img-responsive" src="{{ url('/assets/images/')}}{{ $new->image }}" alt="Generic placeholder image">
                            <h3>{{ $new->ar_title }}</h3>
                            <p class="lead text-center">{{ $new->ar_description }}</p>
                        </div>
                <?php $news_count++; ?>
            @endforeach
            @if($news_count % 3 != 0 )
                            </div>
                        </div>
                    </div>
                </div>
            @endif

    </div>
    <?php $news_ind_num = ceil($news_count/3);?>
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#move" data-slide-to="0" class="active"></li>
        @for($i =1;$i < $news_ind_num;$i++ )
            <li data-target="#move" data-slide-to="{{ $i }}"></li>
        @endfor
    </ol>
</div>
</div>

@endif
</div>

<!--section End-->

<!-- <div class="line">
<hr>
</div> -->
<div class="section_space"></div>
<!-- section start -->
<!-- ================ -->
@if($categories) 

    <div class="section">
            <div class="container">
                <h1 class="text-center title" id="gallery"><?php echo $mygallery;?></h1>
                <div class="separator"></div>
                <!-- <p class="lead text-center">Lorem ipsum dolor sit amet laudantium molestias similique.<br> Quisquam incidunt ut laboriosam.</p> -->
                <br>            
                <div class="row object-non-visible" data-animation-effect="fadeIn">
                    <div class="col-md-12">

                        <!-- isotope filters start -->
                        <div class="filters text-center">
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#" data-filter="*"> كل <?php echo $mygallery;?></a></li>
                                @foreach($categories as $category)                                                                                            
                                <li class="dropdown">
                                    <a class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        {{$category->ar_name}}
                                        <span class="caret"></span>
                                    </a>
                                    <?php $allsub='';?>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                         @foreach($subcategories as $subcategory)
                                            @if($category->id == $subcategory->category_id)
                                        <li><a href="#" data-filter=".{{str_replace(' ', '', str_replace('&', '', $subcategory->name))}}">{{$subcategory->ar_name}}</a></li>
                                            <?php 
                                                $sub='.'.$subcategory->name;
                                                $allsub=$sub.','.$allsub;
                                            ?>
                                            @endif
                                        @endforeach
                                        <li><a href="#" data-filter="<?php $all=trim($allsub, ", ");echo str_replace(' ', '', str_replace('&', '', $all));?>">الكل</a></li>    
                                    </ul>
                                </li>

                                @endforeach
                            </ul>
                        </div>
                        <!-- isotope filters end -->

                        <!-- portfolio items start -->
                        <div class="isotope-container row grid-space-20">
                               <?php $flagproject=1?>
                            @foreach($subcategories as $subcategory)
                            @for($prod=0; $prod< count($rand_product);$prod++)
                                <?php $index_prod=$rand_product[$prod]-1;?>
                                @if($subcategory->id == $cat_id_product[$index_prod])
                            <div class="col-sm-6 col-md-3 isotope-item {{str_replace(' ', '', str_replace('&', '', $subcategory->name))}}">
                                <div class="image-box">
                                    <div class="overlay-container">
                                        <img src="{{ url('/assets/images/'.$image_product[$index_prod])}}" alt="">
                                        <a class="overlay" data-toggle="modal" data-target="#project-<?php echo $flagproject?>">
                                            <i class="fa fa-search-plus"></i>
                                            <span>{{$subcategory->ar_name}}</span>
                                        </a>
                                    </div>
                                    <a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-<?php echo $flagproject?>">{{$ar_name_product[$index_prod]}}</a>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="project-<?php echo $flagproject?>" tabindex="-1" role="dialog" aria-labelledby="project-<?php echo $flagproject?>-label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">اغلاق</span></button>
                                                <h4 class="modal-title" id="project-<?php echo $flagproject?>-label">{{$ar_name_product[$index_prod]}}</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h3><u>{{$ar_name_product[$index_prod]}}</u></h3>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p>تفصيل وصف {{$ar_description_product[$index_prod]}}</p>
                                                        <hr/>
                                                        <h3><u>السعر {{$ar_name_product[$index_prod]}}</u></h3>
                                                        <p>{{$ar_price_product[$index_prod]}} جنيها</p>
                                                    </div>
                                                    <div class="col-md-1">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img src="{{ url('/assets/images/'.$image_product[$index_prod])}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">اغلاق</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal end -->
                            </div>
                         
                         <?php $flagproject+=1?>
                        @endif
                        @endfor
                    @endforeach
                    </div>
                        <!-- portfolio items end -->
                    
                    </div>
                </div>
            </div>
        </div>
        

<!-- emyyyyyyyyy Put part in show_ar -->
            </div>
            <!-- portfolio items end -->
        </div>
    </div>
</div>
</div>
<!-- section end -->
<!-- 
<div class="line">
<hr>
</div>  -->
@endif



<!-- staticpage start -->

<!-- =========================================== -->
<!-- section start -->
     @for($static=0; $static< count($pagearray_static);$static++) 
     <div class="section_space"></div> 
        <div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 id="<?php echo str_replace(' ', '', str_replace('&', '', $pagearray_static[$static]));?>" class="title text-center"><?php echo $menuearray_static[$static];?></h1>
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
 <!-- ============================================= -->
<!-- staticpage end -->



<!-- footer start -->
<!-- ================ -->
<footer id="footer">

<!-- .footer start -->
<!-- ================ -->
<div class="section_space"></div>
@if($contacts)    
<div class="footer section">
    <div class="container">
        <h1 class="title text-center" id="contact"><?php echo $mycontact;?></h1>
        <div class="space"></div>
        <div class="row">
            <div class="col-sm-6">
                @foreach($contacts as $contact)
                <div class="footer-content">
                    <p class="large"> </p>
                    <ul class="list-icons">
                        <li><i class="fa fa-map-marker pr-10"></i>{{$contact->ar_address}}</li>
                        <li><i class="fa fa-phone pr-10"></i> {{$contact->ar_phone}}</li>
                        <li><i class="fa fa-fax pr-10"></i>{{$contact->ar_mobile}}</li>
                        <li><i class="fa fa-envelope-o pr-10"></i>{{$contact->email}}</li>
                    </ul>
                    <ul class="social-links">
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
            <div class="col-sm-6">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="footer-content">
                    {!!Form::open(['route'=>'message.store','files'=>true,'method'=>'post','class'=>'form-horizontal']) !!}
                        <div class="form-group has-feedback">
                            <label class="sr-only" for="name2">اسم المرسل</label>
                            <input type="text" class="form-control" id="name2" placeholder="اسم المرسل" name="name" required value="{{old('name')}}">
                            <i class="fa fa-user form-control-feedback"></i>
                        </div>
                        <div class="form-group has-feedback">
                            <label class="sr-only" for="email2">البريد الإلكتروني</label>
                            <input type="email" class="form-control" id="email2" placeholder="البريد اﻹلكتروني" name="email" required value="{{old('email')}}">
                            <i class="fa fa-envelope form-control-feedback"></i>
                        </div>
                        <div class="form-group has-feedback">
                            <label class="sr-only" for="email2">العنوان</label>
                            <input type="text" class="form-control" id="email2" placeholder="العنوان" name="subject" required value="{{old('subject')}}">
                            <i class="fa fa-envelope form-control-feedback"></i>
                        </div>
                        <div class="form-group has-feedback">
                            <label class="sr-only" for="message2">الرساله</label>
                            <textarea class="form-control" rows="8" id="message2" placeholder="محتوى الرساله" name="content" required>{{old('content')}}</textarea>
                            <i class="fa fa-pencil form-control-feedback"></i>
                        </div>
                        @foreach($mysite as $site)
                             <input type="hidden" class="form-control" id="site_id"  name="site_id"  value="{{$site->id}}">
                         @endforeach
                        <input type="submit" value="أرسل" class="btn btn-default">
                        <br/><br/>
                    {!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
      
            <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
            <div style='height:440px;width:100%;'>
                <div id='gmap_canvas' style='height:440px;width:100%;'>
                    
                </div><style>#gmap_canvas img{max-width:none!important;background:none!important;}</style>

            </div>
            <script type='text/javascript'>function init_map(){var myOptions = {zoom:13,center:new google.maps.LatLng({{$contact->lat}},{{$contact->lng}}),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng({{$contact->lat}},{{$contact->lng}})});infowindow = new google.maps.InfoWindow({content:'<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;العنوان</strong><br>{{$contact->ar_address}}<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
        </div>
    </div>
  @endforeach  
</div>

@endif
<!-- .footer end -->
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
