{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
<div class="container-fluid">
<div class="col-lg-12">
	<div class="card">
		<div class="card-header">
			<h4 class="card-title">{{$title}}</h4>
		</div>

		<div class="card-body">
			<div class="table-responsive">
				<div class="col-lg-12">
				<form action="/products/{{ $product->id }}" method="POST">
				@method('put')
				@csrf
                    <div class="form-group">
                        <label class="mb-1" for="title"><strong>Title</strong></label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Title" name="title" id="title" value="{{ old('title', $product->title) }}">
                        @error('title')
                        <div class="invalid-feedback">
                        	{{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="tagline"><strong>Tagline</strong></label>
                        <input type="text" class="form-control @error('tagline') is-invalid @enderror" placeholder="Tagline" name="tagline" id="tagline" value="{{ old('tagline', $product->tagline) }}">
                        @error('tagline')
                    	<div class="invalid-feedback">
                            {{ $message }}
                    	</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="price"><strong>Price</strong></label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" placeholder="Rp." value="{{ old('price', $product->price) }}">
                        @error('price')
                        	<div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label"><strong>Content</strong></label>
                        @error('content')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="content" type="hidden" name="content" value="{{ old('content', $product->content) }}">
                        <trix-editor input="content"></trix-editor>
                    </div>
                    {{-- <div class="form-group">
                        <label class="mb-1" for="fname"><strong>First name</strong></label>
                        <input type="text" class="form-control @error('fname') is-invalid @enderror" placeholder="First name" name="fname" id="fname" value="{{ old('fname',  $user->fname) }}">
                        @error('fname')
                        <div class="invalid-feedback">
                        	{{ $message }}
                        </div>
                        @enderror
                    </div> --}}
                    {{-- <div class="form-group">
                        <label class="mb-1" for="role_id"><strong>Role User</strong></label>
                        <select class="form-select" name="role_id" id="role_id">
                        @foreach ($roles as $roles)
                        @if (old('role', $user->role_id) == $roles->id)
                        <option value="{{ $roles->id }}" selected>{{ $roles->role }}</option>
                        @else
                        <option value="{{ $roles->id }}">{{ $roles->role }}</option>
                        @endif
                        @endforeach
                        </select>
                    </div> --}}
					<button type="submit" class="btn btn-primary">Update</button>
				  </form>
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