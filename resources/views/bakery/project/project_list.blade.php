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
		<div class="project-nav">
			<div class="card-action card-tabs  me-auto">
				<ul class="nav nav-tabs style-2">
					<li class="nav-item">
						<a href="#navpills-1" class="nav-link active" data-bs-toggle="tab" aria-expanded="false">All Projects <span class="badge badge-pill shadow-primary badge-primary">154</span></a>
					</li>
					<li class="nav-item">
						<a href="#navpills-2" class="nav-link" data-bs-toggle="tab" aria-expanded="false">On Progress <span class="badge badge-pill badge-info shadow-info">2</span></a>
					</li>
					<li class="nav-item">
						<a href="#navpills-3" class="nav-link" data-bs-toggle="tab" aria-expanded="true">Pending <span class="badge badge-pill badge-warning shadow-warning">4</span></a>
					</li>
					<li class="nav-item">
						<a href="#navpills-4" class="nav-link" data-bs-toggle="tab" aria-expanded="true">Closed <span class="badge badge-pill badge-danger shadow-danger">1</span></a>
					</li>
				</ul>
			</div>
			<a href="javascript:void(0);" class="btn btn-primary">+New Project</a>
		</div>
		<div class="tab-content project-list-group" id="myTabContent">	
			<div class="tab-pane fade active show" id="navpills-1">
				<div class="card">
					<div class="project-info">
						<div class="col-xl-3 my-2 col-lg-4 col-sm-6">
							<p class="text-primary mb-1">#P-000441425</p>
							<h5 class="title font-w600 mb-2"><a href="{!! url('/post-details'); !!}" class="text-black">Redesign Kripton Mobile App</a></h5>
							<div class="text-dark"><i class="far fa-calendar me-3" aria-hidden="true"></i>Created on Sep 8th, 2020</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<img src="images/users/pic1.jpg" alt="">
								</div>
								<div class="ms-2">
									<span>Client</span>
									<h5 class="mb-0 pt-1 font-w50 text-black">Alex Noer</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<img src="images/users/pic2.jpg" alt="">
								</div>
								<div class="ms-2">
									<span>Person in charge</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Yoast Esec</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-3 my-2 col-lg-6 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="power-ic">
									<i class="fa fa-bolt" aria-hidden="true"></i>
								</div>
								<div class="ms-2">
									<span>Deadline</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Tuesday,Sep 29th 2020</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-6 col-sm-6">
							<div class="d-flex project-status align-items-center">
								<span class="btn bgl-warning text-warning status-btn me-3">Pending</span>
								<div class="dropdown">
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
					</div>
				</div>
				<div class="card">
					<div class="project-info">
						<div class="col-xl-3 my-2 col-lg-4 col-sm-6">
							<p class="text-primary mb-1">#P-000441425</p>
							<h5 class="title font-w600 mb-2"><a href="{!! url('/post-details'); !!}" class="text-black">Build Branding Persona for Etza.id</a></h5>
							<div class="text-dark"><i class="far fa-calendar me-3" aria-hidden="true"></i>Created on Sep 8th, 2020</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<img src="images/users/pic4.jpg" alt="">
								</div>
								<div class="ms-2">
									<span>Client</span>
									<h5 class="mb-0 pt-1 font-w50 text-black">Kevin Sigh</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<img src="images/users/pic3.jpg" alt="">
								</div>
								<div class="ms-2">
									<span>Person in charge</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Kevin Sigh</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-3 my-2 col-lg-6 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="power-ic">
									<i class="fa fa-bolt" aria-hidden="true"></i>
								</div>
								<div class="ms-2">
									<span>Deadline</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Tuesday,Sep 29th 2020</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-6 col-sm-6">
							<div class="d-flex project-status align-items-center">
								<span class="btn bgl-info text-info status-btn me-3">Progress</span>
								<div class="dropdown">
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
					</div>
				</div>
				<div class="card">
					<div class="project-info">
						<div class="col-xl-3 my-2 col-lg-4 col-sm-6">
							<p class="text-primary mb-1">#P-000441425</p>
							<h5 class="title font-w600 mb-2"><a href="{!! url('/post-details'); !!}" class="text-black">Manage SEO for Eclan Company P..</a></h5>
							<div class="text-dark"><i class="far fa-calendar me-3" aria-hidden="true"></i>Created on Sep 8th, 2020</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<img src="images/users/pic8.jpg" alt="">
								</div>
								<div class="ms-2">
									<span>Client</span>
									<h5 class="mb-0 pt-1 font-w50 text-black">Angela Moss</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<span class="img-placeholder bgl-danger text-danger">OJ</span>
								</div>
								<div class="ms-2">
									<span>Person in charge</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Olivia Jonson</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-3 my-2 col-lg-6 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="power-ic">
									<i class="fa fa-bolt" aria-hidden="true"></i>
								</div>
								<div class="ms-2">
									<span>Deadline</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Tuesday,Sep 29th 2020</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-6 col-sm-6">
							<div class="d-flex project-status align-items-center">
								<span class="btn bgl-warning text-warning status-btn me-3">Pending</span>
								<div class="dropdown">
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
					</div>
				</div>
				<div class="card">
					<div class="project-info">
						<div class="col-xl-3 my-2 col-lg-4 col-sm-6">
							<p class="text-primary mb-1">#P-000441425</p>
							<h5 class="title font-w600 mb-2"><a href="{!! url('/post-details'); !!}" class="text-black">Reduce Website Page Size Omah</a></h5>
							<div class="text-dark"><i class="far fa-calendar me-3" aria-hidden="true"></i>Created on Sep 8th, 2020</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<span class="img-placeholder bgl-info text-info">EA</span>
								</div>
								<div class="ms-2">
									<span>Client</span>
									<h5 class="mb-0 pt-1 font-w50 text-black">Endge Aes</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<span class="img-placeholder bgl-success text-success">BS</span>
								</div>
								<div class="ms-2">
									<span>Person in charge</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Bella Sirait</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-3 my-2 col-lg-6 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="power-ic">
									<i class="fa fa-bolt" aria-hidden="true"></i>
								</div>
								<div class="ms-2">
									<span>Deadline</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Tuesday,Sep 29th 2020</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-6 col-sm-6">
							<div class="d-flex project-status align-items-center">
								<span class="btn bgl-warning text-warning status-btn me-3">Pending</span>
								<div class="dropdown">
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
					</div>
				</div>
				<div class="card">
					<div class="project-info">
						<div class="col-xl-3 my-2 col-lg-4 col-sm-6">
							<p class="text-primary mb-1">#P-000441425</p>
							<h5 class="title font-w600 mb-2"><a href="{!! url('/post-details'); !!}" class="text-black">Build Branding Persona for Etza.id</a></h5>
							<div class="text-dark"><i class="far fa-calendar me-3" aria-hidden="true"></i>Created on Sep 8th, 2020</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<img src="images/users/pic4.jpg" alt="">
								</div>
								<div class="ms-2">
									<span>Client</span>
									<h5 class="mb-0 pt-1 font-w50 text-black">Kevin Sigh</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<img src="images/users/pic3.jpg" alt="">
								</div>
								<div class="ms-2">
									<span>Person in charge</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Kevin Sigh</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-3 my-2 col-lg-6 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="power-ic">
									<i class="fa fa-bolt" aria-hidden="true"></i>
								</div>
								<div class="ms-2">
									<span>Deadline</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Tuesday,Sep 29th 2020</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-6 col-sm-6">
							<div class="d-flex project-status align-items-center">
								<span class="btn bgl-danger text-danger status-btn me-3">Closed</span>
								<div class="dropdown">
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
					</div>
				</div>
				<div class="card">
					<div class="project-info">
						<div class="col-xl-3 my-2 col-lg-4 col-sm-6">
							<p class="text-primary mb-1">#P-000441425</p>
							<h5 class="title font-w600 mb-2"><a href="{!! url('/post-details'); !!}" class="text-black">Manage SEO for Eclan Company P..</a></h5>
							<div class="text-dark"><i class="far fa-calendar me-3" aria-hidden="true"></i>Created on Sep 8th, 2020</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<img src="images/users/pic8.jpg" alt="">
								</div>
								<div class="ms-2">
									<span>Client</span>
									<h5 class="mb-0 pt-1 font-w50 text-black">Angela Moss</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<span class="img-placeholder bgl-danger text-danger">OJ</span>
								</div>
								<div class="ms-2">
									<span>Person in charge</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Olivia Jonson</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-3 my-2 col-lg-6 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="power-ic">
									<i class="fa fa-bolt" aria-hidden="true"></i>
								</div>
								<div class="ms-2">
									<span>Deadline</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Tuesday,Sep 29th 2020</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-6 col-sm-6">
							<div class="d-flex project-status align-items-center">
								<span class="btn bgl-warning text-warning status-btn me-3">Pending</span>
								<div class="dropdown">
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
					</div>
				</div>
				<nav class="mt-5">
					<ul class="pagination pagination-gutter pagination-primary no-bg">
						<li class="page-item page-indicator">
							<a class="page-link" href="javascript:void(0)">
								<i class="la la-angle-left"></i></a>
						</li>
						<li class="page-item "><a class="page-link" href="javascript:void(0)">1</a>
						</li>
						<li class="page-item active"><a class="page-link" href="javascript:void(0)">2</a></li>
						<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
						<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
						<li class="page-item page-indicator">
							<a class="page-link" href="javascript:void(0)">
								<i class="la la-angle-right"></i></a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="tab-pane fade" id="navpills-2">
				<div class="card">
					<div class="project-info">
						<div class="col-xl-3 my-2 col-lg-4 col-sm-6">
							<p class="text-primary mb-1">#P-000441425</p>
							<h5 class="title font-w600 mb-2"><a href="{!! url('/post-details'); !!}" class="text-black">Build Branding Persona for Etza.id</a></h5>
							<div class="text-dark"><i class="far fa-calendar me-3" aria-hidden="true"></i>Created on Sep 8th, 2020</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<img src="images/users/pic4.jpg" alt="">
								</div>
								<div class="ms-2">
									<span>Client</span>
									<h5 class="mb-0 pt-1 font-w50 text-black">Kevin Sigh</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<img src="images/users/pic3.jpg" alt="">
								</div>
								<div class="ms-2">
									<span>Person in charge</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Kevin Sigh</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-3 my-2 col-lg-6 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="power-ic">
									<i class="fa fa-bolt" aria-hidden="true"></i>
								</div>
								<div class="ms-2">
									<span>Deadline</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Tuesday,Sep 29th 2020</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-6 col-sm-6">
							<div class="d-flex project-status align-items-center">
								<span class="btn bgl-info text-info status-btn me-3">Progress</span>
								<div class="dropdown">
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
					</div>
				</div>
				<div class="card">
					<div class="project-info">
						<div class="col-xl-3 my-2 col-lg-4 col-sm-6">
							<p class="text-primary mb-1">#P-000441425</p>
							<h5 class="title font-w600 mb-2"><a href="{!! url('/post-details'); !!}" class="text-black">Manage SEO for Eclan Company P..</a></h5>
							<div class="text-dark"><i class="far fa-calendar me-3" aria-hidden="true"></i>Created on Sep 8th, 2020</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<img src="images/users/pic8.jpg" alt="">
								</div>
								<div class="ms-2">
									<span>Client</span>
									<h5 class="mb-0 pt-1 font-w50 text-black">Angela Moss</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<span class="img-placeholder bgl-danger text-danger">OJ</span>
								</div>
								<div class="ms-2">
									<span>Person in charge</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Olivia Jonson</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-3 my-2 col-lg-6 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="power-ic">
									<i class="fa fa-bolt" aria-hidden="true"></i>
								</div>
								<div class="ms-2">
									<span>Deadline</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Tuesday,Sep 29th 2020</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-6 col-sm-6">
							<div class="d-flex project-status align-items-center">
								<span class="btn bgl-info text-info status-btn me-3">Progress</span>
								<div class="dropdown">
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
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="navpills-3">
				<div class="card">
					<div class="project-info">
						<div class="col-xl-3 my-2 col-lg-4 col-sm-6">
							<p class="text-primary mb-1">#P-000441425</p>
							<h5 class="title font-w600 mb-2"><a href="{!! url('/post-details'); !!}" class="text-black">Build Branding Persona for Etza.id</a></h5>
							<div class="text-dark"><i class="far fa-calendar me-3" aria-hidden="true"></i>Created on Sep 8th, 2020</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<img src="images/users/pic4.jpg" alt="">
								</div>
								<div class="ms-2">
									<span>Client</span>
									<h5 class="mb-0 pt-1 font-w50 text-black">Kevin Sigh</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<img src="images/users/pic3.jpg" alt="">
								</div>
								<div class="ms-2">
									<span>Person in charge</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Kevin Sigh</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-3 my-2 col-lg-6 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="power-ic">
									<i class="fa fa-bolt" aria-hidden="true"></i>
								</div>
								<div class="ms-2">
									<span>Deadline</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Tuesday,Sep 29th 2020</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-6 col-sm-6">
							<div class="d-flex project-status align-items-center">
								<span class="btn bgl-warning text-warning status-btn me-3">Pending</span>
								<div class="dropdown">
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
					</div>
				</div>
				<div class="card">
					<div class="project-info">
						<div class="col-xl-3 my-2 col-lg-4 col-sm-6">
							<p class="text-primary mb-1">#P-000441425</p>
							<h5 class="title font-w600 mb-2"><a href="{!! url('/post-details'); !!}" class="text-black">Manage SEO for Eclan Company P..</a></h5>
							<div class="text-dark"><i class="far fa-calendar me-3" aria-hidden="true"></i>Created on Sep 8th, 2020</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<img src="images/users/pic8.jpg" alt="">
								</div>
								<div class="ms-2">
									<span>Client</span>
									<h5 class="mb-0 pt-1 font-w50 text-black">Angela Moss</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<span class="img-placeholder bgl-danger text-danger">OJ</span>
								</div>
								<div class="ms-2">
									<span>Person in charge</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Olivia Jonson</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-3 my-2 col-lg-6 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="power-ic">
									<i class="fa fa-bolt" aria-hidden="true"></i>
								</div>
								<div class="ms-2">
									<span>Deadline</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Tuesday,Sep 29th 2020</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-6 col-sm-6">
							<div class="d-flex project-status align-items-center">
								<span class="btn bgl-warning text-warning status-btn me-3">Pending</span>
								<div class="dropdown">
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
					</div>
				</div>
				<div class="card">
					<div class="project-info">
						<div class="col-xl-3 my-2 col-lg-4 col-sm-6">
							<p class="text-primary mb-1">#P-000441425</p>
							<h5 class="title font-w600 mb-2"><a href="{!! url('/post-details'); !!}" class="text-black">Reduce Website Page Size Omah</a></h5>
							<div class="text-dark"><i class="far fa-calendar me-3" aria-hidden="true"></i>Created on Sep 8th, 2020</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<span class="img-placeholder bgl-info text-info">EA</span>
								</div>
								<div class="ms-2">
									<span>Client</span>
									<h5 class="mb-0 pt-1 font-w50 text-black">Endge Aes</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<span class="img-placeholder bgl-success text-success">BS</span>
								</div>
								<div class="ms-2">
									<span>Person in charge</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Bella Sirait</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-3 my-2 col-lg-6 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="power-ic">
									<i class="fa fa-bolt" aria-hidden="true"></i>
								</div>
								<div class="ms-2">
									<span>Deadline</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Tuesday,Sep 29th 2020</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-6 col-sm-6">
							<div class="d-flex project-status align-items-center">
								<span class="btn bgl-warning text-warning status-btn me-3">Pending</span>
								<div class="dropdown">
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
					</div>
				</div>
				<div class="card">
					<div class="project-info">
						<div class="col-xl-3 my-2 col-lg-4 col-sm-6">
							<p class="text-primary mb-1">#P-000441425</p>
							<h5 class="title font-w600 mb-2"><a href="{!! url('/post-details'); !!}" class="text-black">Build Branding Persona for Etza.id</a></h5>
							<div class="text-dark"><i class="far fa-calendar me-3" aria-hidden="true"></i>Created on Sep 8th, 2020</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<img src="images/users/pic4.jpg" alt="">
								</div>
								<div class="ms-2">
									<span>Client</span>
									<h5 class="mb-0 pt-1 font-w50 text-black">Kevin Sigh</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<img src="images/users/pic3.jpg" alt="">
								</div>
								<div class="ms-2">
									<span>Person in charge</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Kevin Sigh</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-3 my-2 col-lg-6 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="power-ic">
									<i class="fa fa-bolt" aria-hidden="true"></i>
								</div>
								<div class="ms-2">
									<span>Deadline</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Tuesday,Sep 29th 2020</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-6 col-sm-6">
							<div class="d-flex project-status align-items-center">
								<span class="btn bgl-warning text-warning status-btn me-3">Pending</span>
								<div class="dropdown">
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
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="navpills-4">
				<div class="card">
					<div class="project-info">
						<div class="col-xl-3 my-2 col-lg-4 col-sm-6">
							<p class="text-primary mb-1">#P-000441425</p>
							<h5 class="title font-w600 mb-2"><a href="{!! url('/post-details'); !!}" class="text-black">Build Branding Persona for Etza.id</a></h5>
							<div class="text-dark"><i class="far fa-calendar me-3" aria-hidden="true"></i>Created on Sep 8th, 2020</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<img src="images/users/pic4.jpg" alt="">
								</div>
								<div class="ms-2">
									<span>Client</span>
									<h5 class="mb-0 pt-1 font-w50 text-black">Kevin Sigh</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-4 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="project-media">
									<img src="images/users/pic3.jpg" alt="">
								</div>
								<div class="ms-2">
									<span>Person in charge</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Kevin Sigh</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-3 my-2 col-lg-6 col-sm-6">
							<div class="d-flex align-items-center">
								<div class="power-ic">
									<i class="fa fa-bolt" aria-hidden="true"></i>
								</div>
								<div class="ms-2">
									<span>Deadline</span>
									<h5 class="mb-0 pt-1 font-w500 text-black">Tuesday,Sep 29th 2020</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-2 my-2 col-lg-6 col-sm-6">
							<div class="d-flex project-status align-items-center">
								<span class="btn bgl-danger text-danger status-btn me-3">Closed</span>
								<div class="dropdown">
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
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection