{{-- Extends layout --}}
@extends('layout.default')


@can('admin')
	

{{-- Content --}}
@section('content')
<div class="container-fluid">
<div class="col-lg-12">
	<div class="card">
		<div class="card-header">
			<h4 class="card-title">{{$title}}</h4>
		</div>
		<div class="col-lg-6">
			<a href="/products/{{ $product->id }}/add-image" class="btn btn-primary m-4">Add Image Product</a>
		</div>
		@if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-responsive-md ck-table">
					<thead>
						<tr>
							<th><strong>Key</strong></th>
							<th><strong>Image</strong></th>
							<th><strong>Name Image</strong></th>
							<th><strong>Product_id</strong></th>
							<th><strong>Action</strong></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($imageproduct as $ip)
						<tr>
							<td><strong>{{ $loop->iteration }}</strong></td>
							<td><img src="/image/{{ $ip->image }}" alt="" style="width: 50px"></td>
							<td><div class="d-flex align-items-center"><span class="w-space-no">{{ $ip->image }}</span></div></td>
							<td>{{ $ip->product_id }}</td>
							<td>
								<div class="d-flex">
									<form action="/products/{{ $product->id }}/add-image/{{ $ip->id }}" method="POST">
										@method('delete')
										@csrf
										<button class="btn btn-danger shadow btn-xs sharp" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
									</form>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<div class="d-flex justify-content-right">
				</div>
			</div>
		</div>
	</div>
</div>
</div>


@endsection	

{{-- Scripts --}}
@section('scripts')
	<script>
		$(document).ready(function(){
			$(".theme-colors .btn").click(function(){
				$('.theme-colors .btn').removeClass("active");
				$(this).addClass("active");
		  	});
		}); 
	</script>
@endsection

@endcan
