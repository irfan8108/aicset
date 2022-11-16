@extends('layouts.admin')

@section('content')		
	<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">
			<div class="col">
				<div class="card border-top border-0 border-4 border-danger">
					<div class="card-body p-5">
						<div class="card-title d-flex align-items-center">
							<div><i class="bx bxs-user me-1 font-22 text-danger"></i>
							</div>
							<h5 class="mb-0 text-danger">Add New User</h5>
						</div>
						<hr>
						<form class="row g-3">
							<div class="col-12">
								<label for="fullName" class="form-label">Full Name</label>
								<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
									<input type="text" class="form-control border-start-0" id="fullName" placeholder="Full Name" />
								</div>
							</div>
							<div class="col-12">
								<label for="roleType" class="form-label">Select Type</label>
								<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
									<select class="form-select" aria-label="Default select example" id="roleType">
										<option selected=""></option>
										<option value="a">Admin</option>
										<option value="s">Supplier</option>
										<option value="c">Customer</option>
								    </select>
								</div>
							</div>
							<div class="col-12">
								<label for="inputPhoneNo" class="form-label">Phone No</label>
								<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-microphone' ></i></span>
									<input type="text" class="form-control border-start-0" id="inputPhoneNo" placeholder="Phone No" />
								</div>
							</div>
							<div class="col-12">
								<label for="userPhoto" class="form-label">User Image</label>
								<div class="input-group">
									<input type="file" class="form-control border-start-0" id="userPhoto"/>
								</div>
							</div>
							<div class="col-12">
								<label for="inputEmailAddress" class="form-label">Email Address</label>
								<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-message' ></i></span>
									<input type="text" class="form-control border-start-0" id="inputEmailAddress" placeholder="Email Address" />
								</div>
							</div>
							<div class="col-12">
								<label for="inputChoosePassword" class="form-label">Choose Password</label>
								<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-lock-open' ></i></span>
									<input type="text" class="form-control border-start-0" id="inputChoosePassword" placeholder="Choose Password" />
								</div>
							</div>
							<div class="col-12">
								<label for="inputConfirmPassword" class="form-label">Confirm Password</label>
								<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-lock' ></i></span>
									<input type="text" class="form-control border-start-0" id="inputConfirmPassword" placeholder="Confirm Password" />
								</div>
							</div>
							<div class="col-12">
								<label for="inputAddress3" class="form-label">Address</label>
								<textarea class="form-control" id="inputAddress3" placeholder="Enter Address" rows="3"></textarea>
							</div>
							<div class="col-12 text-center">
								<button type="submit" class="btn btn-danger px-5">Register</button>
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!--end page wrapper -->
@endsection

@push('scripts')

@endpush	