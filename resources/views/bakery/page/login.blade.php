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
                        <h4 class="text-center mb-4">Sign in your account</h4>
                        @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        @endif
                        @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        @endif
                        <form action="{!! url('/page-login'); !!}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="mb-1"><strong>Email</strong></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email Address" autofocus>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="mb-1"><strong>Password</strong></label>
                                
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                                 
                                @error('epassword')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                <div class="form-group">
                                   <div class="custom-control custom-checkbox ms-1">
    									<input type="checkbox" class="form-check-input" id="basic_checkbox_1">
    									<label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
    								</div>
                                </div>
                                <div class="form-group">
                                    <a href="{!! url('/page-forgot-password'); !!}">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                            </div>
                        </form>
                        <div class="new-account mt-3">
                            <p>Don't have an account? <a class="text-primary" href="{!! url('/page-register'); !!}">Sign up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection  

@section('scripts')

@endsection