@include('../temp1/header')
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
                                        <a class="page-scroll" href="#page_top">الرئيسية</a>
                                    </li>
                                    <?php $findpage_top=1?>
                                    @endif 
                                    @if($urlpages[$x]=='services')   
                                    <li>
                                        <a class="page-scroll" href="#services">الخدمات</a>
                                    </li>
                                     <?php $findservices=1?>
                                    @endif
                                    @if($urlpages[$x]=='about')
                                    <li>
                                        <a class="page-scroll" href="#about">من نحن</a>
                                    </li>
                                    <?php $findabout=1?>
                                    @endif
                                    @if($flagelang==0)
                                    <li>
                                        <div class="btn-group dropdown">
                                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                                <span class="lang-sm lang-lbl-full" lang="ar"></span> <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="{{url('/'.$subdomain.'/ar')}}"><span class="lang-sm lang-lbl-full" lang="ar"></span></a></li>
                                                <li><a href="{{url('/'.$subdomain.'/en')}}"><span class="lang-sm lang-lbl-full" lang="en"></span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <?php $flagelang=1?> 
                                @endif
                                </ul>
                                <ul class="nav navbar-nav navbar-left">
                                @if($urlpages[$x]=='gallery')
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle " href="#gallery" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">المنتجات <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a  class="page-scroll" href="#gallery">النوع الاول</a></li>
                                            <li><a  class="page-scroll" href="#gallery">النوع الثاني</a></li>
                                            <li><a class="page-scroll" href="#gallery">النوع الثالث</a></li>
                                        </ul>
                                    </li>
                                    <?php $findgallery=1?>
                                @endif
                                @if($urlpages[$x]=='news')
                                    <li>
                                        <a class="page-scroll" href="#news">الأخبار</a>
                                    </li>
                                    <?php $findnews=1?>
                                @endif
                                @if($urlpages[$x]=='promotion')    
                                    <li>
                                        <a class="page-scroll" href="#promotion">العروض</a>
                                    </li>
                                    <?php $findpromotion=1?>
                                @endif
                                @if($urlpages[$x]=='contact')
                                    <li>
                                        <a class="page-scroll" href="#contact">تواصل معنا</a>
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



<header>
<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8 hidden-sm hidden-xs object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn">
            <!--<h1 class="text-center"><span>Spirit</span></h1>-->
            <img class="img-responsive center-block" src="images/logo.png"/>
            <h3 class="text-center">لأنك تستحق الأفضل</h3>

        </div>
    </div>
</div>
</header>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
    <div class="item active">
        <img src="images/1.jpg" alt="image1">
    </div>
    <div class="item">
        <img src="images/2.jpg" alt="image2">
    </div>
    <div class="item">
        <img src="images/3.jpg" alt="image3">
    </div>
</div>

<!-- Controls -->
<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left hidden-sm hidden-xs" aria-hidden="true"></span>
    <span class="sr-only">السابق</span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right hidden-sm hidden-xs" aria-hidden="true"></span>
    <span class="sr-only">التالي</span>
</a>


<!-- Indicators -->
<ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
</ol>

</div>


<div class="line">
<hr>
</div>


<!-- section start -->
<!-- ================ -->
<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 id="about" class="title text-center">من نحن</h1>
			<p class="lead text-center">مسارح البولندي هو به،. يبق إذ إعمار قتيل، وبحلول, أم العصبة والمعدات به،. حدى ٣٠ تزامناً الدّفاع, الى ان نقطة وقام لفشل.</p>
			<div class="space"></div>
			<div class="row">
				<div class="col-md-6">
					<img class="img-rounded" src="images/portfolio-10.jpg" alt="">
					<div class="space"></div>
				</div>
				<div class="col-md-6 abouty">
                    <p>
                        مسارح البولندي هو به،. يبق إذ إعمار قتيل، وبحلول, أم العصبة والمعدات به،. حدى ٣٠ تزامناً الدّفاع, الى ان نقطة وقام لفشل. بسبب بلاده الساحلية في ضرب, أي شيء وقبل شاسعة عالمية. يكن لم أهّل النزاع, وسمّيت الإقتصادية جهة في, مدن أن وقوعها، بمعارضة. قد جيما حلّت فاتّبع بال. اليابان العالمية من بها.

                    </p>
                    <p>
                        مسارح البولندي هو به،. يبق إذ إعمار قتيل، وبحلول, أم العصبة والمعدات به،. حدى ٣٠ تزامناً الدّفاع, الى ان نقطة وقام لفشل. بسبب بلاده الساحلية في ضرب, أي شيء وقبل شاسعة عالمية. يكن لم أهّل النزاع, وسمّيت الإقتصادية جهة في, مدن أن وقوعها، بمعارضة. قد جيما حلّت فاتّبع بال. اليابان العالمية من بها.

                    </p>
				
				</div>
			</div>
			<div class="space"></div>
			</div>
        </div>
    </div>
