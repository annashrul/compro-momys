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
            <div class="col-sm-6">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span>Morris Chart</span>
                </div>
            </div>
            <div class="col-sm-6 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Charts</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Morris</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Donught Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="morris_donught" class="morris_chart_height"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Line Chart</h4>
                            </div>
                            <div class="card-body p-0">
                                <div id="morris_line" class="morris_chart_height"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Bar Chart</h4>
                            </div>
                            <div class="card-body">
								<div id="morris_bar" class="morris_chart_height"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Line Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="line_chart_2" class="morris_chart_height"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Bar Chart</h4>
                            </div>
                            <div class="card-body">
								
                                <div id="morris_bar_stalked" class="morris_chart_height"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Area Chart</h4>
                            </div>
                            <div class="card-body">
                                <div id="morris_area" class="morris_chart_height"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection	
        