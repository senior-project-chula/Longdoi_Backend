@extends('main')


@section('content')
<!-- Intro -->
<section class="site-section site-section-light site-section-top parallax-image" style="background-image: url('img/Our-Team-aniket-chavan-associates-satara.jpg');">
    <div class="container">
        <h1 class="text-center animation-slideDown"><strong>Let's get down the DOI, go LongDOI.</strong></h1>
        <h2 class="text-center animation-slideUp push hidden-xs">Success is how high you bounce when you hit bottom. -George S. Patton</h2>


    </div>
</section>
<!-- END Intro -->
<!-- Promo #3 -->
<section class="site-content site-section site-slide-content">
    <div class="container">
        <div class="row row-items text-center space-30">
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