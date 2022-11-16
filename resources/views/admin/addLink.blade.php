@extends('layouts.admin')

@section('content')		
	<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">

			<!--breadcrumb-->
			<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
				<div class="breadcrumb-title pe-3">Link</div>
				<div class="ps-3">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-0 p-0">
							<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">@if(@$link) Update Link @else Add New Link @endif</li>
						</ol>
					</nav>
				</div>
			</div>
			<!--end breadcrumb-->

          <div class="card">
          	@include('admin.inc.message')
			  <div class="card-body p-4">
				  <h5 class="card-title">@if(@$link) Update Link @else Add New Link @endif</h5>
				  <hr/>
                   <div class="form-body mt-4">
                   	<form action="@if(@$link){{ route('link.update', $link->id) }}@else{{ route('link.store') }}@endif" method="post" enctype="multipart/form-data">
                   		@csrf
                   		@if(@$link)
                   			@method('put')
                   		@endif
					    <div class="row">
						   <div class="col-lg-12">
	                       <div class="border border-3 p-4 rounded">
							  <div class="mb-3 -none">
								<label for="bstatus" class="form-label">Select Parent Link</label>
								<small class="text-danger">@error('parent_id'){{ $message }}@enderror</small>
								  <select name="parent_id" class="form-select mb-3" aria-label="Default select example" id="bstatus">
								  	<option value="">Select Parent Link</option>
								  	@foreach($links as $li )	
										<option value="{{ $li->id }}" {{ @$link->parent_id==$li->id ? 'selected': '' }}>{{ $li->title }}</option>
									@endforeach
								  </select>
							  </div>
	                       	  <div class="mb-3">
								<label for="bstatus" class="form-label">Select Link Place *</label>
								<small class="text-danger">@error('type'){{ $message }}@enderror</small>
								  <select name="type" class="form-select mb-3" aria-label="Default select example" id="bstatus">
								  	<option value="">Select Link Place</option>	
									<option value="header" {{ @$link->type=='header' ? 'selected': '' }}  >Header</option>
									<option value="footer" {{ @$link->type=='footer' ? 'selected': '' }}>Footer</option>
									<option value="sidebar" {{ @$link->type=='sidebar' ? 'selected': '' }}>Sidebar</option>
								  </select>
							  </div>
							  <div class="mb-3">
								<label for="linktitle" class="form-label">Link Title *</label>
								<small class="text-danger">@error('title'){{ $message }}@enderror</small>
								<input type="text" name="title" @if(@$link)value="{{ $link->title }}"@endif class="form-control" id="linktitle" placeholder="Enter Link title">
							  </div>
							  <div class="mb-3">
								<label for="slug" class="form-label">Link slug *</label>
								<small class="text-danger">@error('slug'){{ $message }}@enderror</small>
								<input type="text" name="slug" @if(@$link)value="{{ $link->slug }}"@endif class="form-control" id="slug" placeholder="Enter Link slug">
							  </div>
							  <div class="mb-3">
								<label for="linkprio" class="form-label">Link Priority </label>
								<small class="text-danger">@error('priority'){{ $message }}@enderror</small>
								<input type="number" name="priority" @if(@$link)value="{{ $link->priority }}"@endif class="form-control" id="linkprio" >
							  </div>	  
							   <div class="d-grid text-center mt-4">
	                              <input type="submit" class="btn btn-primary" value="{{ @$link ? 'Update Link' : 'Save Link' }}"/>
							   </div>
	                        </div>
						   </div>
					   	</div>
					</form>   	
				</div>
			  </div>
		  </div>

		</div>
	</div>
	<!--end page wrapper -->
@endsection
@push('styles')

@endpush

@push('scripts')

@endpush	