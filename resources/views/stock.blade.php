    @extends('main')

    @section('js-backend')
    {!! HTML::script('js2/vendor/bootstrap.min.js') !!}
    {!! HTML::script('js2/plugins.js') !!}
    {!! HTML::script('js2/app.js') !!}

    {!! HTML::script('js2/pages/compCharts.js') !!}
    <script>$(function(){ CompCharts.init(); });</script>
    @stop

    @section('content')
    <!-- Intro -->
    <section class="site-section site-section-light site-section-top parallax-image" style="background-image: url('img/business_analysis_iStock_000003923536XSmall.jpg');">
        <div class="container">
            <h1 class="text-center animation-slideDown hidden-xs"><strong>Which stock is the hot picks now?</strong> Find out!</h1>
            <h2 class="text-center animation-slideUp push hidden-xs">Success is how high you bounce when you hit bottom. -George S. Patton</h2>
            <div class="site-block text-center">
                <form action="stockResult.html" method="post" class="form-horizontal" >
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <label class="sr-only" for="register-email">a stock..</label>
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
                <!-- Working Tabs Title -->
                <div class="block-title">

                </div>
                <!-- END Working Tabs Title -->

                <!-- Working Tabs Content -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- Block Tabs -->
                        <div class="block full border-radius container-box">
                            <h1 class="text-center" id="stock-head" style="color:black"><i class="hi hi-thumbs-up"></i> <strong>Daily Recommendations</strong></h1>
                            <!-- Block Tabs Title -->
                            <div class="block-title">
                                <div class="block-options pull-right" style="width:30%">
                                    <!-- Time and Date Pickers Content -->
                                    <form action="page_forms_components.html" method="post" class="form-horizontal form-bordered" onsubmit="return false;" style=" margin-top: 0px; margin-bottom: 0px; ">
                                        <fieldset>
                                            <div class="form-group" style=" padding-bottom: 0px; padding-top: 0px; ">
                                                <label class="col-md-3 control-label" for="example-datepicker" style="color:black;padding-right: 0px;">DATE: </label>
                                                <div class="col-md-5">
                                                    <input type="text" id="example-datepicker2" name="example-datepicker2" class="form-control input-datepicker" data-date-format="dd/mm/yy" placeholder="dd/mm/yy" style=" padding-top: 4px; padding-bottom: 4px; height: 30px; ">
                                                </div>
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Go</button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <ul class="nav nav-tabs" data-toggle="tabs">
                                    <li class="active"><a href="#example-tabs2-summary">Summary</a></li>
                                    <li><a href="#example-tabs2-recommendations">Recommendations</a></li>
                                    
                                </ul>
                            </div>
                            <!-- END Block Tabs Title -->

                            <!-- Tabs Content -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="example-tabs2-summary">
                                    <!-- Responsive Full Block -->
                                    <!-- Search Styles Block -->
                                    <div class="block white-bg black">


                                        <!-- Search Styles Content -->
                                        <div class="tab-content">
                                            <!-- Projects Search -->
                                            <div class="tab-pane active" id="search-tab-projects">

                                                <!-- Projects Results -->
                                                <table class="table table-striped table-vcenter">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 10%;"><i class="hi hi-stats"></i> STOCK</th>

                                                            <th class="text-center" style="width: 15%;">PRICE</th>
                                                            <th class="text-center" style="width: 10%;">BUY</th>
                                                            <th class="text-center" style="width: 10%;">HOLD</th>
                                                            <th class="text-center" style="min-width: 60px; width: 10%;">SELL</th>
                                                            <th class="text-center hidden-xs" style="width: 10%;">TOTAL</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h3><a href="javascript:void(0)"><strong>BTS</strong></a></h3>
                                                            </td>
                                                            <td class="text-center ">
                                                            <h3 class="animation-pullDown">1.80<br><small>(+0.13)<br>(+0.82%)</small></h3>
                                                        </td>

                                                        <td class="text-center">
                                                            <h3 class="animation-pullDown">4</h3>
                                                        </td>
                                                        <td class="text-center">
                                                            <h3 class="animation-pullDown">1</h3>
                                                        </td>
                                                        <td class="text-center">
                                                            <h3 class="animation-pullDown">1</h3>
                                                        </td>
                                                        <td class="text-center hidden-xs">
                                                            <h3 class="animation-pullDown text-success"><strong>6</strong></h3>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h3><a href="javascript:void(0)"><strong>BMCL</strong></a></h3>

                                                        </td>
                                                        <td class="text-center ">
                                                        <h3 class="animation-pullDown">1.80<br><small>(+0.13)<br>(+0.82%)</small></h3>
                                                    </td>
                                                    <td class="text-center">
                                                        <h3 class="animation-pullDown">2</h3>
                                                    </td>
                                                    <td class="text-center">
                                                        <h3 class="animation-pullDown">0</h3>
                                                    </td>
                                                    <td class="text-center">
                                                        <h3 class="animation-pullDown">0</h3>
                                                    </td>
                                                    <td class="text-center hidden-xs">
                                                        <h3 class="animation-pullDown text-success"><strong>2</strong></h3>
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
                                <!-- Search Styles Title -->
                                                        <!-- <div class="block-title text-center">
                                                            <h1 id="stock-head"><i class="hi hi-thumbs-up"></i>  Recommendations</h1>
                                                        </div> -->
                                                        <!-- END Search Styles Title -->

                                                        <!-- Search Styles Content -->
                                                        <div class="tab-content">
                                                            <!-- Projects Search -->
                                                            <div class="tab-pane active" id="search-tab-projects">

                                                                <!-- Projects Results -->
                                                                <table class="table table-striped table-vcenter">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="text-center" style="width: 5%;">DATE</th>
                                                                            <th class="text-center" style="width: 10%;">BROKER</th>
                                                                            <th class="text-center" style="width: 10%;">RECOMMENDATION</th>
                                                                            
                                                                            <th class="text-center" style="width: 15%;">DESCRIPTION</th>
                                                                            <th class="text-center" style="width: 10%;">STOCK</th>
                                                                            <th class="text-center" style="width: 10%;">PRICE<br><small>(on released date)</small></th>
                                                                            <th class="text-center" style="width: 10%;">ACCURACY</th>
                                                                            <th class="text-center" style="min-width: 60px; width: 20%;">RESOURCE</th>
                                                                            
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-center">
                                                                                28/3/2015
                                                                            </td>
                                                                            <td class="text-center ">
                                                                                Maybank
                                                                            </td>
                                                                            <td class="text-center">
                                                                                SELL
                                                                            </td>
                                                                            
                                                                            <td class="text-center">
                                                                                SELL description
                                                                            </td>
                                                                            <td class="text-center">
                                                                                BTS
                                                                            </td>
                                                                            <td class="text-center">
                                                                                1.58
                                                                            </td>
                                                                            <td class="text-center">
                                                                                correct

                                                                            </td>
                                                                            <td class="text-center">
                                                                                <a href="www.settrade.or.th">link to resource</a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center">
                                                                                28/3/2015
                                                                            </td>
                                                                            <td class="text-center ">
                                                                                UOB
                                                                            </td>
                                                                            <td class="text-center">
                                                                                BUY
                                                                            </td>
                                                                            <td class="text-center">
                                                                                BUY description
                                                                            </td>
                                                                            <td class="text-center">
                                                                                BTS
                                                                            </td>
                                                                            <td class="text-center">
                                                                                1.58
                                                                            </td>
                                                                            <td class="text-center">
                                                                                correct
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <a href="www.settrade.or.th">link to resource</a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center">
                                                                                28/3/2015
                                                                            </td>
                                                                            <td class="text-center ">
                                                                                Krungsri Securities
                                                                            </td>
                                                                            <td class="text-center">
                                                                                BUY
                                                                            </td>
                                                                            <td class="text-center">
                                                                                BUY description
                                                                            </td>
                                                                            <td class="text-center">
                                                                                BTS
                                                                            </td>
                                                                            <td class="text-center">
                                                                                1.58
                                                                            </td>
                                                                            <td class="text-center">
                                                                                correct
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <a href="www.settrade.or.th">link to resource</a>
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



                    <!-- Promo #1 -->
                    <section class="site-content site-section site-slide-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 col-md-5 site-block TOTAL-none" data-toggle="animation-appear" data-animation-class="animation-fadeInRight" data-element-offset="-180">
                                    <h1 class="col-md-6 font-big"><strong>SET</strong></h1><h1 class="col-md-6 text-right text-danger font-big" >1495.22</h1>
                                    <p class="promo-content text-right text-danger">(-1.19)<br>(-0.02%)</p>
                                    <h3 class="col-md-6">
                                        <strong>Market Status</strong><br><br>
                                        <strong>Volume(K)</strong><br><br>
                                        <strong>Value(M)</strong>
                                    </h3>
                                    <h3 class="text-right">
                                        <text class="text-muted">Closed</text><br><br>
                                        7,941,280<br><br>
                                        33,356.34
                                    </h3>
                                    
                                </div>
                                <div class="col-sm-6 col-md-offset-1 site-block TOTAL-none" data-toggle="animation-appear" data-animation-class="animation-fadeInLeft" data-element-offset="-180">
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
                                                                <img src="img/icon/Custom-Icon-Design-Mini-4-Award-1.ico" alt="avatar" class="widget-image img-circle"><br>
                                                                <h4><small class="text-warning">The first place of hot picks</small></h4>
                                                            </div>
                                                        </div>
                                                        <div class="widget-header text-center" id="firstplace">
                                                            <h3 class="widget-content-light h2 site-heading" style="">
                                                                <strong><a href="page_ready_user_profile.html">SIRI</a></strong><br>
                                                                <i class="fa fa-money"></i> 1.81 <br>
                                                                <small>(+12.00)</small> <small>(+2.00%)</small>
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
                                                                <img src="img/icon/Custom-Icon-Design-Mini-4-Award-2.ico" alt="avatar" class="widget-image img-circle"><br>
                                                                <h4><small class="text-warning">The second place of hot picks</small></h4>
                                                            </div>
                                                        </div>
                                                        <div class="widget-header text-center" id="secondplace">
                                                            <h3 class="widget-content-light h2 site-heading">
                                                                <strong><a href="page_ready_user_profile.html">KBANK</a></strong><br>
                                                                <i class="fa fa-money"></i> 1.81 <br>
                                                                <small>(+12.00)</small> <small>(+2.00%)</small>
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
                                                                <img src="img/icon/Custom-Icon-Design-Mini-4-Award-3.ico" alt="avatar" class="widget-image img-circle"><br>
                                                                <h4><small class="text-warning">The third place of hot picks</small></h4>
                                                            </div>
                                                        </div>
                                                        <div class="widget-header text-center" id="thirdplace">
                                                            <h3 class="widget-content-light h2 site-heading">
                                                                <strong><a href="page_ready_user_profile.html">BTS</a></strong><br>
                                                                <i class="fa fa-money"></i> 1.81 <br>
                                                                <small>(+12.00)</small> <small>(+2.00%)</small>
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
                    <!-- END Promo #1 -->
                    @stop