{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body chat-wrapper p-0">
						<div class="chat-hamburger">
							<span></span>
							<span></span>
							<span></span>
						</div>
						<div class="chat-left-sidebar">
							<div class="d-flex chat-fix-search align-items-center">
								<img src="images/profile/pic1.jpg" alt="" class="rounded-circle me-3">
								<div class="input-group message-search-area">
									<input type="text" class="form-control" placeholder="Search here..">
									<div class="input-group-append">
										<button class="input-group-text"><i class="flaticon-381-search-2"></i></button>
									</div>
								</div>
							</div>
							<div class="card-action card-tabs">
								<ul class="nav nav-tabs style-3" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" data-bs-toggle="tab" href="#AllMessage" role="tab" aria-selected="false">
											All Message
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#Unread" role="tab" aria-selected="false">
											Unread
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " data-bs-toggle="tab" href="#Archived" role="tab" aria-selected="true">
											Archived
										</a>
									</li>
								</ul>
							</div>
							<div class="card-body message-bx px-0 pt-3" >
								<div class="tab-content dz-scroll" id="message-bx">
									<div class="tab-pane fade show active" id="AllMessage" role="tabpanel">
										<div class="chat-list-area" data-chat="person1">
											<div class="image-bx">
												<img src="images/users/pic1.jpg" alt="" class="rounded-circle img-1">
												<span class="active"></span>
											</div>
											<div class="info-body">
												<div class="d-flex">
													<h6 class="text-black user-name mb-0 font-w600 fs-16" data-name="Harry Marten">Harry Marten</h6>
													<span class="ms-auto fs-14">25m ago</span>
												</div>
												<p class="">Nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
											</div>
										</div>
										<div class="chat-list-area active" data-chat="person2">
											<div class="image-bx">
												<img src="images/users/pic2.jpg" alt="" class="rounded-circle img-1">
												<span class="active"></span>
											</div>
											<div class="info-body">
												<div class="d-flex">
													<h6 class="text-black user-name mb-0 font-w600 fs-16" data-name="Baby Joies">Baby Joies</h6>
													<span class="ms-auto fs-14">25m ago</span>
												</div>
												<p class="">Wasup for the third time like is you bling bitch</p>
											</div>
										</div>
										<div class="chat-list-area" data-chat="person3">
											<div class="image-bx">
												<img src="images/users/pic3.jpg" alt="" class="rounded-circle img-1">
												<span class="active"></span>
											</div>
											<div class="info-body">
												<div class="d-flex">
													<h6 class="text-black user-name mb-0 font-w600 fs-16" data-name="Alexendra jr.">Alexendra jr.</h6>
													<span class="ms-auto fs-14">25m ago</span>
												</div>
												<p class="">It is a long established fact that a reader will be distracted by the readable</p>
											</div>
										</div>
										<div class="chat-list-area" data-chat="person4">
											<div class="image-bx">
												<img src="images/users/pic4.jpg" alt="" class="rounded-circle img-1">
											</div>
											<div class="info-body">
												<div class="d-flex">
													<h6 class="text-black user-name mb-0 font-w600 fs-16" data-name="Alexa Hanery">Alexa Hanery</h6>
													<span class="ms-auto fs-14">25m ago</span>
												</div>
												<p class="">There are many variations of passages of Lorem Ipsum available, but the </p>
											</div>
										</div>
										<div class="chat-list-area" data-chat="person5">
											<div class="image-bx">
												<img src="images/users/pic5.jpg" alt="" class="rounded-circle img-1">
											</div>
											<div class="info-body">
												<div class="d-flex">
													<h6 class="text-black user-name mb-0 font-w600 fs-16" data-name="Roberto Charloz">Roberto Charloz</h6>
													<span class="ms-auto fs-14">25m ago</span>
												</div>
												<p class="">"But I must explain to you how all this mistaken idea of denouncing pleasure</p>
											</div>
										</div>
										<div class="chat-list-area" data-chat="person6">
											<div class="image-bx">
												<img src="images/users/pic6.jpg" alt="" class="rounded-circle img-1">
											</div>
											<div class="info-body">
												<div class="d-flex">
													<h6 class="text-black user-name mb-0 font-w600 fs-16" data-name="Verla Morgano">Verla Morgano</h6>
													<span class="ms-auto fs-14">25m ago</span>
												</div>
												<p class="">Nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
											</div>
										</div>
										<div class="chat-list-area" data-chat="person7">
											<div class="image-bx">
												<img src="images/users/pic7.jpg" alt="" class="rounded-circle img-1">
											</div>
											<div class="info-body">
												<div class="d-flex">
													<h6 class="text-black user-name mb-0 font-w600 fs-16" data-name="Tinks Sr.">Tinks Sr.</h6>
													<span class="ms-auto fs-14">25m ago</span>
												</div>
												<p class="">Nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
											</div>
										</div>
										<div class="chat-list-area" data-chat="person8">
											<div class="image-bx">
												<img src="images/users/pic8.jpg" alt="" class="rounded-circle img-1">
											</div>
											<div class="info-body">
												<div class="d-flex">
													<h6 class="text-black user-name mb-0 font-w600 fs-16" data-name="Hans man">Hans man</h6>
													<span class="ms-auto fs-14">25m ago</span>
												</div>
												<p class="">Nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
											</div>
										</div>
										<div class="chat-list-area" data-chat="person9">
											<div class="image-bx">
												<img src="images/profile/Untitled-2.jpg" alt="" class="rounded-circle img-1">
											</div>
											<div class="info-body">
												<div class="d-flex">
													<h6 class="text-black user-name mb-0 font-w600 fs-16" data-name="Deeps Gr.">Deeps Gr.</h6>
													<span class="ms-auto fs-14">25m ago</span>
												</div>
												<p class="">Nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
											</div>
										</div>
										<div class="chat-list-area" data-chat="person10">
											<div class="image-bx">
												<img src="images/profile/Untitled-2.jpg" alt="" class="rounded-circle img-1">
											</div>
											<div class="info-body">
												<div class="d-flex">
													<h6 class="text-black user-name mb-0 font-w600 fs-16" data-name="Sal Piggee">Sal Piggee</h6>
													<span class="ms-auto fs-14">25m ago</span>
												</div>
												<p class="">Nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="Unread" role="tabpanel">
										<div class="chat-list-area" data-chat="person11">
											<div class="image-bx">
												<img src="images/users/pic1.jpg" alt="" class="rounded-circle img-1">
												<span class="active"></span>
											</div>
											<div class="info-body">
												<div class="d-flex">
													<h6 class="text-black user-name mb-0 font-w600 fs-16" data-name="Harry Marten">Harry Marten</h6>
													<span class="ms-auto fs-14">25m ago</span>
												</div>
												<p class="">Nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
											</div>
										</div>
										<div class="chat-list-area" data-chat="person12">
											<div class="image-bx">
												<img src="images/users/pic2.jpg" alt="" class="rounded-circle img-1">
												<span class="active"></span>
											</div>
											<div class="info-body">
												<div class="d-flex">
													<h6 class="text-black user-name mb-0 font-w600 fs-16" data-name="Baby Joies">Baby Joies</h6>
													<span class="ms-auto fs-14">25m ago</span>
												</div>
												<p class="">Wasup for the third time like is you bling bitch</p>
											</div>
										</div>
										
									</div>
									<div class="tab-pane fade" id="Archived" role="tabpanel">
										<div class="chat-list-area active" data-chat="person13">
											<div class="image-bx">
												<img src="images/users/pic5.jpg" alt="" class="rounded-circle img-1">
											</div>
											<div class="info-body">
												<div class="d-flex">
													<h6 class="text-black user-name mb-0 font-w600 fs-16" data-name="Roberto Charloz">Roberto Charloz</h6>
													<span class="ms-auto fs-14">25m ago</span>
												</div>
												<p class="">"But I must explain to you how all this mistaken idea of denouncing pleasure</p>
											</div>
										</div>
										<div class="chat-list-area" data-chat="person14">
											<div class="image-bx">
												<img src="images/users/pic6.jpg" alt="" class="rounded-circle img-1">
											</div>
											<div class="info-body">
												<div class="d-flex">
													<h6 class="text-black user-name mb-0 font-w600 fs-16" data-name="Verla Morgano">Verla Morgano</h6>
													<span class="ms-auto fs-14">25m ago</span>
												</div>
												<p class="">Nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="chart-right-sidebar">
							<div class="message-bx chat-box">
								<div class="d-flex justify-content-between chat-box-header">
									<div class="d-flex align-items-center">
										<img src="images/users/pic2.jpg" alt="" class="rounded-circle main-img me-3">
										<h5 class="text-black font-w500 mb-sm-1 mb-0 title-nm">Baby Joies</h5>
									</div>
									<div class="d-flex align-items-center">	
										<span class="d-sm-inline-block d-none">Last seen 4:23 AM</span>
										<div class="dropdown ms-2">
											<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="javascript:void(0);">Edit</a>
												<a class="dropdown-item" href="javascript:void(0);">Delete</a>
											</div>
										</div>
									</div>	
								</div>
								<div class="chat-box-area dz-scroll" id="chartBox" style="background-image:url('images/chat-bg.png');">
									<div data-chat="person1" class="chat">
										<div class="media mb-4 received-msg  justify-content-start align-items-start">
											<div class="image-bx me-sm-3 me-2">
												<img src="images/users/pic5.jpg" alt="" class="rounded-circle img-1">
											</div>
											<div class="message-received">
												<p class="mb-1">
													Sed ut perspiciatis unde omnis iste natus error
												</p>
												<span class="fs-12 text-black">4.30 AM</span>
											</div>
										</div>
										<div class="media mb-4 justify-content-end align-items-end">
											<div class="message-sent">
												<p class="mb-1">
													Neque porro quisquam est, qui dolorem ipsum quia
												</p>
												<span class="fs-12 text-black">9.30 AM</span>
											</div>
											<div class="image-bx ms-sm-3 ms-2 mb-4">
												<img src="images/profile/pic1.jpg" alt="" class="rounded-circle img-1">
											</div>
										</div>
										<div class="media mb-4  justify-content-end align-items-end">
											<div class="message-sent">
												<p class="mb-1">
													eum iure reprehenderit qui in ea
												</p>
												<span class="fs-12 text-black">9.30 AM</span>
											</div>
											<div class="image-bx ms-sm-3 ms-2 mb-4">
												<img src="images/profile/pic1.jpg" alt="" class="rounded-circle img-1">
											</div>
										</div>
										<div class="media received-msg justify-content-start align-items-start">
											<div class="image-bx me-sm-3 me-2">
												<img src="images/users/pic5.jpg" alt="" class="rounded-circle img-1">
											</div>
											<div class="message-received">
												<p class="mb-1">
													Hey, check my design update last night.
												</p>
												<span class="fs-12 text-black">4.30 AM</span>
											</div>
										</div>
									</div>
									<div data-chat="person2" class="chat active-chat">
										<div class="media mb-4 received-msg  justify-content-start align-items-start">
											<div class="image-bx me-sm-3 me-2">
												<img src="images/users/pic2.jpg" alt="" class="rounded-circle img-1">
											</div>
											<div class="message-received">
												<p class="mb-1">
													"But I must explain to you
												</p>
												<span class="fs-12 text-black">4.30 AM</span>
											</div>
										</div>
										<div class="media mb-4 justify-content-end align-items-end">
											<div class="message-sent">
												<p class="mb-1">
													"Sed ut perspiciatis unde omnis
												</p>
												<span class="fs-12 text-black">9.30 AM</span>
											</div>
											<div class="image-bx ms-sm-3 ms-2 mb-4">
												<img src="images/profile/pic1.jpg" alt="" class="rounded-circle img-1">
											</div>
										</div>
										<div class="media received-msg justify-content-start align-items-start">
											<div class="image-bx me-sm-3 me-2">
												<img src="images/users/pic2.jpg" alt="" class="rounded-circle img-1">
											</div>
											<div class="message-received">
												<p class="mb-1">Tell me what you think and if that is OK.
												</p>
												<span class="fs-12 text-black">4.30 AM</span>
											</div>
										</div>
									</div>
									<div data-chat="person3" class="chat">
										<div class="media mb-4 received-msg  justify-content-start align-items-start">
											<div class="image-bx me-sm-3 me-2">
												<img src="images/users/pic5.jpg" alt="" class="rounded-circle img-1">
											</div>
											<div class="message-received">
												<p class="mb-1">
													On the other hand, we denounce with righteous
												</p>
												<span class="fs-12 text-black">4.30 AM</span>
											</div>
										</div>
										<div class="media mb-4 justify-content-end align-items-end">
											<div class="message-sent">
												<p class="mb-1">
													These cases are perfectly simple and easy to distinguish.
												</p>
												<span class="fs-12 text-black">9.30 AM</span>
											</div>
											<div class="image-bx ms-sm-3 ms-2 mb-4">
												<img src="images/profile/pic1.jpg" alt="" class="rounded-circle img-1">
											</div>
										</div>
										<div class="media mb-4 justify-content-end align-items-end">
											<div class="message-sent">
												<p class="mb-1">
													 In a free hour, when our power of choice 
												</p>
												<span class="fs-12 text-black">9.30 AM</span>
											</div>
											<div class="image-bx ms-sm-3 ms-2 mb-4">
												<img src="images/profile/pic1.jpg" alt="" class="rounded-circle img-1">
											</div>
										</div>
										<div class="media received-msg justify-content-start align-items-start">
											<div class="image-bx me-sm-3 me-2">
												<img src="images/users/pic5.jpg" alt="" class="rounded-circle img-1">
											</div>
											<div class="message-received">
												<p class="mb-1">he rejects pleasures to secure other greater pleasures</p>
												<span class="fs-12 text-black">4.30 AM</span>
											</div>
										</div>
									</div>
									<div data-chat="person4" class="chat">
									</div>
									<div data-chat="person5" class="chat">
									</div>
									<div data-chat="person6" class="chat">
									</div>
									<div data-chat="person7" class="chat">
									</div>
									<div data-chat="person8" class="chat">
									</div>
									<div data-chat="person9" class="chat">
									</div>
									<div data-chat="person10" class="chat">
									</div>
									<div data-chat="person11" class="chat">
									</div>
									<div data-chat="person12" class="chat">
									</div>
									<div data-chat="person13" class="chat">
									</div>
									<div data-chat="person14" class="chat">
									</div>
								</div>
								<div class="card-footer border-0 type-massage">
									<div class="input-group">
										<input class="form-control" placeholder="Type message..." />
										<div class="input-group-append"> 
											<button type="button" class="btn p-0 me-3"><i class="las la-paperclip scale5 text-secondary"></i></button>
											<button type="button" class="btn p-0 me-3"><i class="las la-image scale5 text-secondary"></i></button>
											<button type="button" class="send-btn btn-primary btn">SEND</button>
										</div>
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