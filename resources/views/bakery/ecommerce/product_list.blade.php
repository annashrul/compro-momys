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
						<button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span>
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
            <div class="col-lg-12 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row m-b-30">
                            <div class="col-md-5 col-xxl-12">
                                <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                    <div class="new-arrivals-img-contnent">
                                        <img class="img-fluid" src="images/product/2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-xxl-12">
                                <div class="new-arrival-content position-relative">
                                    <h4><a href="{!! url('/ecom-product-detail'); !!}">Solid Women's V-neck Dark T-Shirt</a></h4>
                                    <div class="comment-review star-rating">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-empty"></i></li>
                                            <li><i class="fa fa-star-half-empty"></i></li>
                                        </ul>
                                        <span class="review-text">(34 reviews) / </span><a class="product-review" href=""  data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
										<p class="price">$320.00</p>
                                    </div>
                                    <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
                                    <p>Product code: <span class="item">0405689</span> </p>
                                    <p>Brand: <span class="item">Lee</span></p>
                                    <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			<div class="col-lg-12 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row m-b-30">
                            <div class="col-md-5 col-xxl-12">
                                <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                    <div class="new-arrivals-img-contnent">
                                        <img class="img-fluid" src="images/product/3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-xxl-12">
                                <div class="new-arrival-content position-relative">
                                    <h4><a href="{!! url('/ecom-product-detail'); !!}">Solid Women's V-neck Dark T-Shirt</a></h4>
									<div class="comment-review star-rating">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-half-empty"></i></li>
                                            <li><i class="fa fa-star-half-empty"></i></li>
                                        </ul>
                                        <span class="review-text">(34 reviews) / </span><a class="product-review" href=""  data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
										<p class="price">$325.00</p>
                                    </div>
                                    <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
                                    <p>Product code: <span class="item">0405689</span> </p>
                                    <p>Brand: <span class="item">Lee</span></p>
                                    <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>                                           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			<div class="col-lg-12 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row m-b-30">
                            <div class="col-md-5 col-xxl-12">
                                <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                    <div class="new-arrivals-img-contnent">
                                        <img class="img-fluid" src="images/product/4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-xxl-12">
                                <div class="new-arrival-content position-relative">
                                    <h4><a href="{!! url('/ecom-product-detail'); !!}">Solid Women's V-neck Dark T-Shirt</a></h4>
                                    <div class="comment-review star-rating">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="review-text">(34 reviews) / </span><a class="product-review" href=""  data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
										<p class="price">$480.00</p>
                                    </div>
                                    <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
                                    <p>Product code: <span class="item">0405689</span> </p>
                                    <p>Brand: <span class="item">Lee</span></p>
                                    <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			<div class="col-lg-12 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row m-b-30">
                            <div class="col-md-5 col-xxl-12">
                                <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                    <div class="new-arrivals-img-contnent">
                                        <img class="img-fluid" src="images/product/5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-xxl-12">
                                <div class="new-arrival-content position-relative">
                                    <h4><a href="{!! url('/ecom-product-detail'); !!}">Solid Women's V-neck Dark T-Shirt</a></h4>
                                    <div class="comment-review star-rating">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="review-text">(34 reviews) / </span><a class="product-review" href=""  data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
										<p class="price">$658.00</p>
                                    </div>
                                    <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
                                    <p>Product code: <span class="item">0405689</span> </p>
                                    <p>Brand: <span class="item">Lee</span></p>
									<p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			<div class="col-lg-12 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row m-b-30">
                            <div class="col-md-5 col-xxl-12">
                                <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                    <div class="new-arrivals-img-contnent">
                                        <img class="img-fluid" src="images/product/6.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-xxl-12">
                                <div class="new-arrival-content position-relative">
                                    <h4><a href="{!! url('/ecom-product-detail'); !!}">Solid Women's V-neck Dark T-Shirt</a></h4>
                                    <div class="comment-review star-rating">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="review-text">(34 reviews) / </span><a class="product-review" href=""  data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
										<p class="price">$280.00</p>
                                    </div>
                                    <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
                                    <p>Product code: <span class="item">0405689</span> </p>
                                    <p>Brand: <span class="item">Lee</span></p>
                                    <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>                                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			<div class="col-lg-12 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row m-b-30">
                            <div class="col-md-5 col-xxl-12">
                                <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                    <div class="new-arrivals-img-contnent">
                                        <img class="img-fluid" src="images/product/7.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-xxl-12">
                                <div class="new-arrival-content position-relative">
                                    <h4><a href="{!! url('/ecom-product-detail'); !!}">Solid Women's V-neck Dark T-Shirt</a></h4>
                                    <div class="comment-review star-rating">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="review-text">(34 reviews) / </span><a class="product-review" href=""  data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
										<p class="price">$600.00</p>
                                    </div>
                                    <p>Availability: <span class="item"> In stock <i class="fa fa-check-circle text-success"></i></span></p>
                                    <p>Product code: <span class="item">0405689</span> </p>
                                    <p>Brand: <span class="item">Lee</span></p>
                                    <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<!-- review -->
			<div class="modal fade" id="reviewModal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Review</h5>
							<button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="text-center mb-4">
									<img class="img-fluid rounded" width="78" src="./images/avatar/1.jpg" alt="DexignZone">
								</div>
								<div class="form-group">
									<div class="rating-widget mb-4 text-center">
										<!-- Rating Stars Box -->
										<div class="rating-stars">
											<ul id="stars">
												<li class="star" title="Poor" data-value="1">
													<i class="fa fa-star fa-fw"></i>
												</li>
												<li class="star" title="Fair" data-value="2">
													<i class="fa fa-star fa-fw"></i>
												</li>
												<li class="star" title="Good" data-value="3">
													<i class="fa fa-star fa-fw"></i>
												</li>
												<li class="star" title="Excellent" data-value="4">
													<i class="fa fa-star fa-fw"></i>
												</li>
												<li class="star" title="WOW!!!" data-value="5">
													<i class="fa fa-star fa-fw"></i>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="form-group">
									<textarea class="form-control" placeholder="Comment" rows="5"></textarea>
								</div>
								<button class="btn btn-success btn-block">RATE</button>
							</form>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
@endsection