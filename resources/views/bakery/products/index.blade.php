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
				<form action="/products" method="POST">
					@csrf
                    <div class="form-group">
                        <label class="mb-1" for="title"><strong>Title</strong></label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Title" name="title" id="title" value="{{ old('title') }}">
                        @error('title')
                        <div class="invalid-feedback">
                        	{{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="tagline"><strong>Tagline</strong></label>
                        <input type="text" class="form-control @error('tagline') is-invalid @enderror" placeholder="Tagline" name="tagline" id="tagline" value="{{ old('tagline') }}">
                        @error('tagline')
                    	<div class="invalid-feedback">
                            {{ $message }}
                    	</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="price"><strong>Price</strong></label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" placeholder="Rp." value="{{ old('price') }}">
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
                        <input id="content" type="hidden" name="content" value="{{ old('content') }}">
                        <trix-editor input="content"></trix-editor>
                    </div>
					<button type="submit" class="btn btn-primary">Create</button>
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

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
	</script>
@endsection