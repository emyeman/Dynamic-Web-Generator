@include('../temp3/header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    
    
    <title>Nature</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.png">
    
    <!-- Bootstrap itself -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles -->
    <link rel="stylesheet" href="assets/css/magister.css">

    <!-- Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!--flag font-->
        <link href="assets/css/languages.min.css" rel="stylesheet">

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

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav hidden-lg hidden-md ">
        <li><a href="#head" class="active">Home</a></li>
        <li><a href="#about">About me</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#promotions">Promotions</a></li>
        <li><a href="#contact">Contact us</a></li>
    </ul>
            </div>
    </div>
                                    
        
    <div class="container header fixed clearfix navbar navbar-fixed-top hidden-xs hidden-sm">
        <div class="row">
            <div class="col-md-offset-3 col-md-7">
                <ol class="breadcrumb" id="menu">
                    <li><a href="#head" class="active">Home</a></li>
                    <li><a href="#about">About me</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#news">News</a></li>
                    <li><a href="#promotions">Promotions</a></li>
                    <li><a href="#contact">Contact us</a></li>
                    </ol>
                    
                    
            </div>
    
    
    <div class="btn-group btn-default dropdown">
        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
            <span class="lang-sm lang-lbl" lang="en"></span> <span class="caret"></span>                  
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

    
            
        

<!-- Main (Home) section -->
<section class="section" id="head">
    <div class="container">

            
    
        <div class="row">
            <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 text-center">   

                <!-- Site Title, your name, HELLO msg, etc. -->
                <h1 class="title">Nature</h1>
                <img src="assets/images/line.png"/>
                <h2 class="subtitle">Where nature and technology meet</h2>

                <!-- Short introductory (optional) -->
            <!--    <h3 class="tagline">
                    Where nature and technology meet
                </h3>-->
                
                <!-- Nice place to describe your site in a sentence or two -->
                <p><a href="#" class="btn btn-default btn-lg">Know more</a></p>
    
            </div> <!-- /col -->
        </div> <!-- /row -->
    
    </div>
</section>

<!-- Second (About) section -->
<section class="section" id="about">
    <div class="container">
    
        <h2 class="text-center title">About me</h2>
        <div class="row backg">
            <div class="col-sm-4 col-sm-offset-1">    
                <!--<h5><strong>Where's my lorem ipsum?<br></strong></h5>
                <p>Well, here it is: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, ullam, ducimus, eaque, ex autem est dolore illo similique quasi unde sint rerum magnam quod amet iste dolorem ad laudantium molestias enim quibusdam inventore totam fugit eum iusto ratione alias deleniti suscipit modi quis nostrum veniam fugiat debitis officiis impedit ipsum natus ipsa. Doloremque, id, at, corporis, libero laborum architecto mollitia molestiae maxime aut deserunt sed perspiciatis quibusdam praesentium consectetur in sint impedit voluptates! Deleniti, sequi voluptate recusandae facere nostrum?</p>  -->
                <img class="img-responsive" src="assets/images/body1.jpg"/>
            </div>
            <div class="col-sm-4 col-sm-offset-1">
                <div class="space"></div>
                <h5><strong>More, more lipsum!<br></strong></h5>    
                <p><b>Tempore, eos, voluptatem minus commodi error aut eaque neque consequuntur optio nesciunt quod quibusdam. Ipsum, voluptatibus, totam.</b></p>
            
                
            </div>
        </div>
    </div>
</section>

<!-- Third (gallery) section -->
<section class="section" id="gallery">
    <div class="container">

        <h2 class="text-center title">Gallery</h2>
        <p class="lead text-center">
            Know more about each of our unique products
        </p>

        <div class="row object-non-visible" data-animation-effect="fadeIn">
            <div class="col-md-12">

                <!-- isotope filters start -->
                <div class="filters text-center">
                    <ul class="nav nav-pills">
                        <li class="active"><a href="#" data-filter="*">All</a></li>
                <li>

                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="true">
                            Mobiles
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#" data-filter=".web-design">Action</a></li>
                            <li><a href="#" data-filter=".app-development">Another action</a></li>
                            <li><a href="#" data-filter=".site-building">Something else here</a></li>
                            <li><a href="#" data-filter=".web-design, app-development,.site-building">All</a></li>
                        </ul>
                    </div>

                </li>
                <li>

                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Laptops
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <li><a href="#" data-filter=".web-design">Action</a></li>
                            <li><a href="#" data-filter=".app-development">Another action</a></li>
                            <li><a href="#" data-filter=".site-building">Something else here</a></li>
                            <li><a href="#" data-filter=".web-design, app-development,.site-building">All</a></li>
                        </ul>
                    </div>

                </li>

                <li>

                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Tablets
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu3">
                            <li><a href="#" data-filter=".web-design">Action</a></li>
                            <li><a href="#" data-filter=".app-development">Another action</a></li>
                            <li><a href="#" data-filter=".site-building">Something else here</a></li>
                            <li><a href="#" data-filter=".web-design, app-development,.site-building">All</a></li>
                        </ul>
                    </div>

                </li>
            </ul>
        </div>
                <div class="space"></div>
        <!-- isotope filters end -->





        <div class="isotope-container row grid-space-20" id="container">
            <div class="col-sm-4 col-sm-offset-1 isotope-item web-design">
                <div class="thumbnail">
                    <img src="assets/screenshots/sshot1.jpg" alt="">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque doloribus enim vitae nam cupiditate eius at explicabo eaque facere iste.</p>
                        <p><a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-1">Project Title</a></p>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="project-1" tabindex="-1" role="dialog" aria-labelledby="project-1-label" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="project-1-label">Project Title</h4>
                                </div>
                                <div class="modal-body">
                                    <h3>Project Description</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>

                                        </div>
                                        <div class="col-md-6">
                                            <img class="img-responsive" src="assets/screenshots/sshot1.jpg" alt="">
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


            </div>

            <div class="col-sm-4 col-sm-offset-1 isotope-item app-development">
                <div class="thumbnail">
                    <img src="assets/screenshots/sshot3.jpg" alt="">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque doloribus enim vitae nam cupiditate eius at explicabo eaque facere iste.</p>
                        <p><a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-2">Project Title</a></p>
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

                                        </div>
                                        <div class="col-md-6">
                                            <img class="img-responsive" src="assets/screenshots/sshot1.jpg" alt="">
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
            </div>

            <div class="col-sm-4 col-sm-offset-1 isotope-item app-development">
                <div class="thumbnail">
                    <img src="assets/screenshots/sshot3.jpg" alt="">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p><a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-3">Project Title</a></p>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="project-3" tabindex="-1" role="dialog" aria-labelledby="project-3-label" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="project-3-label">Project Title</h4>
                                </div>
                                <div class="modal-body">
                                    <h3>Project Description</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>

                                        </div>
                                        <div class="col-md-6">
                                            <img class="img-responsive" src="assets/screenshots/sshot1.jpg" alt="">
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
            </div>

            <div class="col-sm-4 col-sm-offset-1 isotope-item web-design">
                <div class="thumbnail">
                    <img src="assets/screenshots/sshot5.jpg" alt="">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p><a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-4">Project Title</a></p>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="project-4" tabindex="-1" role="dialog" aria-labelledby="project-4-label" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="project-4-label">Project Title</h4>
                                </div>
                                <div class="modal-body">
                                    <h3>Project Description</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>

                                        </div>
                                        <div class="col-md-6">
                                            <img class="img-responsive" src="assets/screenshots/sshot1.jpg" alt="">
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
            </div>
            <div class="col-sm-4 col-sm-offset-1 isotope-item site-building">
                <div class="thumbnail">
                    <img src="assets/screenshots/sshot3.jpg" alt="">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p><a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-5">Project Title</a></p>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="project-5" tabindex="-1" role="dialog" aria-labelledby="project-5-label" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="project-5-label">Project Title</h4>
                                </div>
                                <div class="modal-body">
                                    <h3>Project Description</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>

                                        </div>
                                        <div class="col-md-6">
                                            <img class="img-responsive" src="assets/screenshots/sshot1.jpg" alt="">
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
            </div>

            <div class="col-sm-4 col-sm-offset-1 isotope-item app-development">
                <div class="thumbnail">
                    <img src="assets/screenshots/sshot3.jpg" alt="">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p><a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-6">Project Title</a></p>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="project-6" tabindex="-1" role="dialog" aria-labelledby="project-6-label" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="project-6-label">Project Title</h4>
                                </div>
                                <div class="modal-body">
                                    <h3>Project Description</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>

                                        </div>
                                        <div class="col-md-6">
                                            <img class="img-responsive" src="assets/screenshots/sshot1.jpg" alt="">
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

            </div>
        </div>
    </div>
            </div>
            </div>
</section>


<!-- Fourth (Contact) section -->
<section class="section" id="services">
    <div class="container">
    
        <h2 class="text-center title">Services</h2>

        <div class="row part" id="service1">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                
                
                     


                 
                            <div class="row">
                                <div class="col-md-offset-2 col-md-8 col-xs-12">



                                    <div class="row text-center">
                                        <div class="col-md-4 col-sm-8">
                    <span class="fa-stack fa-4x">
                        
                        <i class="fa fa-shopping-cart fa-stack-1x"></i>
                    </span>
                                            <h4 class="service-heading">E-Commerce</h4>
                                            <p class="text-muted">Lorem ipsum dolor sit amet, quo inventore harum ex magni, dicta impedit.</p>
                                        </div>
                                        <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                       
                        <i class="fa fa-laptop fa-stack-1x"></i>
                    </span>
                                            <h4 class="service-heading">Responsive Design</h4>
                                            <p class="text-muted">Lorem ipsum dolor sit amet,nventore harum ex magni, dicta impedit.</p>
                                        </div>
                                        <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                         
                        <i class="fa fa-cogs fa-stack-1x"></i>
                    </span>
                                            <h4 class="service-heading">Web Security</h4>
                                            <p class="text-muted">Lorem ipsum dolor sit amet, inventore harum ex magni, dicta impedit.</p>
                                        </div>
                                    </div>


                                </div>
                       </div>
                       
                       
        
                
            </div>
        </div>

        
        <div class="row part" id="service2">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                
                
                     


                 
                            <div class="row">
                                <div class="col-md-offset-2 col-md-8 col-xs-12">



                                    <div class="row text-center">
                                        <div class="col-md-4 col-sm-8">
                    <span class="fa-stack fa-4x">
                        
                        <i class="fa fa-shopping-cart fa-stack-1x"></i>
                    </span>
                                            <h4 class="service-heading">E-Commerce</h4>
                                            <p class="text-muted">Lorem ipsum dolor sit amet, quo inventore harum ex magni, dicta impedit.</p>
                                        </div>
                                        <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                       
                        <i class="fa fa-laptop fa-stack-1x"></i>
                    </span>
                                            <h4 class="service-heading">Responsive Design</h4>
                                            <p class="text-muted">Lorem ipsum dolor sit amet,nventore harum ex magni, dicta impedit.</p>
                                        </div>
                                        <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                         
                        <i class="fa fa-cogs fa-stack-1x"></i>
                    </span>
                                            <h4 class="service-heading">Web Security</h4>
                                            <p class="text-muted">Lorem ipsum dolor sit amet, inventore harum ex magni, dicta impedit.</p>
                                        </div>
                                    </div>


                                </div>
                       </div>
                </div>    
                
            </div>


        <div class="space"></div>

        <div class="row">
            <div class="col-xs-offset-5 col-xs-4 col-md-offset-5 col-md-3">
            <ol class="breadcrumb selection center-block">
                <li><a href="#service1">1</a></li>
                <li><a href="#service2">2</a></li>
            </ol>
</div>
            </div>




</div>
                 
</section>




<!-- Fourth (News) section -->
<section class="section" id="news">
    <div class="container">
    
        <h2 class="text-center title">News</h2>
            <div class="space"></div>
        <div class="row part" id="news1">

                            <div class="col-sm-6 col-md-4 col-md-offset-1">
                                        <img class="img-responsive" src="assets/images/body1.jpg"/>
                                    <a class="btn btn-default btn-block">New opened branch in mansoura</a>
                                </div>
                                
                                <div class="col-sm-6 col-md-4 col-md-offset-2">
                                        <img class="img-responsive" src="assets/images/body2.jpg"/>
                                    <a class="btn btn-default btn-block">Know more</a>
                                </div>
                                  
        </div>
        <div class="row part" id="news2">

                            <div class="col-sm-6 col-md-4 col-md-offset-1">
                                        <img class="img-responsive" src="assets/images/body1.jpg"/>
                                    <a class="btn btn-default btn-block">New opened branch in mansoura</a>
                                </div>
                                
                                <div class="col-sm-6 col-md-4 col-md-offset-2">
                                        <img class="img-responsive" src="assets/images/body2.jpg"/>
                                    <a class="btn btn-default btn-block">Know more</a>
                                </div>
                                  
        </div>



        <div class="space"></div>

        <div class="row">
            <div class="col-xs-offset-5 col-xs-4 col-md-offset-5 col-md-3">
                <ol class="breadcrumb selection">
                    <li><a href="#news1">1</a></li>
                    <li><a href="#news2">2</a></li>
                </ol>
            </div>
        </div>

        </div>



</section>






<!-- Fourth (Promotion) section -->
<section class="section" id="promotions">
    <div class="container">

        <h2 class="text-center title">Promotions</h2>
            <div class="space"></div>
        <div class="row part box" id="promotion1">


                             <div class="col-md-offset-1 col-md-4 ">
                                    <img src="assets/images/body2.jpg" class="img-responsive img-pro">
                                 </div>
                                <div class="col-md-offset-2"></div>
                                <div class="col-md-4 col-md-push-2">
                                    <div class="space"></div>

                                  <h3 class="text-center"> DON'T MISS THIS OFFER </h3>
                            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi adipisci illo, voluptatum, consectetur adipisicing elit. Excepturi adipisci illo, voluptatum </p>
                                    <div class="space"></div>
                                    <div>
                                        <p><a class="btn view center-block" role="button">know more</a></p>
                                    </div>
                                </div>


        </div>
        <div class="row part box" id="promotion2">

                              <div class="col-md-offset-1 col-md-4 ">
                                    <img src="assets/images/body2.jpg" class="img-responsive img-pro">
                                 </div>
                                <div class="col-md-offset-2"></div>
                                <div class="col-md-4 col-md-push-2">

                                    <div class="space"></div>
                                    <h3 class="text-center"> 50% DISCOUNT </h3>
                            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi adipisci illo, voluptatum, consectetur adipisicing elit. Excepturi adipisci illo, voluptatum </p>
                                    <div class="space"></div>
                                    <div>
                                        <p><a class="btn view center-block" role="button">know more</a></p>
                                    </div>
                                </div>

        </div>

<div class="space"></div>

        <div class="row">
            <div class="col-xs-offset-5 col-xs-4 col-md-offset-5 col-md-3">
                <ol class="breadcrumb selection center-block">
                    <li><a href="#promotion1">1</a></li>
                    <li><a href="#promotion2">2</a></li>
                </ol>
</div>
            </div>


    </div>
</section>








<!-- Fourth (Contact) section -->
<section class="section" id="contact">
    <div class="container">
    
        <h2 class="text-center title">Contact us</h2>

    <div class="row">
                        <div class="col-sm-6">
                            <div class="footer-content">
                                <p class="large">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel nam magnam natus tempora cumque, aliquam deleniti voluptatibus voluptas. Repellat vel, et itaque commodi iste ab, laudantium voluptas deserunt nobis.</p>
                                <ul class="list-icons">
                                    <li><i class="fa fa-map-marker pr-10"></i> One infinity loop, 54100</li>
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
                                    <!--<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>-->                        <!--  sally's update  -->
                                    <li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
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
                    <div class="space"></div>
                    <div class="row">
                    <div class="col-xs-12">
                        <div id="googleMap"  style="width:100%;height:500px;"></div>
                    </div>
                </div>
            </div>

</section>




<!-- Load js libs only when the page is loaded. -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr.custom.72241.js"></script>
<!--<script src="assets/js/isotope.pkgd.min.js"></script>-->
    <script src="assets/js/isotope.pkgd.min.js"></script>
<!-- Custom template scripts -->
<script src="assets/js/magister.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
    function initialize() {
        var mapProp = {
            center:new google.maps.LatLng(51.508742,-0.120850),
            zoom:5,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
</body>
</html>

