{{-- Extends layout --}}
@extends('layout.fullwidth')



{{-- Content --}}
@section('content')
    <div class="col-md-6">
        <div class="authincation-content">
            <div class="row no-gutters">
                <div class="col-xl-12">
                    <div class="auth-form">
						<div class="text-center mb-3">
							<img src="images/logo-full-black.png" alt="">
						</div>
                        <h4 class="text-center mb-4">Sign up your account</h4>
                        <form action="{!! url('/page-register'); !!}" method="POST">
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
                                <select class="form-select" name="gender" value="{{ old('gender') }}">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
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
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                            </div>
                        </form>
                        <div class="new-account mt-3">
                            <p>Already have an account? <a class="text-primary" href="{!! url('/page-login'); !!}">Sign in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 