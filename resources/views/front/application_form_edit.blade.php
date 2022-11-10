@extends('welcome')

@section('content') 
    <div class="container">
        <div class="col-xs-12">
        <div class="row text-right dashbord_header">
            <div class="col-md-9 col-xs-12"><p><b>Name:</b> {{ Auth::user()->name }}</p></div>
            <div class="col-md-3 col-xs-12"><p><b>Application No:</b>84846465456</p></div>
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
                                <a href="javascript:void(0)" data-toggle="" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1</span> <i>Edit The Form</i></a>
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

                <div class="col-md-12">
                    <div class="wizard">
                        <form role="form" action="{{ route('application.update',$application->id) }}" class="login-box" enctype="multipart/form-data" method="post">
                            @csrf
                            @method('put')
                            <div class="tab-content" id="main_form">
                                
                                @include('front.inc.application_form_edit')

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