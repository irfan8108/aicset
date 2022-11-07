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
					<div class="col-md-4 mx-auto">
						<div class="login_card mt-5 mt-lg-0">
							<div class="card-body">
								<div class="p-4 rounded">
									<div class="text-center">
										<h3 class="">Don't worry</h3>
										<p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
										</p>
										<x-auth-session-status class="mb-4" :status="session('status')" />
									</div>
									<div class="form-body">
										<form action="{{ route('password.email') }}" method="post" class="row g-3">
											@csrf
											<div class="col-12 col-lg-12 col-sm-12 div-">
												<label for="emil" class="form-label">Email Address</label>
												<input type="email" name="email" class="form-control" id="emil" :value="old('email')" required autofocus>
												<small class="error_c"><x-input-error :messages="$errors->get('email')" class="mt-2" /></small>
											</div>
							
											<div class="col-12 col-lg-12 col-sm-12 div-">
												<div class="col-lg-12 col-sm-12 login-btn">
													<button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Email Password Reset Link</button>
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
		    background-image: url('uploads/123.jpg');
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