{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
<div class="col-lg-12">
	<div class="card">
		<div class="card-header">
			<h4 class="card-title">Edit Profile</h4>
		</div>

		<div class="card-body">
			<div class="table-responsive">
				<div class="col-lg-8">
				<form action="/app-profile/edit-profile/{{ $users->id }}" method="POST" enctype="multipart/form-data">
					@method('put')
					@csrf
                    <div class="form-group">
                        <label class="mb-1" for="fname"><strong>First name</strong></label>
                        <input type="text" class="form-control @error('fname') is-invalid @enderror" placeholder="First name" name="fname" id="fname" value="{{ old('fname',  $users->fname) }}">
                        @error('fname')
                        <div class="invalid-feedback">
                        	{{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="lname"><strong>Last name</strong></label>
                        <input type="text" class="form-control @error('lname') is-invalid @enderror" placeholder="Last name" name="lname" id="lname" value="{{ old('lname',  $users->lname) }}">
                        @error('lname')
                        <div class="invalid-feedback">
                        	{{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="email"><strong>Email</strong></label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email@example.com" name="email" id="email" value="{{ old('email',  $users->email) }}">
                        @error('email')
                        <div class="invalid-feedback">
                        	{{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="image"><strong>Photo Profile</strong></label>
                        <input type="hidden" name="oldImage" value="{{ $users->image }}">
                        @if ($users->image)
                        <img src="{{ asset('storage/'. $users->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        @else
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                        @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                    <div class="form-group">
                        <label class="mb-1" for="phone_number"><strong>Phone Number</strong></label>
                        <input type="text" class="form-control @error('phone_number') is-invalid @enderror" placeholder="+62" name="phone_number" id="phone_number" value="{{ old('phone_number',  $users->phone_number) }}">
                        @error('phone_number')
                        <div class="invalid-feedback">
                        	{{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="mb-1" for="birth_place"><strong>Birth Place</strong></label>
                        <input type="text" class="form-control @error('birth_place') is-invalid @enderror" placeholder="birth_place" name="birth_place" id="birth_place" value="{{ old('birth_place',  $users->birth_place) }}">
                        @error('birth_place')
                        <div class="invalid-feedback">
                        	{{ $message }}
                        </div>
                        @enderror
                    </div>
					<button type="submit" class="btn btn-primary">Save</button>
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
        function previewImage()
        {
            const image = document.querySelector('#image');
            const imgPrevie = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
        function previewImage()
        {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
	</script>
@endsection