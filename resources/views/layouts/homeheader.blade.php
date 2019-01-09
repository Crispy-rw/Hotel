<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Tables and Hills</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{asset('css/reset.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('css/plugins.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('css/color.css')}}">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="pin"></div>
            <div class="pulse"></div>
        </div>
        <!--loader end-->
        <!-- Main  -->
        <div id="main">
            <!-- header-->
            <header class="main-header dark-header fs-header sticky">
                <div class="header-inner">
                    <div class="logo-holder">
                        <img src="{{asset('images/logo3.png')}}" alt="">
                    </div>
                    <form method="post" action="/search">
                        @csrf
                    <div class="header-search vis-header-search">
                        <div class="header-search-input-item">
                            <input required type="text" placeholder="Keywords" name="keyword" value=""/>
                        </div>
                        <div class="header-search-select-item">
                            <select required data-placeholder="All Categories" name="cat" class="chosen-select" >
                                <option value=""> -- -- -- -- --</option>
                                <option value="1">Hotels</option>
                                <option value="2">Restaurants</option>
                            </select>
                        </div>
                    </div>
                    <div class="show-search-button"><i class="fa fa-search"></i>
                     <span><input type="submit"  value="Search"></span>
                    </div>
                    </form>
                    <a href="dashboard-add-listing.html" class="add-list show-reg-form modal-open">Sign In</a>
                    <!-- nav-button-wrap-->
                    <div class="nav-button-wrap color-bg">
                        <div class="nav-button">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                    <!-- nav-button-wrap end-->
                    <!--  navigation -->
                    <div class="nav-holder main-menu">
                        <nav>
                            <ul>
                                <li>
                                    <a href="#" class="act-link">Home</a>
                                    <!--second level -->
                                </li>
                                <li>
                                    <a href="#">Hotels <i class="fa fa-caret-down"></i></a>
                                    <!--second level -->
                                    <ul>
                                        <li><a href="#">Kigali</a></li>
                                        <li><a href="#">Musanze</a></li>
                                        <li><a href="#">Rubavu</a></li>
                                        <li><a href="#">Huye</a></li>
                                        <li><a href="#">Karongi</a></li>
                                        <li><a href="#">Nyungwe</a></li>
                                        <li><a href="#">Nyanza</a></li>
                                        <li><a href="#">Akagera</a></li>
                                    </ul>
                                    <!--second level end-->
                                </li>
                                <li><a href="#">Restaurants</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Terms and Conditions</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- navigation  end -->
                </div>
            </header>
            <!--  header end -->