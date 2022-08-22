{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')
	<div class="container-fluid">
		
		<div class="project-nav">
			<div class="card-action card-tabs  me-auto mb-md-0 mb-3">
				<ul class="nav nav-tabs style-2">
					<li class="nav-item">
						<a href="#navpills-1" class="nav-link active" data-bs-toggle="tab" aria-expanded="false">All Contacs <span class="badge badge-primary shadow-primary">154</span></a>
					</li>
					<li class="nav-item">
						<a href="#navpills-2" class="nav-link" data-bs-toggle="tab" aria-expanded="false">Pending Invitation <span class="badge shadow-warning  badge-warning">6</span></a>
					</li>	
				</ul>
			</div>
			
			
			<div class="d-flex align-items-center">
				<a href="javascript:void(0);" id="btn-add-contact"  class="btn btn-primary text-white">+ New Contacts</a>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title fs-20">Add Contact</h4>
						<button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<i class="flaticon-cancel-12 close" data-bs-dismiss="modal"></i>
						<div class="add-contact-box">
							<div class="add-contact-content">
								<form id="addContactModalTitle">
									<div class="image-placeholder">
										<div class="avatar-edit">
											<input type="file" id="imageUpload" accept=".png, .jpg, .jpeg">
											<label for="imageUpload"></label>
										</div>
										<div class="avatar-preview">
											<div id="imagePreview" style="background-image: url('images/contacts/user.jpg');">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Name</label>
										<div class="contact-name">
											<input type="text" id="c-name" class="form-control" placeholder="Name">
											<span class="validation-text"></span>
										</div>
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Occupation</label>
										<div class="contact-occupation">
											<input type="text" id="c-occupation" class="form-control" placeholder="Occupation">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button id="btn-edit" class="float-left btn btn-primary">Save</button>

						<button class="btn btn-danger" data-bs-dismiss="modal"> <i class="flaticon-delete-1"></i> Discard</button>

						<button id="btn-add" class="btn btn-primary">Add</button>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-content">
			<div class="tab-pane fade show active" id="navpills-1" >
				<div class="row dz-scroll  loadmore-content searchable-items list" id="allContactListContent">
					<div class="items items-header-section">
					</div>
					
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
						<div class="card contact-bx item-content">
							<div class="card-header border-0">
								<div class="action-dropdown">
									<div class="dropdown">
										<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a class="dropdown-item edit" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item delete" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body user-profile">
								<div class="image-bx">
									<img src="images/users/pic1.jpg" data-src="images/users/pic1.jpg" alt="" class="rounded-circle">
									<span class="active"></span>
								</div>
								<div class="media-body user-meta-info">
									<h6 class="fs-20 font-w500 my-1"><a href="{!! url('/app-profile'); !!}" class="text-black user-name" data-name="Alan Green">Alan Green</a></h6>
									<p class="fs-14 mb-3 user-work" data-occupation="UI Designer">UI Designer</p>
									<ul>
										<li><a href="javascript:void(0);"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
										<li><a href="javascript:void(0);"><i class="fas fa-video" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
						
						
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
						<div class="card contact-bx item-content">
							<div class="card-header border-0">
								<div class="action-dropdown">
									<div class="dropdown">
										<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a class="dropdown-item edit" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item delete" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body user-profile">
								<div class="image-bx">
									<span class="icon-placeholder bgl-success rounded-circle text-success">am</span>
									<span class="active"></span>
								</div>
								<div class="media-body user-meta-info">
									<h6 class="fs-20 font-w500 my-1"><a href="{!! url('/app-profile'); !!}" class="text-black user-name" data-name="Angela Moss">Angela Moss</a></h6>
									<p class="fs-14 mb-3 user-work" data-occupation="Redblue Studios">Redblue Studios</p>
									<ul>
										<li><a href="javascript:void(0);"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
										<li><a href="javascript:void(0);"><i class="fas fa-video" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
						<div class="card contact-bx item-content">
							<div class="card-header border-0">
								<div class="action-dropdown">
									<div class="dropdown">
										<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a class="dropdown-item edit" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item delete" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body user-profile">
								<div class="image-bx">
									<img src="images/users/pic2.jpg" data-src="images/users/pic2.jpg" alt="" class="rounded-circle">
									<span class="active"></span>
								</div>
								<div class="media-body user-meta-info">
									<h6 class="fs-20 font-w500 my-1"><a href="{!! url('/app-profile'); !!}" class="text-black user-name" data-name="Brian Samuel">Brian Samuel</a></h6>
									<p class="fs-14 mb-3 user-work" data-occupation="Team Management">Team Management</p>
									<ul>
										<li><a href="javascript:void(0);"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
										<li><a href="javascript:void(0);"><i class="fas fa-video" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
						<div class="card contact-bx item-content">
							<div class="card-header border-0">
								<div class="action-dropdown">
									<div class="dropdown">
										<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a class="dropdown-item edit" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item delete" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body user-profile">
								<div class="image-bx">
									<span class="icon-placeholder bgl-primary rounded-circle text-primary">Bc</span>
									<span class="active"></span>
								</div>
								<div class="media-body user-meta-info">
									<h6 class="fs-20 font-w500 my-1"><a href="{!! url('/app-profile'); !!}" class="text-black user-name" data-name="Benny Chagur">Benny Chagur</a></h6>
									<p class="fs-14 mb-3 user-work" data-occupation="Highspeed Inc.">Highspeed Inc.</p>
									<ul>
										<li><a href="javascript:void(0);"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
										<li><a href="javascript:void(0);"><i class="fas fa-video" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
						<div class="card contact-bx item-content">
							<div class="card-header border-0">
								<div class="action-dropdown">
									<div class="dropdown">
										<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a class="dropdown-item edit" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item delete" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body user-profile">
								<div class="image-bx">
									<img src="images/users/pic3.jpg" data-src="images/users/pic3.jpg" alt="" class="rounded-circle">
									<span class="active"></span>
								</div>
								<div class="media-body user-meta-info">
									<h6 class="fs-20 font-w500 my-1"><a href="{!! url('/app-profile'); !!}" class="text-black user-name" data-name="Chyntia Lawra">Chyntia Lawra</a></h6>
									<p class="fs-14 mb-3 user-work" data-occupation="Zero Two Studios">Zero Two Studios</p>
									<ul>
										<li><a href="javascript:void(0);"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
										<li><a href="javascript:void(0);"><i class="fas fa-video" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
						<div class="card contact-bx item-content">
							<div class="card-header border-0">
								<div class="action-dropdown">
									<div class="dropdown">
										<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a class="dropdown-item edit" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item delete" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body user-profile">
								<div class="image-bx">
									<img src="images/users/pic4.jpg" data-src="images/users/pic4.jpg" alt="" class="rounded-circle">
									<span class="active"></span>
								</div>
								<div class="media-body user-meta-info">
									<h6 class="fs-20 font-w500 my-1"><a href="{!! url('/app-profile'); !!}" class="text-black user-name" data-name="Cloe Simatupang">Cloe Simatupang</a></h6>
									<p class="fs-14 mb-3 user-work" data-occupation="Zero Two Studios">Zero Two Studios</p>
									<ul>
										<li><a href="javascript:void(0);"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
										<li><a href="javascript:void(0);"><i class="fas fa-video" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
						<div class="card contact-bx item-content">
							<div class="card-header border-0">
								<div class="action-dropdown">
									<div class="dropdown">
										<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a class="dropdown-item edit" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item delete" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body user-profile">
								<div class="image-bx">
									<img src="images/users/pic5.jpg" data-src="images/users/pic5.jpg" alt="" class="rounded-circle">
									<span class="active"></span>
								</div>
								<div class="media-body user-meta-info">
									<h6 class="fs-20 font-w500 my-1"><a href="{!! url('/app-profile'); !!}" class="text-black user-name" data-name="Engeline O’conner">Engeline O’conner</a></h6>
									<p class="fs-14 mb-3 user-work" data-occupation="UI Designer">Beep Beep Inc.</p>
									<ul>
										<li><a href="javascript:void(0);"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
										<li><a href="javascript:void(0);"><i class="fas fa-video" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
						<div class="card contact-bx item-content">
							<div class="card-header border-0">
								<div class="action-dropdown">
									<div class="dropdown">
										<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a class="dropdown-item edit" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item delete" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body user-profile">
								<div class="image-bx">
									<span class="icon-placeholder bgl-info rounded-circle text-info">jr</span>
									<span class="active"></span>
								</div>
								<div class="media-body user-meta-info">
									<h6 class="fs-20 font-w500 my-1"><a href="{!! url('/app-profile'); !!}" class="text-black user-name" data-name="Franklin Jr.">Franklin Jr.</a></h6>
									<p class="fs-14 mb-3 user-work" data-occupation="Zero Two Studios">Zero Two Studios</p>
									<ul>
										<li><a href="javascript:void(0);"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
										<li><a href="javascript:void(0);"><i class="fas fa-video" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
						<div class="card contact-bx item-content">
							<div class="card-header border-0">
								<div class="action-dropdown">
									<div class="dropdown">
										<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a class="dropdown-item edit" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item delete" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body user-profile">
								<div class="image-bx">
									<img src="images/users/pic6.jpg" data-src="images/users/pic6.jpg" alt="" class="rounded-circle">
									<span class="active"></span>
								</div>
								<div class="media-body user-meta-info">
									<h6 class="fs-20 font-w500 my-1"><a href="{!! url('/app-profile'); !!}" class="text-black user-name" data-name="Geovanny">Geovanny</a></h6>
									<p class="fs-14 mb-3 user-work" data-occupation="UI Designer">UI Designer</p>
									<ul>
										<li><a href="javascript:void(0);"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
										<li><a href="javascript:void(0);"><i class="fas fa-video" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
						<div class="card contact-bx item-content">
							<div class="card-header border-0">
								<div class="action-dropdown">
									<div class="dropdown">
										<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a class="dropdown-item edit" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item delete" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body user-profile">
								<div class="image-bx">
									<span class="icon-placeholder bgl-info rounded-circle text-info">hc</span>
									<span class="active"></span>
								</div>
								<div class="media-body user-meta-info">
									<h6 class="fs-20 font-w500 my-1"><a href="{!! url('/app-profile'); !!}" class="text-black user-name" data-name="Henry Charlotte">Henry Charlotte</a></h6>
									<p class="fs-14 mb-3 user-work" data-occupation="UI Designer">UI Designer</p>
									<ul>
										<li><a href="javascript:void(0);"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
										<li><a href="javascript:void(0);"><i class="fas fa-video" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
						<div class="card contact-bx item-content">
							<div class="card-header border-0">
								<div class="action-dropdown">
									<div class="dropdown">
										<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a class="dropdown-item edit" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item delete" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body user-profile">
								<div class="image-bx">
									<img src="images/users/pic7.jpg" data-src="images/users/pic7.jpg" alt="" class="rounded-circle">
									<span class="active"></span>
								</div>
								<div class="media-body user-meta-info">
									<h6 class="fs-20 font-w500 my-1"><a href="{!! url('/app-profile'); !!}" class="text-black user-name" data-name="Ivankov Shee">Ivankov Shee</a></h6>
									<p class="fs-14 mb-3 user-work" data-occupation="UI Designer">UI Designer</p>
									<ul>
										<li><a href="javascript:void(0);"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
										<li><a href="javascript:void(0);"><i class="fas fa-video" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
						<div class="card contact-bx item-content">
							<div class="card-header border-0">
								<div class="action-dropdown">
									<div class="dropdown">
										<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a class="dropdown-item edit" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item delete" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body user-profile">
								<div class="image-bx">
									<img src="images/users/pic8.jpg" data-src="images/users/pic8.jpg" alt="" class="rounded-circle">
									<span class="active"></span>
								</div>
								<div class="media-body user-meta-info">
									<h6 class="fs-20 font-w500 my-1"><a href="{!! url('/app-profile'); !!}" class="text-black user-name" data-name="Nindy Leeacovic">Nindy Leeacovic</a></h6>
									<p class="fs-14 mb-3 user-work" data-occupation="UI Designer">UI Designer</p>
									<ul>
										<li><a href="javascript:void(0);"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
										<li><a href="javascript:void(0);"><i class="fas fa-video" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mb-5">
					<div class="col-xl-12 d-flex justify-content-center">
						<a href="javascript:void(0);" class="btn btn-outline-primary dz-load-more" id="allContactList"  rel="ajax/contact-list.html">Load More</a>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="navpills-2">
				<div class="row dz-scroll loadmore-content" id="pendingListContent">
					<div class="items items-header-section">
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
						<div class="card contact-bx item-content">
							<div class="card-header border-0">
								<div class="action-dropdown">
									<div class="dropdown">
										<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a class="dropdown-item edit" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item delete" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body user-profile">
								<div class="image-bx">
									<img src="images/users/pic2.jpg" data-src="images/users/pic2.jpg" alt="" class="rounded-circle">
									<span class="active"></span>
								</div>
								<div class="media-body user-meta-info">
									<h6 class="fs-20 font-w500 my-1"><a href="{!! url('/app-profile'); !!}" class="text-black user-name" data-name="Brian Samuel">Brian Samuel</a></h6>
									<p class="fs-14 mb-3 user-work" data-occupation="Team Management">Team Management</p>
									<ul>
										<li><a href="javascript:void(0);"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
										<li><a href="javascript:void(0);"><i class="fas fa-video" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
						<div class="card contact-bx item-content">
							<div class="card-header border-0">
								<div class="action-dropdown">
									<div class="dropdown">
										<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a class="dropdown-item edit" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item delete" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body user-profile">
								<div class="image-bx">
									<span class="icon-placeholder bgl-primary rounded-circle text-primary">Bc</span>
									<span class="active"></span>
								</div>
								<div class="media-body user-meta-info">
									<h6 class="fs-20 font-w500 my-1"><a href="{!! url('/app-profile'); !!}" class="text-black user-name" data-name="Benny Chagur">Benny Chagur</a></h6>
									<p class="fs-14 mb-3 user-work" data-occupation="Highspeed Inc.">Highspeed Inc.</p>
									<ul>
										<li><a href="javascript:void(0);"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
										<li><a href="javascript:void(0);"><i class="fas fa-video" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
						<div class="card contact-bx item-content">
							<div class="card-header border-0">
								<div class="action-dropdown">
									<div class="dropdown">
										<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a class="dropdown-item edit" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item delete" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body user-profile">
								<div class="image-bx">
									<img src="images/users/pic3.jpg" data-src="images/users/pic3.jpg" alt="" class="rounded-circle">
									<span class="active"></span>
								</div>
								<div class="media-body user-meta-info">
									<h6 class="fs-20 font-w500 my-1"><a href="{!! url('/app-profile'); !!}" class="text-black user-name" data-name="Chyntia Lawra">Chyntia Lawra</a></h6>
									<p class="fs-14 mb-3 user-work" data-occupation="Zero Two Studios">Zero Two Studios</p>
									<ul>
										<li><a href="javascript:void(0);"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
										<li><a href="javascript:void(0);"><i class="fas fa-video" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
						<div class="card contact-bx item-content">
							<div class="card-header border-0">
								<div class="action-dropdown">
									<div class="dropdown">
										<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a class="dropdown-item edit" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item delete" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body user-profile">
								<div class="image-bx">
									<img src="images/users/pic4.jpg" data-src="images/users/pic4.jpg" alt="" class="rounded-circle">
									<span class="active"></span>
								</div>
								<div class="media-body user-meta-info">
									<h6 class="fs-20 font-w500 my-1"><a href="{!! url('/app-profile'); !!}" class="text-black user-name" data-name="Cloe Simatupang">Cloe Simatupang</a></h6>
									<p class="fs-14 mb-3 user-work" data-occupation="Zero Two Studios">Zero Two Studios</p>
									<ul>
										<li><a href="javascript:void(0);"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
										<li><a href="javascript:void(0);"><i class="fas fa-video" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
						<div class="card contact-bx item-content">
							<div class="card-header border-0">
								<div class="action-dropdown">
									<div class="dropdown">
										<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a class="dropdown-item edit" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item delete" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body user-profile">
								<div class="image-bx">
									<img src="images/users/pic5.jpg" data-src="images/users/pic5.jpg" alt="" class="rounded-circle">
									<span class="active"></span>
								</div>
								<div class="media-body user-meta-info">
									<h6 class="fs-20 font-w500 my-1"><a href="{!! url('/app-profile'); !!}" class="text-black user-name" data-name="Engeline O’conner">Engeline O’conner</a></h6>
									<p class="fs-14 mb-3 user-work" data-occupation="UI Designer">Beep Beep Inc.</p>
									<ul>
										<li><a href="javascript:void(0);"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
										<li><a href="javascript:void(0);"><i class="fas fa-video" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
						<div class="card contact-bx item-content">
							<div class="card-header border-0">
								<div class="action-dropdown">
									<div class="dropdown">
										<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a class="dropdown-item edit" href="javascript:void(0);">Edit</a>
											<a class="dropdown-item delete" href="javascript:void(0);">Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body user-profile">
								<div class="image-bx">
									<span class="icon-placeholder bgl-info rounded-circle text-info">jr</span>
									<span class="active"></span>
								</div>
								<div class="media-body user-meta-info">
									<h6 class="fs-20 font-w500 my-1"><a href="{!! url('/app-profile'); !!}" class="text-black user-name" data-name="Franklin Jr.">Franklin Jr.</a></h6>
									<p class="fs-14 mb-3 user-work" data-occupation="Zero Two Studios">Zero Two Studios</p>
									<ul>
										<li><a href="javascript:void(0);"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0);"><i class="las la-sms"></i></a></li>
										<li><a href="javascript:void(0);"><i class="fas fa-video" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mb-5">
					<div class="col-xl-12 d-flex justify-content-center">
						<a href="javascript:void(0);" class="btn btn-outline-primary dz-load-more" id="pendingList"  rel="ajax/contact-list.html">Load More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection	