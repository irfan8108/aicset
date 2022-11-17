@extends('layouts.admin')

@section('content')		
	<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">

			<!--breadcrumb-->
			<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
				<div class="breadcrumb-title pe-3">News</div>
				<div class="ps-3">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-0 p-0">
							<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">@if(@$news) Update News @else Add News @endif</li>
						</ol>
					</nav>
				</div>
			</div>
			<!--end breadcrumb-->

          <div class="card">
          	@include('admin.inc.message')
			  <div class="card-body p-4">
				  <h5 class="card-title">@if(@$new) Update News @else Add New News @endif</h5>
				  <hr/>
                   <div class="form-body mt-4">
                   	<form action="@if(@$news){{ route('news.update',$news->id) }}@else{{ route('news.store') }}@endif" method="post" enctype="multipart/form-data">
                   		@csrf
                   		@if(@$news)
                   			@method('put')
                   		@endif
					    <div class="row">
						   <div class="col-lg-12">
	                       <div class="border border-3 p-4 rounded">
							  
							  <div class="mb-3">
								<label for="linktitle" class="form-label">News Title *</label>
								<small class="text-danger">@error('title'){{ $message }}@enderror</small>
								<input type="text" name="title" @if(@$news)value="{{ $news->title }}"@endif class="form-control" id="linktitle" placeholder="Enter News title">
							  </div>
							  <div class="col-12">
								<label class="form-label">News Description</label>
								<small class="text-danger">@error('description'){{ $message }}@enderror</small>
								<input type="text" name="description" @if(@$news)value="{{ $news->description }}"@endif class="form-control" placeholder="News description">
							  </div>
							  <div class="mb-3 mt-3">
								<label for="is_newid" class="form-label">This is New ? [Yes / No]</label>
								  <select name="is_new" class="form-select mb-3" aria-label="Default select example" id="is_newid">
								  	<option value="">Select</option>
									<option value="1" {{ @$news->is_new===1 ? 'selected': '' }}>Yes</option>
									<option value="0" {{ @$news->is_new===0 ? 'selected': '' }}>No</option>
								  </select>
							  </div>	
							  <div class="mb-3 mt-3">
								<label for="bstatus" class="form-label">Select Status</label>
								  <select name="status" class="form-select mb-3" aria-label="Default select example" id="bstatus">
									<option value="1" {{ @$news->status===1 ? 'selected': '' }}>Active</option>
									<option value="0" {{ @$news->status===0 ? 'selected': '' }}>De-Active</option>
								  </select>
							  </div>	  
							   <div class="d-grid text-center mt-4">
	                              <input type="submit" class="btn btn-primary" value="{{ @$news ? 'Update News' : 'Save News' }}"/>
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
<script>

</script>
@endpush	