</div>
</div>
<!-- section end -->


<div class="line">
<hr>
</div>

<!-- section start -->
<!-- ================ -->
<div class="section translucent-bg bg-image-2 pb-clear">
<div class="container object-non-visible" data-animation-effect="fadeIn">
    <h1 id="promotion" class="title text-center">العروض</h1>
    <div class="space"></div>
    <div id="move_p" class="carousel slide" data-ride="carousel">


        <!-- Wrapper for slides -->
        <div class="carousel-inner center-block" role="listbox">

            <div class="item active">
				<div class="row">
				<div class="col-md-3 col-md-push-1">
				<img src="images/pro.jpg" class="img-responsive">
				</div>
				<div class="col-md-6 col-md-push-1">
                <p class="text-center">كان مشروط وحرمان يكن هو, أضف وبدون المعاهدات تشيكوسلوفاكيا و. عدد ثم الحكم لإعادة التجارية, المواد تكتيكاً دنو أي, هامش فكان فرنسية قد شيء. بال يذكر والحزب للأراضي تم, انتباه الإقتصادية الأوروبيّون عل جعل. والتي الشتاء، المؤلّفة عن عرض. تمهيد الولايات حتى لم.</p>
				</div>
				<div class="col-md-12">
                <p><a class="btn btn-primary view center-block" role="button">أعرف المزيد</a></p>
				</div>

				</div>
            </div>
            <div class="item">
                <div >
                    <p class="text-center">كان مشروط وحرمان يكن هو, أضف وبدون المعاهدات تشيكوسلوفاكيا و. عدد ثم الحكم لإعادة التجارية, المواد تكتيكاً دنو أي, هامش فكان فرنسية قد شيء. بال يذكر والحزب للأراضي تم, انتباه الإقتصادية الأوروبيّون عل جعل. والتي الشتاء، المؤلّفة عن عرض. تمهيد الولايات حتى لم.</p>
                    <p><a class="btn btn-primary view center-block" role="button">أعرف المزيد</a></p>
                </div>
            </div>
            <div class="item">
                <div >
                    <p class="text-center">كان مشروط وحرمان يكن هو, أضف وبدون المعاهدات تشيكوسلوفاكيا و. عدد ثم الحكم لإعادة التجارية, المواد تكتيكاً دنو أي, هامش فكان فرنسية قد شيء. بال يذكر والحزب للأراضي تم, انتباه الإقتصادية الأوروبيّون عل جعل. والتي الشتاء، المؤلّفة عن عرض. تمهيد الولايات حتى لم.</p>
                    <p><a class="btn btn-primary view center-block" role="button">أعرف المزيد</a></p>
                </div>
            </div>

        </div>

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#move_p" data-slide-to="0" class="active"></li>
            <li data-target="#move_p" data-slide-to="1"></li>
            <li data-target="#move_p" data-slide-to="2"></li>
        </ol>


    </div>
</div>
</div>
<!--end section-->

<div class="line">
<hr>
</div>

<!-- section start -->
<!-- ================ -->
<div class="section" id="services">
<div class="container object-non-visible" data-animation-effect="fadeIn">
	<h1 class="text-center title">ألخدمات</h1>
	<div class="space"></div>

    <div id="move_s" class="carousel slide" data-ride="carousel">


        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 col-xs-12">



                        <div class="row text-center">
                            <div class="col-md-4 col-sm-8">
        <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
        </span>
                                <h4 class="service-heading">خدمة الكترونية</h4>
                                <p class="text-muted">ألمّ الشتاء بحث بل. أخر وصغار الأراضي للإتحاد ما, من يطول لإعلان بالفشل إيو.</p>
                            </div>
                            <div class="col-md-4">
        <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
        </span>
                                <h4 class="service-heading">خدمة العملاء</h4>
                                <p class="text-muted">ألمّ الشتاء بحث بل. أخر وصغار الأراضي للإتحاد ما, من يطول لإعلان بالفشل إيو.</p>
                            </div>
                            <div class="col-md-4">
        <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
        </span>
                                <h4 class="service-heading">خدمة مصرفية</h4>
                                <p class="text-muted">ألمّ الشتاء بحث بل. أخر وصغار الأراضي للإتحاد ما, من يطول لإعلان بالفشل إيو.</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="item">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 col-xs-12">



                        <div class="row text-center">
                            <div class="col-md-4 col-sm-8">
        <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
        </span>
                                <h4 class="service-heading">خدمة الكترونية</h4>
                                <p class="text-muted">ألمّ الشتاء بحث بل. أخر وصغار الأراضي للإتحاد ما, من يطول لإعلان بالفشل إيو.</p>
                            </div>
                            <div class="col-md-4">
        <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
        </span>
                                <h4 class="service-heading">خدمة العملاء</h4>
                                <p class="text-muted">ألمّ الشتاء بحث بل. أخر وصغار الأراضي للإتحاد ما, من يطول لإعلان بالفشل إيو.</p>
                            </div>
                            <div class="col-md-4">
        <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
        </span>
                                <h4 class="service-heading">خدمة مصرفية</h4>
                                <p class="text-muted">ألمّ الشتاء بحث بل. أخر وصغار الأراضي للإتحاد ما, من يطول لإعلان بالفشل إيو.</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#move_s" data-slide-to="0" class="active"></li>
            <li data-target="#move_s" data-slide-to="1"></li>
        </ol>

    </div>


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
			<h1 class="text-center"> بحث لعملة وعُرفت ٣٠. ما انه مرجع الأمريكي ويكيبيديا،</h1>
		</div>
	</div>
