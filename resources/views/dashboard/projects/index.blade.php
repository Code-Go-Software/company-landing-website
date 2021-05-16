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
							<div class="row">
								<div class="col-12 mb-3">
									<a href="/dashboard/projects/create" class="btn btn-success float-right">New Project</a>
								</div>
								
								@forelse ($projects as $project)
									<div class="col-12 col-md-6">
										<div class="form-group">
											<img src="{{ asset('assets/img/' . $project->image) }}" class="img-fluid">
										</div>
										<div class="form-group">
											<h4>{{ $project->name }}</h4>
											<span class="text-secondary">Project Category</span>
											<p>{{ $project->description }}</p>
											<b>Client: </b><span class="text-danger">{{ $project->client }}</span>
											<br>
											<b>Link: </b><span class="text-info">{{ $project->link }}</span>
											<br>
											<b>Finish Date: </b><span>{{ $project->finish_date }}</span>
										</div>
										<div class="form-group">
											<a href="/dashboard/projects/{{ $project->id }}/edit" class="btn btn-primary">Edit Project</a>
											<form action="/dashboard/projects/{{ $project->id }}" method="POST" class="d-inline">
												@csrf
												@method('DELETE')
												<button type="submit" class="btn btn-danger">Delete Project</button>
											</form>
										</div>
									</div>
								@empty
									<div class="alert text-center col-12">
										No Projects Found
									</div>
								@endforelse

							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
