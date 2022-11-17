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
                            <li role="presentation" class="current">
                                <a href="javascript:void(0)" data-toggle="" aria-controls="step4" role="tab"><span class="round-tab">4</span> <i>Fee Payment</i></a>
                            </li>
                            <li role="presentation" class="disabled">
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
                                        
                                        <div class="row">
                                            @if($message = Session::get('error'))
                                                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                    <strong>Error!</strong> {{ $message }}
                                                </div>
                                            @endif
                      
                                            @if($message = Session::get('success'))
                                                <div class="alert alert-success alert-dismissible fade {{ Session::has('success') ? 'show' : 'in' }}" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                    <strong>Success!</strong> {{ $message }}
                                                </div>
                                            @endif
                                        </div>

                                        <div class="row">

                                            <h3 class="text-center title_heading"><b>Step 1:</b> Application Fee</h3>

                                            <table class="table table-striped table-bordered fee_breakup_table">
                                                <tr>
                                                    <th colspan="2">Application Fee Breakup</th>
                                                </tr>
                                                <tr>
                                                    <td>Application Fee (General)</td>
                                                    <td><i class='bx bx-rupee'></i>{{ $fee = $user->application->fee }}</td>
                                                </tr>
                                                <tr>
                                                    <td>GST(Service Tax)</td>
                                                    <td><i class='bx bx-rupee'></i>{{ $gst = $fee * 18/100 }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Payable Amount</td>
                                                    <td><i class='bx bx-rupee'></i>{{ $fee + $gst }}</td>
                                                </tr>
                                            </table>

                                            <!-- <input type="submit" value="Proceed to Pay" class="btn btn-success"> -->

                                            <form action="{{ route('razorpay.payment.store') }}" method="POST" id="payment_form">
                                                @csrf
                                                <script src="https://checkout.razorpay.com/v1/checkout.js"
                                                        data-key="{{ config('razor.key') }}"
                                                        data-amount="{{ ($user->application->fee * 118/100) * 100 }}"
                                                        data-buttontext="Proceed to Pay"
                                                        data-name="AICSET.COM"
                                                        data-description="{{$payment->id}}"
                                                        data-image="https://www.itsolutionstuff.com/frontTheme/images/logo.png"
                                                        data-prefill.name="{{ $user->application->name }}"
                                                        data-prefill.email="{{ $user->email }}"
                                                        data-prefill.contact="{{ $user->mobile }}"
                                                        data-theme.color="#ff7529">
                                                </script>
                                            </form>


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
    <style type="text/css">
        input[type="submit"]:hover {
            background: #4cae4c;
        }
        input[type="submit"] {
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c;
            padding: 10px;
            border: transparent;
            border-radius: 5px;
            min-width: 150px;
            font-weight: bold;
        }
        .fee_breakup_table i{margin: 0}
    </style>
@endpush

@push('scripts')
    <script type="text/javascript">
        $('#payment_form').submit(function(){
            $(this).find('input[type=submit]').prop('disabled', true);
            $(this).find('input[type=submit]').val('Please wait..');
        });
    </script>
@endpush	