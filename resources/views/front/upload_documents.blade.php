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
                            <li role="presentation" class="active">
                                <a href="javascript:void(0)" data-toggle="" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1</span> <i>Fill The Form</i></a>
                            </li>
                            <li role="presentation" class="current">
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
                        <form role="form" action="{{ route('application.upload_docs') }}" class="login-box" enctype="multipart/form-data" method="post">
                            @csrf
                            @if(@$user)
                                <input type="hidden" name="is_edit" value="1">
                            @endif
                            <div class="tab-content" id="main_form">
                                
                                <div class="tab-pane active" role="tabpanel" id="step4">
                                    <h3 class="text-center title_heading"><b>Step 2:</b> Upload Photograph & Signature</h3>

                                    <div class="col-md-6 text-center">
                                        <div class="form-group @error('photo') has-error @enderror" >
                                          <div id="img-preview" class="text-center">
                                            @if(@$user->photo==null)
                                            <i class="far fa-image"></i>
                                            @endif
                                            @if(@$user->photo)
                                                <img src="{{ asset("uploads/documents/$user->photo") }}">
                                            @endif
                                          </div>
                                          <input type="file" name="photo" id="choose-file" />
                                          <label for="choose-file"><i class="far fa-image"></i>Upload Photo</label>
                                          @error('photo')
                                            <div class="small text-danger">{{$message}}</div>
                                          @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <div class="form-group">
                                            <div id="img-preview2" class="text-center">
                                            @if(@$user->signature==null)
                                                <i class="fadeIn animated bx bx-edit-alt"></i>
                                            @endif    
                                            @if(@$user->signature)
                                                <img src="{{ asset("uploads/documents/$user->signature") }}">
                                            @endif
                                        </div>
                                        <input type="file" name="signature" id="choose-file2" accept="image/*" />
                                        <label for="choose-file2">Upload Signature</label>
                                        @error('signature')
                                          <div class="small text-danger">{{$message}}</div>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12">
                                        <ul class="list-inline text-center ">
                                            <!-- <li><button type="button" class="default-btn prev-step">Back</button></li> -->
                                            {{-- <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li> --}}
                                            <li><button type="submit" class="btn-primary next-step">Save & Next Priview </button></li>
                                        </ul>
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
    <style type="text/css">
    #img-preview, #img-preview2 {
      /*display: none;*/
      width: 155px;
      display: flex;
      height: 155px;
      margin: auto;
      border: 2px dashed #333;  
      margin-bottom: 20px;
    }
    #img-preview2 img {
      width: 100%;
      height: auto;
      display: block;
    }
    #img-preview2 i, #img-preview i{
        font-size: 50px;
        margin: auto;
        color: #babcbf;
    }
    #img-preview img {
      width: 100%;
      height: auto;
      display: block;
    }
    [type="file"] {
      height: 0;  
      width: 0;
      overflow: hidden;
    }
    [type="file"] + label {
    font-family: sans-serif;
    background: #e0e0e0;
    padding: 8px 15px;
    border: 2px solid #969090;
    border-radius: 3px;
    cursor: pointer;
    transition: all 0.2s;
    }
    [type="file"] + label:hover {
    background-color: #fff;
    color: #48b12e;
    }

    </style>
@endpush

@push('scripts')
<script>
    const chooseFile = document.getElementById("choose-file");
    const imgPreview = document.getElementById("img-preview");

    chooseFile.addEventListener("change", function () {
      getImgData();
    });
    function getImgData() {
      const files = chooseFile.files[0];
      if (files) {
        const fileReader = new FileReader();
        fileReader.readAsDataURL(files);
        fileReader.addEventListener("load", function () {
          imgPreview.style.display = "block";
          imgPreview.innerHTML = '<img src="' + this.result + '" />';
        });    
      }
    }

    const chooseFile2 = document.getElementById("choose-file2");
    const imgPreview2 = document.getElementById("img-preview2");
    chooseFile2.addEventListener("change", function () {
      getImgData2();
    });
    function getImgData2() {
      const files = chooseFile2.files[0];
      if (files) {
        const fileReader = new FileReader();
        fileReader.readAsDataURL(files);
        fileReader.addEventListener("load", function () {
          imgPreview2.style.display = "block";
          imgPreview2.innerHTML = '<img src="' + this.result + '" />';
        });    
      }
    }
</script>
@endpush    