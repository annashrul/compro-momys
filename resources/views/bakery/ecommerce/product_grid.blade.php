{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
	<div class="container-fluid">
		<!-- Add Project -->
		<div class="modal fade" id="addProjectSidebar">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Create Project</h5>
						<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label class="text-black font-w500">Project Name</label>
								<input type="text" class="form-control">
							</div>
							<div class="form-group">
								<label class="text-black font-w500">Deadline</label>
								<input type="date" class="form-control">
							</div>
							<div class="form-group">
								<label class="text-black font-w500">Client Name</label>
								<input type="text" class="form-control">
							</div>
							<div class="form-group">
								<button type="button" class="btn btn-primary">CREATE</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <p class="mb-0">Your business dashboard template</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Blank</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="new-arrival-product">
                            <div class="new-arrivals-img-contnent">
                                <img class="img-fluid" src="images/product/1.jpg" alt="">
                            </div>
                            <div class="new-arrival-content text-center mt-3">
                                <h4><a href="{!! url('/ecom-product-detail'); !!}">Bonorum et Malorum</a></h4>
                                <ul class="star-rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-half-empty"></i></li>
                                    <li><i class="fa fa-star-half-empty"></i></li>
                                </ul>
                                <span class="price">$761.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="new-arrival-product">
                            <div class="new-arrivals-img-contnent">
                                <img class="img-fluid" src="images/product/2.jpg" alt="">
                            </div>
                            <div class="new-arrival-content text-center mt-3">
                                <h4><a href="{!! url('/ecom-product-detail'); !!}">Striped Dress</a></h4>
                                <ul class="star-rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="price">$159.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="new-arrival-product">
                            <div class="new-arrivals-img-contnent">
                                <img class="img-fluid" src="images/product/3.jpg" alt="">
                            </div>
                            <div class="new-arrival-content text-center mt-3">
                                <h4><a href="{!! url('/ecom-product-detail'); !!}">BBow polka-dot</a></h4>
                                <ul class="star-rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="price">$357.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="new-arrival-product">
                            <div class="new-arrivals-img-contnent">
                                <img class="img-fluid" src="images/product/4.jpg" alt="">
                            </div>
                            <div class="new-arrival-content text-center mt-3">
                                <h4><a href="{!! url('/ecom-product-detail'); !!}">Z Product 360</a></h4>
                                <ul class="star-rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-half-empty"></i></li>
                                    <li><i class="fa fa-star-half-empty"></i></li>
                                </ul>
                                <span class="price">$654.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="new-arrival-product">
                            <div class="new-arrivals-img-contnent">
                                <img class="img-fluid" src="images/product/5.jpg" alt="">
                            </div>
                            <div class="new-arrival-content text-center mt-3">
                                <h4><a href="{!! url('/ecom-product-detail'); !!}">Chair Grey</a></h4>
                                <ul class="star-rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="price">$369.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="new-arrival-product">
                            <div class="new-arrivals-img-contnent">
                                <img class="img-fluid" src="images/product/6.jpg" alt="">
                            </div>
                            <div class="new-arrival-content text-center mt-3">
                                <h4><a href="{!! url('/ecom-product-detail'); !!}">fox sake withe</a></h4>
                                <ul class="star-rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="price">$245.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="new-arrival-product">
                            <div class="new-arrivals-img-contnent">
                                <img class="img-fluid" src="images/product/7.jpg" alt="">
                            </div>
                            <div class="new-arrival-content text-center mt-3">
                                <h4><a href="{!! url('/ecom-product-detail'); !!}">Back Bag</a></h4>
                                <ul class="star-rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="price">$364.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="new-arrival-product">
                            <div class="new-arrivals-img-contnent">
                                <img class="img-fluid" src="images/product/1.jpg" alt="">
                            </div>
                            <div class="new-arrival-content text-center mt-3">
                                <h4><a href="{!! url('/ecom-product-detail'); !!}">FLARE DRESS</a></h4>
                                <ul class="star-rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star-half-empty"></i></li>
                                    <li><i class="fa fa-star-half-empty"></i></li>
                                </ul>
                                <span class="price">$548.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection