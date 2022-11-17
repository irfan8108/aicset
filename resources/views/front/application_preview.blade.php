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
                            <li role="presentation" class="current">
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

                <div class="col-md-12">
                    <div class="wizard">
                        <form role="form" action="{{ route('application.fee') }}" class="login-box" enctype="multipart/form-data" method="get">
                            @csrf
                            
                            <div class="tab-content" id="main_form">
                                
                                <div class="tab-pane active" role="tabpanel" id="step4">
                                    <h3 class="text-center title_heading"><b>Step 3:</b> Application Preview & Submit</h3>

                                    
                                    <div class="col-md-12">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th colspan="4" class="head">Personal Details</th>
                                            </tr>
                                            <tr>
                                                <th>Name</th>
                                                <td>{{ $user->application->name }}</td>
                                                <td colspan="2" rowspan="12" align="center">
                                                    <br><br>
                                                    <img src="{{ asset('uploads/documents') }}/{{$user->photo}}" width="150px">
                                                    <br>
                                                    <img src="{{ asset('uploads/documents') }}/{{$user->signature}}" width="150px">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Aadhaar</th>
                                                <td>{{ $user->application->aadhaar }}</td>
                                            </tr>
                                            <tr>
                                                <th>Date of Birth</th>
                                                <td>{{ $user->application->dob }}</td>
                                            </tr>
                                            <tr>
                                                <th>Category</th>
                                                <td>{{ $user->application->category }}</td>
                                            </tr>
                                            <tr>
                                                <th>Gender</th>
                                                <td>{{ $user->application->gender }}</td>
                                            </tr>
                                            <tr>
                                                <th>Father Name</th>
                                                <td>{{ $user->application->father_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Mother Name</th>
                                                <td>{{ $user->application->mother_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Physical Handicapped</th>
                                                <td>{{ $user->application->pwd }}</td>
                                            </tr>
                                            <tr>
                                                <th>Alternate Contact Number</th>
                                                <td>{{ $user->application->alternate_contact }}</td>
                                            </tr>
                                            <tr>
                                                <th>WhatsApp Number</th>
                                                <td>{{ $user->application->whatsapp }}</td>
                                            </tr>
                                            <tr>
                                                <th>Mobile</th>
                                                <td>{{ $user->mobile }}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>{{ $user->email }}</td>
                                            </tr>

                                            <tr>
                                                <th colspan="4" class="head">Communication Details</th>
                                            </tr>
                                            <tr>
                                                <th>Address 1</th>
                                                <td>{{ $user->application->address_1 }}</td>
                                                <th>Address 2</th>
                                                <td>{{ $user->application->address_2 }}</td>
                                            </tr>
                                            <tr>
                                                <th>State</th>
                                                <td>{{ $user->application->state }}</td>
                                                <th>City/District</th>
                                                <td>{{ $user->application->district }}</td>
                                            </tr>
                                            <tr>
                                                <th>Landmark</th>
                                                <td>{{ $user->application->landmark }}</td>
                                                <th>Pincode</th>
                                                <td colspan="2">{{ $user->application->pincode }}</td>
                                            </tr>

                                            <tr>
                                                <th colspan="4" class="head">Academic Details</th>
                                            </tr>
                                            <tr>
                                                <th class="head inner" colspan="4">12th/Equivalent</th>
                                            </tr>
                                            <tr>
                                                <th>Education Board</th>
                                                <td>{{ $user->application->intermediate_board_name }}</td>
                                                <th>School/Institute</th>
                                                <td>{{ $user->application->intermediate_school_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Status</th>
                                                <td colspan="3">{{ $user->application->intermediate_qualification_status }}</td>
                                            </tr>
                                            @if($user->application->intermediate_qualification_status != 'Appearing')
                                            <tr>
                                                <th>Passing Year</th>
                                                <td>{{ $user->application->intermediate_passing_year }}</td>
                                                <th>Total Marks</th>
                                                <td>{{ $user->application->intermediate_total_marks }}</td>
                                            </tr>
                                            <tr>
                                                <th>Obtained Marks</th>
                                                <td>{{ $user->application->intermediate_obtained_marks }}</td>
                                                <th>School/Institute</th>
                                                <td>{{ $user->application->intermediate_percentage_mark }}</td>
                                            </tr>
                                            @endif

                                            <tr>
                                                <th class="head inner" colspan="4">10th/Equivalent</th>
                                            </tr>
                                            <tr>
                                                <th>Education Board</th>
                                                <td>{{ $user->application->matric_board_name }}</td>
                                                <th>School/Institute</th>
                                                <td>{{ $user->application->matric_school_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Passing Year</th>
                                                <td>{{ $user->application->matric_passing_year }}</td>
                                                <th>Total Marks</th>
                                                <td>{{ $user->application->matric_total_marks }}</td>
                                            </tr>
                                            <tr>
                                                <th>Obtained Marks</th>
                                                <td>{{ $user->application->matric_obtained_marks }}</td>
                                                <th>School/Institute</th>
                                                <td>{{ $user->application->matric_percentage_mark }}</td>
                                            </tr>

                                            <tr>
                                                <th colspan="4" class="head">Family Details</th>
                                            </tr>
                                            <tr>
                                                <th>Father Occupation</th>
                                                <td>{{ $user->application->father_occupation ?? 'N/A' }}</td>
                                                <th>Mother Occupation</th>
                                                <td>{{ $user->application->mother_occupation }}</td>
                                            </tr>
                                            <tr>
                                                <th>No. of Family Members</th>
                                                <td>{{ $user->application->family_members ?? 'N/A' }}</td>
                                                <th>Monthly Income from all Sources</th>
                                                <td>{{ $user->application->monthly_income }}</td>
                                            </tr>
                                            <tr>
                                                <th>Do you have a Govt. employee in your family?</th>
                                                <td colspan="3">{{ $user->application->is_govt_department }}</td>
                                            </tr>

                                        </table>
                                    </div>


                                    <!-- <div class="form-group">
                                        <button type="submit" class="btn btn-success">Continue</button>
                                    </div> -->

                                    <div class="form-group col-md-12">
                                        <p class="text-warning"><b>Note: </b> Wrong information provided by you caused cancellation of application or scholarship.</p>
                                        <input required type="checkbox" id="self_declaration">
                                        <label for="self_declaration">I confirmed all above details are correct in my knowlege.</label>

                                        <br>
                                        <a href="{{ route('application.edit', $user->application->id) }}" type="button" class="btn btn-warning">Edit</a>
                                        <button type="submit" class="btn-primary next-step">Submit & Next</button>

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