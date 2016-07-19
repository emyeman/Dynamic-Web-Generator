<!DOCTYPE html>
<html lang="en" style="background:url('{{$mysite[0]->background_image}}') no-repeat center center fixed;" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>Nature</title>

    <link rel="shortcut icon" href="{{url('assets/images/gt_favicon.png')}}">
    
    <!-- Bootstrap itself -->
    <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom styles -->
    <link rel="stylesheet" href="{{url('assets/css/magister.css')}}">

   <!-- Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!--flag font-->
        <link href="{{url('assets/css/languages.min.css')}}" rel="stylesheet">
        
            <style type="text/css" media="screen">
            /* .main-navigation .navbar-default .navbar-nav > li > a
            {
                color:{{ $mysite[0]->primary_color }};
            } */  

            .theme-invert .title, .theme-invert .subtitle, .theme-invert .tagline{
                color:{{ $mysite[0]->primary_color }};
            } 

            .carousel-indicators li 
            {
                background-color:{{ $mysite[0]->primary_color }};
            }

            .carousel-indicators .active ,
            {
                background-color:{{ $mysite[0]->secondry_color }};
            }

            h1, h2, h3, h4, h5, h6 ,.lead ,.theme-invert,.text-muted {
                color:{{ $mysite[0]->text_color }};
            }

            a , .navbar-nav>li>a ,.theme-invert a {
                color: {{ $mysite[0]->primary_color }};
            }

            .theme-invert .btn , .dropdown-menu>li>a ,.btn-default:hover, .btn-default:focus, .btn-default.focus, .btn-default:active, .btn-default.active, .open>.dropdown-toggle.btn-default{
               color: {{ $mysite[0]->secondry_color }};
                } 


        </style>

    