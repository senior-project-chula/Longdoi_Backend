@extends('main')

@section('css-backend')
{!! HTML::style('css-backendProUI/main.css') !!}

@stop

@section('js-backend')
{!! HTML::script('js2/vendor/bootstrap.min.js') !!}
{{-- {!! HTML::script('js2/plugins.js') !!} --}}
{{-- {!! HTML::script('js2/app.js') !!} --}}
{!! HTML::script('js2/pages/compCharts2.js') !!}
{{-- {!! HTML::script('js2/pages/compCharts.js') !!} --}}

<script>$(function(){ 
            // CompCharts.init();
            CompCharts2.init(<?php echo $stock_id; ?>); 
        });</script>
        @stop

        @section('content')
        <!-- Stylesheets -->

        <!-- Intro -->
        <section class="site-section site-section-light site-section-top parallax-image" style="background-image: url({!!URL::asset('img/business_analysis_iStock_000003923536XSmall.jpg')!!});">
            <div class="container">
                <h1 class="text-center animation-slideDown"><strong>Which stock is the hot picks now?</strong> Find out!</h1>
                <h2 class="text-center animation-slideUp push hidden-xs">Success is how high you bounce when you hit bottom. -George S. Patton</h2>

                <div class="site-block text-center">
                    {!! Form::open(array('url'=>$app->make('url')->to('/stock'),'class'=>'form-horizontal')) !!}
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">

                                <div class="input-group input-group-lg">
                                    <input type="text" id="input_stock" name="input_stock" class="form-control input-typeahead-stocks" autocomplete="off" placeholder="Search Stocks..">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary"><i class="hi hi-search"></i> Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Working Tabs Block -->
                <div class="block full">

                    <!-- Working Tabs Content -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Block Tabs -->
                            <div class="block full border-radius" style="background-color:white;padding:10px 20px;border-style:none">
                                <h1 class="text-center" style="color:black;margin-bottom:20px;"><strong>
                                    {{$Stock_Name}}
                                </strong>
                                {{$lastPrice['price']}}
                                <br><small>(
                                @if($lastPrice['priceDiff']>=0){{"+"}}@endif
                                {{$lastPrice['priceDiff']}}
                                )<br>(
                                @if($lastPrice['percentDiff']>=0){{"+"}}@endif
                                {{$lastPrice['percentDiff']}}
                                )</small></h1>
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- Classic Chart Block -->
                                        <div class="block full">
                                            <!-- Classic Chart Title -->
                                            <div class="block-title" style="color:black">
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
                                <h1 class="text-center" id="stock-head" style="color:black"><i class="hi hi-thumbs-up"></i> <strong>Daily Recommendations</strong></h1>

                                <!-- Block Tabs Title -->
                                <div class="block-title">
                                    <div class="block-options pull-right" style="width:50%">

                                        <!-- Time and Date Pickers Content -->
                                        {{-- <form action="page_forms_components.html" method="post" class="form-horizontal" onsubmit="return false;" style=" margin-top: 0px; margin-bottom: 0px; "> --}}
                                        {!! Form::open(array('url'=>Request::url(),'class'=>'form-horizontal','syle'=>' margin-top: 0px; margin-bottom: 0px; ')) !!}
                                            <fieldset>
                                                <div class="form-group" style=" padding-bottom: 0px; padding-top: 0px; margin-bottom: 0px;">
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-4 col-sm-6 hidden-xs">
                                                        <a href="{!!URL::to('/recommendations')!!}"><button type="button" class="btn btn-sm btn-default"><i class="fa fa-angle-left" style=" margin-top: 2px; "></i> Daily Recommendations</button></a>
                                                    </div>
                                                    <label class="col-md-1 control-label hidden-sm hidden-xs" for="example-datepicker" style="color:black;padding-right: 0px;margin-bottom: 0px;padding-top: 0px;">DATE: </label>
                                                    <div class="col-md-3 col-sm-4 col-xs-6" style=" margin-top: 3px; ">
                                                        <input type="text" id="example-datepicker2" name="date" class="form-control input-datepicker-close" data-date-format="dd/mm/yy" placeholder="dd/mm/yy" style=" padding-top: 4px; padding-bottom: 4px; height: 30px; "
                                                        @if(isset($dateSearch)) {{"value=$dateSearch"}} @endif
                                                        >
                                                    </div>
                                                    <button type="submit" class="btn btn-sm btn-primary" style=" margin-top: -1px; padding-top: 5px; padding-bottom: 5px;"><i class="fa fa-angle-right"></i> Go</button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>

                                    <ul class="nav nav-tabs no-border" data-toggle="tabs">
                                        <li class="active"><a href="#example-tabs2-summary">Summary</a></li>
                                        <li><a href="#example-tabs2-recommendations">Recommendations</a></li>

                                    </ul>
                                </div>
                                @if(isset($dateSearch)) 
                                <div class="block-options black col-xs-12 col-xs-offset-12" style="width:30%">
                                    <p style="margin-top: 6px;margin-bottom: 5px;">Keyword: {{$dateSearch}}</p>

                                </div>
                                @endif
                                <!-- END Block Tabs Title -->

                                <!-- Tabs Content -->
                                <div class="tab-content">
                                    <div class="tab-pane active " id="example-tabs2-summary">
                                        <!-- Responsive Full Block -->

                                        <!-- Search Styles Block -->
                                        <div class="block" style="background-color:white;color:black">


                                            <!-- Search Styles Content -->
                                            <div class="tab-content ">
                                                <!-- Projects Search -->
                                                <div class="tab-pane active" id="search-tab-projects">

                                                    <!-- Projects Results -->
                                                    <table class="table table-condensed table-hover table-striped table-vcenter">
                                                        <thead>
                                                            <tr>
                                                                <th><i class="hi hi-stats hidden-xs"></i> STOCK</th>
                                                                <th class="text-center" style="width: 10%;">PRICE</th>
                                                                <th class="text-center" style="width: 10%;">BUY</th>
                                                                <th class="text-center" style="width: 10%;">HOLD</th>
                                                                <th class="text-center" style="min-width: 60px; width: 10%;">SELL</th>
                                                                <th class="text-center hidden-xs" style="width: 10%;">TOTAL</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <h3><a href="javascript:void(0)"><strong>
                                                                        {{$Stock_Name}}
                                                                    </strong></a></h3>

                                                                    <p class="hidden-xs">{{-- <em>Bangkok Mass Transit System Public Company Limited.</em> --}}</p>
                                                                </td>
                                                                <td class="text-center "
                                                                <h3 class="animation-pullDown">
                                                                    {{$lastPrice['price']}}
                                                                    <br><small>(
                                                                    @if($lastPrice['priceDiff']>=0)
                                                                    {{"+"}}
                                                                    @endif
                                                                    {{$lastPrice['priceDiff']}}
                                                                    )<br>(
                                                                    @if($lastPrice['percentDiff']>=0)
                                                                    {{"+"}}
                                                                    @endif
                                                                    {{$lastPrice['percentDiff']}}
                                                                    )</small></h3>
                                                                </td>

                                                                <td class="text-center">
                                                                    <h3 class="animation-pullDown">
                                                                        @if(isset($recSummary['BUY']))
                                                                        {{$recSummary['BUY']}}
                                                                        @else
                                                                        0
                                                                        @endif
                                                                    </h3>
                                                                </td>
                                                                <td class="text-center">
                                                                    <h3 class="animation-pullDown">
                                                                        @if(isset($recSummary['HOLD']))
                                                                        {{$recSummary['HOLD']}}
                                                                        @else
                                                                        0
                                                                        @endif
                                                                    </h3>
                                                                </td>
                                                                <td class="text-center">
                                                                    <h3 class="animation-pullDown">
                                                                        @if(isset($recSummary['SELL']))
                                                                        {{$recSummary['SELL']}}
                                                                        @else
                                                                        0
                                                                        @endif
                                                                    </h3>
                                                                </td>
                                                                <td class="text-center">
                                                                    <h3 class="animation-pullDown">
                                                                        @if(isset($recSummary['total']))
                                                                        {{$recSummary['total']}}
                                                                        @else
                                                                        0
                                                                        @endif
                                                                    </h3>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                    <!-- END Projects Results -->
                                                </div>
                                                <!-- END Projects Search -->

                                            </div>
                                            <!-- END Search Styles Content -->
                                        </div>
                                        <!-- END Search Styles Block -->
                                    </div>
                                    <div class="tab-pane" id="example-tabs2-recommendations">
                                        <!-- Responsive Full Block -->
                                        <!-- Search Styles Block -->
                                        <div class="block" style="background-color:white;color:black">


                                            <!-- Search Styles Content -->
                                            <div class="tab-content">
                                                <!-- Projects Search -->
                                                <div class="tab-pane active" id="search-tab-projects">

                                                    <!-- Projects Results -->
                                                    <table class="table table-condensed table-hover table-striped table-vcenter">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center" style="width: 5%;">DATE</th>
                                                                <th class="text-center" style="width: 10%;">BROKER</th>
                                                                <th class="text-center" style="width: 15%;">RECOMMENDATION</th>
                                                                <th class="text-center" style="width: 10%;">PRICE<br><small>(on released date)</small></th>
                                                                <th class="text-center" style="min-width: 60px; width: 20%;">RESOURCE</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($recAll as $rec)
                                                            <tr>
                                                                <td class="text-center">
                                                                    {{$rec['Date']}}
                                                                </td>
                                                                <td class="text-center ">
                                                                    {{$rec['Broker_Name']}}
                                                                </td>
                                                                <td class="text-center">
                                                                    {{$rec['Recommendation']}}
                                                                </td>
                                                                <td class="text-center">
                                                                    {{$rec['price']}}
                                                                </td>
                                                                <td class="text-center">
                                                                    <a href="{{$rec['Link']}}">Link</a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    <!-- END Projects Results -->
                                                </div>
                                                <!-- END Projects Search -->

                                            </div>
                                            <!-- END Search Styles Content -->
                                        </div>
                                        <!-- END Search Styles Block -->
                                    </div>

                                </div>
                                <!-- END Tabs Content -->
                            </div>
                            <!-- END Block Tabs -->
                        </div>

                    </div>
                    <!-- END Working Tabs Content -->
                </div>
                <!-- END Working Tabs Block -->



            </div>
        </section>
        <!-- END Intro -->

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
                <!-- Load and execute javascript code used only in this page -->



                @stop