</div>
</div>
<!-- section end -->


<div class="line">
<hr>
</div>

<!--section Start-->
<div class="section">
<div class="container object-non-visible" data-animation-effect="fadeIn">
    <h1 id="news"  class="text-center title">الأخبار</h1>
    <div class="space"></div>
    <p class="lead text-center">تعرف علي كل ماهو جديد</p>
</div>
<div id="move" class="carousel slide" data-ride="carousel">


    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-xs-12">



                    <div class="row">

                        <div class="col-sm-4  wow fadeInDown text-center animated animated">
                            <img class="img-rounded img-responsive" src="images/portfolio-2.jpg" alt="Generic placeholder image">
                            <h3>الفروع</h3>
                            <p class="lead text-center">دار التحالف وهولندا، البشريةً في, عن دار الشهيرة المشتّتون. تطوير أدوات وقوعها، جعل أم, أراض تكبّد مشروط ثم بال. من شيء قادة وفرنسا, يكن الإمداد بالولايات عن, يكن لم بتخصيص بالمحور. </p>
                            <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                        </div><!-- /.col-lg-4 -->

                        <div class="col-sm-4 wow fadeInDown text-center animated animated">
                            <img class="img-rounded img-responsive" src="images/portfolio-1.jpg" alt="Generic placeholder image">
                            <h3>الفروع</h3>
                            <p class="lead text-center">دار التحالف وهولندا، البشريةً في, عن دار الشهيرة المشتّتون. تطوير أدوات وقوعها، جعل أم, أراض تكبّد مشروط ثم بال. من شيء قادة وفرنسا, يكن الإمداد بالولايات عن, يكن لم بتخصيص بالمحور. </p>
                            <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                        </div><!-- /.col-lg-4 -->

                        <div class="col-sm-4 wow fadeInDown text-center animated animated">
                            <img class="img-rounded img-responsive" src="images/portfolio-3.jpg" alt="Generic placeholder image">
                            <h3>الفروع</h3>
                            <p class="lead text-center">دار التحالف وهولندا، البشريةً في, عن دار الشهيرة المشتّتون. تطوير أدوات وقوعها، جعل أم, أراض تكبّد مشروط ثم بال. من شيء قادة وفرنسا, يكن الإمداد بالولايات عن, يكن لم بتخصيص بالمحور. </p>
                            <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                        </div><!-- /.col-lg-4 -->

                    </div><!-- /.row -->



                </div>
            </div>
        </div>

        <div class="item">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-xs-12">



                    <div class="row">

                        <div class="col-sm-4  wow fadeInDown text-center animated animated">
                            <img class="img-rounded" src="images/portfolio-2.jpg" alt="Generic placeholder image">
                            <h3>Responsive</h3>
                            <p class="lead text-center">دار التحالف وهولندا، البشريةً في, عن دار الشهيرة المشتّتون. تطوير أدوات وقوعها، جعل أم, أراض تكبّد مشروط ثم بال. من شيء قادة وفرنسا, يكن الإمداد بالولايات عن, يكن لم بتخصيص بالمحور.  </p>
                            <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                        </div><!-- /.col-lg-4 -->

                        <div class="col-sm-4 wow fadeInDown text-center animated animated">
                            <img class="img-rounded" src="images/portfolio-1.jpg" alt="Generic placeholder image">
                            <h3>Google</h3>
                            <p class="lead text-center">دار التحالف وهولندا، البشريةً في, عن دار الشهيرة المشتّتون. تطوير أدوات وقوعها، جعل أم, أراض تكبّد مشروط ثم بال. من شيء قادة وفرنسا, يكن الإمداد بالولايات عن, يكن لم بتخصيص بالمحور. </p>
                            <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                        </div><!-- /.col-lg-4 -->

                        <div class="col-sm-4 wow fadeInDown text-center animated animated">
                            <img class="img-rounded" src="images/portfolio-3.jpg" alt="Generic placeholder image">
                            <h3>Bootstrap</h3>
                            <p class="lead text-center">دار التحالف وهولندا، البشريةً في, عن دار الشهيرة المشتّتون. تطوير أدوات وقوعها، جعل أم, أراض تكبّد مشروط ثم بال. من شيء قادة وفرنسا, يكن الإمداد بالولايات عن, يكن لم بتخصيص بالمحور. </p>
                            <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                        </div><!-- /.col-lg-4 -->

                    </div><!-- /.row -->



                </div>
            </div>
        </div>


        <div class="item">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-xs-12">



                    <div class="row">

                        <div class="col-sm-4  wow fadeInDown text-center animated animated">
                            <img class="img-rounded" src="images/portfolio-2.jpg" alt="Generic placeholder image">
                            <h3>Responsive</h3>
                            <p class="lead text-center">دار التحالف وهولندا، البشريةً في, عن دار الشهيرة المشتّتون. تطوير أدوات وقوعها، جعل أم, أراض تكبّد مشروط ثم بال. من شيء قادة وفرنسا, يكن الإمداد بالولايات عن, يكن لم بتخصيص بالمحور. </p>
                            <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                        </div><!-- /.col-lg-4 -->

                        <div class="col-sm-4 wow fadeInDown text-center animated animated">
                            <img class="img-rounded" src="images/portfolio-1.jpg" alt="Generic placeholder image">
                            <h3>Google</h3>
                            <p class="lead text-center">دار التحالف وهولندا، البشريةً في, عن دار الشهيرة المشتّتون. تطوير أدوات وقوعها، جعل أم, أراض تكبّد مشروط ثم بال. من شيء قادة وفرنسا, يكن الإمداد بالولايات عن, يكن لم بتخصيص بالمحور. </p>
                            <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                        </div><!-- /.col-lg-4 -->

                        <div class="col-sm-4 wow fadeInDown text-center animated animated">
                            <img class="img-rounded" src="images/portfolio-3.jpg" alt="Generic placeholder image">
                            <h3>Bootstrap</h3>
                            <p class="lead text-center">دار التحالف وهولندا، البشريةً في, عن دار الشهيرة المشتّتون. تطوير أدوات وقوعها، جعل أم, أراض تكبّد مشروط ثم بال. من شيء قادة وفرنسا, يكن الإمداد بالولايات عن, يكن لم بتخصيص بالمحور. </p>
                            <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                </div>
            </div>
        </div>
    </div>

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#move" data-slide-to="0" class="active"></li>
        <li data-target="#move" data-slide-to="1"></li>
        <li data-target="#move" data-slide-to="2"></li>
    </ol>
