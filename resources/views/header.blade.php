<div id="container">
    <div id="sidebar" class="sidebar-fixed">
        <div id="sidebar-content">

            <!-- Search Input -->
            <form class="sidebar-search">
                <div class="input-box">
                    <button type="submit" class="submit">
                        <i class="icon-search"></i>
                    </button>
                    <span>
                        <input type="text" placeholder="Search...">
                    </span>
                </div>
            </form>

            <!-- Search Results -->
            <div class="sidebar-search-results">

                <i class="icon-remove close"></i>
                <!-- Documents -->
                <div class="title">
                    Documents
                </div>
                <ul class="notifications">
                    <li>
                        <a href="javascript:void(0);">
                            <div class="col-left">
                                <span class="label label-info"><i class="icon-file-text"></i></span>
                            </div>
                            <div class="col-right with-margin">
                                <span class="message"><strong>John Doe</strong> received $1.527,32</span>
                                <span class="time">finances.xls</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <div class="col-left">
                                <span class="label label-success"><i class="icon-file-text"></i></span>
                            </div>
                            <div class="col-right with-margin">
                                <span class="message">My name is <strong>John Doe</strong> ...</span>
                                <span class="time">briefing.docx</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /Documents -->
                <!-- Persons -->
                <div class="title">
                    Persons
                </div>
                <ul class="notifications">
                    <li>
                        <a href="javascript:void(0);">
                            <div class="col-left">
                                <span class="label label-danger"><i class="icon-female"></i></span>
                            </div>
                            <div class="col-right with-margin">
                                <span class="message">Jane <strong>Doe</strong></span>
                                <span class="time">21 years old</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div> <!-- /.sidebar-search-results -->

            <!--=== Navigation ===-->
            <ul id="nav">
                <!-- <li class="current">
                    <a href="index.html">
                        <i class="icon-dashboard"></i>
                        Dashboard
                    </a>
                </li> -->
                <li>
                    <a href="{{ url('/branding') }}">
                        <!-- <i class="icon-dashboard"></i> -->
                        Branding
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <!-- <i class="icon-edit"></i> -->
                        Categories
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ url('/category')}}">
                            <i class="icon-angle-right"></i>
                            Show Categories
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/category/create')}}">
                            <i class="icon-angle-right"></i>
                            Add Category
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <!-- <i class="icon-edit"></i> -->
                        Sub Categories
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ url('/subcategory')}}">
                            <i class="icon-angle-right"></i>
                            Show Sub Categories
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/subcategory/create')}}">
                            <i class="icon-angle-right"></i>
                            Add Sub Category
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <!-- <i class="icon-edit"></i> -->
                        Products
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ url('/product')}}">
                            <i class="icon-angle-right"></i>
                            Show Products
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/product/create')}}">
                            <i class="icon-angle-right"></i>
                            Add Product
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <!-- <i class="icon-edit"></i> -->
                        Crusal
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ url('/crusal')}}">
                            <i class="icon-angle-right"></i>
                            Show Images
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/crusal/create')}}">
                            <i class="icon-angle-right"></i>
                            Add Image
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <!-- <i class="icon-edit"></i> -->
                        Promotions
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ url('/news_promotion/promotion')}}">
                            <i class="icon-angle-right"></i>
                            Show Promotions
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/news_promotion/create/promotion')}}">
                            <i class="icon-angle-right"></i>
                            Add Promotion
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <!-- <i class="icon-edit"></i> -->
                        News
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ url('/news_promotion/news')}}">
                            <i class="icon-angle-right"></i>
                            Show News
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/news_promotion/create/news')}}">
                            <i class="icon-angle-right"></i>
                            Add News
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <!-- <i class="icon-edit"></i> -->
                        Pages
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ url('/page')}}">
                            <i class="icon-angle-right"></i>
                            Show Pages
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/page/create')}}">
                            <i class="icon-angle-right"></i>
                            Add Page
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <!-- <i class="icon-edit"></i> -->
                        Menus
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ url('/menu')}}">
                            <i class="icon-angle-right"></i>
                            Show Menus
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/menu/create')}}">
                            <i class="icon-angle-right"></i>
                            Add Menu
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <!-- <i class="icon-edit"></i> -->
                        Services
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ url('/service') }}">
                            <i class="icon-angle-right"></i>
                            Show Services
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/service/create')}}">
                            <i class="icon-angle-right"></i>
                            Add Service
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- <li>
                    <a href="javascript:void(0);">
                        
                        Contact Us
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ url('/contactus')}}">
                            <i class="icon-angle-right"></i>
                            Show Contact Us
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/contactus/create')}}">
                            <i class="icon-angle-right"></i>
                            Add Contact Us
                            </a>
                        </li>
                    </ul>
                </li> -->
                <li>
                    <a href="{{ url('/contactus') }}">
                        <!-- <i class="icon-dashboard"></i> -->
                        Contact Us
                    </a>
                </li>
                <li>
                    <a href="{{ url('/aboutus/create')}}">
                        <!-- <i class="icon-dashboard"></i> -->
                        About Us
                    </a>
                </li>
                <li>
                    <a href="{{ url('/template')}}">
                        <!-- <i class="icon-dashboard"></i> -->
                        Templates
                    </a>
                </li>
                
                <li>
                    <a href="{{ url('/domain')}}">
                        <!-- <i class="icon-dashboard"></i> -->
                        Domain
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);">
                        <!-- <i class="icon-edit"></i> -->
                        Ticket
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ url('/ticket') }}">
                            <i class="icon-angle-right"></i>
                            Show Ticket
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/ticket/create')}}">
                            <i class="icon-angle-right"></i>
                            Add Ticket
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- <li>
                    <a href="javascript:void(0);">
                        <i class="icon-desktop"></i>
                        UI Features
                        <span class="label label-info pull-right">6</span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="ui_general.html">
                            <i class="icon-angle-right"></i>
                            General
                            </a>
                        </li>
                        <li>
                            <a href="ui_buttons.html">
                            <i class="icon-angle-right"></i>
                            Buttons
                            </a>
                        </li>
                        <li>
                            <a href="ui_tabs_accordions.html">
                            <i class="icon-angle-right"></i>
                            Tabs &amp; Accordions
                            </a>
                        </li>
                        <li>
                            <a href="ui_sliders.html">
                            <i class="icon-angle-right"></i>
                            Sliders
                            </a>
                        </li>
                        <li>
                            <a href="ui_nestable_list.html">
                            <i class="icon-angle-right"></i>
                            Nestable List
                            </a>
                        </li>
                        <li>
                            <a href="ui_typography.html">
                            <i class="icon-angle-right"></i>
                            Typography / Icons
                            </a>
                        </li>
                        <li>
                            <a href="ui_google_maps.html">
                            <i class="icon-angle-right"></i>
                            Google Maps
                            </a>
                        </li>
                        <li>
                            <a href="ui_grid.html">
                            <i class="icon-angle-right"></i>
                            Grid
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="icon-edit"></i>
                        Form Elements
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="form_components.html">
                            <i class="icon-angle-right"></i>
                            Form Components
                            </a>
                        </li>
                        <li>
                            <a href="form_layouts.html">
                            <i class="icon-angle-right"></i>
                            Form Layouts
                            </a>
                        </li>
                        <li>
                            <a href="form_validation.html">
                            <i class="icon-angle-right"></i>
                            Form Validation
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="icon-table"></i>
                        Tables
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="tables_static.html">
                            <i class="icon-angle-right"></i>
                            Static Tables
                            </a>
                        </li>
                        <li>
                            <a href="tables_dynamic.html">
                            <i class="icon-angle-right"></i>
                            Dynamic Tables (DataTables)
                            </a>
                        </li>
                        <li>
                            <a href="tables_responsive.html">
                            <i class="icon-angle-right"></i>
                            Responsive Tables
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="charts.html">
                        <i class="icon-bar-chart"></i>
                        Charts &amp; Statistics
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="icon-folder-open-alt"></i>
                        Pages
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="login.html">
                            <i class="icon-angle-right"></i>
                            Login
                            </a>
                        </li>
                        <li>
                            <a href="pages_user_profile.html">
                            <i class="icon-angle-right"></i>
                            User Profile
                            </a>
                        </li>
                        <li>
                            <a href="pages_calendar.html">
                            <i class="icon-angle-right"></i>
                            Calendar
                            </a>
                        </li>
                        <li>
                            <a href="pages_invoice.html">
                            <i class="icon-angle-right"></i>
                            Invoice
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="icon-list-ol"></i>
                        4 Level Menu
                    </a>
                    <ul class="sub-menu">
                        <li class="open-default">
                            <a href="javascript:void(0);">
                                <i class="icon-cogs"></i>
                                Item 1
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="open-default">
                                    <a href="javascript:void(0);">
                                        <i class="icon-user"></i>
                                        Sample Link 1
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="current"><a href="javascript:void(0);"><i class="icon-remove"></i> Sample Link 1</a></li>
                                        <li><a href="javascript:void(0);"><i class="icon-pencil"></i> Sample Link 1</a></li>
                                        <li><a href="javascript:void(0);"><i class="icon-edit"></i> Sample Link 1</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);"><i class="icon-user"></i>  Sample Link 1</a></li>
                                <li><a href="javascript:void(0);"><i class="icon-external-link"></i>  Sample Link 2</a></li>
                                <li><a href="javascript:void(0);"><i class="icon-bell"></i>  Sample Link 3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <i class="icon-globe"></i>
                                Item 2
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="javascript:void(0);"><i class="icon-user"></i>  Sample Link 1</a></li>
                                <li><a href="javascript:void(0);"><i class="icon-external-link"></i>  Sample Link 1</a></li>
                                <li><a href="javascript:void(0);"><i class="icon-bell"></i>  Sample Link 1</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <i class="icon-folder-open"></i>
                                Item 3
                            </a>
                        </li>
                    </ul>
                </li> -->
            </ul>
            
            <!-- /Navigation -->
            <div class="sidebar-title">
                <span>Notifications</span>
            </div>
            <ul class="notifications demo-slide-in"> <!-- .demo-slide-in is just for demonstration purposes. You can remove this. -->
                <li style="display: none;"> <!-- style-attr is here only for fading in this notification after a specific time. Remove this. -->
                    <div class="col-left">
                        <span class="label label-danger"><i class="icon-warning-sign"></i></span>
                    </div>
                    <div class="col-right with-margin">
                        <span class="message">Server <strong>#512</strong> crashed.</span>
                        <span class="time">few seconds ago</span>
                    </div>
                </li>
                <li style="display: none;"> <!-- style-attr is here only for fading in this notification after a specific time. Remove this. -->
                    <div class="col-left">
                        <span class="label label-info"><i class="icon-envelope"></i></span>
                    </div>
                    <div class="col-right with-margin">
                        <span class="message"><strong>John</strong> sent you a message</span>
                        <span class="time">few second ago</span>
                    </div>
                </li>
                <li>
                    <div class="col-left">
                        <span class="label label-success"><i class="icon-plus"></i></span>
                    </div>
                    <div class="col-right with-margin">
                        <span class="message"><strong>Emma</strong>'s account was created</span>
                        <span class="time">4 hours ago</span>
                    </div>
                </li>
            </ul>

            <div class="sidebar-widget align-center">
                <div class="btn-group" data-toggle="buttons" id="theme-switcher">
                    <label class="btn active">
                        <input type="radio" name="theme-switcher" data-theme="bright"><i class="icon-sun"></i> Bright
                    </label>
                    <label class="btn">
                        <input type="radio" name="theme-switcher" data-theme="dark"><i class="icon-moon"></i> Dark
                    </label>
                </div>
            </div>

        </div>
        <div id="divider" class="resizeable"></div>
    </div><!-- /Sidebar -->
    
