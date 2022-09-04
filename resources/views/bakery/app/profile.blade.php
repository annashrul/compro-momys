{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
<div class="container-fluid">
	<div class="row page-titles mx-0">
		<div class="col-sm-6 p-md-0">
			<div class="welcome-text">
				<h4>Hi, welcome back {{$users->fname}}</h4>
				<p class="mb-0">Your detail profile</p>
			</div>
		</div>
		
		<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
			</ol>
		</div>
		@if (session()->has('success'))
		<div class="alert alert-success" role="alert">
			{{ session('success') }}
		</div>
		@endif
	</div>
	<!-- row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="profile card card-body px-3 pt-3 pb-0">
				<div class="profile-head">
					<div class="photo-content">
						<div class="cover-photo rounded"></div>
					</div>
					<div class="profile-info">
						<div class="profile-photo">
							@if ($users->image)
							<img src="{{ asset('images/'. $users->image) }}" class="img-fluid rounded-circle" alt="">
							@else
							<img src="{{ asset('/images/profile.png') }}" class="img-fluid rounded-circle" alt="">
							@endif
						</div>
						<div class="profile-details">
							<div class="profile-name px-3 pt-2">
								<h4 class="text-primary mb-0">{{ auth()->user()->fname }} {{ auth()->user()->lname }}</h4>
								<p>{{ auth()->user()->Role->role }}</p>
							</div>
							<div class="profile-email px-2 pt-2">
								<h4 class="text-muted mb-0">{{ auth()->user()->email }}</h4>
								<p>Email</p>
							</div>
							<div class="profile-email px-2 pt-2">
								<h4 class="text-muted mb-0">{{ auth()->user()->phone_number }}</h4>
								<p>Phone Number</p>
							</div>
							<div class="profile-email px-2 pt-2">
								<h4 class="text-muted mb-0">{{ auth()->user()->birth_place }}</h4>
								<p>Birth Place</p>
							</div>

							<div class="dropdown ms-auto">
								<a href="#" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
								<ul class="dropdown-menu dropdown-menu-end">
									<li class="dropdown-item"><a href="/app-profile/edit-profile/{{ auth()->user()->id }}/edit"><i class="fa fa-user-circle text-primary me-2"></i>Edit Profile</a></li>
									<li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to btn-close friends</li>
									<li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
									<li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
@endsection	   