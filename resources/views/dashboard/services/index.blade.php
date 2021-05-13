@extends('dashboard.layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Services</h4>
                            <p class="card-category">The Services That Currently Exists On Your Landing Website</p>
                        </div>
                        <div class="card-body">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<i class="icofont-chart-bar-graph h1"></i>
									</div>
									<div class="form-group">
										<h4>Service Name Goes Here</h4>
									</div>
									<div>
										<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat doloremque voluptates vel aliquam officia aliquid</p>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary">Edit Service</button>
										<button type="submit" class="btn btn-danger">Delete Service</button>
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
