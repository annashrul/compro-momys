{{-- Extends layout --}}
@extends('layout.default')


{{-- Content --}}
@section('content')
<link href="http://192.168.29.237:8000/vendor/owl-carousel/owl.carousel.js" rel="stylesheet" type="text/css"/>
    <div class="container-fluid">
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active" id="first">
                                        <img class="img-fluid" src="images/product/1.jpg" alt="">
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="second">
                                        <img class="img-fluid" src="images/product/2.jpg" alt="">
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="third">
                                        <img class="img-fluid" src="images/product/3.jpg" alt="">
                                    </div>
									<div role="tabpanel" class="tab-pane fade" id="for">
                                        <img class="img-fluid" src="images/product/4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
                                    <!-- Nav tabs -->
                                    <ul class="nav slide-item-list mt-3" role="tablist">
                                        <li role="presentation" class="show">
                                            <a href="#first" role="tab" data-bs-toggle="tab">
                                                <img class="img-fluid" src="images/tab/1.jpg" alt="" width="50">
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#second" role="tab" data-bs-toggle="tab"><img class="img-fluid" src="images/tab/2.jpg" alt="" width="50"></a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#third" role="tab" data-bs-toggle="tab"><img class="img-fluid" src="images/tab/3.jpg" alt="" width="50"></a>
                                        </li>
										<li role="presentation">
                                            <a href="#for" role="tab" data-bs-toggle="tab"><img class="img-fluid" src="images/tab/4.jpg" alt="" width="50"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Tab slider End-->
                            <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                <div class="product-detail-content">
                                    <!--Product details-->
                                    <div class="new-arrival-content pr">
                                        <h4>Solid Women's V-neck Dark T-Shirt</h4>
                                        <div class="comment-review star-rating">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>

											</ul>
											<span class="review-text">(34 reviews) / </span><a class="product-review" href=""  data-bs-toggle="modal" data-bs-target="#reviewModal">Write a review?</a>
										</div>
										<div class="d-table mb-2">
											<p class="price float-start d-block">$325.00</p>
                                        </div>
                                        <p>Availability: <span class="item"> In stock <i
                                                    class="fa fa-shopping-basket"></i></span>
                                        </p>
                                        <p>Product code: <span class="item">0405689</span> </p>
                                        <p>Brand: <span class="item">Lee</span></p>
                                        <p>Product tags:&nbsp;&nbsp;
                                            <span class="badge badge-success light">bags</span>
                                            <span class="badge badge-success light">clothes</span>
                                            <span class="badge badge-success light">shoes</span>
                                            <span class="badge badge-success light">dresses</span>
                                        </p>
                                        <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                            If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</p>
										<div class="d-flex align-items-end flex-wrap mt-4">
											<div class="filtaring-area mb-2 me-3">
												<div class="size-filter">
													<h4 class="m-b-15">Select size</h4>
													<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
													  <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked>
													  <label class="btn btn-outline-primary" for="btnradio1">XS</label>

													  <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
													  <label class="btn btn-outline-primary" for="btnradio2">SM</label>

													  <input type="radio" class="btn-check" name="btnradio" id="btnradio3">
													  <label class="btn btn-outline-primary" for="btnradio3">MD</label>
													  
													  <input type="radio" class="btn-check" name="btnradio" id="btnradio4">
													  <label class="btn btn-outline-primary" for="btnradio4">LG</label>
													  
													  <input type="radio" class="btn-check" name="btnradio" id="btnradio5">
													  <label class="btn btn-outline-primary" for="btnradio5">XL</label>
													</div>
													
												</div>
											</div>
											<!--Quantity start-->
											<div class="col-2 px-0  mb-2 me-3">
												<input type="number" name="num" class="form-control input-btn input-number" value="1">
											</div>
											<!--Quanatity End-->
											<div class="shopping-cart  mb-2 me-3">
												<a class="btn btn-primary" href="javascript:void();"><i
														class="fa fa-shopping-basket me-2"></i>Add
													to cart</a>
											</div>
										</div>
                                    </div>
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
							<button type="button" class="btn-close" data-bs-dismiss="modal">
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="text-center mb-4">
									<img class="img-fluid rounded" width="78" src="./images/avatar/1.jpg" alt="DexignZone">
								</div>
								<div class="mb-3">
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
								<div class="mb-3">
									<textarea class="form-control" placeholder="Comment" rows="5"></textarea>
								</div>
								<button class="btn btn-success btn-block">RATE</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div>
				<h4 class="fs-20 font-w700 my-4">SIMILAR PRODUCTS</h4>
				<div class="owl-carousel card-slider">
					<div class="items">
						<div class="card">
							<div class="card-body">
								<div class="new-arrival-product">
									<div class="new-arrivals-img-contnent">
										<img class="img-fluid" src="{{ asset('images/product/1.jpg') }}" alt="">
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
										<span class="price">$71.00</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="items">
						<div class="card">
							<div class="card-body">
								<div class="new-arrival-product">
									<div class="new-arrivals-img-contnent">
										<img class="img-fluid" src="images/product/2.jpg" alt="">
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
										<span class="price">$61.00</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="items">
						<div class="card">
							<div class="card-body">
								<div class="new-arrival-product">
									<div class="new-arrivals-img-contnent">
										<img class="img-fluid" src="images/product/3.jpg" alt="">
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
										<span class="price">$50.00</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="items">
						<div class="card">
							<div class="card-body">
								<div class="new-arrival-product">
									<div class="new-arrivals-img-contnent">
										<img class="img-fluid" src="images/product/4.jpg" alt="">
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
										<span class="price">$40.00</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="items">
						<div class="card">
							<div class="card-body">
								<div class="new-arrival-product">
									<div class="new-arrivals-img-contnent">
										<img class="img-fluid" src="images/product/5.jpg" alt="">
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
										<span class="price">$30.00</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="items">
						<div class="card">
							<div class="card-body">
								<div class="new-arrival-product">
									<div class="new-arrivals-img-contnent">
										<img class="img-fluid" src="images/product/6.jpg" alt="">
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
										<span class="price">$20.00</span>
									</div>
								</div>
							</div>
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
		function cardsCenter()
		{
			/*  testimonial one function by = owl.carousel.js */
			jQuery('.card-slider').owlCarousel({
				loop:true,
				margin:20,
				nav:false,
				autoplay:true,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: false,
				navText: ['', ''],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:3
					},	
					800:{
						items:3
					},			
					991:{
						items:4
					},
					1200:{
						items:5
					},
					1600:{
						items:6
					}
				}
			})
		}
		
		jQuery(window).on('load',function(){
			setTimeout(function(){
				cardsCenter();
			}, 1000); 
		});
	</script>
@endsection