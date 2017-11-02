<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="no-js oldie ie8" lang="fr"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js oldie ie9" lang="fr"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="{{ config('app.locale') }}"> <!--<![endif]-->
    <head>

        <!--- elements basic de la page
        ================================================== -->
        <meta charset="utf-8">
        <title>@yield('titre')</title>

        <!-- spécification du meta pour le mobile
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/front/style.css">
        <link rel="stylesheet" href="/css/front/animate.css">
        <link rel="stylesheet" href="/css/front/app.css">
        @yield('css')

        <!-- script
        ================================================== -->

        <!-- favicons
        ================================================== -->
    </head>

    <body class="fixed-header">


        <div class="page-box">

            <div class="page-box-content">

                <!-- header
                ================================================== -->

                <header class="header">
                    <div class="header-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-6 col-md-2 col-lg-3 logo-box">
                                    <div class="logo">
                                        <a href="">
                                            <img src="" class="logo-img" alt="">
                                        </a>
                                    </div>
                                </div><!-- .logo-box -->

                                <div class="col-xs-6 col-md-10 col-lg-9 right-box">
                                    <div class="right-box-wrapper">
                                        <div class="header-icons">
                                            <div class="search-header hidden-600">

                                            </div>
                                            <!-- .search-header-->
                                            <div class="phone-header hidden-600">

                                            </div>
                                            <!-- .phone-header -->
                                        </div>
                                            <!-- .header-icons -->

                                        <div class="primary">
                                            <div class="navbar navbar-default" role="navigation">
                                                <button type="button" class="navbar-toggle btn-navbar collapsed"
                                                        data-toggle="collapse" data-target=".primary .navbar-collapse">
                                                    <span class="text">Menu</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>

                                                <nav class="collapse collapsing navbar-collapse">
                                                    <ul class="nav navbar-nav navbar-center">
                                                        <li class="parent">
                                                            <a href="index.html">Home</a>
                                                            <ul class="sub">

                                                            </ul>
                                                        </li>
                                                        <li class="parent">
                                                            <a href="#">Contact</a>
                                                            <ul class="sub">

                                                            </ul>
                                                        </li>
                                                        <li class="parent">
                                                            <a href="">Login</a>
                                                            <ul class="sub">

                                                            </ul>
                                                        </li>
                                                        <li class="parent megamenu promo">
                                                            <a href="#">Mon Menu</a>
                                                            <ul class="sub">
                                                                <li class="sub-wrapper">
                                                                    <div class="sub-list">
                                                                        <div class="box">
                                                                            <ul>
                                                                                <li><a href="">Autres</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul><!-- .sub -->
                                                        </li>
                                                        <li class="parent megamenu promo">
                                                            <a href="#">Elements</a>
                                                            <ul class="sub">
                                                                <li class="sub-wrapper">
                                                                    <div class="sub-list">
                                                                        <div class="box">
                                                                            <ul>
                                                                                <li><a href=""><i class="fa fa-plus-square"></i> Accordions &amp; Toggles</a></li>
                                                                            </ul>
                                                                        </div><!-- .box -->
                                                                        <div class="box">
                                                                            <ul>
                                                                                <li><a href=""><i class="fa fa-user"></i> Person</a></li>
                                                                            </ul>
                                                                        </div><!-- .box -->
                                                                    </div><!-- .sub-list -->

                                                                    <div class="promo-block bg">
                                                                        <img class="replace-2x" src="" width="240" height="434" alt="">
                                                                    </div><!-- .promo-block -->
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="parent">
                                                            <a href="{{ url('admin') }}">Administration</a>
                                                        </li>
                                                        <li class="parent item-primary item-bg">
                                                            <a href="#">Bootstrap</a>
                                                            <ul class="sub">
                                                                <li><a href="bootstrap-accordions.html">Accordions</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div><!-- .primary -->
                                    </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </header>

                <!-- end header -->

                @yield('main')


                <!-- footer
                ================================================== -->


                <!-- end footer-bottom -->

                <!-- Java Script
               ================================================== -->

                <script src="/js/app.js"></script>
                @yield('scripts')
            </div>
        </div>
    </body>
</html>


