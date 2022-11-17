@extends('layouts.admin')

@section('content')		
	<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">

			<!--breadcrumb-->
			<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
				<div class="breadcrumb-title pe-3">Pages</div>
				<div class="ps-3">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-0 p-0">
							<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">@if(@$page) Update Page @else Add New Page @endif</li>
						</ol>
					</nav>
				</div>
			</div>
			<!--end breadcrumb-->

          <div class="card">
			  @include('admin.inc.message')
			  <div class="card-body p-4">
				  <h5 class="card-title">@if(@$page) Update Page @else Add New Page @endif</h5>
				  <hr/>
           <div class="form-body mt-4">
           	<form action="@if(@$page){{ route('page.update', $page->id) }}@else{{ route('page.store') }}@endif" method="post" enctype="multipart/form-data">
           		@csrf
           		@if(@$page)
           		  @method('put')
           		@endif  

					    <div class="row">
						   <div class="col-lg-12">
	              <div class="border border-3 p-4 rounded">

			            <div class="mb-3">
										<label for="bstatus" class="form-label">Select Link *</label>
										<small class="text-danger">@error('link_id'){{ $message }}@enderror</small>
										  <select name="link_id" class="form-select mb-3" aria-label="Default select example" id="bstatus">
										  	<option value="">Select Link</option>
											@foreach(@$links as $li)
											<option value="{{ $li->id }}" {{ @$page->link_id==$li->id ? 'selected':'' }}>{{ $li->title }}</option>
											@endforeach
										  </select>
									</div>	
									<div class="mb-3">
										<label for="paget" class="form-label">Page's Title *</label>
										<small class="text-danger">@error('title'){{ $message }}@enderror</small>
										<input type="text" name="title" @if(@$page)value="{{ $page->title }}"@endif class="form-control" id="paget" placeholder="Enter Page's title">
									</div>
								  <div class="mb-3">
										<label for="subt" class="form-label">Page's Subtitle</label>
										<small class="text-danger">@error('sub_title'){{ $message }}@enderror</small>
										<input type="text" name="sub_title" @if(@$page)value="{{ $page->sub_title }}"@endif class="form-control" id="subt" placeholder="Enter Page's Subtitle">
								  </div>
								  <div class="mb-3">
										<label for="formFile" class="form-label">Banner Image <small>(Optional)</small></label>
										@if(@$page)<img src="{{ asset("uploads/page/$page->banner") }}" width="80">@endif
										<small class="text-danger">@error('banner'){{ $message }}@enderror</small>
										<input class="form-control" type="file" name="banner" id="formFile">
									</div>
									<div class="mb-3">
										<label for="desc" class="form-label">Short Description <small>(Optional)</small></label>
										<small class="text-danger">@error('description'){{ $message }}@enderror</small>
										<input type="text" name="description" @if(@$page)value="{{ $page->description }}"@endif class="form-control" id="desc" placeholder="Enter Short Description">
									</div>
								  <div class="col-12">
										<label class="form-label">Page's Long Description</label>
										<textarea class="form-control" name="long_description" id="editor" placeholder="Write Page's Long description..." rows="8">
											{{ @$page->long_description }}
										</textarea>
									</div>
							    <div class="d-grid text-center mt-4">
                    <input type="submit" class="btn btn-primary" value="{{ @$page ? 'Update Page Details': 'Save Page Details' }}">
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
	<style type="text/css">
		.ck-editor__editable[role="textbox"] {
	        /* editing area */
	        min-height: 200px;
	    }
	</style>            
@endpush

@push('scripts')

{{-- Ck Editor scripts  --}}
  <script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>
	<script>
        ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
@endpush	