</div>
</div>
</div>

<!--section End-->

<div class="line">
<hr>
</div>

<!-- section start -->
<!-- ================ -->
<div class="section">
<div class="container">
	<h1 class="text-center title" id="gallery">المنتجات</h1>
	<div class="separator"></div>
	<p class="lead text-center">عرض الأمور الساحل تزامناً, لم دون وسوء الشمال. بحث لعملة وعُرفت ٣٠. ما انه مرجع الأمريكي ويكيبيديا</p>
	<br>			
	<div class="row object-non-visible" data-animation-effect="fadeIn">
		<div class="col-md-12">

			<!-- isotope filters start -->
			<div class="filters text-center">
				<ul class="nav nav-pills">
					<li class="active"><a href="#" data-filter="*">كل المنتجات</a></li>
					<li><a href="#" data-filter=".web-design">النوع الاول</a></li>
					<li><a href="#" data-filter=".app-development">النوع الثاني</a></li>
					<li><a href="#" data-filter=".site-building">النوع الثالث</a></li>
				</ul>
			</div>
			<!-- isotope filters end -->

			<!-- portfolio items start -->
			<div class="isotope-container row grid-space-20">
				<div class="col-sm-6 col-md-3 isotope-item web-design">
					<div class="image-box">
						<div class="overlay-container">
							<img src="images/portfolio-1.jpg" alt="">
							<a class="overlay" data-toggle="modal" data-target="#project-1">
								<i class="fa fa-search-plus"></i>
								<span>النوع الاول</span>
							</a>
						</div>
						<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-1">اسم المنتج</a>
					</div>
					<!-- Modal -->
					<div class="modal fade" id="project-1" tabindex="-1" role="dialog" aria-labelledby="project-1-label" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">أغلق</span></button>
									<h4 class="modal-title" id="project-1-label">اسم المنتج</h4>
								</div>
								<div class="modal-body">
									<h3>تفاصيل المنتج</h3>
									<div class="row">
										<div class="col-md-6">
                                            <p>قبل أعلنت السادس عل. بل عدد نقطة وحتى حالية, وبعض مشروط الأثناء، هو فصل. شيء بل تعداد تاريخ الآلاف, في أخذ لكون عملية الإنذار،. هذه أحكم الأبرياء ان, جدول شاسعة أفريقيا تم بال.
                                            </p>
                                            <p>ترتيب لإعلان الوراء كلّ أي, كلّ أمام مليون إذ. جهة أم الأعمال بريطانيا-فرنسا. واحدة العدّ الولايات عدد بـ, بريطانيا الكونجرس بريطانيا، قد أضف. عرض معقل كردة مع, الإتحاد الإحتفاظ أضف لم. شعار إعلان كُلفة عرض هو, حين بـ والعتاد الأثناء،, قد الأوضاع لإنعدام بحث.
                                            </p>
										</div>
										<div class="col-md-6">
											<img src="images/portfolio-1.jpg" alt="">
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">أغلق</button>
								</div>
							</div>
						</div>
					</div>
					<!-- Modal end -->
				</div>

				<div class="col-sm-6 col-md-3 isotope-item app-development">
					<div class="image-box">
						<div class="overlay-container">
							<img src="images/portfolio-2.jpg" alt="">
							<a class="overlay" data-toggle="modal" data-target="#project-2">
								<i class="fa fa-search-plus"></i>
								<span>النوع الثاني</span>
							</a>
						</div>
						<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-2">اسم المنتج</a>
					</div>
					<!-- Modal -->
					<div class="modal fade" id="project-2" tabindex="-1" role="dialog" aria-labelledby="project-2-label" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
									<h4 class="modal-title" id="project-2-label">Project Title</h4>
								</div>
								<div class="modal-body">
									<h3>Project Description</h3>
									<div class="row">
										<div class="col-md-6">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
											<p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
										</div>
										<div class="col-md-6">
											<img src="images/portfolio-2.jpg" alt="">
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
				
				<div class="col-sm-6 col-md-3 isotope-item web-design">
					<div class="image-box">
						<div class="overlay-container">
							<img src="images/portfolio-3.jpg" alt="">
							<a class="overlay" data-toggle="modal" data-target="#project-3">
								<i class="fa fa-search-plus"></i>
								<span>Web Design</span>
							</a>
						</div>
						<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-3">Project Title</a>
					</div>
					<!-- Modal -->
					<div class="modal fade" id="project-3" tabindex="-1" role="dialog" aria-labelledby="project-3-label" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">اغلق</span></button>
									<h4 class="modal-title" id="project-3-label">اسم المنتج</h4>
								</div>
								<div class="modal-body">
									<h3>تفاصيل المنتج</h3>
									<div class="row">
										<div class="col-md-6">
                                            <p>قبل أعلنت السادس عل. بل عدد نقطة وحتى حالية, وبعض مشروط الأثناء، هو فصل. شيء بل تعداد تاريخ الآلاف, في أخذ لكون عملية الإنذار،. هذه أحكم الأبرياء ان, جدول شاسعة أفريقيا تم بال.
                                            </p>
                                            <p>ترتيب لإعلان الوراء كلّ أي, كلّ أمام مليون إذ. جهة أم الأعمال بريطانيا-فرنسا. واحدة العدّ الولايات عدد بـ, بريطانيا الكونجرس بريطانيا، قد أضف. عرض معقل كردة مع, الإتحاد الإحتفاظ أضف لم. شعار إعلان كُلفة عرض هو, حين بـ والعتاد الأثناء،, قد الأوضاع لإنعدام بحث.
                                            </p>
										</div>
										<div class="col-md-6">
											<img src="images/portfolio-3.jpg" alt="">
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">اغلق</button>
								</div>
							</div>
						</div>
					</div>
					<!-- Modal end -->
				</div>
				
				<div class="col-sm-6 col-md-3 isotope-item site-building">
					<div class="image-box">
						<div class="overlay-container">
							<img src="images/portfolio-4.jpg" alt="">
							<a class="overlay" data-toggle="modal" data-target="#project-4">
								<i class="fa fa-search-plus"></i>
								<span>النوع الثالث</span>
							</a>
						</div>
						<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-4">اسم المنتج</a>
					</div>
					<!-- Modal -->
					<div class="modal fade" id="project-4" tabindex="-1" role="dialog" aria-labelledby="project-4-label" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">اغلق</span></button>
									<h4 class="modal-title" id="project-4-label">اسم المنتج</h4>
								</div>
								<div class="modal-body">
									<h3>تفاصيل المشروع</h3>
									<div class="row">
										<div class="col-md-6">
                                            <p>قبل أعلنت السادس عل. بل عدد نقطة وحتى حالية, وبعض مشروط الأثناء، هو فصل. شيء بل تعداد تاريخ الآلاف, في أخذ لكون عملية الإنذار،. هذه أحكم الأبرياء ان, جدول شاسعة أفريقيا تم بال.
                                            </p>
                                            <p>ترتيب لإعلان الوراء كلّ أي, كلّ أمام مليون إذ. جهة أم الأعمال بريطانيا-فرنسا. واحدة العدّ الولايات عدد بـ, بريطانيا الكونجرس بريطانيا، قد أضف. عرض معقل كردة مع, الإتحاد الإحتفاظ أضف لم. شعار إعلان كُلفة عرض هو, حين بـ والعتاد الأثناء،, قد الأوضاع لإنعدام بحث.
                                            </p>
										</div>
										<div class="col-md-6">
											<img src="images/portfolio-4.jpg" alt="">
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
				
				<div class="col-sm-6 col-md-3 isotope-item app-development">
					<div class="image-box">
						<div class="overlay-container">
							<img src="images/portfolio-5.jpg" alt="">
							<a class="overlay" data-toggle="modal" data-target="#project-5">
								<i class="fa fa-search-plus"></i>
								<span>النوع الثالث</span>
							</a>
						</div>
						<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-5">اسم المنتج</a>
					</div>
					<!-- Modal -->
					<div class="modal fade" id="project-5" tabindex="-1" role="dialog" aria-labelledby="project-5-label" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">اغلق</span></button>
									<h4 class="modal-title" id="project-6-label">اسم المنتج</h4>
								</div>
								<div class="modal-body">
									<h3>Project Description</h3>
									<div class="row">
										<div class="col-md-6">
                                            <p>قبل أعلنت السادس عل. بل عدد نقطة وحتى حالية, وبعض مشروط الأثناء، هو فصل. شيء بل تعداد تاريخ الآلاف, في أخذ لكون عملية الإنذار،. هذه أحكم الأبرياء ان, جدول شاسعة أفريقيا تم بال.
                                            </p>
                                            <p>ترتيب لإعلان الوراء كلّ أي, كلّ أمام مليون إذ. جهة أم الأعمال بريطانيا-فرنسا. واحدة العدّ الولايات عدد بـ, بريطانيا الكونجرس بريطانيا، قد أضف. عرض معقل كردة مع, الإتحاد الإحتفاظ أضف لم. شعار إعلان كُلفة عرض هو, حين بـ والعتاد الأثناء،, قد الأوضاع لإنعدام بحث.
                                            </p>
										</div>
										<div class="col-md-6">
											<img src="images/portfolio-5.jpg" alt="">
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">اغلق</button>
								</div>
							</div>
						</div>
					</div>
					<!-- Modal end -->
				</div>
                <div class="modal fade" id="project-6" tabindex="-1" role="dialog" aria-labelledby="project-5-label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">اغلق</span></button>
                                <h4 class="modal-title" id="project-9-label">اسم المنتج</h4>
                            </div>
                            <div class="modal-body">
                                <h3>Project Description</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>قبل أعلنت السادس عل. بل عدد نقطة وحتى حالية, وبعض مشروط الأثناء، هو فصل. شيء بل تعداد تاريخ الآلاف, في أخذ لكون عملية الإنذار،. هذه أحكم الأبرياء ان, جدول شاسعة أفريقيا تم بال.
                                        </p>
                                        <p>ترتيب لإعلان الوراء كلّ أي, كلّ أمام مليون إذ. جهة أم الأعمال بريطانيا-فرنسا. واحدة العدّ الولايات عدد بـ, بريطانيا الكونجرس بريطانيا، قد أضف. عرض معقل كردة مع, الإتحاد الإحتفاظ أضف لم. شعار إعلان كُلفة عرض هو, حين بـ والعتاد الأثناء،, قد الأوضاع لإنعدام بحث.
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="images/portfolio-6.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">اغلق</button>
                            </div>
                        </div>
                    </div>
                </div>
				</div>
            		<!-- Modal end -->
				</div>

        <div class="modal fade" id="project-7" tabindex="-1" role="dialog" aria-labelledby="project-5-label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">اغلق</span></button>
                        <h4 class="modal-title" id="project-7-label">اسم المنتج</h4>
                    </div>
                    <div class="modal-body">
                        <h3>Project Description</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <p>قبل أعلنت السادس عل. بل عدد نقطة وحتى حالية, وبعض مشروط الأثناء، هو فصل. شيء بل تعداد تاريخ الآلاف, في أخذ لكون عملية الإنذار،. هذه أحكم الأبرياء ان, جدول شاسعة أفريقيا تم بال.
                                </p>
                                <p>ترتيب لإعلان الوراء كلّ أي, كلّ أمام مليون إذ. جهة أم الأعمال بريطانيا-فرنسا. واحدة العدّ الولايات عدد بـ, بريطانيا الكونجرس بريطانيا، قد أضف. عرض معقل كردة مع, الإتحاد الإحتفاظ أضف لم. شعار إعلان كُلفة عرض هو, حين بـ والعتاد الأثناء،, قد الأوضاع لإنعدام بحث.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <img src="images/portfolio-7.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">اغلق</button>
                    </div>
                </div>
            </div>
        </div>
					<!-- Modal end -->
				</div>

    <div class="modal fade" id="project-8" tabindex="-1" role="dialog" aria-labelledby="project-5-label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">اغلق</span></button>
                    <h4 class="modal-title" id="project-8-label">اسم المنتج</h4>
                </div>
                <div class="modal-body">
                    <h3>Project Description</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p>قبل أعلنت السادس عل. بل عدد نقطة وحتى حالية, وبعض مشروط الأثناء، هو فصل. شيء بل تعداد تاريخ الآلاف, في أخذ لكون عملية الإنذار،. هذه أحكم الأبرياء ان, جدول شاسعة أفريقيا تم بال.
                            </p>
                            <p>ترتيب لإعلان الوراء كلّ أي, كلّ أمام مليون إذ. جهة أم الأعمال بريطانيا-فرنسا. واحدة العدّ الولايات عدد بـ, بريطانيا الكونجرس بريطانيا، قد أضف. عرض معقل كردة مع, الإتحاد الإحتفاظ أضف لم. شعار إعلان كُلفة عرض هو, حين بـ والعتاد الأثناء،, قد الأوضاع لإنعدام بحث.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <img src="images/portfolio-8.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">اغلق</button>
                </div>
            </div>
        </div>
    </div>
					<!-- Modal end -->
				</div>

