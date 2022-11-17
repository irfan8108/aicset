@extends('welcome')

@section('content')	
    <div class="container">
        <div class="col-xs-12">
        <div class="row text-right dashbord_header">
            <div class="col-md-9 col-xs-12"><p><b>Name:</b> {{ Auth::user()->name }}</p></div>
            <div class="col-md-3 col-xs-12"><p><b>Application No: </b>{{ $user->registration->app_no }}</p></div>
        </div>
        </div>
    </div>      
	<section class="signup-step-container">
        <div class="container">
            <div class="row  justify-content-center">
            	<div class="col-md-3" style="padding-top: 20px;">
            		<div class="col-sm-12 ap_progress">
					    <p><b>My Scholarship Application</b></p>
	            		<nav-left class='animated bounceInDown '>
					        <ul>
					          <li class="disabled"><a href="javascript:void(0)"><i class="bx bx-right-arrow-alt"></i>Admit Card</a></li>
					          <li class="disabled"><a href="javascript:void(0)"><i class="bx bx-right-arrow-alt"></i>Online Examination</a></li>
                              <li class="disabled"><a href="javascript:void(0)"><i class="bx bx-right-arrow-alt"></i>Score Card/Result</a></li>
                              <li class="disabled"><a href="javascript:void(0)"><i class="bx bx-right-arrow-alt"></i>Admission Counselling</a></li>
				                <li class="" style="background: #f9f9f9; border-top: 1px solid #ddd;">
                                    <a href='#' style="color: #222">
                                        <i class='bx bx-support'></i> Technical Support
                                    </a>
                                </li>
					        </ul>
					    </nav-left>
					</div>    
            	</div>
                <div class="col-md-9">
                    <div class="wizard">
                        <form role="form" action="{{ route('application.store') }}" class="login-box" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="tab-content" id="main_form">
                                
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <div class="col-sm-12 form_status">
                                        <div class="row">
                                            <div class="col-sm-12 ">
                                                <h5 class="h-5"><b>Application Status</b></h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="col-xs-12"><h5>Registration Form</h5></div>
                                            </div>
                                            <div class="col-xs-6 b-l">
                                                <div class="col-xs-12"><h6><span class="badge badge-success">Completed</span></h6></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="col-xs-12"><h5>Scholarship Application Form</h5></div>
                                            </div>
                                            <div class="col-xs-6 b-l">
                                                <div class="col-xs-12">
                                                    <h6>
                                                        @if($user->application && $user->application->status)
                                                            <span class="badge badge-success">Completed</span>
                                                        @else
                                                            <span class="badge badge-warning">Pending</span>
                                                        @endif
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="col-xs-12"><h5>Upload Photograph & Signature</h5></div>
                                            </div>
                                            <div class="col-xs-6 b-l">
                                                <div class="col-xs-12">
                                                    <h6>
                                                        @if($user->photo && $user->signature)
                                                            <span class="badge badge-success">Completed</span>
                                                        @else
                                                            <span class="badge badge-warning">Pending</span>
                                                        @endif
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="col-xs-12"><h5>Application Fee Payment</h5></div>
                                            </div>
                                            <div class="col-xs-6 b-l">
                                                <div class="col-xs-12">
                                                    <h6>
                                                        @if($user->application && $user->application->payment->status)
                                                            <span class="badge badge-success">Completed</span>
                                                        @else
                                                            <span class="badge badge-warning">Pending</span>
                                                        @endif
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    
                                    <div class="col-sm-12 form_status text-center">
                                       
                                       <!-- <div class="row">
                                         <div class="col-sm-12 ">
                                                <p>You have completed Registration form. Please note down the Application Number for future references</p>
                                                <p>Application Number: <a href="#">2135465545</a></p>
                                            </div>  
                                       </div> -->

                                    </div> 

                                    @if($user->application && $user->application->status)
                                        <div class="row text-center">
                                            <div class="col-md-12">
                                                <br>
                                                    <a href="{{ route('application.instructions') }}" class="btn-primary next-step">
                                                        Download Application Form <i class='bx bxs-download'></i>
                                                    </a>
                                                <br><br><br><br>
                                            </div>
                                        </div>
                                    @else
                                        <div class="row text-center">
                                            <div class="col-md-12">
                                                <br><br>
                                                <a href="{{ route('application.instructions') }}" class="btn-primary next-step">Proceed to Apply</a>
                                            </div>
                                        </div>
                                    @endif

                                </div>

                                <div class="clearfix"></div>

                            </div>
                            
                        </form>
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
	<script>
		// ------------step-wizard-------------
		$(document).ready(function () {
		    $('.nav-tabs > li a[title]').tooltip();
		    
		    //Wizard
		    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

		        var $target = $(e.target);
		    
		        if ($target.parent().hasClass('disabled')) {
		            return false;
		        }
		    });

		    $(".next-step").click(function (e) {

		        var $active = $('.wizard .nav-tabs li.active');
		        $active.next().removeClass('disabled');
		        nextTab($active);

		    });
		    $(".prev-step").click(function (e) {

		        var $active = $('.wizard .nav-tabs li.active');
		        prevTab($active);

		    });
		});

		function nextTab(elem) {
		    $(elem).next().find('a[data-toggle="tab"]').click();
		}
		function prevTab(elem) {
		    $(elem).prev().find('a[data-toggle="tab"]').click();
		}
        // choose year calender 
        $(function() {
            $( "#datepicker" ).datepicker({dateFormat: 'yy'});
        });

	</script>
@endpush	