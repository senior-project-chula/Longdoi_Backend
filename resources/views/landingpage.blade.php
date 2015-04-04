@extends('main')

@section('content')


    <!-- Intro -->
    <section class="site-section site-section-light site-section-top parallax-image" style="background-image: url('img/16353695-media_httpdldropboxco_pedhu2.jpg');height:100vh;">
        <div class="container">
            <h1 class="animation-slideDown hidden-xs" style="font-size:60px;">Let's get down the DOI, go <strong style="color:#9AFEFF">LongDOI</strong>.</h1>
            <h1 class="text-center animation-slideDown hidden-lg hidden-md hidden-sm" style="font-size:60px;"><strong>Let's get down the DOI</strong></h1>
            <h2 class="text-right animation-slideUp push" style="font-size:30px">Are you tired to read numerous investment researches in the morning?</h2>

            <div class="row">
                <div class="col-md-8 col-md-offset-4">
                    <div id="reading_hype_container" style="margin:-40px auto auto auto;position:relative;width:600px;height:400px;overflow:hidden;" aria-live="polite">
                        {!! HTML::script('hype/reading.hyperesources/reading_hype_generated_script.js?12341', array('charset' => 'utf-8')) !!}
                    </div>
                </div>
            </div>         
        </div>                 
    </section>
    <!-- END Intro -->


    <!-- Promo #1 -->
    <section class="site-content site-section site-slide-content" >
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-1">
                    <div id="extracting_hype_container" style="margin:auto;position:relative;width:600px;height:400px;overflow:hidden;" aria-live="polite">
                        {!! HTML::script('hype/extracting.hyperesources/extracting_hype_generated_script.js?39270', array('charset' => 'utf-8')) !!}
                    </div>
                </div>
                <div class="col-sm-5">
                    <br>
                    <h1 class="text-right animation-slideUp visibility-none" style="font-size:60px;margin-bottom:50px;">Extracting and Summarizing <small>investment researches.</small></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- END Promo #1 -->

    <!-- Quick Stats -->
    <section class="site-content site-section parallax-image" style="background-image: url('img/fundamental(1).jpg');">
        <div class="container">
            <!-- Stats Row -->
            <!-- CountTo (initialized in js/app.js), for more examples you can check out https://github.com/mhuggins/jquery-countTo -->
            <div class="row" id="counters">
                <div class="col-sm-8 col-sm-offset-2 TOTAL-none visibility-none" data-toggle="animation-appear" data-animation-class="animation-slideUp" data-element-offset="-180">
                    <div class="counter site-block">
                        <h1 style="margin-top:0px"><i class="hi hi-thumbs-up"></i> <strong>Daily Recommendations</strong></h1>
                        <!-- <small>New Accounts Today</small> -->
                    </div>
                </div>
            </div>
            <!-- END Stats Row -->
        </div>
    </section>
    <!-- END Quick Stats -->

    <!-- Promo #2 -->
    <section class="site-content site-section site-slide-content" style="height:500px;overflow:hidden;">
        <div class="container">
            <div class="row" >
                <div class="col-sm-4 site-block TOTAL-none visibility-none" data-toggle="animation-appear" data-animation-class="animation-slideDown" data-element-offset="-180">
                    <h1 class="site-heading site-heading-promo" style="font-size:60px;">Feed recommendations every day</h1>
                </div>
                <div class="col-sm-8 col-md-8 site-block TOTAL-none visibility-none" data-toggle="animation-appear" data-animation-class="animation-slideUp" data-element-offset="-180">
                    {{-- <img src="img/daily-recommend.png" alt="Recommendations" class="img-responsive"> --}}
                    {!! HTML::image('img/daily-recommend.png', 'Recommendations', array('class' => 'img-responsive daily-recommend')) !!}
                </div>
            </div>
        </div>
    </section>
    <!-- END Promo #2 -->

    <!-- Quick Stats -->
    <section class="site-content site-section parallax-image" style="background-image: url('img/fundamental(1).jpg');">
        <div class="container">
            <!-- Stats Row -->
            <!-- CountTo (initialized in js/app.js), for more examples you can check out https://github.com/mhuggins/jquery-countTo -->
            <div class="row" id="counters">
                <div class="col-sm-8 col-sm-offset-2 TOTAL-none visibility-none" data-toggle="animation-appear" data-animation-class="animation-slideUp" data-element-offset="-180">
                    <div class="counter site-block">
                        <span ><i class="fa fa-trophy"></i> Top Picks</span>
                        <!-- <small>New Accounts Today</small> -->
                    </div>
                </div>
            </div>
            <!-- END Stats Row -->
        </div>
    </section>
    <!-- END Quick Stats -->

    <!-- Promo #2 -->
    <section class="site-content site-section site-slide-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-5 hidden-sm site-block TOTAL-none visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInRight hidden-xs" data-element-offset="-180">
                    <h1 class="col-xs-6 col-md-6" id="setindex"><strong>SET</strong></h1><h1 class="col-xs-6 col-md-6 text-right text-danger" id="setindex">1495.22</h1>
                    <p class="promo-content text-right text-danger">(-1.19)<br>(-0.02%)</p>
                    <h3 class="col-xs-6 col-md-6">
                        <strong>Last Updated</strong><br><br>
                        <strong>Volume(K)</strong><br><br>
                        <strong>Value(M)</strong>
                    </h3>
                    <h3 class="text-right">
                        <text class="text-muted">Closed</text><br><br>
                        7,941,280<br><br>
                        33,356.34
                    </h3>
                    <hr class="hidden-sm hidden-md hidden-lg">
                </div>
                <div class="col-md-6 col-md-offset-1 site-block TOTAL-none visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInLeft" data-element-offset="-180">
                    <!-- Testimonials Carousel -->
                    <div id="testimonials-carousel" class="carousel slide carousel-html" data-ride="carousel" data-interval="4000">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#testimonials-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#testimonials-carousel" data-slide-to="1"></li>
                            <li data-target="#testimonials-carousel" data-slide-to="2"></li>
                        </ol>
                        <!-- END Indicators -->

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="active item">
                                <!-- Advanced Active Theme Color Widget Alternative -->
                                <div class="widget">
                                    <div class="widget-advanced widget-advanced-alt">
                                        <!-- Widget Header -->
                                        <div class="widget-header text-center">
                                            <div>
                                                {!! HTML::image('img/icon/Custom-Icon-Design-Mini-4-Award-2.ico', 'avatar', array('class' => 'widget-image img-circle')) !!}
                                                <br>
                                                <h4><small class="text-warning">The first place of hot picks</small></h4>
                                            </div>
                                        </div>
                                        <div class="widget-header text-center" id="firstplace">
                                            <h3 class="widget-content-light h2 site-heading">
                                                <strong><a href="stockResult.html">SIRI</a></strong><br>
                                                <i class="fa fa-money"></i> 1.81 <br>
                                                <small>(+0.35)</small> <small>(+2.00%)</small>
                                            </h3>
                                        </div>
                                        <!-- END Widget Header -->

                                        <!-- Widget Main -->
                                        <div class="widget-main">
                                            <div class="row text-center">
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3>
                                                        <strong>10</strong><br>
                                                        <small>BUY</small>
                                                    </h3>
                                                </div>
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3>
                                                        <strong>80</strong><br>
                                                        <small>HOLD</small>
                                                    </h3>
                                                </div>
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3>
                                                        <strong>60</strong><br>
                                                        <small>SELL</small>
                                                    </h3>
                                                </div>
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3 class="text-success">
                                                        <strong>150</strong><br>
                                                        <small>TOTAL</small>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Widget Main -->
                                    </div>
                                </div>
                                <!-- END Advanced Active Theme Color Widget Alternative -->
                            </div>
                            <div class="item">
                                <!-- Advanced Active Theme Color Widget Alternative -->
                                <div class="widget">
                                    <div class="widget-advanced widget-advanced-alt">
                                        <!-- Widget Header -->
                                        <div class="widget-header text-center">
                                            <div>
                                                {!! HTML::image('img/icon/Custom-Icon-Design-Mini-4-Award-2.ico', 'avatar', array('class' => 'widget-image img-circle')) !!}
                                                <br>
                                                <h4><small class="text-warning">The second place of hot picks</small></h4>
                                            </div>
                                        </div>
                                        <div class="widget-header text-center" id="secondplace">
                                            <h3 class="widget-content-light h2 site-heading">
                                                <strong><a href="page_ready_user_profile.html">KBANK</a></strong><br>
                                                <i class="fa fa-money"></i> 1.81 <br>
                                                <small>(+0.21)</small> <small>(+2.00%)</small>
                                            </h3>
                                        </div>
                                        <!-- END Widget Header -->

                                        <!-- Widget Main -->
                                        <div class="widget-main">
                                            <div class="row text-center">
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3>
                                                        <strong>10</strong><br>
                                                        <small>BUY</small>
                                                    </h3>
                                                </div>
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3>
                                                        <strong>80</strong><br>
                                                        <small>HOLD</small>
                                                    </h3>
                                                </div>
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3>
                                                        <strong>60</strong><br>
                                                        <small>SELL</small>
                                                    </h3>
                                                </div>
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3 class="text-success">
                                                        <strong>20</strong><br>
                                                        <small>TOTAL</small>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Widget Main -->
                                    </div>
                                </div>
                                <!-- END Advanced Active Theme Color Widget Alternative -->
                            </div>
                            <div class="item">
                                <!-- Advanced Active Theme Color Widget Alternative -->
                                <div class="widget">
                                    <div class="widget-advanced widget-advanced-alt">
                                        <!-- Widget Header -->
                                        <div class="widget-header text-center">
                                            <div>
                                                {{-- <img src="img/icon/Custom-Icon-Design-Mini-4-Award-3.ico" alt="avatar" class="widget-image img-circle"> --}}
                                                {!! HTML::image('img/icon/Custom-Icon-Design-Mini-4-Award-3.ico', 'avatar', array('class' => 'widget-image img-circle')) !!}
                                                <br>
                                                <h4><small class="text-warning">The third place of hot picks</small></h4>
                                            </div>
                                        </div>
                                        <div class="widget-header text-center" id="thirdplace">
                                            <h3 class="widget-content-light h2 site-heading">
                                                <strong><a href="page_ready_user_profile.html">BTS</a></strong><br>
                                                <i class="fa fa-money"></i> 1.81 <br>
                                                <small>(+0.20)</small> <small>(+2.00%)</small>
                                            </h3>
                                        </div>
                                        <!-- END Widget Header -->

                                        <!-- Widget Main -->
                                        <div class="widget-main">
                                            <div class="row text-center">
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3>
                                                        <strong>10</strong><br>
                                                        <small>BUY</small>
                                                    </h3>
                                                </div>
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3>
                                                        <strong>80</strong><br>
                                                        <small>HOLD</small>
                                                    </h3>
                                                </div>
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3>
                                                        <strong>60</strong><br>
                                                        <small>SELL</small>
                                                    </h3>
                                                </div>
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3 class="text-success">
                                                        <strong>5</strong><br>
                                                        <small>TOTAL</small>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Widget Main -->
                                    </div>
                                </div>
                                <!-- END Advanced Active Theme Color Widget Alternative -->
                            </div>
                        </div>
                        <!-- END Wrapper for slides -->
                    </div>
                    <!-- END Testimonials Carousel -->
                </div>
            </div>
        </div>
    </section>
    <!-- END Promo #2 -->

    <!-- Testimonials -->
    <section class="site-content site-section site-section-light parallax-image" style="background-image: url('img/Our-Team-aniket-chavan-associates-satara.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 TOTAL-none visibility-none" data-toggle="animation-appear" data-animation-class="animation-slideUp" data-element-offset="-180">
                    <div class="counter site-block">
                        <span><i class="gi gi-group"></i> Our Team</span>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Testimonials -->    


    <!-- Promo #3 -->
    <section class="site-content site-section site-slide-content">
        <div class="container">
            <div class="row row-items text-center" style="margin: 30px 0px">
                <div class="col-sm-4 col-md-4">
                    {{-- <img src="img/ing.jpg" alt="Photo" class="img-circle TOTAL-none visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeIn" data-element-offset="-64">  --}}
                    {!! HTML::image('img/ing.jpg', 'Photo', array('class' => 'img-circle TOTAL-none visibility-none','data-toggle'=>'animation-appear', 'data-animation-class'=>'animation-fadeIn','data-element-offset'=>'-64')) !!}

                    <h3>
                        <strong>Tayida Tapjinda</strong><br>
                        <small>Web Content</small>
                    </h3>
                </div>
                <div class="col-sm-4 col-md-4">
                    {{-- <img src="img/pook.jpg" alt="Photo" class="img-circle TOTAL-none visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeIn" data-element-offset="-64"> --}}
                    {!! HTML::image('img/pook.jpg', 'Photo', array('class' => 'img-circle TOTAL-none visibility-none','data-toggle'=>'animation-appear', 'data-animation-class'=>'animation-fadeIn','data-element-offset'=>'-64')) !!}
                    <h3>
                        <strong>Nutchaya Leelasupakul</strong><br>
                        <small>Web Designer</small>
                    </h3>
                </div>
                <div class="col-sm-4 col-md-4">
                    {{-- <img src="img/putt.jpg" alt="Photo" class="img-circle TOTAL-none visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeIn" data-element-offset="-64"> --}}
                    {!! HTML::image('img/putt.jpg', 'Photo', array('class' => 'img-circle TOTAL-none visibility-none','data-toggle'=>'animation-appear', 'data-animation-class'=>'animation-fadeIn','data-element-offset'=>'-64')) !!}
                    <h3>
                        <strong>Potsawee Vetchpanich</strong><br>
                        <small>Web Marketing</small>
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <!-- END Promo #3 -->


    @stop