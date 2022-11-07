@extends('welcome')

@section('content')	
	<div class="container">
		<div class=" d-flex login_form_bg">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg- row-cols-xl-" >
					<!-- Session Status -->
        			<x-auth-session-status class="mb-4" :status="session('status')" />
					<div class="col-md-7">						
						<div class="card mt-5 mt-lg-0">
							<div class="card-body  card_b col-sm-10">
								<div class="p-4 ">
								<h5 class="">LEARNING REVOLUTIONIZED</h5>
								<div class="copyright side_card">
						          <ul class="footer-privacy-link">
						            <li><a href="#">B.tech</a><span>|</span></li>
						            <li><a href="#">MBA</a><span>|</span></li>
						            <li><a href="#">B.Farma</a><span>|</span></li>
						            <li><a href="#">M.Farma</a><span>|</span></li>
						            <li><a href="#">M.Tech</a><span>|</span></li>
						            <li><a href="#">MA</a><span>|</span></li>
						            <li><a href="#">L.L.B</a><span>|</span></li>
						            <li><a href="#">B A</a><span>|</span></li>
						            <li><a href="#">Libreal Studies</a></li>
						          </ul>
						        </div>
						    	</div>
						    </div>
						    <div class="col-sm-10 card_bootom">
						    	<p>Application Deadline 21 October</p>
						    </div>
						    
						</div>        
					</div>
					<div class="col-md-5 mx-auto">
						<div class="login_card mt-5 mt-lg-0">
							<div class="card-body">
								<div class="p-4 rounded">
									<div class="text-center">
										<h3 class="">Login</h3>
										<p>Don't have an account yet? <a href="{{ route('register') }}">Sign up here</a>
										</p>
									</div>
							
									<div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
										<hr/>
									</div>
									<div class="form-body">
										<form action="{{ route('login') }}" method="post" class="row g-3">
											@csrf
											<div class="col-12 col-lg-12 col-sm-12 div-">
												<label for="inputEmailAddress" class="form-label">Email Address</label>
												<input type="email" name="email" class="form-control" id="inputEmailAddress" placeholder="Email Address">
												<small class="error_c"><x-input-error :messages="$errors->get('email')" class="mt-2" /></small>
											</div>
											<div class="col-12 col-lg-12 col-sm-12 div-">
												<label for="inputChoosePassword" class="form-label">Enter Password</label>
												<div id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="inputChoosePassword" name="password" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                									<small class="error_c"><x-input-error :messages="$errors->get('password')" class="mt-2" /></small>

												</div>
											</div>
											<div class="col-lg-12 text-end div-">
												@if (Route::has('password.request'))	
													<a href="{{ route('password.request') }}">Forgot Password ?</a>
												@endif	
											</div>
											<div class="col-12 col-lg-12 col-sm-12 div-">
												<div class="col-lg-12 col-sm-12 login-btn">
													<button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign in</button>
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
		/*.login_form_bg{
		    position: relative;
		    margin: 50px 0px;
		    background-image: url('uploads/bg-img.jpg');
		    object-fit: cover;
		    background-position: center;
		    background-repeat: no-repeat;
		    background-size: cover;
		}*/
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
	</script>
@endpush	