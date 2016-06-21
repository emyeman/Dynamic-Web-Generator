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
            // $findpage_top=0;
            // $findservices=0;
            // $findabout=0;
            // $findgallery=0;
            // $findnews=0;
            // $findpromotion=0;
            // $findcontact=0;
            $myservices='';
            $mypage_top='';
            $myabout='';
            $mycontact='';
            $mynews='';
            $mypromotion='';
            $mygallery='';
        ?>

        @for ($x = 0; $x < count($urlpages); $x++)

            @if($urlpages[$x]=='page_top')
                 <li>
                    <a class="active" href="#head">{{trans('arabic_english.'.$menupages[$x])}}</a>
                </li>
                <?php 
                // $findpage_top=1;
                $mypage_top=trans('arabic_english.'.$menupages[$x]);?>
            @endif 
            @if($urlpages[$x]=='services')   
                <li>
                    <a  href="#{{$urlpages[$x]}}">{{trans('arabic_english.'.$menupages[$x])}}</a>
                </li>
                <?php 
                // $findservices=1;
                $myservices=trans('arabic_english.'.$menupages[$x]);?>
            @endif
            @if($urlpages[$x]=='about')
                <li>
                    <a  href="#{{$urlpages[$x]}}">{{trans('arabic_english.'.$menupages[$x])}}</a>
                </li>
                <?php 
                // $findabout=1;
                 $myabout=trans('arabic_english.'.$menupages[$x]);?>
            @endif
            @if($urlpages[$x]=='gallery')
                <li>
                    <a  href="#{{$urlpages[$x]}}">{{trans('arabic_english.'.$menupages[$x])}}</a>
                </li>
                <?php 
                // $findgallery=1;
                $mygallery=trans('arabic_english.'.$menupages[$x]);?>
            @endif
            @if($urlpages[$x]=='news')
                <li>
                    <a  href="#{{$urlpages[$x]}}">{{trans('arabic_english.'.$menupages[$x])}}</a>
                </li>
                <?php 
                // $findnews=1;
                $mynews=trans('arabic_english.'.$menupages[$x]);?>
            @endif
            @if($urlpages[$x]=='promotion')
                <li>
                    <a  href="#{{$urlpages[$x]}}">{{trans('arabic_english.'.$menupages[$x])}}</a>
                </li>
                <?php 
                // $findpromotion=1;
                $mypromotion=trans('arabic_english.'.$menupages[$x]);?>
            @endif
            @if($urlpages[$x]=='contact')
                <li>
                    <a href="#{{$urlpages[$x]}}">{{trans('arabic_english.'.$menupages[$x])}}</a>
                </li>
                 <?php
                  // $findcontact=1;
                 $mycontact=trans('arabic_english.'.$menupages[$x]);?>
            @endif 
            @endfor

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
                                <a class="active" href="#head">{{trans('arabic_english.'.$menupages[$x])}}</a>
                            </li>
                            <?php 
                            // $findpage_top=1;
                            $mypage_top=trans('arabic_english.'.$menupages[$x]);?>
                        @endif 
                        @if($urlpages[$x]=='services')   
                            <li>
                                <a  href="#{{$urlpages[$x]}}">{{trans('arabic_english.'.$menupages[$x])}}</a>
                            </li>
                            <?php 
                            // $findservices=1;
                            $myservices=trans('arabic_english.'.$menupages[$x]);?>
                        @endif
                        @if($urlpages[$x]=='about')
                            <li>
                                <a  href="#{{$urlpages[$x]}}">{{trans('arabic_english.'.$menupages[$x])}}</a>
                            </li>
                            <?php 
                            // $findabout=1;
                             $myabout=trans('arabic_english.'.$menupages[$x]);?>
                        @endif
                        @if($urlpages[$x]=='gallery')
                            <li>
                                <a  href="#{{$urlpages[$x]}}">{{trans('arabic_english.'.$menupages[$x])}}</a>
                            </li>
                            <?php 
                            // $findgallery=1;
                            $mygallery=trans('arabic_english.'.$menupages[$x]);?>
                        @endif
                        @if($urlpages[$x]=='news')
                            <li>
                                <a  href="#{{$urlpages[$x]}}">{{trans('arabic_english.'.$menupages[$x])}}</a>
                            </li>
                            <?php 
                            // $findnews=1;
                            $mynews=trans('arabic_english.'.$menupages[$x]);?>
                        @endif
                        @if($urlpages[$x]=='promotion')
                            <li>
                                <a  href="#{{$urlpages[$x]}}">{{trans('arabic_english.'.$menupages[$x])}}</a>
                            </li>
                            <?php 
                            // $findpromotion=1;
                            $mypromotion=trans('arabic_english.'.$menupages[$x]);?>
                        @endif
                        @if($urlpages[$x]=='contact')
                            <li>
                                <a href="#{{$urlpages[$x]}}">{{trans('arabic_english.'.$menupages[$x])}}</a>
                            </li>
                             <?php
                              // $findcontact=1;
                             $mycontact=trans('arabic_english.'.$menupages[$x]);?>
                        @endif 
                        @endfor
                    </ol>
                </div>
    
    
    <div class="btn-group btn-default dropdown">
        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
            <span class="lang-sm lang-lbl" lang="ar"></span> <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
        <li class="space"></li>
            <li><button class="notaDiv"><span class="lang-sm lang-lbl" lang="ar"></span></button></li>                               
            <li><button class="notaDiv"><span class="lang-sm lang-lbl" lang="en"></span></button></li>                               
        </ul>
        </div>     
        </div> 
        
    </div>
    </nav>

    
            
        

@if($header)
<!-- Main (Home) section -->
<section class="section" id="head">
    <div class="container">

            
    
        <div class="row">
            <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 text-center">   

                <!-- Site Title, your name, HELLO msg, etc. -->
                <h1 class="title">{{$header->slogan}}</h1>
                <img src="{{ url($header->logo)}}"/>
                <h2 class="subtitle">{{$header->company_name}}</h2>

                <!-- Short introductory (optional) -->
            <!--    <h3 class="tagline">
                    Where nature and technology meet
                </h3>-->
                
                <!-- Nice place to describe your site in a sentence or two -->
                <p><a href="#" class="btn btn-default btn-lg">تعرف علينا</a></p>
    
            </div> <!-- /col -->
        </div> <!-- /row -->
    
    </div>
</section>
@endif


@if($aboutus)
<!-- Second (About) section -->
<section class="section" id="about">
    <div class="container">
    
        <h2 class="text-center title"><?php echo $myabout; ?></h2>
        <div class="row backg">
            <div class="col-sm-4 col-sm-offset-1">  <?php echo $myabout; ?>  
                <!--<h5><strong>Where's my lorem ipsum?<br></strong></h5>
                <p>Well, here it is: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, ullam, ducimus, eaque, ex autem est dolore illo similique quasi unde sint rerum magnam quod amet iste dolorem ad laudantium molestias enim quibusdam inventore totam fugit eum iusto ratione alias deleniti suscipit modi quis nostrum veniam fugiat debitis officiis impedit ipsum natus ipsa. Doloremque, id, at, corporis, libero laborum architecto mollitia molestiae maxime aut deserunt sed perspiciatis quibusdam praesentium consectetur in sint impedit voluptates! Deleniti, sequi voluptate recusandae facere nostrum?</p>  -->
                <?php $img='/assets/images'.$aboutus->image ?>
                <img class="img-responsive" src="{{ url($img)}}"/>
            </div>
            <div class="col-sm-4 col-sm-offset-1">
                <div class="space"></div>
                <!-- <h5><strong>More, more lipsum!<br></strong></h5>     -->
                <p><b>{{$aboutus->description}}</b></p>

            </div>
        </div>
    </div>
</section>
@endif


<!-- Third (gallery) section -->
@if($categories)
<section class="section" id="gallery">
    <div class="container">

        <h2 class="text-center title"><?php echo $mygallery;?></h2>
        <p class="lead text-center">
            تعرف علي منتجاتنا المميزة
        </p>

        <div class="row object-non-visible" data-animation-effect="fadeIn">
            <div class="col-md-12">

                <!-- isotope filters start -->
                <div class="filters text-center">
                    <ul class="nav nav-pills">
                        <li class="active"><a href="#" data-filter="*">كل <?php echo $mygallery;?>  </a></li>
                        @foreach($categories as $category)
                            <li>

                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="true">
                                        {{$category->name}}
                                        <span class="caret"></span>
                                    </button>
                                    <?php $allsub='';?>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    @foreach($subcategories as $subcategory)
                                            @if($category->id == $subcategory->category_id)
                                        <li><a href="#" data-filter=".<?php echo str_replace(' ', '', $subcategory->name);?>">{{$subcategory->name}}</a></li>
                                        <?php 
                                                $sub='.'.$subcategory->name;
                                                $allsub=$sub.','.$allsub;
                                            ?>
                                            @endif
                                        @endforeach
                                        <li><a href="#" data-filter="<?php $all=trim($allsub, ", ");echo str_replace(' ', '', $all);?>">All</a></li>
                                    </ul>
                                </div>

                            </li>
                        @endforeach    
                    </ul>
                </div>
                <div class="space"></div>
        <!-- isotope filters end -->

