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
								<div class="col-12 mb-3">
									<a href="/dashboard/services/create" class="btn btn-success float-right">New Service</a>
								</div>
								
								@forelse ($services as $service)
									<div class="col-12 col-md-6">
										<div class="form-group">
											<i class="{{ $service->icon }} h1"></i>
										</div>
										<div class="form-group">
											<h4>{{ $service->name }}</h4>
										</div>
										<div>
											<p>{{ $service->description }}</p>
										</div>
										<div class="form-group">
											<a href="/dashboard/services/{{ $service->id }}/edit" class="btn btn-primary">Edit Service</a>
											<form action="/dashboard/services/{{ $service->id }}" method="POST" class="d-inline">
												@csrf
												@method('DELETE')
												<button type="submit" class="btn btn-danger">Delete Service</button>
											</form>
										</div>
									</div>
								@empty
									<div class="alert text-center col-12">
										No Services Found
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
