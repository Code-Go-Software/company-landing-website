@extends('dashboard.layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">

			@include('dashboard.layouts.notifications')

            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Images Slides</h4>
                            <p class="card-category">The Slides That Currently Exists On Your Landing Website</p>
                        </div>
                        <div class="card-body">
							<div class="row">
								<div class="col-12 mb-3">
									<a href="/dashboard/slides/create" class="btn btn-success float-right">New Slide</a>
								</div>
								
								@forelse ($slides as $slide)
									<div class="col-12 col-md-6">
										<div class="form-group">
											<img src="{{ asset('assets/img/' . $slide->image) }}" class="img-fluid">
										</div>
										<div class="form-group">
											<h4>{{ $slide->title }}</h4>
										</div>
										<div>
											<p>{{ $slide->description }}</p>
										</div>
										<div class="form-group">
											<a href="/dashboard/slides/{{ $slide->id }}/edit" class="btn btn-primary">Edit Slide</a>
											<form action="/dashboard/slides/{{ $slide->id }}" method="POST" class="d-inline">
												@csrf
												@method('DELETE')
												<button type="submit" class="btn btn-danger">Delete Slide</button>
											</form>
										</div>
									</div>
								@empty
									<div class="alert text-center col-12">
										No Images Slides Found
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
