@extends('layouts.front')

@section('content')	
    <div class="container">
        <div class="col-xs-12">
        <div class="row text-right dashbord_header">
            <div class="col-md-9 col-xs-12"><p><b>Name:</b> {{ Auth::user()->name }}</p></div>
            <div class="col-md-3 col-xs-12"><p><b>Application No:</b>{{ $user->registration->app_no }}</p></div>
        </div>
        </div>
    </div>      
	<section class="signup-step-container">
        <div class="container">
        	<div class="row d-fle justify-content-center">
                <!-- <div class="col-md-3 col-sm-0"></div> -->
            	<div class="col-sm-12 col-md-12 wizard">
            		<div class="wizard-inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="javascript:void(0)" data-toggle="" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1</span> <i>Fill The Form</i></a>
                            </li>
                            <li role="presentation" class="active">
                                <a href="javascript:void(0)" data-toggle="" aria-controls="step2" role="tab"><span class="round-tab">2</span> <i>Upload Documents</i></a>
                            </li>
                            <li role="presentation" class="active">
                                <a href="javascript:void(0)" data-toggle="" aria-controls="step3" role="tab" aria-expanded="false"><span class="round-tab">3</span> <i>Form Preview & Submit</i></a>
                            </li>
                            <li role="presentation" class="active">
                                <a href="javascript:void(0)" data-toggle="" aria-controls="step4" role="tab"><span class="round-tab">4</span> <i>Fee Payment</i></a>
                            </li>
                            <li role="presentation" class="active">
                                <a href="javascript:void(0)" data-toggle="" aria-controls="step5" role="tab"><span class="round-tab">5</span> <i>Application Status</i></a>
                            </li>
                        </ul>
                    </div>
            	</div>
            </div>	
            <div class="row  justify-content-center">
            	<!-- <div class="col-md-3" style="padding-top: 20px;">
            		<div class="col-sm-12 ap_progress">
					    <p>Application Progress Status</p>
	            		<nav-left class='animated bounceInDown '>
					        <ul>
					          <li><a href='#profile'><i class="bx bx-right-arrow-alt"></i>View Registration Form</a></li>
					          <li><a href='#profile'><i class="bx bx-right-arrow-alt"></i>Complete Application Form</a></li>
					          <li><a href='#profile'><i class="bx bx-right-arrow-alt"></i>Uploads Documents </a></li>
					          <li><a href='#profile'><i class="bx bx-right-arrow-alt"></i>Pay Appication Fee </a></li>
					          <li><a href='#profile'><i class="bx bx-right-arrow-alt"></i>Print Of confirmation </a></li>
					        </ul>
					    </nav-left>
					</div>    
            	</div> -->
                <div class="col-md-12">
                    <div class="wizard">

                            <div class="tab-content" id="main_form">
                                
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <div class="col-sm-12">
                                        
                                        <div class="row text-center">

                                            <h3 class="title_heading">Application Status: <b class="text-success">Completed</b></h3>

                                            <h2 class="text-success">Thanks, Your application successfully completed!</h2>
                                            <p>
                                                You will be notified for further process or you can visit 
                                                <a href="#">Important Dates</a>
                                            </p>

                                            <br><br>
                                            <a href="{{ route('application_print') }}" class="btn btn-success" target="_blank">Download Application Form</a>

                                            <br><br><br><br><br><br>

                                        </div>

                                    </div> 

                                </div>

                                <div class="clearfix"></div>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection	

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashbord-style.css') }}">
@endpush

@push('scripts')
@endpush	