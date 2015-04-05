@extends('main')

<<<<<<< HEAD
=======

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
        {!! HTML::script('js2/app.js') !!}
@stop

>>>>>>> d490d17ffe881a20bafb5a036819944e241c53a5
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
                            <div class="block-options pull-right half-box">
{{--                                 <form action="" method="post" class="form-horizontal form-bordered" style=" margin-top: 0px; margin-bottom: 0px; "> --}}
                                    {!! Form::open(array('class'=>'form-horizontal form-bordered','style'=>'margin-top: 0px; margin-bottom: 0px;')) !!}
                                    <fieldset>
                                        <div class="form-group" style=" padding-top: 0px; padding-bottom: 0px; ">
<<<<<<< HEAD
                                            <label class="col-md-8 control-label" style="color:black">SORT BY:</label>
                                            <div class="col-md-4">
                                                <select class="form-control" onchange="this.form.submit()" name="sortBy">
                                                    <option @if($selected=="Overall") {{"selected"}} @endif value="Overall">Overall</option>
                                                    <option @if($selected=="AGRO") {{"selected"}} @endif value="AGRO">AGRO</option>
                                                    <option @if($selected=="COMSUMP") {{"selected"}} @endif value="COMSUMP">COMSUMP</option>
                                                    <option @if($selected=="FINCIAL") {{"selected"}} @endif value="FINCIAL">FINCIAL</option>
                                                    <option @if($selected=="INDUS") {{"selected"}} @endif value="INDUS">INDUS</option>
                                                    <option @if($selected=="PROPCON") {{"selected"}} @endif value="PROPCON">PROPCON</option>
                                                    <option @if($selected=="RESOURC") {{"selected"}} @endif value="RESOURC">RESOURC</option>
                                                    <option @if($selected=="SERVICE") {{"selected"}} @endif value="SERVICE">SERVICE</option>
                                                    <option @if($selected=="TECH") {{"selected"}} @endif value="TECH">TECH</option>
=======
                                            <label class="col-sm-8 control-label" style="color:black">SORT BY:</label>
                                            <div class="col-sm-4">
                                                <select class="form-control">
                                                    <option value="overall">Overall</option>
                                                    <option value="agro">AGRO</option>
                                                    <option value="consump">CONSUMP</option>
                                                    <option value="fincial">FINCIAL</option>
                                                    <option value="indus">INDUS</option>
                                                    <option value="propcon">PROPCON</option>
                                                    <option value="resourc">RESOURC</option>
                                                    <option value="service">SERVICE</option>
                                                    <option value="tech">TECH</option>
>>>>>>> d490d17ffe881a20bafb5a036819944e241c53a5
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                            <ul class="nav nav-tabs" data-toggle="tabs">
                                <li class="active"><a href="#example-tabs2-overall">Overall</a></li>
                                <li><a href="#example-tabs2-6months">6 months</a></li>
                                <li><a href="#example-tabs2-3months">3 months</a></li>
                                <li><a href="#example-tabs2-1month">1 month</a></li> 
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
                                    <div class="table-responsive">
                                        <table class="table table-vcenter table-striped" >
                                            <thead  class="text-center">
                                                <tr>
                                                    <th style="width: 50px;" class="text-center"><i class="gi gi-crown"></i></th>
<<<<<<< HEAD
                                                    <th>Broker</th>
                                                    <th>AGRO</th>
                                                    <th>CONSUMP</th>
                                                    <th>FINCIAL</th>
                                                    <th>INDUS</th>
                                                    <th>PROPCON</th>
                                                    <th>RESOURC</th>
                                                    <th>SERVICE</th>
                                                    <th>TECH</th>
                                                    <th>Overall</th>
                                                    <th style="width: 150px;" class="text-center">No. of Reports</th>
=======
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
>>>>>>> d490d17ffe881a20bafb5a036819944e241c53a5
                                                </tr>
                                            </thead>
                                            <tbody>
                                            {{-- {!!dd($all)!!} --}}
<<<<<<< HEAD
                                            <style type="text/css">
                                                span.text-content span {
                                                  display: table-cell;
                                                  text-align: center;
                                                  vertical-align: middle;
                                                }
                                                span.text-content {
                                                  background: rgba(0,0,0,0.5);
                                                  color: white;
                                                  cursor: pointer;
                                                  display: table;
                                                  height: 150px;
                                                  left: 0;
                                                  position: absolute;
                                                  top: 0;
                                                  width: 150px;
                                                  opacity: 0;
                                                }
                                                 
                                                td:hover span.text-content {
                                                  opacity: 1;
                                                }
                                            </style>
                                            {!! $i=0 !!}
=======
                                            <?php $i=0; ?>
>>>>>>> d490d17ffe881a20bafb5a036819944e241c53a5
                                            @foreach($one as $brokerName=>$data)

                                                <tr>
                                                    <td class="text-center">{{++$i}}</td>
<<<<<<< HEAD
                                                    <td><a href="#">{{$brokerName}}</a></td>
                                                    <td class="text-center">{{$data['AGRO']['percent']}}%
                                                    <span class="text-content">test</span></td>
                                                    <td class="text-center">{{$data['CONSUMP']['percent']}}%</td>
                                                    <td class="text-center">{{$data['FINCIAL']['percent']}}%</td>
                                                    <td class="text-center">{{$data['INDUS']['percent']}}%</td>
                                                    <td class="text-center">{{$data['PROPCON']['percent']}}%</td>
                                                    <td class="text-center">{{$data['RESOURC']['percent']}}%</td>
                                                    <td class="text-center">{{$data['SERVICE']['percent']}}%</td>
                                                    <td class="text-center">{{$data['TECH']['percent']}}%</td>
                                                    <td class="text-center text-success">{{$data['Overall']['percent']}}%</td>
