

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


        <!-- Modernizr (browser feature detection library) & Respond.js (enables responsive CSS code on browsers that don't support it, eg IE8) -->
        {!! HTML::script('js/vendor/modernizr-respond.min.js') !!}
    </head>
    <body>
    <div class="container">

                            <div class="col-sm-6">
                                <!-- Classic Chart Block -->
                                <div class="block full">
                                    <!-- Classic Chart Title -->
                                    <div class="block-title">
                                        <h2><strong>Classic</strong> Chart</h2>
                                    </div>
                                    <!-- END Classic Chart Title -->

                                    <!-- Classic Chart Content -->
                                    <!-- Flot Charts (initialized in js/pages/compCharts.js), for more examples you can check out http://www.flotcharts.org/ -->
                                    <div id="chart-classic" class="chart"></div>
                                    <!-- END Classic Chart Content -->
                                </div>
                                <!-- END Classic Chart Block -->
                            </div>
                    </div>  

{!! HTML::script('js2/pages/compCharts.js') !!}
<script>
    $(function(){ 
        CompCharts.init(); 
    });
</script>
</body>
</html>