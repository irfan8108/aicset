@extends('layouts.admin')

@section('content')		
	<!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">
			<!--breadcrumb-->
			<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
				<div class="breadcrumb-title pe-3">Admin</div>
				<div class="ps-3">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-0 p-0">
							<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Customers</li>
						</ol>
					</nav>
				</div>
			</div>
			<!--end breadcrumb-->
			<hr/>
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table id="example2" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>Sr.No</th>
									<th>Name</th>
									<th>Role</th>
									<th>Email Id</th>
									<th>Mobile</th>
									<th>Wallet Amount</th>
									<th>Date</th>
									{{-- <th>View Details</th> --}}
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($users as $user)
								<tr>
									<td>{{ $loop->iteration}}</td>
									<td>{{ $user->name}}</td>
									@if($user->role=== 'c')
										<td>Customer</td>
									@else
										<td>Admin</td>	
									@endif
									<td>{{ $user->email}}</td>
									<td>{{ $user->mobile}}</td>
									<td>{{ $user->amount}}</td>
									@php
									$timestamp = strtotime($user->created_at);
									$newDate = date('d-M-Y', $timestamp); 
									@endphp
									<td>@php echo $newDate;@endphp</td>
									{{-- <td><a href="{{ route('admin.user_profile') }}" class="btn btn-primary btn-sm radius-30 px-4">View Details</a></td> --}}
									<td>
										<div class="d-flex order-actions">
											<a href="{{ route('users.edit', $user->id) }}" class=""><i class='bx bxs-edit'></i></a>
										</div>
									</td>
								</tr>
								@endforeach
								
							</tbody>
							<tfoot>
								{{-- <tr>
									<th>Name</th>
									<th>Position</th>
									<th>Office</th>
									<th>Age</th>
									<th>Start date</th>
									<th>Salary</th>
								</tr> --}}
							</tfoot>
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