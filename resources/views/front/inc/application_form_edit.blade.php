<div class="tab-pane active" role="tabpanel" id="step3">
    <h3 class="text-center title_heading"><b>Step 1:</b> Edit Application Form</h3>
    
    <div class="panel panel-info">
        <div class="panel-heading">
            <h4>Personal Details</h4>
        </div>
        <div class="panel-body">
            <div class="col-md-6">
                <div class="form-group @error('name') has-error @enderror">
                    <label class="control-label">Name of the candidate <span class="mandatory">*</small></label> 
                    <input class="form-control" type="text" name="name" value="{{ Auth::user()->name }}"> 
                    @error('name')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group @error('aadhaar') has-error @enderror">
                    <label class="control-label">Aadhaar No. <span class="mandatory">*</small></label> 
                    <input class="form-control" type="text" name="aadhaar" value="{{ $application->aadhaar }}"> 
                    @error('aadhaar')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group @error('dob') has-error @enderror">
                    <label class="control-label">Date of birth <span class="mandatory">*</small></label> 
                    <input class="form-control" type="date" name="dob" placeholder="" value="{{ $application->dob}}">
                    @error('date')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror 
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group @error('gender') has-error @enderror">
                    <label class="control-label">Gender <span class="mandatory">*</small></label> 
                    <select name="gender" class="form-control" id="category">
                        <option value="" selected>Select Gender</option>
                        <option value="Male" @if($application->gender == 'Male') selected @endif}}>Male</option>
                        <option value="Female" @if($application->gender == 'Female') selected @endif}}>Female</option>
                        <option value="Other" @if($application->gender == 'Other') selected @endif}}>Other</option>
                    </select>
                    @error('gender')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror 
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group @error('category') has-error @enderror">
                    <label class="control-label">Category <span class="mandatory">*</small></label> 
                    <select name="category" class="form-control" id="category">
                        <option value="" selected>Select Category</option>
                        <option value="General" @if(old('category') == 'General') selected @endif}}>GEN</option>
                        <option value="OBC" @if($application->category == 'OBC') selected @endif}}>OBC</option>
                        <option value="SC" @if($application->category == 'SC') selected @endif}}>SC</option>
                        <option value="ST" @if($application->category == 'ST') selected @endif}}>ST</option>
                    </select>
                    @error('category')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror 
                </div>
            </div>                                 
            <div class="col-md-6">
                <div class="form-group @error('father_name') has-error @enderror">
                    <label class="control-label">Father's name <span class="mandatory">*</small></label> 
                    <input class="form-control" type="text" name="father_name" placeholder="Enter Father's name" value="{{ $application->father_name }}"> 
                    @error('father_name')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror 
                </div>
            </div> 
            <div class="col-md-6">
                <div class="form-group @error('mother_name') has-error @enderror">
                    <label class="control-label">Mother's name <span class="mandatory">*</small></label>
                    <input class="form-control" type="text" name="mother_name" placeholder="Enter Mother's name" value="{{ $application->mother_name }}"> 
                    @error('mother_name')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('pwd') has-error @enderror">
                    <label class="control-label">Are you a physically disabled?</label> 
                    <select name="pwd" class="form-control" id="pwd">
                        <option value="No" @if($application->pwd == 'No') selected @endif>No</option>
                        <option value="Yes" @if($application->pwd == 'Yes') selected @endif>Yes</option>
                    </select>
                    @error('pwd')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Email <span class="mandatory">*</small></label> 
                    <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control"/ readonly>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('alternate_contact') has-error @enderror">
                    <label class="control-label">Alternate Contact Number</label> 
                    <input type="text" name="alternate_contact" class="form-control" value="{{ $application->alternate_contact }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('whatsapp') has-error @enderror">
                    <label class="control-label">Whatsapp Number</label> 
                    <input type="text" name="whatsapp" class="form-control" value="{{ $application->whatsapp }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('residence') has-error @enderror">
                    <label class="control-label">Place of Residence</label> 
                    <select name="residence" class="form-control" id="residence">
                        <option value="">Select Your Locality</option>
                        <option value="Urban" @if($application->residence == 'Urban') selected @endif>Urban</option>
                        <option value="Rural" @if($application->residence == 'Rural') selected @endif>Rural</option>
                    </select>
                    @error('residence')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror 
                </div>
            </div>
            <!-- <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">
                        State / UT from where 12th / equivalent passed or appearing 
                        <span class="mandatory">*</small>
                    </label> 
                    <select name="intermediate_state" class="form-control" id="residence">
                        <option value="UP">Utter Pradesh</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div> -->        
        </div>
    </div>

    <div class="panel panel-info">
        <div class="panel-heading">
            <h4>Communication Details</h4>
        </div>
        <div class="panel-body">
            <div class="col-md-12">
                <p><b>Note: </b>Organization may communicate to this address, please enter your correct and complete communication address.</p><br>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('address_1') has-error @enderror">
                    <label class="control-label">Address 1 <span class="mandatory">*</small></label> 
                    <textarea class="form-control" name="address_1">{{ $application->address_1 }}</textarea>
                    @error('address_1')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('address_2') has-error @enderror">
                    <label class="control-label">Address 2</label> 
                    <textarea class="form-control" name="address_2">{{ $application->address_2 }}</textarea>
                    @error('address_2')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('state') has-error @enderror">
                    <label class="control-label">State <span class="mandatory">*</small></label> 
                    <input type="text" name="state" class="form-control" value="{{ $application->state }}">
                    @error('state')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('district') has-error @enderror">
                    <label class="control-label">City / District <span class="mandatory">*</small></label> 
                    <input type="text" name="district" class="form-control" value="{{ $application->district }}">
                    @error('district')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('landmark') has-error @enderror">
                    <label class="control-label">Landmark <span class="mandatory">*</small></label> 
                    <input type="text" name="landmark" class="form-control" value="{{ $application->landmark }}">
                    @error('landmark')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('pincode') has-error @enderror">
                    <label class="control-label">Pincode <span class="mandatory">*</small></label> 
                    <input type="number" name="pincode" class="form-control" value="{{ $application->pincode }}">
                    @error('pincode')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>

        </div>
    </div>

    <div class="panel panel-info">
        <div class="panel-heading">
            <h4>Academic Details</h4>
        </div>
        <div class="panel-body">
            <div class="col-xs-12">
                <h5>12th / Equivalent</h5>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('intermediate_board_name') has-error @enderror">
                    <label class="control-label">Name of Board <span class="mandatory">*</span></label> 
                    <input type="text" name="intermediate_board_name" class="form-control" placeholder="Enter Education Board Name" value="{{ $application->intermediate_board_name }}">
                    @error('intermediate_board_name')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror
                </div>    
            </div> 
            <div class="col-md-6">       
                <div class="form-group @error('intermediate_school_name') has-error @enderror">
                    <label class="control-label">Name of School / Institute <span class="mandatory">*</span></label> 
                    <input type="text" name="intermediate_school_name" class="form-control" placeholder="Enter School or Institute Name" value="{{ $application->intermediate_school_name }}">
                    @error('intermediate_school_name')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('intermediate_qualification_status') has-error @enderror">
                    <label class="control-label">Status</label> 
                    <select name="intermediate_qualification_status" class="form-control"/>
                        <option value="Passed" @if($application->intermediate_qualification_status == 'Passed') selected @endif>Passed</option>
                        <option value="Appearing" @if($application->intermediate_qualification_status == 'Appearing') selected @endif>Appearing</option>
                    </select>
                    @error('intermediate_qualification_status')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('intermediate_passing_year') has-error @enderror">
                    <label class="control-label">Year of Passing <span class="mandatory">*</span></label> 
                    <input type="date" name="intermediate_passing_year" class="form-control" id="datepicker" value="{{ $application->intermediate_passing_year }}">
                    @error('intermediate_passing_year')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('intermediate_total_marks') has-error @enderror">
                    <label class="control-label">Total Marks <span class="mandatory">*</span></label>
                    <input type="number" name="intermediate_total_marks" class="form-control" value="{{ $application->intermediate_total_marks }}">
                    @error('intermediate_total_marks')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('intermediate_obtained_marks') has-error @enderror">
                    <label class="control-label">Obtained Marks <span class="mandatory">*</span></label>
                    <input type="number" name="intermediate_obtained_marks" class="form-control" value="{{ $application->intermediate_obtained_marks }}">
                    @error('intermediate_obtained_marks')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('intermediate_percentage_mark') has-error @enderror">
                    <label class="control-label">Percentage % / Grade <span class="mandatory">*</span></label>
                    <input type="text" name="intermediate_percentage_mark" class="form-control" value="{{ $application->intermediate_percentage_mark }}">
                    @error('intermediate_percentage_mark')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12">
                <h5>10th / Equivalent</h5>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('matric_board_name') has-error @enderror">
                    <label class="control-label">Name of Board <span class="mandatory">*</span></label> 
                    <input type="text" name="matric_board_name" class="form-control" placeholder="Enter Education Board Name" value="{{ $application->matric_board_name }}">
                    @error('matric_board_name')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror
                </div>    
            </div> 
            <div class="col-md-6">       
                <div class="form-group @error('matric_school_name') has-error @enderror">
                    <label class="control-label">Name of School / Institute <span class="mandatory">*</span></label> 
                    <input type="text" name="matric_school_name" class="form-control" placeholder="Enter School or Institute Name" value="{{ $application->matric_school_name }}">
                    @error('matric_school_name')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('matric_passing_year') has-error @enderror">
                    <label class="control-label">Year of Passing <span class="mandatory">*</span></label> 
                    <input type="date" name="matric_passing_year" class="form-control" id="datepicker" value="{{ $application->matric_passing_year }}">
                    @error('matric_passing_year')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group  @error('matric_total_marks') has-error @enderror">
                    <label class="control-label">Total Marks <span class="mandatory">*</span></label>
                    <input type="number" name="matric_total_marks" class="form-control" value="{{ $application->matric_total_marks }}">
                    @error('matric_total_marks')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('matric_obtained_marks') has-error @enderror">
                    <label class="control-label">Obtained Marks <span class="mandatory">*</span></label>
                    <input type="number" name="matric_obtained_marks" class="form-control" value="{{ $application->matric_obtained_marks }}">
                    @error('matric_obtained_marks')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('matric_percentage_mark') has-error @enderror">
                    <label class="control-label">Percentage % / Grade <span class="mandatory">*</span></label>
                    <input type="text" name="matric_percentage_mark" class="form-control" value="{{ $application->matric_percentage_mark }}">
                    @error('matric_percentage_mark')
                        <div class="small text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>

        </div>
    </div>

    <div class="panel panel-info">
        <div class="panel-heading">
            <h4>Family Details</h4>
        </div>
        <div class="panel-body">
            <div class="col-md-6">
                <div class="form-group @error('father_occupation') has-error @enderror">
                    <label class="control-label">Father Occupation</label> 
                    <input type="text" name="father_occupation" class="form-control" value="{{ $application->father_occupation }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('mother_occupation') has-error @enderror">
                    <label class="control-label">Mother Occupation</label> 
                    <input type="text" name="mother_occupation" class="form-control" value="{{ $application->mother_occupation }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('family_members') has-error @enderror">
                    <label class="control-label">No. of Family Members</label> 
                    <input type="text" name="family_members" class="form-control" value="{{ $application->family_members }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('monthly_income') has-error @enderror">
                    <label class="control-label">Monthly Income <small>(Monthly family income from all sources)</small> <span class="mandatory">*</span></label> 
                    <input type="text" name="monthly_income" class="form-control" value="{{ $application->monthly_income }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group @error('is_govt_department') has-error @enderror">
                    <label class="control-label">Is Your Father / Mother Govt. Employee <span class="mandatory">*</span></label> 
                    <input type="radio" name="is_govt_department" value="No" @if($application->is_govt_department == 'No') checked @endif id="is_govt_no"><label for="is_govt_no">No</label>
                    <input type="radio" name="is_govt_department" value="Yes" @if($application->is_govt_department == 'Yes') checked @endif id="is_govt_yes"><label for="is_govt_yes">Yes</label>
                </div>
            </div>

        </div>
    </div>


    <div class="row col-md-12">

        <div class="form-group">
            <label style="font-weight: normal;">How you Hear About <b>AICSET</b></label>
            <select class="" name="how_hear_about">
                <option value="">Select</option>
                <option value="Newspaper" @if($application->how_hear_about == 'Newspaper') selected @endif>Newspaper</option>
                <option value="TV/Radio" @if($application->how_hear_about == 'TV/Radio') selected @endif>TV/Radio</option>
                <option value="Govt. Seminars" @if($application->how_hear_about == 'Govt. Seminars') selected @endif>Govt. Seminars</option>
                <option value="Google" @if($application->how_hear_about == 'Google') selected @endif>Google</option>
                <option value="Facebook" @if($application->how_hear_about == 'Facebook') selected @endif>Facebook</option>
                <option value="Instagram" @if($application->how_hear_about == 'Instagram') selected @endif>Instagram</option>
                <option value="Friend/Relative" @if($application->how_hear_about == 'Friend/Relative') selected @endif>Friend/Relative</option>
                <option value="School/Institute" @if($application->how_hear_about == 'School/Institute') selected @endif>School/Institute</option>
                <option value="Banner/Hoardings" @if($application->how_hear_about == 'Banner/Hoardings') selected @endif>Banner/Hoardings</option>
                <option value="Other" @if($application->how_hear_about == 'Other') selected @endif>Other</option>
            </select>
        </div>
        <hr>

        <div class="form-group">
            <p class="text-warning"><b>Note: </b> Wrong information provided by you caused cancellation of application or scholarship.</p>
            <input required type="checkbox" id="self_declaration" checked>
            <label for="self_declaration">I Agree all above details are correct in my knowlege.</label>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Continue</button>
        </div>

    </div>

    <div class="row-lg">
        <div class="col-xs-12">
            <ul class="list-inline">
                <!-- <li><button type="button" class="default-btn prev-step">Back</button></li> -->
                <!-- <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li> -->
                <!-- <li><button type="button" class="btn btn-primary next-step">Continue</button></li> -->
            </ul>
        </div>
    </div>
</div>