@if(session()->has('success'))
	<div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
		<div class="d-flex align-items-center">
			<div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
			</div>
			<div class="ms-3">
				<h6 class="mb-0 text-white">{{ session()->get('success') }}</h6>
			</div>
		</div>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
@endif
@if(session()->has('error'))
	<div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
		<div class="d-flex align-items-center">
			<div class="font-35 text-white"><i class='bx bxs-message-square-x'></i>
			</div>
			<div class="ms-3">
				<h6 class="mb-0 text-white">{{ session()->get('error') }}</h6>
			</div>
		</div>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>  
@endif


	<div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2 d-none" id="image-delete-success">
		<div class="d-flex align-items-center">
			<div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
			</div>
			<div class="ms-3">
				<h6 class="mb-0 text-white" id="success-message"></h6>
			</div>
		</div>
		<button type="button" class="btn-close" onclick="dissableAlert('image-delete-success')"></button>
	</div> 
	<div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2 d-none" id="image-delete-failed">
		<div class="d-flex align-items-center">
			<div class="font-35 text-white"><i class='bx bxs-message-square-x'></i>
			</div>
			<div class="ms-3">
				<h6 class="mb-0 text-white" id="failed-message"></h6>
			</div>
		</div>
		<button type="button" class="btn-close"onclick="dissableAlert('image-delete-failed')"></button>
	</div>  

@push('scripts')
	<script>
		function dissableAlert(id){
			let div = document.getElementById(id);
			div.classList.add("d-none");
		}
	</script>
@endpush