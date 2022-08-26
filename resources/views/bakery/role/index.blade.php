{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
<div class="col-lg-12">
	<div class="card">
		<div class="card-header">
			<h4 class="card-title">Role User</h4>
		</div>
		<div class="col-lg-6">
			<a href="/my-wallets/management-data/create" class="btn btn-primary m-4">Add New User</a>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<div class="col-lg-8">
				<form action="/my-wallets/management-data" method="POST">
					@csrf
                    <div class="form-group">
                        <label class="mb-1" for="fname"><strong>First name</strong></label>
                        <input type="text" class="form-control @error('fname') is-invalid @enderror" placeholder="First name" name="fname" id="fname" value="{{ old('fname') }}">
                        @error('fname')
                        <div class="invalid-feedback">
                        	{{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="lname"><strong>Lastname</strong></label>
                        <input type="text" class="form-control @error('lname') is-invalid @enderror" placeholder="Lastname" name="lname" id="lname" value="{{ old('lname') }}">
                        @error('lname')
                    	<div class="invalid-feedback">
                            {{ $message }}
                    	</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="email"><strong>Email Address</strong></label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Example@gmail.com" value="{{ old('email') }}">
                        @error('email')
                        	<div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="phone_number"><strong>Phone Number</strong></label>
                        <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number" placeholder="+62" value="{{ old('phone_number') }}">
                        @error('phone_number')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="dob"><strong>Date Of Birth</strong></label>
                        <input type=datetime-local" class="form-control @error('dob') is-invalid @enderror" name="dob" id="dob" placeholder="00/00/0000" value="{{ old('dob') }}">
                        @error('dob')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="birth_place"><strong>Birth Place</strong></label>
                        <input type="text" class="form-control @error('birth_place') is-invalid @enderror" name="birth_place" id="birth_place" placeholder="City, Country" value="{{ old('birth_place') }}">
                        @error('birth_place')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gender" class="form-label"><strong>Gender</strong></label>
                        <select class="form-select" name="gender_id" value="{{ old('gender') }}">
                        	<option value="male">Male</option>
                        	<option value="female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="role"><strong>Role User</strong></label>
                        <select class="form-select" name="role" id="role">
                        @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->role }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="address"><strong>Address</strong></label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" placeholder="Street,No,village,city" value="{{ old('address') }}">
                        @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                         @enderror
                   </div>
                    <div class="form-group">
                        <label class="mb-1" for="password"><strong>Password</strong></label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
					<button type="submit" class="btn btn-primary">Create</button>
				  </form>
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