=======
                                                    <td>{{$brokerName}}</td>
                                                    <td class="text-center">{{$data['AGRO']['percent']}}%
                                                    </td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['CONSUMP']['acc']}}, Total: {{$data['CONSUMP']['total']}}">{{$data['CONSUMP']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['FINCIAL']['acc']}}, Total: {{$data['FINCIAL']['total']}}">{{$data['FINCIAL']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['INDUS']['acc']}}, Total: {{$data['INDUS']['total']}}">{{$data['INDUS']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['PROPCON']['acc']}}, Total: {{$data['PROPCON']['total']}}">{{$data['PROPCON']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['RESOURC']['acc']}}, Total: {{$data['RESOURC']['total']}}">{{$data['RESOURC']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['SERVICE']['acc']}}, Total: {{$data['SERVICE']['total']}}">{{$data['SERVICE']['percent']}}%</a></td>
                                                    <td class="text-center"><a  data-toggle="tooltip" title="Correct: {{$data['TECH']['acc']}}, Total: {{$data['TECH']['total']}}">{{$data['TECH']['percent']}}%</a></td>
                                                    <td class="text-center text-success"><a  data-toggle="tooltip" title="Correct: {{$data['Overall']['acc']}}, Total: {{$data['Overall']['total']}}">{{$data['Overall']['percent']}}%</a></td>
>>>>>>> d490d17ffe881a20bafb5a036819944e241c53a5
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
                                        <table class="table table-vcenter table-striped" >
                                            <thead  class="text-center">
                                                <tr>
                                                    <th style="width: 50px;" class="text-center"><i class="gi gi-crown"></i></th>
<<<<<<< HEAD
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
=======
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
>>>>>>> d490d17ffe881a20bafb5a036819944e241c53a5
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=0; ?>
                                                @foreach($three as $brokerName=>$data)
                                                <tr>
                                                    <td class="text-center">{{++$i}}</td>
                                                    <td><a href="#">{{$brokerName}}</a></td>
                                                    <td class="text-center">{{$data['AGRO']['percent']}}%</td>
                                                    <td class="text-center">{{$data['CONSUMP']['percent']}}%</td>
                                                    <td class="text-center">{{$data['FINCIAL']['percent']}}%</td>
                                                    <td class="text-center">{{$data['INDUS']['percent']}}%</td>
                                                    <td class="text-center">{{$data['PROPCON']['percent']}}%</td>
                                                    <td class="text-center">{{$data['RESOURC']['percent']}}%</td>
                                                    <td class="text-center">{{$data['SERVICE']['percent']}}%</td>
                                                    <td class="text-center">{{$data['TECH']['percent']}}%</td>
                                                    <td class="text-center text-success">{{$data['Overall']['percent']}}%</td>
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
                                        <table class="table table-vcenter table-striped" >
                                            <thead  class="text-center">
                                                <tr>
<<<<<<< HEAD
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
=======
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
>>>>>>> d490d17ffe881a20bafb5a036819944e241c53a5
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=0; ?>
                                                @foreach($six as $brokerName=>$data)
                                                <tr>
                                                    <td class="text-center">{{++$i}}</td>
                                                    <td><a href="#">{{$brokerName}}</a></td>
                                                    <td class="text-center">{{$data['AGRO']['percent']}}%</td>
                                                    <td class="text-center">{{$data['CONSUMP']['percent']}}%</td>
                                                    <td class="text-center">{{$data['FINCIAL']['percent']}}%</td>
                                                    <td class="text-center">{{$data['INDUS']['percent']}}%</td>
                                                    <td class="text-center">{{$data['PROPCON']['percent']}}%</td>
                                                    <td class="text-center">{{$data['RESOURC']['percent']}}%</td>
                                                    <td class="text-center">{{$data['SERVICE']['percent']}}%</td>
                                                    <td class="text-center">{{$data['TECH']['percent']}}%</td>
                                                    <td class="text-center text-success">{{$data['Overall']['percent']}}%</td>
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
                                        <table class="table table-vcenter table-striped" >
                                            <thead  class="text-center">
                                                <tr>
                                                    <th style="width: 50px;" class="text-center"><i class="gi gi-crown"></i></th>
<<<<<<< HEAD
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
=======
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
>>>>>>> d490d17ffe881a20bafb5a036819944e241c53a5
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=0; ?>
                                                @foreach($all as $brokerName=>$data)
                                                <tr>
                                                    <td class="text-center">{{++$i}}</td>
                                                    <td><a href="#">{{$brokerName}}</a></td>
                                                    <td class="text-center">{{$data['AGRO']['percent']}}%</td>
                                                    <td class="text-center">{{$data['CONSUMP']['percent']}}%</td>
                                                    <td class="text-center">{{$data['FINCIAL']['percent']}}%</td>
                                                    <td class="text-center">{{$data['INDUS']['percent']}}%</td>
                                                    <td class="text-center">{{$data['PROPCON']['percent']}}%</td>
                                                    <td class="text-center">{{$data['RESOURC']['percent']}}%</td>
                                                    <td class="text-center">{{$data['SERVICE']['percent']}}%</td>
                                                    <td class="text-center">{{$data['TECH']['percent']}}%</td>
                                                    <td class="text-center text-success">{{$data['Overall']['percent']}}%</td>
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