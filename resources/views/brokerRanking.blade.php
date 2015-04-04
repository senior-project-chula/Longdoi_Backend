@extends('main')

@section('content')

<!-- Intro -->
<section class="site-section site-section-light site-section-top parallax-image" style="background-image: url('img/Research.gif');">
    <div class="container">
        <h1 class="text-center animation-slideDown"><strong>Let's get down the DOI, go LongDOI.</strong></h1>
        <h2 class="text-center animation-slideUp push hidden-xs">Success is how high you bounce when you hit bottom. -George S. Patton</h2>

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
                    <div class="block full border-radius" style="background-color:white;padding:10px 20px;">
                        <h1 class="text-center" id="broker-head" style="color:black"><i class="fa fa-trophy"></i> <strong>Broker Ranking</strong></h1>
                        <!-- Block Tabs Title -->
                        <div class="block-title">
                            <div class="block-options pull-right" style="width:50%">
                                <form action="" method="post" class="form-horizontal form-bordered " style=" margin-top: 0px; margin-bottom: 0px; ">
                                    <fieldset>
                                        <div class="form-group" style=" padding-top: 0px; padding-bottom: 0px; ">
                                            <label class="col-md-8 control-label" style="color:black">SORT BY:</label>
                                            <div class="col-md-4">
                                                <select class="form-control">
                                                    <option value="overall">Overall</option>
                                                    <option value="argo">ARGO</option>
                                                    <option value="comsump">COMSUMP</option>
                                                    <option value="fincial">FINCIAL</option>
                                                    <option value="indus">INDUS</option>
                                                    <option value="propcon">PROPCON</option>
                                                    <option value="resourc">RESOURC</option>
                                                    <option value="service">SERVICE</option>
                                                    <option value="tech">TECH</option>
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                            <ul class="nav nav-tabs" data-toggle="tabs">
                                <li class="active"><a href="#example-tabs2-1month">1 month</a></li>
                                <li><a href="#example-tabs2-3months">3 months</a></li>
                                <li><a href="#example-tabs2-6months">6 months</a></li>
                                <li><a href="#example-tabs2-overall">Overall</a></li>
                            </ul>
                        </div>
                        <!-- END Block Tabs Title -->

                        <!-- Tabs Content -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="example-tabs2-1month">
                                <!-- Responsive Full Block -->
                                <div class="block" style="background-color:white;color:black">
                                    <!-- Responsive Full Title -->

                                    <!-- END Responsive Full Title -->
                                    <div class="block-title text-center">
                                        <p></p>
                                    </div>
                                    <!-- Responsive Full Content -->
                                    <div class="table-responsive">
                                        <table class="table table-vcenter table-striped">
                                            <thead  class="text-center">
                                                <tr>
                                                    <th style="width: 50px;" class="text-center"><i class="gi gi-crown"></i></th>
                                                    <th>Broker</th>
                                                    <th>ARGO</th>
                                                    <th>COMSUMP</th>
                                                    <th>FINCIAL</th>
                                                    <th>INDUS</th>
                                                    <th>PROPCON</th>
                                                    <th>RESOURC</th>
                                                    <th>SERVICE</th>
                                                    <th>TECH</th>
                                                    <th>Overall</th>
                                                    <th style="width: 150px;" class="text-center">No. of Reports</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td><a href="analysisResult.html">broker1</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td><a href="#">broker2</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td><a href="#">broker3</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td><a href="#">broker4</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">5</td>
                                                    <td><a href="#">broker5</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">6</td>
                                                    <td><a href="#">broker6</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">7</td>
                                                    <td><a href="#">broker7</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END Responsive Full Content -->
                                </div>
                                <!-- END Responsive Full Block -->
                            </div>
                            <div class="tab-pane" id="example-tabs2-3months">
                                <!-- Responsive Full Block -->
                                <div class="block" style="background-color:white;color:black">
                                    <!-- Responsive Full Title -->

                                    <!-- END Responsive Full Title -->
                                    <div class="block-title text-center">
                                        <p></p>
                                    </div>
                                    <!-- Responsive Full Content -->
                                    <div class="table-responsive">
                                        <table class="table table-vcenter table-striped">
                                            <thead  class="text-center">
                                                <tr>
                                                    <th style="width: 50px;" class="text-center"><i class="gi gi-crown"></i></th>
                                                    <th>Broker</th>
                                                    <th>ARGO</th>
                                                    <th>COMSUMP</th>
                                                    <th>FINCIAL</th>
                                                    <th>INDUS</th>
                                                    <th>PROPCON</th>
                                                    <th>RESOURC</th>
                                                    <th>SERVICE</th>
                                                    <th>TECH</th>
                                                    <th>Overall</th>
                                                    <th style="width: 150px;" class="text-center">No. of Reports</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td><a href="analysisResult.html">broker1</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td><a href="#">broker2</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td><a href="#">broker3</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td><a href="#">broker4</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">5</td>
                                                    <td><a href="#">broker5</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">6</td>
                                                    <td><a href="#">broker6</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">7</td>
                                                    <td><a href="#">broker7</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END Responsive Full Content -->
                                </div>
                                <!-- END Responsive Full Block -->
                            </div>
                            <div class="tab-pane" id="example-tabs2-6months">
                                <!-- Responsive Full Block -->
                                <div class="block" style="background-color:white;color:black">
                                    <!-- Responsive Full Title -->

                                    <!-- END Responsive Full Title -->
                                    <div class="block-title text-center">
                                        <p></p>
                                    </div>
                                    <!-- Responsive Full Content -->
                                    <div class="table-responsive">
                                        <table class="table table-vcenter table-striped">
                                            <thead  class="text-center">
                                                <tr>
                                                    <th style="width: 50px;" class="text-center"><i class="gi gi-crown"></i></th>
                                                    <th>Broker</th>
                                                    <th>ARGO</th>
                                                    <th>COMSUMP</th>
                                                    <th>FINCIAL</th>
                                                    <th>INDUS</th>
                                                    <th>PROPCON</th>
                                                    <th>RESOURC</th>
                                                    <th>SERVICE</th>
                                                    <th>TECH</th>
                                                    <th>Overall</th>
                                                    <th style="width: 150px;" class="text-center">No. of Reports</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td><a href="analysisResult.html">broker1</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td><a href="#">broker2</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td><a href="#">broker3</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td><a href="#">broker4</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">5</td>
                                                    <td><a href="#">broker5</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">6</td>
                                                    <td><a href="#">broker6</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">7</td>
                                                    <td><a href="#">broker7</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END Responsive Full Content -->
                                </div>
                                <!-- END Responsive Full Block -->
                            </div>
                            <div class="tab-pane" id="example-tabs2-overall">
                                <!-- Responsive Full Block -->
                                <div class="block" style="background-color:white;color:black">
                                    <!-- Responsive Full Title -->

                                    <!-- END Responsive Full Title -->
                                    <div class="block-title text-center">
                                        <p></p>
                                    </div>
                                    <!-- Responsive Full Content -->
                                    <div class="table-responsive">
                                        <table class="table table-vcenter table-striped">
                                            <thead  class="text-center">
                                                <tr>
                                                    <th style="width: 50px;" class="text-center"><i class="gi gi-crown"></i></th>
                                                    <th>Broker</th>
                                                    <th>ARGO</th>
                                                    <th>COMSUMP</th>
                                                    <th>FINCIAL</th>
                                                    <th>INDUS</th>
                                                    <th>PROPCON</th>
                                                    <th>RESOURC</th>
                                                    <th>SERVICE</th>
                                                    <th>TECH</th>
                                                    <th>Overall</th>
                                                    <th style="width: 150px;" class="text-center">No. of Reports</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td><a href="analysisResult.html">broker1</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td><a href="#">broker2</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td><a href="#">broker3</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td><a href="#">broker4</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">5</td>
                                                    <td><a href="#">broker5</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">6</td>
                                                    <td><a href="#">broker6</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">7</td>
                                                    <td><a href="#">broker7</a></td>
                                                    <td class="text-center">74.23%</td>
                                                    <td class="text-center">33.33%</td>
                                                    <td class="text-center">52.14%</td>
                                                    <td class="text-center">71.89%</td>
                                                    <td class="text-center">12.65%</td>
                                                    <td class="text-center">30.22%</td>
                                                    <td class="text-center">32.21%</td>
                                                    <td class="text-center">1.23%</td>
                                                    <td class="text-center text-success">38.49%</td>
                                                    <td class="text-center">432</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END Responsive Full Content -->
                                </div>
                                <!-- END Responsive Full Block -->
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
<!-- Load and execute javascript code used only in this page -->

{!! HTML::script('js2/pages/compCharts.js') !!}
<script>$(function(){ CompCharts.init(); });</script>
@stop