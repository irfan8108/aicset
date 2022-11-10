@extends('welcome')

@section('content')	
	<div class="container">
		<div class=" d-flex login_form_bg">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg- row-cols-xl-" >
					<!-- Session Status -->
        			<x-auth-session-status class="mb-4" :status="session('status')" />
					<div class="col-md-6">						
						<div class="card mt-5 mt-lg-0">
							<div class="card-body  card_b col-sm-10">
								<div class="p-4 ">
								<h5 class="">LEARNING REVOLUTIONIZED</h5>
								<div class="copyright side_card">
						          <ul class="footer-privacy-link">
						            <li><a>B.tech</a><span>|</span></li>
						            <li><a>MBA</a><span>|</span></li>
						            <li><a>B.Farma</a><span>|</span></li>
						            <li><a>M.Farma</a><span>|</span></li>
						            <li><a>M.Tech</a><span>|</span></li>
						            <li><a>MA</a><span>|</span></li>
						            <li><a>L.L.B</a><span>|</span></li>
						            <li><a>B A</a><span>|</span></li>
						            <li><a>Libreal Studies</a></li>
						          </ul>
						        </div>
						    	</div>
						    </div>
						    <div class="col-sm-10 card_bootom">
						    	<p>Application Deadline 21 October</p>
						    </div>
						    
						</div>        
					</div>
					<div class="col-md-6 mx-auto">
						<div class="login_card mt-5 mt-lg-0">
							<div class="card-body">
								<div class="p-4 rounded">
									<div class="text-center">
										<h3 class="">Register</h3>
										<p>If already have an account? <a href="{{ route('login') }}">Login</a>
										</p>
									</div>
							
									{{-- <div class="login-separater text-center mb-4"> <span>OR SIGN UP WITH EMAIL</span>
										<hr/>
									</div> --}}
									<div class="form-body">
										<form action="{{ route('register') }}" method="post" class="g-3">
											@csrf
											<div class="row">
												<div class="col-12 col-xs-6 div-">
													<label for="name" class="form-label">Full Name</label>
													<input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
													<small class="error_c"><x-input-error :messages="$errors->get('name')" class="mt-2" /></small>
												</div>
												<div class="col-lg-6 col-xs-6 div-">
													<label for="inputEmailAddress" class="form-label">Email Address</label>
													<input type="email" name="email" class="form-control" id="inputEmailAddress" placeholder="Email Address">
													<small class="error_c"><x-input-error :messages="$errors->get('email')" class="mt-2" /></small>
												</div>
											</div>
											<div class="row">
												<div class="col-12 col-xs-6 div-">
													<label for="mob" class="form-label">Mobile No</label>
													<input type="tel" maxlength="10" name="mobile" class="form-control" id="mob" placeholder="Mobile Number">
													<small class="error_c"><x-input-error :messages="$errors->get('mobile')" class="mt-2" /></small>
												</div>
												<div class="col-12 col-xs-6 div-">
													<label for="state" class="form-label">Select State</label>
													<select name="state" class="form-control" id="state">
		                                                <option value="">Select State</option>
		                                                @foreach($states as $state)
		                                                	<option value="{{ $state->id }}">{{ $state->name }}</option>
		                                                @endforeach
		                                            </select>
													<small class="error_c"><x-input-error :messages="$errors->get('state')" class="mt-2"/></small>
												</div>
											</div>
											<div class="row">
											  <div class="col-12 col-lg-12 col-sm-12 div-">
												<label for="level" class="form-label">Qualification Level</label>
												<select name="qualification" class="form-control" id="level">
	                                                <option value="" selected>Select Qualification</option>
	                                                <option value="12th Science (PCM)">12th Science (PCM)</option>
	                                                <option value="12th Science (PCB)">12th Science (PCB)</option>
	                                                <option value="12th Science(Commerce)">12th Science (Commerce) </option>
	                                                <option value="12th Science (Arts)">12th Science (Arts)</option>
	                                                <option value="Other(Eqivalent)">Other (Eqivalent)</option>
	                                            </select>	
												<small class="error_c"><x-input-error :messages="$errors->get('qualification')" class="mt-2" /></small>
											  </div>
											</div>
											<div class="row">  
											  <div class="col-12 col-lg-12 col-sm-12 div-">
												<label for="applyfor" class="form-label">Select Course Stream (Scholarship Applying for)</label>
												<select name="apply_for" class="form-control" id="applyfor">
	                                                <option value="" selected>Select Qualification</option>
	                                                <option value="ENG">Engineering</option>
	                                                <option value="MAN">Management</option>
	                                                <option value="MED">Medical</option>
	                                                <option value="OTH">Other</option>
	                                            </select>	
												<small class="error_c"><x-input-error :messages="$errors->get('apply_for')" class="mt-2" /></small>
											  </div>
											</div>
											<div class="row">  
											  <div class="col-12 col-xs-6 div-">
												<label for="inputChoosePassword" class="form-label">Choose Password</label>
												<div id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="inputChoosePassword" name="password" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                									<small class="error_c"><x-input-error :messages="$errors->get('password')" class="mt-2" /></small>
												</div>
											  </div>
											  <div class="col-12 col-xs-6 div-">
												<label for="cpass" class="form-label">Confirm Password</label>
												<div id="show_hide_cpassword">
													<input type="password" class="form-control border-end-0" id="cpass" name="password_confirmation" placeholder="Confirm Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                									<small class="error_c"><x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" /></small>
												</div>
											  </div>
											</div>  
											{{-- <div class="col-12 div-">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="check">
													<label class="form-check-label" for="check"><small>I authorize AICSET to contact me with updates/ notifications via Email/ SMS/ Whatsapp/ Call, which overrides DND/NDNC registration.*</small></label>
												</div>
											</div> --}}
											<div class="row">
											  <div class="col-12 col-lg-12 col-sm-12 div-">
												<div class="col-lg-12 col-sm-12 login-btn">
													<button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Register Now</button>
												</div>
											  </div>
											</div>  
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
@endsection	

@push('styles')
	<style type="text/css">
		.form-check.form-switch{
			margin-left: 12px;
		}
		.form-check.form-switch label{
			display: inline;
		}
	</style>
@endpush

@push('scripts')
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
		$(document).ready(function () {
			$("#show_hide_cpassword a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_cpassword input').attr("type") == "text") {
					$('#show_hide_cpassword input').attr('type', 'password');
					$('#show_hide_cpassword i').addClass("bx-hide");
					$('#show_hide_cpassword i').removeClass("bx-show");
				} else if ($('#show_hide_cpassword input').attr("type") == "password") {
					$('#show_hide_cpassword input').attr('type', 'text');
					$('#show_hide_cpassword i').removeClass("bx-hide");
					$('#show_hide_cpassword i').addClass("bx-show");
				}
			});
		});
	</script>
@endpush	