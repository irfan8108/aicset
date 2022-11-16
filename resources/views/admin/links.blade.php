@extends('layouts.admin')	

@section('content')

	<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">

			{{-- <hr/> --}}
			@include('admin.inc.message')
			<div class="card">
				<div class="card-body">
					<div class="d-lg-flex align-items-center mb-4 gap-3">
					  <div class=""><a href="{{ route('link.create') }}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New Link</a></div>
					</div>
					<div class="table-">
						<table id="example2" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th width="3%">Sr.N</th>
									<th>Title</th>
									<th>Slug</th>
									<th>Link Place</th>
									<th>Parent Link</th>
									<th>Priority</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>

							  @foreach($links as $link)
								<tr>
									<td class="text-center">{{ $loop->iteration }}</td>
		
									<td><small>{{ ucfirst($link->title) }}</small></td>

									<td><small>{{ $link->slug }}</small></td>
									<td><small>{{ $link->type }}</small></td>
									<td><small>{{ $link->parent_id }}</small></td>

									<td>{{ $link->priority }}</td>								 
									<td>
										<div class="d-flex order-actions">
											<a href="{{ route('link.edit', $link->id) }}" class="ms-3"><i class='bx bxs-edit'></i></a>
											<form action="{{ route('link.destroy', $link->id) }}" method="post">
											@csrf
											@method('delete')	
											<button class="ms-2" type="submit" onclick="return confirm(&quot;Confirm delete ?&quot;)"><i class='bx bxs-trash'></i></button>
											</form>
										</div>
									</td>
								</tr>
							  @endforeach		
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end page wrapper -->
@endsection	
@push('styles')
	<link href="{{ asset('admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
	<style>
	.product-img {
     width: unset; 
     height: unset; 
     border-radius: unset;
     }
     .product-img img{
     	width: 100%;
     	height: unset;
     }
	</style>
@endpush

@push('scripts')
	<script src="{{ asset('admin/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
@endpush