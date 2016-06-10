<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Spirit template</title>
        <meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
        <meta name="author" content="htmlcoder.me">

        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <!-- Web Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

        <link href="{{ url('/assets/bootstrap-3.2.0/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="{{ url('/assets/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

        

         <link rel="stylesheet" href="{{ url('/assets/bootstrap-iconpicker/css/bootstrap-iconpicker.min.css')}}"/>

        <!-- Font Awesome CSS -->
        <link href="{{ url('/assets/fonts/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

        <!--flag font-->
        <link href="{{ url('/assets/css/languages.min.css')}}" rel="stylesheet">

        <!-- Plugins -->
        <link href="{{ url('/assets/css/animations.css')}}" rel="stylesheet">

        

        <!-- Worthy core CSS file -->
        <link href="{{ url('/assets/css/style.css')}}" rel="stylesheet">

        <!-- Custom css --> 
        <link href="{{ url('/assets/css/custom.css')}}" rel="stylesheet">
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

                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
                                            <ul class="nav navbar-nav navbar-right">
                                                    <?php $flagelang=0?>
                                                    <?php $findpage_top=0?>
                                                    <?php $findservices=0?>
                                                    <?php $findabout=0?>
                                                    <?php $findgallery=0?>
                                                    <?php $findnews=0?>
                                                    <?php $findpromotion=0?>
                                                    <?php $findcontact=0?>
                                                    @for ($x = 0; $x < count($urlpages); $x++)

                                                        @if($urlpages[$x]=='page_top')
                                                            <!-- <li class="hidden">
                                                                 <a href="#page-top"></a>
                                                             </li>-->
                                                            <li>
                                                                <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$menupages[$x]}}</a>
                                                            </li>
                                                            <?php $findpage_top=1?>
                                                        @endif 
                                                        @if($urlpages[$x]=='services')   
                                                            <li>
                                                                <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$menupages[$x]}}</a>
                                                            </li>
                                                            <?php $findservices=1?>
                                                        @endif
                                                        @if($urlpages[$x]=='about')
                                                            <li>
                                                                <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$menupages[$x]}}</a>
                                                            </li>
                                                            <?php $findabout=1?>
                                                        @endif
                                                        @if($flagelang==1)
                                                            <li>
                                                                <div class="btn-group dropdown">
                                                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                                                        <span class="lang-sm lang-lbl-full" lang="en"></span> <span class="caret"></span>
                                                                    </button>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li><a><span class="lang-sm lang-lbl-full" lang="ar"></span></a></li>
                                                                        <li><a><span class="lang-sm lang-lbl-full" lang="en"></span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                           <?php $flagelang=1?> 
                                                         @endif   
                                                        </ul>
                                                        <ul class="nav navbar-nav navbar-left">
                                                        @if($urlpages[$x]=='gallery')
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle " href="#{{$urlpages[$x]}}" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$menupages[$x]}}<span class="caret"></span></a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a  class="page-scroll" href="#gallery">Type1</a></li>
                                                                    <li><a  class="page-scroll" href="#gallery">Type2</a></li>
                                                                    <li><a class="page-scroll" href="#gallery">Type3</a></li>
                                                                </ul>
                                                            </li>
                                                            <?php $findgallery=1?>
                                                        @endif
                                                        @if($urlpages[$x]=='news')
                                                            <li>
                                                                <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$menupages[$x]}}</a>
                                                            </li>
                                                            <?php $findnews=1?>
                                                        @endif
                                                        @if($urlpages[$x]=='promotion')
                                                            <li>
                                                                <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$menupages[$x]}}</a>
                                                            </li>
                                                            <?php $findpromotion=1?>
                                                        @endif
                                                        @if($urlpages[$x]=='contact')
                                                            <li>
                                                                <a class="page-scroll" href="#{{$urlpages[$x]}}">{{$menupages[$x]}}</a>
                                                            </li>
                                                             <?php $findcontact=1?>
                                                        @endif    
                                                            
                                                    @endfor
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
    @if($findpage_top==1)
        @if($header)
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 hidden-sm hidden-xs object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn">
                        <!--<h1 class="text-center"><span>Spirit</span></h1>-->
                        <img class="img-responsive center-block" src="{{ url($header->logo)}}"/> 
                        <h3 class="text-center">{{$header->slogan}}</h3>

                    </div>
                </div>
            </div>
        </header>
        @endif

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        
        @if($crusals)

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
    @endif  
    
    @if($findabout==1)
      @if($aboutus)
        <div class="line">
            <hr>
        </div>


        <!-- section start -->
		<!-- ================ -->
        
		<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 id="about" class="title text-center">About</h1>
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
                                        {{$aboutus->description}}
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


        <div class="line">
            <hr>
        </div>
    @endif
        <!-- section start -->
        <!-- ================ -->
    @if($findpromotion==1)    
        @if($promotions)
        <div class="section translucent-bg bg-image-2 pb-clear">
            <div class="container object-non-visible" data-animation-effect="fadeIn">
                <h1 id="promotion" class="title text-center">Promotion</h1>
                <div class="space"></div>
                <div id="move_p" class="carousel slide" data-ride="carousel">


                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                    <?php $pro_count =0; ?>
                    @foreach($promotions as $promotion)
                        @if($pro_count == 0)
                            <div class="item active">
                        @else
                            <div class="item"> 
                        @endif
                         
                            <p class="text-center">{{ $promotion->description }}</p>
                            <p><a class="btn btn-primary view center-block" role="button">know more</a></p>
                        </div>
                        <?php $pro_count++; ?>
                    @endforeach


                    </div>

                    <!-- Indicators -->
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

        <div class="line">
            <hr>
        </div>
    @endif
		<!-- section start -->
		<!-- ================ -->
    @if($findservices==1)    
        @if($services)
           <div class="section" id="services">
            <div class="container object-non-visible" data-animation-effect="fadeIn">
                <h1 class="text-center title">Services</h1>
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
                                            <h4 class="service-heading">{{ $service->title }}</h4>
                                            <p class="text-muted">{{ $service->description }}</p>
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
		<div class="default-bg space">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="text-center">Let's Work Together!</h1>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->
    @endif 
