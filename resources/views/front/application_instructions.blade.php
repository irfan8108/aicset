@extends('welcome')

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
                            <li role="presentation" class="current">
                                <a href="javascript:void(0)" data-toggle="" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1</span> <i>Fill The Form</i></a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="javascript:void(0)" data-toggle="" aria-controls="step2" role="tab"><span class="round-tab">2</span> <i>Upload Documents</i></a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="javascript:void(0)" data-toggle="" aria-controls="step3" role="tab" aria-expanded="false"><span class="round-tab">3</span> <i>Form Preview & Submit</i></a>
                            </li>
                            <li role="presentation" class="disabled">
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
                        <form role="form" action="{{ route('application.create') }}" class="login-box" enctype="multipart/form-data" method="get">
                            @csrf
                            <div class="tab-content" id="main_form">
                                
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <div class="col-sm-12">
                                        
                                        <div class="row">

                                            <h2><b>General Instructions</b></h2>

                                            <p>The candidate should read the following instructions carefully before filling up the application form of AICSET - 2023.</p>

                                            <p>AICSET will be conducted Online (Computer Based Test) mode only. For Convenience of the candidates examination will be conducted on Five different dates</p>
                                            <p><b>Examination Dates are as follows</b></p>
                                            <ol style="margin:15px">
                                                <li>On 24th April, 2023 (Monday) known as Slot – I</li>
                                                <li>On 26th April, 2023 (Wednesday) known Slot – II</li>
                                                <li>On 28th April, 2023 (Friday) known as Slot – III</li>
                                                <li>On 30th April, 2023 (Sunday) known Slot – IV</li>
                                                <li>On 2nd May, 2023 (Tuesday) known Slot – V</li>
                                            </ol>

                                            <p>Candidate shall have to opt for a particular Slot / Date of Examination before filling up all the details. <br>Please ensure your eligibility as per the criteria laid down for AICSET - 2023.</p>

                                            <h4><b>Application Procedure</b></h4>

                                            <p><b>Basic Details</b></p>
                                            <p>You have to fill in your Basic Details (Candidate’s Name, Father’s Name, Mother’s Name, Gender, Physically Handicapped (Yes/No), Category, State, Aadhar Number). You have to click on “Save & Next” after filling it out.</p>

                                            <p><b>Payment Procedure</b></p>
                                            <p><b>In this step you get redirected to the payment page in which you have to pay for your </b></p>

                                            <p>The application fee (in Indian Rupees) for AICSET - 2023 is as follows:</p>

                                            <table class="table table-striped table-bordered">
                                                <tr>
                                                    <th>CATEGORY</th>
                                                    <th>APPLICATION FEE</th>
                                                </tr>
                                                <tr>
                                                    <td>GEN / OBC</td>
                                                    <td>INR 1250/- + GST</td>
                                                </tr>
                                                <tr>
                                                    <td>Girl Candidates of All Category</td>
                                                    <td>INR 1050/- + GST</td>
                                                </tr>
                                                <tr>
                                                    <td>SC / ST / PH Category</td>
                                                    <td>INR 1050/- + GST</td>
                                                </tr>
                                            </table>

                                            <p><b>Personal/Academic Information</b></p>
                                            <p>Now, you get to the Personal Information Section in which you have to fill Contact Details &amp; Permanent Address. In this step you come up at the section of “Examination Detail” in which you have to fill in regarding your subjects, exam center etc. <br>After completing out ninth step click on the “Save & Next” option. You get redirected to a page where you have to fill in your academic details of class 10+2 and click on “Save & Next”.</p>

                                            <p><b>Documents/Images Upload</b></p>
                                            <p>Now in this step you have to upload your “photo &amp; signature”. Make sure that it should be appropriate as size required.</p>

                                            <p><b>Final Submission</b></p>
                                            <p>After uploading it click on “Save & Next”. Finally, you get to come on the “Final Submission” page where you must preview all the details and click on the “Submit” option.</p>

                                            <p><b>Note:</b> Applications without payment of examination fee or Examination fee payment without application or wrong information will not be considered to allowing appearing for Entrance Examination.</p>

                                        </div>

                                    </div> 
                                    
                                    <!-- <div class="col-sm-12 form_status text-center">
                                       
                                       <div class="row">
                                         <div class="col-sm-12 ">
                                                <p>You have completed Registration form. Please note down the Application Number for future references</p>
                                                <p>Application Number: <a href="#">2135465545</a></p>
                                            </div>  
                                       </div>

                                    </div> --> 

                                    <!-- <ul class="list-inline  text-center">
                                        <li><button type="button" class="btn-primary next-step">Proceed to Apply</button></li>
                                    </ul> -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <br><br>
                                                <input type="checkbox" id="instruction_read" required>
                                                <label for="instruction_read">
                                                I read and accepted the application instructions.</label>
                                                <br><br>
                                                <input type="submit" name="" class="btn btn-success" value="Proceed to Apply">
                                                <br><br><br>
                                            </div>
                                        </div>
                                    </div>

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
@endpush	