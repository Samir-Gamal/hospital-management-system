<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    @include('WebSite.layouts.style')
    @livewireStyles
</head>

<body>

<div class="page-wrapper {{ LaravelLocalization::getCurrentLocale() ==='ar' ? 'rtl': ''}}">
    <!-- Preloader -->
    <div class="preloader"></div>

    <header class="main-header header-style-three">

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container clearfix">

                <!--Info-->
                <div class="logo-outer">
                    <div class="logo"><a href="index.html"><img src="images/logo-3.png" alt="" title=""></a></div>
                </div>

                <!--Nav Box-->
                @include('WebSite.layouts.header')

            </div>
        </div>
        <!--End Header Upper-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix">
                                <!--Keep This Empty / Menu will come through Javascript--></ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
        <!--End Sticky Header-->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon far fa-window-close"></span></div>

            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="images/nav-logo.png" alt="" title=""></a></div>

                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->
    @yield('content')

    @include('WebSite.layouts.footer')

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="post" action="index.html">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here"
                               required>
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>

            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Business</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">SEO</a></li>
                <li><a href="#">Logistics</a></li>
                <li><a href="#">Freedom</a></li>
            </ul>

        </div>

    </div>
</div>

<!-- sidebar cart item -->
<div class="xs-sidebar-group info-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">
                    X
                </a>
            </div>
            <div class="sidebar-textwidget">

                <!-- Sidebar Info Content -->
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <div class="logo">
                            <a href="index.html"><img src="images/logo-3.png" alt=""/></a>
                        </div>
                        <div class="content-box">
                            <h2>About Us</h2>
                            <p class="text">Core values are the fundamental beliefs of a person or organization. The
                                core values are the guiding prin ples that dictate behavior and action suas labore
                                saperet has there any quote for write lorem percit latineu.</p>
                            <a href="#" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
                        </div>
                        <div class="contact-info">
                            <h2>Contact Info</h2>
                            <ul class="list-style-two">
                                <li><span class="icon flaticon-map"></span>Chicago 12, Melborne City, USA</li>
                                <li><span class="icon flaticon-telephone"></span>(111) 111-111-1111</li>
                                <li><span class="icon flaticon-message-1"></span>meditech@gmail.com</li>
                                <li><span class="icon flaticon-timetable"></span>Week Days: 09.00 to 18.00 Sunday:
                                    Closed
                                </li>
                            </ul>
                        </div>
                        <!-- Social Box -->
                        <ul class="social-box">
                            <li class="facebook"><a href="#" class="fab fa-facebook-f"></a></li>
                            <li class="twitter"><a href="#" class="fab fa-twitter"></a></li>
                            <li class="linkedin"><a href="#" class="fab fa-linkedin-in"></a></li>
                            <li class="instagram"><a href="#" class="fab fa-instagram"></a></li>
                            <li class="youtube"><a href="#" class="fab fa-youtube"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- END sidebar widget item -->

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fas fa-cog"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
            <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
            <span class="palate olive-color" data-theme-file="css/color-themes/olive-theme.css"></span>
            <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
            <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
            <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
            <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
            <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
        </div>
    </div>

    <ul class="rtl-version option-box">
        <li class="rtl">RTL Version</li>
        <li>LTR Version</li>
    </ul>

    <a href="#" class="purchase-btn">Purchase now $17</a>

    <div class="palate-foo">
        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
    </div>

</div>

@include('WebSite.layouts.scripts')
@livewireScripts
</body>
</html>
