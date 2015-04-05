@extends('main')

@section('content')

<!-- Intro -->
<section class="site-section site-section-light site-section-top parallax-image" style="background-image: url('img/16353695-media_httpdldropboxco_pedhu2.jpg');">
    <div class="container">
        <h1 class="text-center animation-slideDown"><strong>Let's get down the DOI, go LongDOI.</strong></h1>
        <h2 class="text-center animation-slideUp push hidden-xs">Do you wanna see more? <strong>Search</strong>!</h2>
        <div class="site-block text-center">
<<<<<<< HEAD
            <form action="/analysis" method="post" class="form-horizontal" >
=======
            {!! Form::open(array('action'=>'Analysis@search','method'=>'post','class'=>'form-horizontal')) !!}
>>>>>>> d490d17ffe881a20bafb5a036819944e241c53a5
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <label class="sr-only" for="register-email">a broker</label>
                        <div class="input-group input-group-lg">
                            <input name="_token" type="hidden" value="{!! csrf_token() !!}">
                            <input type="text" id="input_analysis" name="input_analysis" class="form-control input-typeahead-brokers" autocomplete="off" placeholder="Search Brokers..">
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
            <style type="text/css">
                ul.img-list {
                  list-style-type: none;
                  margin: 0;
                  padding: 0;
                  text-align: center;
                }
                 
                ul.img-list li {
                  display: inline-block;
                  height: 150px;
                  margin: 0 1em 1em 0;
                  position: relative;
                  width: 150px;
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
                }
                 
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
                 
                ul.img-list li:hover span.text-content {
                  opacity: 1;
                }
            </style>
            <div class="block-title">
                
            </div>
            <!-- END Working Tabs Title -->


            <!-- Working Tabs Content -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Block Tabs -->
                    <div class="block full border-radius container-box">
                        <!-- Block Tabs Title -->
                        <div class="block-title" style="margin-bottom:20px">
                            <h1 class="text-center black" id="analysis-head" ><i class="gi gi-stats"></i> <strong>Daily Analysis</strong></h1>
                            <div class="block-options pull-right" style="width:30%">
                                <!-- Time and Date Pickers Content -->
<<<<<<< HEAD
                                <form action="page_forms_components.html" method="post" class="form-horizontal form-bordered" onsubmit="return false;" style=" margin-top: 0px; margin-bottom: 0px; ">
=======
                                
                                {!! Form::open(array('action' => 'Analysis@search','method'=>'post','class'=>'form-horizontal form-bordered','style'=>'margin-top: 0px; margin-bottom: 0px; ')) !!}
>>>>>>> d490d17ffe881a20bafb5a036819944e241c53a5
                                    <fieldset>
                                        <div class="form-group" style=" padding-bottom: 0px; padding-top: 0px; ">
                                            <label class="col-md-3 control-label" for="example-datepicker" style="color:black;padding-right: 0px;">DATE: </label>
                                            <div class="col-md-5">
<<<<<<< HEAD
                                                
=======
                                                 @if(isset($broker_id)) <input name="broker_id" type="hidden" value="{!! $broker_id !!}" /> @endif
                                                <input name="isOneBroker" type="hidden" value="{!! $isOneBroker !!}" />
>>>>>>> d490d17ffe881a20bafb5a036819944e241c53a5
                                                <input type="text" id="example-datepicker2" name="example-datepicker2" class="form-control input-datepicker" data-date-format="dd/mm/yy" placeholder="dd/mm/yy" style=" padding-top: 4px; padding-bottom: 4px; height: 30px; ">
                                            </div>
                                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Go</button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                            <div class="block-options black col-xs-4 col-xs-offset-1" style="width:30%">
                                @if(isset($input_analysis)) <p style="margin-top: 6px;margin-bottom: 5px;">Keyword: {{$input_analysis}}</p> @endif
                                
                            </div>

                        </div>
                        @if(empty($recommendations))
                        <div class="row black text-center" style="margin:40px auto;">
                             <h3>No Result.</h3> 
                        </div>
                        @endif
                        <!-- END Block Tabs Title -->

                        <!-- Search Styles Content -->
                        <div class="tab-content">
                            <!-- Projects Search -->
                            <div class="tab-pane active" id="search-tab-projects">
                                @if(!empty($recommendations))
                                <!-- Projects Results -->
                                <table class="table table-striped table-vcenter black" style="table-layout:fixed">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="min-width: 100px; width: 10%;">DATE</th>
                                            <th class="text-center" style="width: 20%;">BROKER</th>
                                            <th class="text-center" style="width: 60%;">RESEARCH</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- {{ $recommendations }} --}}
                                        
                                        @foreach($recommendations as $recommendation => $data)
                                        <tr>
                                            <td class="text-center">
                                                {{$data->Date}}
                                            </td>
                                            <td class="text-center">
                                                {{$data->Broker_Name}}
                                            </td>
<<<<<<< HEAD
                                            
                                            <td class="text-center">
                                                <a href="{{$data->Link}}" target="_blank">Link</a>
=======
                                            <td >
                                                <a href="{{$data->Link}}">{{$data->PDF_Name}}</a>
>>>>>>> d490d17ffe881a20bafb5a036819944e241c53a5
                                            </td>
                                          
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                                <!-- END Projects Results -->
                                @endif
                            </div>
                            <!-- END Projects Search -->

                        </div>
                        <!-- END Search Styles Content -->
                    </div>
                    <!-- END Search Styles Block -->
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