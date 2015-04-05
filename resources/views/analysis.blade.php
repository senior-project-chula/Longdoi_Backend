@extends('main')


@section('button-to-top')
    <a href="#" id="to-top"><i class="fa fa-angle-up"></i></a>
@stop

@section('js-backend')
         {!! HTML::script('js2/vendor/bootstrap.min.js') !!}
        {!! HTML::script('js2/plugins.js') !!}
        {!! HTML::script('js2/app.js') !!}
@stop

@section('content')


{{-- isOneFormBroker --}}

<!-- Intro -->
<section class="site-section site-section-light site-section-top parallax-image" style="background-image: url('img/16353695-media_httpdldropboxco_pedhu2.jpg');">
    <div class="container">
        <h1 class="text-center animation-slideDown"><strong>Let's get down the DOI, go LongDOI.</strong></h1>
        <h2 class="text-center animation-slideUp push hidden-xs">Do you wanna see more? <strong>Search</strong>!</h2>
        <div class="site-block text-center">
            {{-- {!! Form::open(array('action'=>'Analysis@search','method'=>'post','class'=>'form-horizontal')) !!} --}}
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <label class="sr-only" for="register-email">a broker</label>
                        <div class="input-group input-group-lg">
                            <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
                            <input type="text" id="input_analysis" name="input_analysis" class="form-control" placeholder="Which broker?">
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
                        <!-- Block Tabs Title -->
                        <div class="block-title" style="margin-bottom:20px">
                            <h1 class="text-center black" id="analysis-head" ><i class="gi gi-stats"></i> <strong>Daily Analysis</strong></h1>
                            <div class="block-options pull-right" style="width:30%">
                                <!-- Time and Date Pickers Content -->
                                
                                {{-- {{ Form::open(array('action' => 'Analysis@search','method'=>'post','class'=>'form-horizontal form-bordered','style'=>'margin-top: 0px; margin-bottom: 0px; ')) }} --}}
                                    <fieldset>
                                        <div class="form-group" style=" padding-bottom: 0px; padding-top: 0px; ">
                                            <label class="col-md-3 control-label" for="example-datepicker" style="color:black;padding-right: 0px;">DATE: </label>
                                            <div class="col-md-5">
                                                {{-- <input name="broker_id" type="hidden" value="{!! $recommendations[0]->Broker_ID !!}" /> --}}
                                                <input name="isOneBroker" type="hidden" value="{!! $isOneBroker !!}" />
                                                <input type="text" id="example-datepicker2" name="example-datepicker2" class="form-control input-datepicker" data-date-format="dd/mm/yy" placeholder="dd/mm/yy" style=" padding-top: 4px; padding-bottom: 4px; height: 30px; ">
                                            </div>
                                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Go</button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                            
                        </div>
                        <!-- END Block Tabs Title -->

                        <!-- Search Styles Content -->
                        <div class="tab-content">
                            <!-- Projects Search -->
                            <div class="tab-pane active" id="search-tab-projects">

                                <!-- Projects Results -->
                                <table class="table table-striped table-vcenter black">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 5%;">DATE</th>
                                            <th class="text-center" style="width: 10%;">BROKER</th>
                                            <th class="text-center" style="width: 15%;">DESCRIPTION</th>
                                            <th class="text-center" style="min-width: 60px; width: 20%;">RESOURCE</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- {{ $recommendations }} --}}
                                        @foreach($recommendations as $recommendation => $data)
                                        <tr>
                                            <td class="text-center">
                                                {{$data->Date}}
                                            </td>
                                            <td class="text-center ">
                                                {{$data->Broker_Name}}
                                            </td>
                                            <td class="text-center">
                                                {{$data->Description}}
                                            </td>
                                            
                                            <td class="text-center">
                                                <a href="{{$data->Link}}">{{$data->Link}}</a>
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