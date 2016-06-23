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
        <link href="{{ url('/assets/css/sally/style.css') }}" rel="stylesheet">

        <!-- Custom css --> 
        <link href="{{ url('/assets/css/custom.css') }}" rel="stylesheet">
        <link href="{{ url('/assets/css/emy.css') }}" rel="stylesheet">
        <style type="text/css" media="screen">
            .main-navigation .navbar-default .navbar-nav > li > a
            {
                color:{{ $mysite[0]->primary_color }};
            }   

            .carousel-indicators li
            {
                background-color:{{ $mysite[0]->primary_color }};
            }

            .carousel-indicators .active
            {
                background-color:{{ $mysite[0]->secondry_color }};
            }

            h1, h2, h3, h4, h5, h6 {
                color:{{ $mysite[0]->text_color }};
            }

            a {
                color: {{ $mysite[0]->primary_color }};
            }

            .default-bg h1, .default-bg h2, .default-bg h3, .default-bg h4, .default-bg h5, .default-bg h6, .translucent-bg h1, .translucent-bg h2, .translucent-bg h3, .translucent-bg h4, .translucent-bg h5, .translucent-bg h6 {
               color: {{ $mysite[0]->secondry_color }};
                }
        </style>


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