<div class="modal fade" id="project-9" tabindex="-1" role="dialog" aria-labelledby="project-5-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">اغلق</span></button>
                <h4 class="modal-title" id="project-5-label">اسم المنتج</h4>
            </div>
            <div class="modal-body">
                <h3>Project Description</h3>
                <div class="row">
                    <div class="col-md-6">
                        <p>قبل أعلنت السادس عل. بل عدد نقطة وحتى حالية, وبعض مشروط الأثناء، هو فصل. شيء بل تعداد تاريخ الآلاف, في أخذ لكون عملية الإنذار،. هذه أحكم الأبرياء ان, جدول شاسعة أفريقيا تم بال.
                        </p>
                        <p>ترتيب لإعلان الوراء كلّ أي, كلّ أمام مليون إذ. جهة أم الأعمال بريطانيا-فرنسا. واحدة العدّ الولايات عدد بـ, بريطانيا الكونجرس بريطانيا، قد أضف. عرض معقل كردة مع, الإتحاد الإحتفاظ أضف لم. شعار إعلان كُلفة عرض هو, حين بـ والعتاد الأثناء،, قد الأوضاع لإنعدام بحث.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="images/portfolio-9.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">اغلق</button>
            </div>
        </div>
    </div>
</div>
					<!-- Modal end -->
				</div>