@endif
        <div class="line">
            <hr>
        </div>

        <!--section Start-->
    @if($findnews==1)    
        @if($news)
        <div class="section">
            <div class="container object-non-visible" data-animation-effect="fadeIn">
                <h1 id="news"  class="text-center title">News</h1>
                <div class="space"></div>
                <p class="lead text-center">Know what is always new with us</p>
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
                                        <h3>{{ $new->title }}</h3>
                                        <p class="lead text-center">{{ $new->description }}</p>
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

        <div class="line">
            <hr>
        </div>
    @endif
		<!-- section start -->
		<!-- ================ -->
    @if($findgallery==1)
    @if($categories)    
		<div class="section">
			<div class="container">
				<h1 class="text-center title" id="gallery">Portfolio</h1>
				<div class="separator"></div>
				<p class="lead text-center">Lorem ipsum dolor sit amet laudantium molestias similique.<br> Quisquam incidunt ut laboriosam.</p>
				<br>			
				<div class="row object-non-visible" data-animation-effect="fadeIn">
					<div class="col-md-12">

						<!-- isotope filters start -->
						<div class="filters text-center">
							<ul class="nav nav-pills">
								<li class="active"><a href="#" data-filter="*">All</a></li>
                                @foreach($categories as $category)
								    <li><a href="#" data-filter=".{{$category->name}}">{{$category->name}}</a></li>
                                @endforeach
                                <!-- <li><a href="#" data-filter=".web-design">Web design</a></li>
								<li><a href="#" data-filter=".app-development">App development</a></li>
								<li><a href="#" data-filter=".site-building">Site building</a></li> -->
							</ul>
						</div>
						<!-- isotope filters end -->

						<!-- portfolio items start -->
						<div class="isotope-container row grid-space-20">
    <!-- start emyyyyyyyyyyyyyyyy -->
                            <?php $flagproject=1?>
                            @foreach($categories as $category)
							<div class="col-sm-6 col-md-3 isotope-item {{$category->name}}">
								<div class="image-box">
									<div class="overlay-container">
										<img src="{{ url('/assets/images/'.$category->image)}}" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-<?php echo $flagproject?>">
											<i class="fa fa-search-plus"></i>
											<span>{{$category->name}}</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-<?php echo $flagproject?>">{{$category->name}}</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-<?php echo $flagproject?>" tabindex="-1" role="dialog" aria-labelledby="project-<?php echo $flagproject?>-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-<?php echo $flagproject?>-label">{{$category->name}}</h4>
											</div>
											<div class="modal-body">
												<h3>{{$category->name}} Description</h3>
												<div class="row">
													<div class="col-md-6">
														<p>{{$category->description}}</p>
													</div>
													<div class="col-md-6">
														<img src="{{ url('/assets/images/'.$category->image)}}" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
                            <?php $flagproject+=1?>
                            @endforeach
