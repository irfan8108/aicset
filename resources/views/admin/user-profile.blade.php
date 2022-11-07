@extends('layouts.admin')

@section('content')
	<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">
			<!--breadcrumb-->
			<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
				<div class="breadcrumb-title pe-3">User Profile</div>
				<div class="ps-3">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-0 p-0">
							<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">User Profile</li>
						</ol>
					</nav>
				</div>
			</div>
			<!--end breadcrumb-->
			<div class="container">
				<div class="main-body">
					@include('admin.inc.message')
					<div class="row">
						<div class="col-lg-4">
							<div class="card">
								<div class="card-body">
									<div class="d-flex flex-column align-items-center text-center">
										@if(!$user->image==null)
										<img src="{{ asset("uploads/user/$user->image") }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
										@else
										<img src="{{ asset('uploads/user/user-logo.png') }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
										@endif
										<div class="mt-3">
											<h4>{{ $user->name }}</h4>
											@if($user->amount > '0')
											<p class="text-secondary mb-1"><i class='bx bxs-wallet' ></i> ₹{{ $user->amount }}</p>
											@else
											<p class="text-secondary mb-1"><i class='bx bxs-wallet' ></i> ₹ 00:00</p>
											@endif
											<p class="text-muted font-size-sm">{{ $user->address }}</p>
										</div>
									</div>
									{{-- <hr class="my-4" /> --}}
									{{-- <ul class="list-group list-group-flush">
										<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
											<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
											<span class="text-secondary">https://codervent.com</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
											<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
											<span class="text-secondary">codervent</span>
										</li>
										<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
											<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
											<span class="text-secondary">codervent</span>
										</li>
									</ul> --}}
								</div>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="card">
								<div class="card-body">
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0">Full Name</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" value="{{ $user->name }}" readonly />
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0">Email</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" value="{{ $user->email }}" readonly />
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0">Mobile</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" value="{{ $user->mobile }}" readonly />
										</div>
									</div>
									{{-- <div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0">Address</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" value="Bay Area, San Francisco, CA" readonly />
										</div>
									</div> --}}
									@if(Auth::check())
									@if(Auth::user()->role==='a')
									<div class="row">
										<div class="col-sm-3"></div>
										<div class="col-sm-9 text-secondary">
											<a href="{{ route('users.edit', Auth::user()->id) }}" type="button" class="btn btn-primary px-4" />Edit Details</a>
										</div>
									</div>
									@endif
									@endif
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end page wrapper -->
@endsection	