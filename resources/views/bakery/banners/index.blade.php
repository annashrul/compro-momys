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
				<form action="/banners" method="POST" enctype="multipart/form-data">
					@csrf
                  
                    <div class="form-group">
                        <label class="mb-1" for="detail"><strong>Detail</strong></label>
                        <input type="text" class="form-control @error('detail') is-invalid @enderror" name="detail" id="detail" placeholder="" value="{{ old('detail') }}">
                        @error('detail')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                         @enderror
                   </div>

                    <div class="form-group">
                        <label class="mb-1" for="image"><strong>Image</strong></label>
                        <input type="file" class="form-file-input  @error('image') is-invalid @enderror" name="image" id="image" placeholder="Image">
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
	</script>
@endsection