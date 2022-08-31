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
		<div class="col-lg-12">
			<div class="row">
				<div class="col-md-6">
					<a href="/banners/create" class="btn btn-primary m-4">Add New Banner</a>
				</div>
			</div>
			{{-- <div class="row">
				<div class="col-md-3">
					<input type="text" class="form-control" placeholder="search" name="search" id="search" >       
				</div>
			</div> --}}
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
							<th><strong>Detail</strong></th>
							<th><strong>Image</strong></th>
							
						</tr>
					</thead>
					<tbody>
						@foreach ($data as $d)
						<tr>
							<td><strong>{{ $loop->iteration }}</strong></td>
							<td><div class="d-flex align-items-center"><span class="w-space-no">{{ $d->detail }}</span></div></td>
							<td><img src="{{ asset('banner/'.  $d->image ) }}" style="width:40px" /></td>

							<td>
								<div class="d-flex">
									<a href="/banners/{{ $d->id }}/edit" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
									<form action="/banners/{{ $d->id }}" method="POST">
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
					{!! $data->links() !!}
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
