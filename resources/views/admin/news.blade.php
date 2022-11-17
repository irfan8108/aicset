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
					  <div class=""><a href="{{ route('news.create') }}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New News</a></div>
					</div>
					<div class="table-">
						<table id="example2" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th width="1%">Sr.N</th>
									<th>Title</th>
									<th>News Description</th>
									<th>IS New [Yes/No]</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>

							  @foreach($news as $new)
								<tr>
									<td class="text-center">{{ $loop->iteration }}</td>
		
									<td><small>{{ ucfirst($new->title) }}</small></td>

									<td><small>{{ $new->description }}</small></td>

									<td>
										@if($new->is_new===1 or $new->is_new==='1')
										<div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i class="bx bxs-circle me-1"></i>Yes</div>
										@else
										<div class="badge rounded-pill text-warning bg-light-warning p-2 text-uppercase px-3"><i class="bx bxs-circle align-middle me-1"></i>No</div>
										@endif
									</td>
									<td>
									  @if($new->status===1 or $new->status==='1')
										<div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3">Active</div>
									  @else
									    <div class="badge rounded-pill text-danger bg-light-danger p-2 text-uppercase px-3">De Active</div>
									  @endif   
									</td> 								 
									<td>
										<div class="d-flex order-actions">
											<a href="{{ route('news.edit', $new->id) }}" class="ms-3"><i class='bx bxs-edit'></i></a>
											<form action="{{ route('news.destroy', $new->id) }}" method="post">
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