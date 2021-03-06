@extends('main')


@section('button-to-top')
    <a href="#" id="to-top"><i class="fa fa-angle-up"></i></a>
@stop

@section('css-backend')
    <style type="text/css">
        td a{
            text-decoration: none;
            color: black;
        }
        td a:hover{
            text-decoration: none;
            cursor: default;
        }
    </style>
@stop

@section('js-backend')
         {!! HTML::script('js2/vendor/bootstrap.min.js') !!}
        {!! HTML::script('js2/plugins.js') !!}
        {{-- {!! HTML::script('js2/app.js') !!} --}}
@stop

@section('content')

<!-- Intro -->
<section class="site-section site-section-light site-section-top parallax-image" style="background-image: url('img/Research.gif');">
    <div class="container">
        <h1 class="text-center animation-slideDown hidden-xs"><strong>Let's get down the DOI, go LongDOI.</strong></h1>
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
                    <div class="block full border-radius container-box">
                        <h1 class="text-center black" id="broker-head"><i class="fa fa-trophy"></i> <strong>Broker Ranking</strong></h1>
                        <!-- Block Tabs Title -->
                        <div class="block-title">
                            <div class="block-options pull-right" style="width:30%">
{{--                                 <form action="" method="post" class="form-horizontal form-bordered" style=" margin-top: 0px; margin-bottom: 0px; "> --}}
                                    {!! Form::open(array('class'=>'form-horizontal form-bordered','style'=>'margin-top: 0px; margin-bottom: 0px;')) !!}
                                    <fieldset>
                                        <div class="form-group" style=" padding-top: 0px; padding-bottom: 0px; ">
                                            <label class="col-md-8 col-xs-6 control-label hidden-xs" style="color:black;padding-top: 7px;">SORT BY:</label>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <select class="form-control" onchange="this.form.submit()" name="sortBy">
                                                    <option @if($selected=="Overall") {{"selected"}} @endif value="Overall">Overall</option>
                                                    <option @if($selected=="AGRO") {{"selected"}} @endif value="AGRO">AGRO</option>
                                                    <option @if($selected=="CONSUMP") {{"selected"}} @endif value="CONSUMP">CONSUMP</option>
                                                    <option @if($selected=="FINCIAL") {{"selected"}} @endif value="FINCIAL">FINCIAL</option>
                                                    <option @if($selected=="INDUS") {{"selected"}} @endif value="INDUS">INDUS</option>
                                                    <option @if($selected=="PROPCON") {{"selected"}} @endif value="PROPCON">PROPCON</option>
                                                    <option @if($selected=="RESOURC") {{"selected"}} @endif value="RESOURC">RESOURC</option>
                                                    <option @if($selected=="SERVICE") {{"selected"}} @endif value="SERVICE">SERVICE</option>
                                                    <option @if($selected=="TECH") {{"selected"}} @endif value="TECH">TECH</option>
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                            <ul class="nav nav-tabs" data-toggle="tabs">
                                <li class="active"><a href="#example-tabs2-overall">Overall</a></li>
                                <li class="hidden-xs"><a href="#example-tabs2-6months">6 months</a></li>
                                <li class="visible-xs"><a href="#example-tabs2-6months" data-toggle="tooltip" title="6 months">6 m</a></li>
                                <li class="hidden-xs"><a href="#example-tabs2-3months" >3 months</a></li>
                                <li class="visible-xs"><a href="#example-tabs2-3months" data-toggle="tooltip" title="3 months">3 m</a></li>
                                <li class="hidden-xs"><a href="#example-tabs2-1month" >1 months</a></li>
                                <li class="visible-xs"><a href="#example-tabs2-1month" data-toggle="tooltip" title="1 month">1 m</a></li>
                            </ul>
                        </div>
                        <!-- END Block Tabs Title -->

                        <!-- Tabs Content -->
                        <div class="tab-content">
                            <div class="tab-pane" id="example-tabs2-1month">
                                <!-- Responsive Full Block -->
                                <div class="block black white-bg">
                                    <!-- Responsive Full Title -->

                                    <!-- END Responsive Full Title -->
                                    <div class="block-title text-center">
                                        <p></p>
                                    </div>
                                    <!-- Responsive Full Content -->
                                    <div class="table-responsive ">
                                        <table class="table table-hover table-vcenter table-striped" >
                                            <thead  class="text-center">
                                                <tr>
                                                    <th style="width: 50px;" class="text-center"><i class="gi gi-crown"></i></th>
                                                    <th width="7%"><span>Broker</span></th>
                                                    <th width="7%"><span>AGRO</span></th>
                                                    <th width="7%"><span>CONSUMP</span></th>
                                                    <th width="7%"><span>FINCIAL</span></th>
                                                    <th width="7%"><span>INDUS</span></th>
                                                    <th width="7%"><span>PROPCON</span></th>
                                                    <th width="7%"><span>RESOURC</span></th>
                                                    <th width="7%"><span>SERVICE</span></th>
                                                    <th width="7%"><span>TECH</span></th>
                                                    <th width="7%"><span>Overall</span></th>
                                                    <th class="text-center"><span>No. of Researches</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            {{-- {!!dd($all)!!} --}}
                                            <?php $i=0; ?>
                                            @foreach($one as $brokerName=>$data)
                                                <tr>
                                                    <td class="text-center">{{++$i}}</td>
                                                    <td>{{$brokerName}}</td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['AGRO']['acc']}}, Total: {{$data['AGRO']['total']}}">{{$data['AGRO']['percent']}}%
                                                    </a>
                                                    </td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['CONSUMP']['acc']}}, Total: {{$data['CONSUMP']['total']}}">{{$data['CONSUMP']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['FINCIAL']['acc']}}, Total: {{$data['FINCIAL']['total']}}">{{$data['FINCIAL']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['INDUS']['acc']}}, Total: {{$data['INDUS']['total']}}">{{$data['INDUS']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['PROPCON']['acc']}}, Total: {{$data['PROPCON']['total']}}">{{$data['PROPCON']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['RESOURC']['acc']}}, Total: {{$data['RESOURC']['total']}}">{{$data['RESOURC']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['SERVICE']['acc']}}, Total: {{$data['SERVICE']['total']}}">{{$data['SERVICE']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['TECH']['acc']}}, Total: {{$data['TECH']['total']}}">{{$data['TECH']['percent']}}%</a></td>
                                                    <td class="text-center text-success"><a  data-toggle="tooltip" title="Correct: {{$data['Overall']['acc']}}, Total: {{$data['Overall']['total']}}">{{$data['Overall']['percent']}}%</a></td>
                                                    <td class="text-center">{{$data['Overall']['total']}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END Responsive Full Content -->
                                </div>
                                <!-- END Responsive Full Block -->
                            </div>
                            <div class="tab-pane" id="example-tabs2-3months">
                                <!-- Responsive Full Block -->
                                <div class="block white-bg black">
                                    <!-- Responsive Full Title -->

                                    <!-- END Responsive Full Title -->
                                    <div class="block-title text-center">
                                        <p></p>
                                    </div>
                                    <!-- Responsive Full Content -->
                                    <div class="table-responsive">
                                        <table class="table table-hover table-vcenter table-striped" >
                                            <thead  class="text-center">
                                                <tr>
                                                    <th style="width: 50px;" class="text-center"><i class="gi gi-crown"></i></th>
                                                    <th width="7%"><span>Broker</span></th>
                                                    <th width="7%"><span>AGRO</span></th>
                                                    <th width="7%"><span>CONSUMP</span></th>
                                                    <th width="7%"><span>FINCIAL</span></th>
                                                    <th width="7%"><span>INDUS</span></th>
                                                    <th width="7%"><span>PROPCON</span></th>
                                                    <th width="7%"><span>RESOURC</span></th>
                                                    <th width="7%"><span>SERVICE</span></th>
                                                    <th width="7%"><span>TECH</span></th>
                                                    <th width="7%"><span>Overall</span></th>
                                                    <th class="text-center"><span>No. of Researches</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=0; ?>
                                                @foreach($three as $brokerName=>$data)
                                                <tr>
                                                    <td class="text-center">{{++$i}}</td>
                                                    <td>{{$brokerName}}</td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['AGRO']['acc']}}, Total: {{$data['AGRO']['total']}}">{{$data['AGRO']['percent']}}%
                                                    </a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['CONSUMP']['acc']}}, Total: {{$data['CONSUMP']['total']}}">{{$data['CONSUMP']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['FINCIAL']['acc']}}, Total: {{$data['FINCIAL']['total']}}">{{$data['FINCIAL']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['INDUS']['acc']}}, Total: {{$data['INDUS']['total']}}">{{$data['INDUS']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['PROPCON']['acc']}}, Total: {{$data['PROPCON']['total']}}">{{$data['PROPCON']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['RESOURC']['acc']}}, Total: {{$data['RESOURC']['total']}}">{{$data['RESOURC']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['SERVICE']['acc']}}, Total: {{$data['SERVICE']['total']}}">{{$data['SERVICE']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['TECH']['acc']}}, Total: {{$data['TECH']['total']}}">{{$data['TECH']['percent']}}%</a></td>
                                                    <td class="text-center text-success"><a  data-toggle="tooltip" title="Correct: {{$data['Overall']['acc']}}, Total: {{$data['Overall']['total']}}">{{$data['Overall']['percent']}}%</a></td>
                                                    <td class="text-center">{{$data['Overall']['total']}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END Responsive Full Content -->
                                </div>
                                <!-- END Responsive Full Block -->
                            </div>
                            <div class="tab-pane" id="example-tabs2-6months">
                                <!-- Responsive Full Block -->
                                <div class="block white-bg black">
                                    <!-- Responsive Full Title -->

                                    <!-- END Responsive Full Title -->
                                    <div class="block-title text-center">
                                        <p></p>
                                    </div>
                                    <!-- Responsive Full Content -->
                                    <div class="table-responsive">
                                        <table class="table table-hover table-vcenter table-striped" >
                                            <thead  class="text-center">
                                                <tr>
                                                   <th style="width: 50px;" class="text-center"><i class="gi gi-crown"></i></th>
                                                    <th width="7%"><span>Broker</span></th>
                                                    <th width="7%"><span>AGRO</span></th>
                                                    <th width="7%"><span>CONSUMP</span></th>
                                                    <th width="7%"><span>FINCIAL</span></th>
                                                    <th width="7%"><span>INDUS</span></th>
                                                    <th width="7%"><span>PROPCON</span></th>
                                                    <th width="7%"><span>RESOURC</span></th>
                                                    <th width="7%"><span>SERVICE</span></th>
                                                    <th width="7%"><span>TECH</span></th>
                                                    <th width="7%"><span>Overall</span></th>
                                                    <th class="text-center"><span>No. of Researches</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=0; ?>
                                                @foreach($six as $brokerName=>$data)
                                                <tr>
                                                    <td class="text-center">{{++$i}}</td>
                                                    <td>{{$brokerName}}</td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['AGRO']['acc']}}, Total: {{$data['AGRO']['total']}}">{{$data['AGRO']['percent']}}%
                                                    </a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['CONSUMP']['acc']}}, Total: {{$data['CONSUMP']['total']}}">{{$data['CONSUMP']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['FINCIAL']['acc']}}, Total: {{$data['FINCIAL']['total']}}">{{$data['FINCIAL']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['INDUS']['acc']}}, Total: {{$data['INDUS']['total']}}">{{$data['INDUS']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['PROPCON']['acc']}}, Total: {{$data['PROPCON']['total']}}">{{$data['PROPCON']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['RESOURC']['acc']}}, Total: {{$data['RESOURC']['total']}}">{{$data['RESOURC']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['SERVICE']['acc']}}, Total: {{$data['SERVICE']['total']}}">{{$data['SERVICE']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['TECH']['acc']}}, Total: {{$data['TECH']['total']}}">{{$data['TECH']['percent']}}%</a></td>
                                                    <td class="text-center text-success"><a  data-toggle="tooltip" title="Correct: {{$data['Overall']['acc']}}, Total: {{$data['Overall']['total']}}">{{$data['Overall']['percent']}}%</a></td>
                                                    <td class="text-center">{{$data['Overall']['total']}}</td>
                                                </tr>
                                            @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- END Responsive Full Content -->
                                </div>
                                <!-- END Responsive Full Block -->
                            </div>
                            <div class="tab-pane active" id="example-tabs2-overall">
                                <!-- Responsive Full Block -->
                                <div class="block white-bg black">
                                    <!-- Responsive Full Title -->

                                    <!-- END Responsive Full Title -->
                                    <div class="block-title text-center">
                                        <p></p>
                                    </div>
                                    <!-- Responsive Full Content -->
                                    <div class="table-responsive">
                                        <table class="table table-hover table-vcenter table-striped" >
                                            <thead  class="text-center">
                                                <tr>
                                                    <th style="width: 50px;" class="text-center"><i class="gi gi-crown"></i></th>
                                                    <th width="7%"><span>Broker</span></th>
                                                    <th width="7%"><span>AGRO</span></th>
                                                    <th width="7%"><span>CONSUMP</span></th>
                                                    <th width="7%"><span>FINCIAL</span></th>
                                                    <th width="7%"><span>INDUS</span></th>
                                                    <th width="7%"><span>PROPCON</span></th>
                                                    <th width="7%"><span>RESOURC</span></th>
                                                    <th width="7%"><span>SERVICE</span></th>
                                                    <th width="7%"><span>TECH</span></th>
                                                    <th width="7%"><span>Overall</span></th>
                                                    <th class="text-center"><span>No. of Researches</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=0; ?>
                                                @foreach($all as $brokerName=>$data)
                                                <tr>
                                                    <td class="text-center">{{++$i}}</td>
                                                    <td>{{$brokerName}}</td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['AGRO']['acc']}}, Total: {{$data['AGRO']['total']}}">{{$data['AGRO']['percent']}}%
                                                    </a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['CONSUMP']['acc']}}, Total: {{$data['CONSUMP']['total']}}">{{$data['CONSUMP']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['FINCIAL']['acc']}}, Total: {{$data['FINCIAL']['total']}}">{{$data['FINCIAL']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['INDUS']['acc']}}, Total: {{$data['INDUS']['total']}}">{{$data['INDUS']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['PROPCON']['acc']}}, Total: {{$data['PROPCON']['total']}}">{{$data['PROPCON']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['RESOURC']['acc']}}, Total: {{$data['RESOURC']['total']}}">{{$data['RESOURC']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['SERVICE']['acc']}}, Total: {{$data['SERVICE']['total']}}">{{$data['SERVICE']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['TECH']['acc']}}, Total: {{$data['TECH']['total']}}">{{$data['TECH']['percent']}}%</a></td>
                                                    <td class="text-center text-success"><a  data-toggle="tooltip" title="Correct: {{$data['Overall']['acc']}}, Total: {{$data['Overall']['total']}}">{{$data['Overall']['percent']}}%</a></td>
                                                    <td class="text-center">{{$data['Overall']['total']}}</td>
                                                </tr>
                                            @endforeach
                                                
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

@stop