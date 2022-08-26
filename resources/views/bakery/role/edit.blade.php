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
				<form action="/my-wallets/management-data/{{ $users->id }}" method="POST">
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
                        <label class="mb-1" for="role_id"><strong>Role User</strong></label>
                        <select class="form-select" name="role_id" id="role_id">
                        @foreach ($roless as $roles)
                        @if (old('role', $user->role_id) == $roles->id)
                        <option value="{{ $roles->id }}" selected>{{ $roles->role }}</option>
                        @else
                        <option value="{{ $roles->id }}">{{ $roles->role }}</option>
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