<div class="isotope-container row grid-space-20" id="container">
            <?php $flagproject=1?>
            @foreach($subcategories as $subcategory)
            @foreach($products as $product)
                @if($subcategory->id == $product->category_id)
            <div class="col-sm-4 col-sm-offset-1 isotope-item <?php echo str_replace(' ', '', $subcategory->name);?>">
                <div class="thumbnail">
                    <img src="{{ url('/assets/images/'.$product->image)}}" alt="">
                    <div class="caption">
                        <h3>{{$subcategory->name}}--> {{$product->name}}</h3>
                        <p>{{substr($product->description,0,50)}}</p>
                        <p><a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-<?php echo $flagproject?>">{{$product->name}}</a></p>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="project-<?php echo $flagproject?>" tabindex="-1" role="dialog" aria-labelledby="project-<?php echo $flagproject?>-label" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">اغلق</span></button>
                                    <h4 class="modal-title" id="project-<?php echo $flagproject?>-label">{{$product->name}}</h4>
                                </div>
                                <div class="modal-body">
                                    <h3><u>{{$product->name}} Description</u></h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>{{$product->description}}</p>
                                            <hr/>
                                            <h3><u>{{$product->name}} Price</u></h3>
                                            <p>{{$product->price}} LE</p>
                                        </div>
                                        <div class="col-md-6">
                                            <img class="img-responsive" src="{{ url('/assets/images/'.$product->image)}}" alt="">
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
                </div>
                <?php $flagproject+=1?>
                @endif
                @endforeach
            @endforeach

        </div>
    </div>
    </div>
</div>
</section>
@endif

<!-- Fourth (services) section -->
@if($services)
<section class="section" id="services">
    <div class="container">
    
        <h2 class="text-center title"><?php echo $myservices; ?></h2>
    <?php  $inc_services=1; ?>   
    @for ($x = 0; $x < count($services); $x+=3)
        <div class="row part" id="service<?php echo $inc_services; ?>">
            <div class="col-sm-8 col-sm-offset-2 text-center">
            
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-xs-12">
                    <div class="row text-center">
                    <?php  $inc_s=0;$inc_service=0; $s=0;?>
                        @foreach($services as $service)
                        @if($inc_service ==$x)
                            @if($inc_s < 3) 
                        <div class="col-md-4 col-sm-8">

                            <span class="fa-stack fa-4x">
                                
                                <i class="glyphicon {{ $service->icon }} fa-stack-1x"></i>
                            </span>
                                <h4 class="service-heading">{{ $service->title }}</h4>
                                <p class="text-muted">{{ $service->description }}</p>
                        </div>
                        @endif  
                    <?php  $inc_s+=1; ?> 
                    <?php  $s=1; ?>  
                @endif   
                @if($s==0)
                    <?php  $inc_service+=1; ?>
                @endif
         
                @endforeach 
                    </div>
                 </div>
                </div>
            </div>
        </div>
    <?php  $inc_services+=1; ?>     
@endfor
        <div class="space"></div>

        <div class="row">
            <div class="col-xs-offset-5 col-xs-4 col-md-offset-5 col-md-3">
            <ol class="breadcrumb selection center-block">
            <?php  $inc_services=1; ?>
                @for ($x = 0; $x < count($services); $x+=3)
                     <li><a href="#service <?php echo $inc_services; ?>"> <?php echo $inc_services; ?></a></li>
                 <?php  $inc_services+=1; ?>     
                @endfor
            </ol>
        </div>
    </div>

</div>
                 
</section>
@endif



<!-- Fourth (News) section -->
@if($news)
<section class="section" id="news">
    <div class="container">
    
        <h2 class="text-center title"><?php echo $mynews;?></h2>
            <div class="space"></div>

<?php  $inc_news=1; ?>   
    @for ($x = 0; $x < count($news); $x+=2)
        <div class="row part" id="news<?php echo $inc_news; ?>">
        <?php  $inc_n=0;$inc_new=0; $n=0;?>
        @foreach($news as $new)
        @if($inc_new ==$x)
            @if($inc_n < 2) 
            <div class="col-sm-6 col-md-4 col-md-offset-1">
                <img class="img-responsive" src="{{url('/assets/images/'.$new->image)}}"/>
                <!-- <h4>{{ $new->description }}</h4> -->
                <a class="btn btn-default btn-block">{{ $new->title }}</a>
                <p class="text-muted">{{ $new->description }}</p>
            </div> 
            @endif  
            <?php  $inc_n+=1; ?> 
            <?php  $n=1; ?>  
        @endif   
        @if($n==0)
            <?php  $inc_new+=1; ?>
        @endif
 
        @endforeach                          
        </div>

