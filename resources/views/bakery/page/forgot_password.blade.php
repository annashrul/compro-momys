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
							<img src="images/logo-full.png" alt="">
						</div>
                        <h4 class="text-center mb-4">Forgot Password</h4>
                        <form action="{!! url('/index'); !!}">
                            <div class="form-group">
                                <label><strong>Email</strong></label>
                                <input type="email" class="form-control" value="hello@example.com">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection   