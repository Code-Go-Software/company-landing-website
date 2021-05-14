@extends('dashboard.layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Portfolio Projects</h4>
                            <p class="card-category">The Projects That Currently Exists On Your Landing Website</p>
                        </div>
                        <div class="card-body">
							<a href="/dashboard/projects/create" class="btn btn-success float-right">New Project</a>
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<img src="{{ asset('assets/img/city.jpg') }}" class="img-fluid">
									</div>
									<div class="form-group">
										<h4>Project Name Goes Here</h4>
										<span class="text-secondary">Project Category</span>
										<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat doloremque voluptates vel aliquam officia aliquid</p>
										<b>Client: </b><span class="text-danger">Client Name</span>
										<br>
										<b>Link: </b><span class="text-info">https://www.project.com</span>
										<br>
										<b>Finish Date: </b><span>12-12-2021</span>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary">Edit Project</button>
										<button type="submit" class="btn btn-danger">Delete Project</button>
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
