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
                    <p class="mb-0">Your business dashboard template</p>
                </div>
            </div>
            <div class="col-sm-6 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Charts</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">ChartJS</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Bar Chart</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="barChart_1"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Gradient Bar Chart</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="barChart_2"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Stalked Bar Chart</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="barChart_3"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Line Chart</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="lineChart_1"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Gradient Line Chart</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="lineChart_2"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Dual Line Chart</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="lineChart_3"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Area Chart</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="areaChart_1"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Gradinet Area Chart</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="areaChart_2"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Dual Area Chart</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="areaChart_3"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Radar Chart</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="radar_chart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pie Chart</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="pie_chart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Doughnut Chart</h4>
                            </div>
                            <div class="card-body">
                                <div class="chart-point">
									<div class="check-point-area">
										<canvas id="doughnut_chart"></canvas>
									</div>
									<ul class="chart-point-list">
										<li><i class="fa fa-circle text-primary me-1"></i> 40% Tickets</li>
										<li><i class="fa fa-circle text-success me-1"></i> 35% Events</li>
										<li><i class="fa fa-circle text-warning me-1"></i> 25% Other</li>
									</ul>
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Polar Chart</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="polar_chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection	        