<div class="modal fade" id="project-10" tabindex="-1" role="dialog" aria-labelledby="project-5-label" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">اغلق</span></button>
            <h4 class="modal-title" id="project-10-label">اسم المنتج</h4>
        </div>
        <div class="modal-body">
            <h3>Project Description</h3>
            <div class="row">
                <div class="col-md-6">
                    <p>قبل أعلنت السادس عل. بل عدد نقطة وحتى حالية, وبعض مشروط الأثناء، هو فصل. شيء بل تعداد تاريخ الآلاف, في أخذ لكون عملية الإنذار،. هذه أحكم الأبرياء ان, جدول شاسعة أفريقيا تم بال.
                    </p>
                    <p>ترتيب لإعلان الوراء كلّ أي, كلّ أمام مليون إذ. جهة أم الأعمال بريطانيا-فرنسا. واحدة العدّ الولايات عدد بـ, بريطانيا الكونجرس بريطانيا، قد أضف. عرض معقل كردة مع, الإتحاد الإحتفاظ أضف لم. شعار إعلان كُلفة عرض هو, حين بـ والعتاد الأثناء،, قد الأوضاع لإنعدام بحث.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="images/portfolio-10.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">اغلق</button>
        </div>
    </div>
</div>
</div>
					<!-- Modal end -->
				</div>

<div class="modal fade" id="project-11" tabindex="-1" role="dialog" aria-labelledby="project-11-label" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">اغلق</span></button>
            <h4 class="modal-title" id="project-11-label">اسم المنتج</h4>
        </div>
        <div class="modal-body">
            <h3>Project Description</h3>
            <div class="row">
                <div class="col-md-6">
                    <p>قبل أعلنت السادس عل. بل عدد نقطة وحتى حالية, وبعض مشروط الأثناء، هو فصل. شيء بل تعداد تاريخ الآلاف, في أخذ لكون عملية الإنذار،. هذه أحكم الأبرياء ان, جدول شاسعة أفريقيا تم بال.
                    </p>
                    <p>ترتيب لإعلان الوراء كلّ أي, كلّ أمام مليون إذ. جهة أم الأعمال بريطانيا-فرنسا. واحدة العدّ الولايات عدد بـ, بريطانيا الكونجرس بريطانيا، قد أضف. عرض معقل كردة مع, الإتحاد الإحتفاظ أضف لم. شعار إعلان كُلفة عرض هو, حين بـ والعتاد الأثناء،, قد الأوضاع لإنعدام بحث.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="images/portfolio-11.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">اغلق</button>
        </div>
    </div>
</div>
</div>


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


<!-- section start -->
<!-- ================ -->

<!-- section end -->



<!-- footer start -->
<!-- ================ -->
<footer id="footer">

<!-- .footer start -->
<!-- ================ -->
<div class="footer section">
	<div class="container">
		<h1 class="title text-center" id="contact">تواصل معانا</h1>
		<div class="space"></div>
		<div class="row">
			<div class="col-sm-6">
				<div class="footer-content">
					<p class="large">ر ويكيبيديا, وبعض الآلاف ان كلا, ماذا الدمج عملية عرض من. قد ومن الجنوب العالمية, أي دار تحرّك الطرفين.</p>
					<ul class="list-icons">
						<li><i class="fa fa-map-marker pr-10"></i> 15,شارع النيل</li>
						<li><i class="fa fa-phone pr-10"></i> +00 1234567890</li>
						<li><i class="fa fa-fax pr-10"></i> +00 1234567891 </li>
						<li><i class="fa fa-envelope-o pr-10"></i> your@email.com</li>
					</ul>
					<ul class="social-links">
						<li class="facebook"><a target="_blank" href="https://www.facebook.com/pages/HtmlCoder/714570988650168"><i class="fa fa-facebook"></i></a></li>
						<li class="twitter"><a target="_blank" href="https://twitter.com/HtmlcoderMe"><i class="fa fa-twitter"></i></a></li>
						<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
						<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
						<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
						<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
						<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
						<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="footer-content">
					<form role="form" id="footer-form">
						<div class="form-group has-feedback">
							<label class="sr-only" for="name2">Name</label>
							<input type="text" class="form-control" id="name2" placeholder="الأسم" name="name2" required>
							<i class="fa fa-user form-control-feedback"></i>
						</div>
						<div class="form-group has-feedback">
							<label class="sr-only" for="email2">Email address</label>
							<input type="email" class="form-control" id="email2" placeholder="بريدك الالكتروني" name="email2" required>
							<i class="fa fa-envelope form-control-feedback"></i>
						</div>
						<div class="form-group has-feedback">
							<label class="sr-only" for="message2">Message</label>
							<textarea class="form-control" rows="8" id="message2" placeholder="الرسالة" name="message2" required></textarea>
							<i class="fa fa-pencil form-control-feedback"></i>
						</div>
						<input type="submit" value="أرسل" class="btn btn-default">
					</form>
				</div>
			</div>
		</div>
	</div>
    <div class="row">
        <div class="col-xs-12">
            <div id="googleMap" style="width:100%;height:500px;"></div>
        </div>
    </div>
</div>

<!-- .footer end -->

<!-- .subfooter start -->
<!-- ================ -->
<div class="subfooter">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p class="text-center">حقوق الملكية محفوظة ل  <a target="_blank" href="http://www.businessmonk.com">Businessmonk</a>.</p>
			</div>
		</div>
	</div>
</div>
<!-- .subfooter end -->

</footer>
<!-- footer end -->


@include('../temp1/footer')