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
			<a href="/products/create" class="btn btn-primary m-4">Add New User</a>
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
							<th><strong>Title</strong></th>
							<th><strong>Tagline</strong></th>
							<th><strong>Price</strong></th>
							<th><strong>Action</strong></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($product as $prd)
						<tr>
							<td><strong>{{ $loop->iteration }}</strong></td>
							<td><div class="d-flex align-items-center"><span class="w-space-no">{{ $prd->title }}</span></div></td>
							<td>{{ $prd->tagline }}</td>
							<td>{{ $prd->price }}</td>
							<td>
								<div class="d-flex">
									<a href="/products/{{ $prd->id }}/edit" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
									<a href="/products/{{ $prd->id }}" class="btn btn-success shadow btn-xs sharp me-1"><i class="fas fa-eye"></i></a>
									<form action="/products/{{ $prd->id }}" method="POST">
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
					{!! $product->links() !!}
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
