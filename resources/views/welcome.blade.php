@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


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

        <!-- Bootstrap core CSS -->
        <link href="{{ url('/assets/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

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
                                                <!-- <li class="hidden">
                                                     <a href="#page-top"></a>
                                                 </li>-->
                                                <li>
                                                    <a class="page-scroll" href="#page_top">Home</a>
                                                </li>
                                                <li>
                                                    <a class="page-scroll" href="#services">Services</a>
                                                </li>
                                                <li>
                                                    <a class="page-scroll" href="#about">About</a>
                                                </li>
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
                                            </ul>
                                            <ul class="nav navbar-nav navbar-left">
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle " href="#gallery" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery <span class="caret"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a  class="page-scroll" href="#gallery">Type1</a></li>
                                                        <li><a  class="page-scroll" href="#gallery">Type2</a></li>
                                                        <li><a class="page-scroll" href="#gallery">Type3</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="page-scroll" href="#news">News</a>
                                                </li>
                                                <li>
                                                    <a class="page-scroll" href="#promotion">Promotion</a>
                                                </li>
                                                <li>
                                                    <a class="page-scroll" href="#contact">Contact</a>
                                                </li>
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