<?php  $inc_news+=1; ?>
@endfor

        <div class="space"></div>

        <div class="row">
            <div class="col-xs-offset-5 col-xs-4 col-md-offset-5 col-md-3">
                <ol class="breadcrumb selection">
                <?php  $inc_news=1; ?>   
                @for ($x = 0; $x < count($news); $x+=3)
                    <li><a href="#news<?php echo $inc_news; ?>"><?php echo $inc_news; ?></a></li>
                   <?php  $inc_news+=1; ?>
                @endfor
                </ol>
            </div>
        </div>

        </div>



</section>

@endif


@if($promotions)

<!-- Fourth (Promotion) section -->
<section class="section" id="promotion">
    <div class="container">

        <h2 class="text-center title"><?php echo $mypromotion;?></h2>
            <div class="space"></div>
        <?php  $inc_promtion=1;?>
       @foreach($promotions as $promotion)     
        <div class="row part box" id="promotion<?php  echo $inc_promtion;?>">
        <div class="col-md-offset-1 col-md-4 ">
            <img src="{{url('assets/images/'.$promotion->image)}}" class="img-responsive img-pro">
        </div>
            <div class="col-md-offset-2"></div>
            <div class="col-md-4 col-md-push-2">
                <div class="space"></div>

                <h3 class="text-center"> {{ $promotion->title }} </h3>
                <p class="text-center">{{ $promotion->description }}</p>
                <div class="space"></div>
                <div>
                        <p><a class="btn view center-block" role="button">know more</a></p>
                </div>
            </div>
        </div>
        <?php  $inc_promtion+=1;?>
        @endforeach
        
<div class="space"></div>

        <div class="row">
            <div class="col-xs-offset-5 col-xs-4 col-md-offset-5 col-md-3">
                <ol class="breadcrumb selection center-block">
                <?php  $inc_promtion=1;?>
                @foreach($promotions as $promotion) 
                    <li><a href="#promotion<?php  echo $inc_promtion;?>"><?php  echo $inc_promtion;?></a></li>
                <?php  $inc_promtion+=1;?>
                @endforeach
                </ol>
</div>
            </div>


    </div>
</section>

@endif

<!-- Fourth (Contact) section -->
@if($contacts) 
<section class="section" id="contact">
    <div class="container">
    
     <h2 class="text-center title"><?php echo $mycontact;?></h2>

    <div class="row">
        <div class="col-sm-6">
        @foreach($contacts as $contact) 
            <div class="footer-content">
                <!-- <p class="large"> كلمة</p> -->
                <ul class="list-icons">
                    <li><i class="fa fa-map-marker pr-10"></i>   {{$contact->address}}</li>
                    <li><i class="fa fa-phone pr-10"></i>    {{$contact->phone}}</li>
                    <li><i class="fa fa-mobile pr-10"></i>   {{$contact->mobile}}</li>
                    <li><i class="fa fa-envelope-o pr-10"></i>   {{$contact->email}}</li>
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
           @endforeach 
        </div>
        <div class="col-sm-6">
<<<<<<< HEAD
            <div class="footer-content">
                <form role="form" id="footer-form">
                    <div class="form-group has-feedback">
                        <label class="sr-only" for="name2">Name</label>
                        <input type="text" class="form-control" id="name2" placeholder="الاسم" name="name2" required>
                        <i class="fa fa-user form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                        <label class="sr-only" for="email2">Email address</label>
                        <input type="email" class="form-control" id="email2" placeholder="البريد الالكتروني" name="email2" required>
                        <i class="fa fa-envelope form-control-feedback"></i>
                    </div>
                    <div class="form-group has-feedback">
                        <label class="sr-only" for="message2">Message</label>
                        <textarea class="form-control" rows="8" id="message2" placeholder="الرسالة" name="message2" required></textarea>
                        <i class="fa fa-pencil form-control-feedback"></i>
                    </div>
                    <input type="submit" value="Send" class="btn btn-default">
                </form>
=======
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
                    {!!Form::open(['route'=>'message.store','method'=>'post','role'=>'form','id'=>'footer-form']) !!}
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
                        <input type="submit" value="Send" class="btn btn-default">
                    {!!Form::close() !!}
>>>>>>> a79331578a9ee86737039adf6e8accb5f608edaf
            </div>
        </div>
    </div>
    <div class="space"></div>
        <div class="row">
            <div class="col-xs-12">
                <div id="emy_googleMap"  style="width:100%;height:500px;">
                     @if ($contact->lat != 0.0 or $contact->lng != 0.0 )
                         <img style="width:100%;height:100%;" src='http://maps.googleapis.com/maps/api/staticmap?center={{$contact->lat}},{{$contact->lng}}&markers=color:blue|label:N|{{$contact->lat}},{{$contact->lng}}&zoom=15&size=1057x600&sensor=false'/>
                    @endif 
                </div>
            </div>
        </div>
    </div>

</section>
@endif

@include('../cassandra/footer')
