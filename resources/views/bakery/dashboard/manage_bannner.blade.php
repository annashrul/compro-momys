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
					<a href="/users/create" class="btn btn-primary m-4">Add New User</a>
				</div>
			</div>
			{{-- <div class="row">
				<div class="col-md-3">
					<input type="text" class="form-control" placeholder="search" name="search" id="search" >       
				</div> --}}
			</div>
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
							<th><strong>NAME</strong></th>
							<th><strong>Email</strong></th>
							<th><strong>Phone Number</strong></th>
							<th><strong>Role</strong></th>
							<th><strong>Action</strong></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($user as $usr)
						<tr>
							<td><strong>{{ $loop->iteration }}</strong></td>
							<td><div class="d-flex align-items-center"><span class="w-space-no">{{ $usr->fname }}</span></div></td>
							<td>{{ $usr->email }}	</td>
							<td>{{ $usr->phone_number }}	</td>

							<td>{{ $usr->Role->role }}</td>
							<td>
								<div class="d-flex">
									<a href="/users/{{ $usr->id }}/edit" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
									<form action="/my-wallets/management-data/{{ $usr->id }}" method="POST">
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
					{!! $user->links() !!}
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
