    <!DOCTYPE html>
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>LongDOI</title>

        <meta name="description" content="ProUI Frontend is a Responsive Bootstrap Site Template created by pixelcave and added as a bonus in ProUI Admin Template package which is published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="img/icon180.png" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        {!! HTML::style('css/bootstrap.min.css') !!}

        <!-- Related styles of various icon packs and plugins -->
        {!! HTML::style('css/plugins.css') !!}

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        {!! HTML::style('css/main.css') !!}

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        {!! HTML::style('css/themes.css') !!}
        <!-- END Stylesheets -->

        {!! HTML::style('css/longdoi.css') !!}

        <!-- stockResult page ONLY -->
        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        @yield('css-backend')

        <!-- Modernizr (browser feature detection library) & Respond.js (enables responsive CSS code on browsers that don't support it, eg IE8) -->
        {!! HTML::script('js/vendor/modernizr-respond.min.js') !!}
    </head>
    <body>
        <!-- Page Container -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!-- 'boxed' class for a boxed layout -->
        <div id="page-container" class="boxed">
            <!-- Site Header -->
            <header>
                <div class="container">
                    <!-- Site Logo -->
                    <a href={{$app->make('url')->to('/')}} class="site-logo">
                        <i class="fa fa-area-chart"></i> Long<strong>DOI</strong>
                    </a>
                    <!-- Site Logo -->

                    <!-- Site Navigation -->
                    <nav>
                        <!-- Menu Toggle -->
                        <!-- Toggles menu on small screens -->
                        <a href="javascript:void(0)" class="btn btn-default site-menu-toggle visible-xs visible-sm">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- END Menu Toggle -->

                        <!-- Main Menu -->
                        <ul class="site-nav">
                            <!-- Toggles menu on small screens -->
                            <li class="visible-xs visible-sm">
                                <a href="javascript:void(0)" class="site-menu-toggle text-center">
                                    <i class="fa fa-times"></i>
                                </a>
                            </li>
                            <!-- END Menu Toggle -->

                            <!-- check current url and add the class "active" -->
                            @if(Route::getCurrentRoute()->getPath()=='/') <li class="active">
                            @else <li> @endif
                                {!! HTML::linkAction('IndexController@index', 'Home') !!}
                            </li>
                            @if(Route::getCurrentRoute()->getPath()=='brokerRanking') <li class="active">
                            @else <li> @endif
                                {!! HTML::linkAction('Stockranking@index', 'Broker Ranking') !!}
                            </li>
                            @if(Route::getCurrentRoute()->getPath()=='recommendations') <li class="active">
                            @else <li> @endif
                                <a href="/recommendations">Recommendation</a>
                            </li>
                            @if(Route::getCurrentRoute()->getPath()=='analysis') <li class="active">
                            @else <li> @endif
                                {!! HTML::linkAction('Analysis@index', 'Analysis') !!}
                            </li>
                            @if(Route::getCurrentRoute()->getPath()=='team') <li class="active">
                            @else <li> @endif
                                {!! HTML::linkAction('IndexController@team', 'team') !!}
                            </li>
                        </ul>
                        <!-- END Main Menu -->
                    </nav>
                    <!-- END Site Navigation -->
                </div>
            </header>
            <!-- END Site Header -->

            @yield('content')
            <!-- Footer -->
            <footer class="site-footer site-section">
                <div class="container">
                    <!-- Footer Links -->
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-xs-6">
                            <h4 class="footer-heading">Follow Us</h4>
                            <ul class="footer-nav footer-nav-social list-inline">
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>

                        <div class="col-sm-6 col-md-6 col-xs-6 text-right">
                            <h4 class="footer-heading">About Us</h4>
                            <ul class="footer-nav list-inline">
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END Footer Links -->
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <!-- remove if stockResult page -->
        @yield('button-to-top')


        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file -->
        {!! HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js') !!}

        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.2.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
        {!! HTML::script('js/vendor/bootstrap.min.js') !!}
        {!! HTML::script('js/plugins.js') !!}
        {!! HTML::script('js/app.js') !!}

        <!-- stockResult page ONLY -->
        
        @yield('js-backend')


        <!-- Load and execute javascript code used only in this page -->
       
    </body>
    </html>