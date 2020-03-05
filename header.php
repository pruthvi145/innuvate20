<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>
        Innuvate 2020
    </title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/style-2.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
</head>


<body
    class="<?php echo $_SERVER['REQUEST_URI'] == "/innuvate20/index.php" || $_SERVER['REQUEST_URI'] == "/innuvate20/"  ? "dark-page" : ""; ?>">
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        <header class="main-header header-style-one">
            <!--Header-Upper-->
            <div class="header-upper">
                <div class="outer-container">
                    <div class="clearfix">
                        <div class="pull-left logo-box">
                            <div class="logo">
                                <a href="index.php"><img src="images/logo.png" alt="" width="200px" /></a>
                            </div>
                        </div>

                        <div class="nav-outer clearfix">
                            <!--Mobile Navigation Toggler For Mobile-->
                            <div class="mobile-nav-toggler">
                                <span class="icon flaticon-menu"></span>
                            </div>

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md">
                                <div class="navbar-header">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse scroll-nav clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current">
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li>
                                            <a href="about.php">About Us</a>
                                        </li>
                                        <li>
                                            <a href="team.php">Team</a>
                                        </li>
                                        <li>
                                            <a href="gallery.php">Gallery</a>

                                        </li>
                                        <li class="dropdown">
                                            <a href="">Events</a>
                                            <ul>
                                                <li><a href="">Non-tech Events</a></li>
                                                <li>
                                                    <a href="events.php?category=tech">Tech Events</a>
                                                </li>
                                                <li><a href="">Workshops</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="">Contact Us</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->
                            <!-- Outer Box -->
                            <div class="outer-box">
                                <!-- Button Box -->
                                <div class="btn-box">
                                    <a href="" class="theme-btn btn-style-one">Register Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left mt-2">
                        <a href="index.php" class="img-responsive"><img src="images/logo-small.png" alt=""
                                width="200px" /></a>
                    </div>

                    <!--Right Col-->
                    <div class="right-col pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                                <ul class="navigation clearfix">
                                    <!--Keep This Empty / Menu will come through Javascript-->
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                    </div>
                </div>
            </div>
            <!--End Sticky Header-->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn">
                    <span class="icon flaticon-cancel"></span>
                </div>

                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                <nav class="menu-box">
                    <div class="nav-logo">
                        <a href="index.php"><img src="images/nav-logo.png" alt="" title="" /></a>
                    </div>

                    <ul class="navigation clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </ul>
                </nav>
            </div>
            <!-- End Mobile Menu -->
        </header>
        <!-- End Main Header -->