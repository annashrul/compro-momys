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
				<form action="/products/{{ $product->id }}/add-image" method="POST" enctype="multipart/form-data">
					@csrf
                    <div class="form-group">
                        <label class="mb-1" for="image"><strong>Image Product</strong></label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" placeholder="image" name="image" id="image" value="{{ old('image') }}">
                        @error('image')
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