<!-- endemyyyyyyyyyyyyyyyy -->
			


        <!-- emyyyyyyyyy Put part in show_ar -->
                        </div>
                        <!-- portfolio items end -->
                    
                    </div>
                </div>
            </div>
        </div>
        
		<!-- section end -->

        <div class="line">
            <hr>
        </div>
    @endif
    @endif
		<!-- section start -->
		<!-- ================ -->

		<!-- section end -->



		<!-- footer start -->
		<!-- ================ -->
		<footer id="footer">

			<!-- .footer start -->
			<!-- ================ -->
        @if($findcontact==1)
        @if($contacts)    
			<div class="footer section">
				<div class="container">
					<h1 class="title text-center" id="contact">Contact Us</h1>
					<div class="space"></div>
					<div class="row">
						<div class="col-sm-6">
                            @foreach($contacts as $contact)
							<div class="footer-content">
								<p class="large">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel nam magnam natus tempora cumque, aliquam deleniti voluptatibus voluptas. Repellat vel, et itaque commodi iste ab, laudantium voluptas deserunt nobis.</p>
								<ul class="list-icons">
									<li><i class="fa fa-map-marker pr-10"></i>{{$contact->address}}</li>
									<li><i class="fa fa-phone pr-10"></i> {{$contact->phone}}</li>
									<li><i class="fa fa-fax pr-10"></i>{{$contact->mobile}}</li>
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
                                    <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
								@endif
                                @if(!empty($contact->skype))	
                                    <li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
								@endif
                                @if(!empty($contact->linkedin))	
                                    <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
								@endif
                                @if(!empty($contact->youtube))	
                                    <li class="youtube"><a target="_blank" href="http://www.youtube.com/{{$contact->youtube}}"><i class="fa fa-youtube"></i></a></li>
								@endif
                                @if(!empty($contact->flickr))	
                                    <li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
								@endif
                                @if(!empty($contact->pinterest))	
                                    <li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
								@endif
                                </ul>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="footer-content">
								<form role="form" id="footer-form">
									<div class="form-group has-feedback">
										<label class="sr-only" for="name2">Name</label>
										<input type="text" class="form-control" id="name2" placeholder="Name" name="name2" required>
										<i class="fa fa-user form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="email2">Email address</label>
										<input type="email" class="form-control" id="email2" placeholder="Enter email" name="email2" required>
										<i class="fa fa-envelope form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="sr-only" for="message2">Message</label>
										<textarea class="form-control" rows="8" id="message2" placeholder="Message" name="message2" required></textarea>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
									<input type="submit" value="Send" class="btn btn-default">
								</form>
							</div>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="col-xs-12">
                        <div id="emygoogleMap" style="width:100%;height:700px;">
                            <!-- for show google map -->
                            @if ($contact->lat != 0.0 or $contact->lng != 0.0 )
                                <img style="width:100%;height:700px;" src='http://maps.googleapis.com/maps/api/staticmap?center={{$contact->lat}},{{$contact->lng}}&markers=color:blue|label:N|{{$contact->lat}},{{$contact->lng}}&zoom=15&size=1057x600&sensor=false'/>
                            @endif 
                        </div>
                    </div>
                </div>
              @endforeach  
			</div>
        @endif
        @endif
			<!-- .footer end -->

			<!-- .subfooter start -->
			<!-- ================ -->
			<div class="subfooter">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="text-center">Copyright © 2014 Worthy by  <a target="_blank" href="http://www.businessmonk.com">Businessmonk</a>.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- .subfooter end -->

		</footer>
		<!-- footer end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="{{ url('/assets/plugins/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js')}}"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="{{ url('/assets/plugins/modernizr.js')}}"></script>

        <script type="text/javascript" src="{{ url('/assets/bootstrap-iconpicker/js/bootstrap-iconpicker.min.js') }}"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="{{ url('/assets/plugins/isotope/isotope.pkgd.min.js')}}"></script>
		
		<!-- Backstretch javascript -->
		<script type="text/javascript" src="{{ url('/assets/plugins/jquery.backstretch.min.js')}}"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="{{ url('/assets/plugins/jquery.appear.js')}}"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="{{ url('/assets/js/template.js')}}"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="{{ url('/assets/js/custom.js')}}"></script>

        <script
                src="http://maps.googleapis.com/maps/api/js">
        </script>

        // <script>
        //     function initialize() {
        //         var mapProp = {
        //             // foreach($contacts in $contact){
        //             //     if ($contact->lat != 0.0 or $contact->lng != 0.0) {
        //             //         center:new google.maps.LatLng($contact->lat,$contact->lng),
        //             //         zoom:5,
        //             //         mapTypeId:google.maps.MapTypeId.ROADMAP
        //             //     };
        //             // }
        //         };
        //         var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
        //     }
        //     google.maps.event.addDomListener(window, 'load', initialize);

        // </script>
	</body>
</html>
