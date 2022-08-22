{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
<div class="col-lg-12">
	<div class="card">
		<div class="card-header">
			<h4 class="card-title">Update Role User</h4>
		</div>

		<div class="card-body">
			<div class="table-responsive">
				<div class="col-lg-8">
				<form action="/my-wallets/management-data/{{ $user->id }}" method="POST">
					@method('put')
					@csrf
                    <div class="form-group">
                        <label class="mb-1" for="fname"><strong>First name</strong></label>
                        <input type="text" class="form-control @error('fname') is-invalid @enderror" placeholder="First name" name="fname" id="fname" value="{{ old('fname',  $user->fname) }}">
                        @error('fname')
                        <div class="invalid-feedback">
                        	{{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="role"><strong>Role User</strong></label>
                        <select class="form-select" name="role" id="role">
                        @foreach ($users as $user)
                        @if (old('role', $user->id) == $user->id)
                        <option value="{{ $user->role }}" selected>{{ $user->role }}</option>
                        @else
                        <option value="{{ $user->role }}">{{ $user->role }}</option>
                        @endif
                        @endforeach
                        </select>
                    </div>
					<button type="submit" class="btn btn-primary">Update</button>
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