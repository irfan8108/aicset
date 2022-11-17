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
					  <div class=""><a href="{{ route('page.create') }}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New Page</a></div>
					</div>
					<div class="table-">
						<table id="example2" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th width="1%">Sr.N</th>
									<th width="10%">Banner</th>
									<th>Title</th>
									<th>Subtitle</th>
									<th>Description</th>
									<th>Long Description</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>

							  @foreach($pages as $page)
								<tr>
									<td>{{ $loop->iteration }}</td>

									<td class="text-center">
										<div class="product-img bg-transparent border">
											<img src="{{ asset("uploads/page/$page->banner") }}" class="p-1 pb-2 pt-2 bimg-responsive" alt="">
										</div>	
									</td>

									<td><small>{{ ucfirst($page->title) }}</small></td>
									<td><small>{{ ucfirst($page->sub_title) }}</small></td>

									<td><small class="desc">{{ ucfirst($page->description) }}</small></td>

									<td><small class="long_desc">{!!htmlspecialchars_decode(ucfirst($page->long_description))  !!}</small></td>	

									<td>
										<div class="d-flex order-actions">
											<a href="{{ route('page.edit', $page->id) }}" class="ms-3"><i class='bx bxs-edit'></i></a>
											<form action="{{ route('page.destroy', $page->id) }}" method="post">
											@csrf
											@method('delete')	
											<button class="ms-2" type="submit" onclick="return confirm(&quot;Are You Sure ?&quot;)"><i class='bx bxs-trash'></i></button>
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
     .desc{
        padding: 0;
        display: -webkit-box;
        -webkit-line-clamp: 8;
        -webkit-box-orient: vertical;  
        overflow: hidden;
      }
      .long_desc{
        padding: 0;
        display: -webkit-box;
        -webkit-line-clamp: 15;
        -webkit-box-orient: vertical;  
        overflow: hidden;
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