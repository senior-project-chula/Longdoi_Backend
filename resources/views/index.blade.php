@extends('main')

@section('button-to-top')
    <a href="#" id="to-top"><i class="fa fa-angle-up"></i></a>
@stop

@section('js-backend')
    {!! HTML::script('js2/vendor/bootstrap.min.js') !!}
    {!! HTML::script('js2/plugins.js') !!}
    {{-- {!! HTML::script('js2/app.js') !!} --}}

    @stop

@section('content')


    <!-- Intro -->
    <section class="site-section site-section-light site-section-top parallax-image" style="background-image: url('img/16353695-media_httpdldropboxco_pedhu2.jpg');">
        <div class="container">
            <h1 class="animation-slideDown hidden-xs font-big">Let's get down the DOI, go <strong style="color:#9AFEFF">LongDOI</strong>.</h1>
            <h1 class="text-center animation-slideDown hidden-lg hidden-md hidden-sm font-big"><strong>Let's get down the DOI</strong></h1>
            <h2 class="text-right animation-slideUp push font-small">Are you sick of reading numerous investment researches in the morning?</h2>

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
                <div class="col-md-6 col-sm-12 ">
                    <div id="extracting_hype_container" class="visibility-none" data-toggle="animation-appear" data-animation-class="animation-slideDown" style="margin:auto;position:relative;width:600px;height:400px;overflow:hidden;" aria-live="polite">
                        {!! HTML::script('hype/extracting.hyperesources/extracting_hype_generated_script.js?39270', array('charset' => 'utf-8')) !!}
                    </div>
                </div>
                <div class="col-md-5 col-sm-12">
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
                <div class="col-sm-12 site-block TOTAL-none visibility-none" data-toggle="animation-appear" data-animation-class="animation-slideDown" data-element-offset="-180">
                    <h1 class="site-heading site-heading-promo" style="font-size:60px;">Feed recommendations every day</h1>
                </div>
                <div class="col-sm-12 col-md-8 site-block TOTAL-none visibility-none" data-toggle="animation-appear" data-animation-class="animation-slideUp" data-element-offset="-180">
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
        @if($lastIndex['ValueChange']>=0)
            <?php $color='text-success'; ?>
        @else
            <?php $color='text-danger'; ?>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-5 hidden-sm site-block TOTAL-none visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInRight hidden-xs" data-element-offset="-180">
                    <h1 class="col-xs-6 col-md-6 font-big" ><strong>SET</strong></h1><h1 class="col-xs-6 col-md-6 text-right 
                    {{$color}}
                     font-big" >
                    {{$lastIndex['Index']}}
                    </h1>
                    <p class="promo-content text-right {{$color}}">(
                        @if($lastIndex['ValueChange']>0){{"+"}}@endif
                        {{$lastIndex['ValueChange']}}
                        )<br>(
                        @if($lastIndex['PercentChange']>0){{"+"}}@endif
                        {{$lastIndex['PercentChange']}}
                        %)</p>
                    <h3 class="col-xs-6 col-md-6">
                        <strong>Last Updated</strong><br><br>
                        {{-- <strong>Volume(K)</strong><br><br>
                        <strong>Value(M)</strong> --}}
                    </h3>
                    <h3 class="text-right">
                        <text class="text-muted">{{$lastIndex['Date']}}</text><br><br>
                        {{-- 7,941,280<br><br>
                        33,356.34 --}}
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
                                                {!! HTML::image('img/icon/Custom-Icon-Design-Mini-4-Award-1.ico', 'avatar', array('class' => 'widget-image img-circle')) !!}
                                                <br>
                                                <h4><small class="text-warning">The first place of hot picks</small></h4>
                                            </div>
                                        </div>
                                        <div class="widget-header text-center" id="firstplace">
                                            <h3 class="widget-content-light h2 site-heading">
                                                <strong><a href="#">
                                                    {{$top3Array[0]['Stock_Name']}}
                                                </a></strong><br>
                                                <i class="fa fa-money"></i> 
                                                {{$top3Array[0]['lastPrice']['price']}}
                                                 <br>
                                                <small>(
                                                    @if($top3Array[0]['lastPrice']['priceDiff']>0){{"+"}}@endif
                                                    {{$top3Array[0]['lastPrice']['priceDiff']}}
                                                    )</small> <small>(
                                                    @if($top3Array[0]['lastPrice']['percentDiff']>0){{"+"}}@endif
                                                    {{$top3Array[0]['lastPrice']['percentDiff']}}
                                                    %)</small>
                                            </h3>
                                        </div>
                                        <!-- END Widget Header -->

                                        <!-- Widget Main -->
                                        <div class="widget-main">
                                            <div class="row text-center">
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3>
                                                        <strong>{{$top3Array[0]['recSummary']['BUY']}}</strong><br>
                                                        <small>BUY</small>
                                                    </h3>
                                                </div>
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3>
                                                        <strong>{{$top3Array[0]['recSummary']['HOLD']}}</strong><br>
                                                        <small>HOLD</small>
                                                    </h3>
                                                </div>
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3>
                                                        <strong>{{$top3Array[0]['recSummary']['SELL']}}</strong><br>
                                                        <small>SELL</small>
                                                    </h3>
                                                </div>
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3 class="text-success">
                                                        <strong>{{$top3Array[0]['recSummary']['total']}}</strong><br>
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
                                                <strong><a href="#">
                                                    {{$top3Array[1]['Stock_Name']}}
                                                </a></strong><br>
                                                <i class="fa fa-money"></i> 
                                                {{$top3Array[1]['lastPrice']['price']}}
                                                 <br>
                                                <small>(
                                                    @if($top3Array[1]['lastPrice']['priceDiff']>0){{"+"}}@endif
                                                    {{$top3Array[1]['lastPrice']['priceDiff']}}
                                                    )</small> <small>(
                                                    @if($top3Array[1]['lastPrice']['percentDiff']>0){{"+"}}@endif
                                                    {{$top3Array[1]['lastPrice']['percentDiff']}}
                                                    %)</small>
                                            </h3>
                                        </div>
                                        <!-- END Widget Header -->

                                        <!-- Widget Main -->
                                        <div class="widget-main">
                                            <div class="row text-center">
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3>
                                                        <strong>{{$top3Array[1]['recSummary']['BUY']}}</strong><br>
                                                        <small>BUY</small>
                                                    </h3>
                                                </div>
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3>
                                                        <strong>{{$top3Array[1]['recSummary']['HOLD']}}</strong><br>
                                                        <small>HOLD</small>
                                                    </h3>
                                                </div>
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3>
                                                        <strong>{{$top3Array[1]['recSummary']['SELL']}}</strong><br>
                                                        <small>SELL</small>
                                                    </h3>
                                                </div>
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3 class="text-success">
                                                        <strong>{{$top3Array[1]['recSummary']['total']}}</strong><br>
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
                                                <strong><a href="#">
                                                    {{$top3Array[2]['Stock_Name']}}
                                                </a></strong><br>
                                                <i class="fa fa-money"></i> 
                                                {{$top3Array[1]['lastPrice']['price']}}
                                                 <br>
                                                <small>(
                                                    @if($top3Array[2]['lastPrice']['priceDiff']>0){{"+"}}@endif
                                                    {{$top3Array[2]['lastPrice']['priceDiff']}}
                                                    )</small> <small>(
                                                    @if($top3Array[2]['lastPrice']['percentDiff']>0){{"+"}}@endif
                                                    {{$top3Array[2]['lastPrice']['percentDiff']}}
                                                    %)</small>
                                            </h3>
                                        </div>
                                        <!-- END Widget Header -->

                                        <!-- Widget Main -->
                                        <div class="widget-main">
                                            <div class="row text-center">
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3>
                                                        <strong>{{$top3Array[2]['recSummary']['BUY']}}</strong><br>
                                                        <small>BUY</small>
                                                    </h3>
                                                </div>
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3>
                                                        <strong>{{$top3Array[2]['recSummary']['HOLD']}}</strong><br>
                                                        <small>HOLD</small>
                                                    </h3>
                                                </div>
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3>
                                                        <strong>{{$top3Array[2]['recSummary']['SELL']}}</strong><br>
                                                        <small>SELL</small>
                                                    </h3>
                                                </div>
                                                <div class="col-xs-6 col-lg-3">
                                                    <h3 class="text-success">
                                                        <strong>{{$top3Array[2]['recSummary']['total']}}</strong><br>
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
    <section class="site-content site-section site-slide-content" style="padding-bottom:50px">
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