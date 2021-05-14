@extends('dashboard.layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Blog Posts</h4>
                            <p class="card-category">The Posts You Published On Your Landing Website</p>
                        </div>
                        <div class="card-body">
							<div class="row">
								<div class="col-12 mb-3">
									<a href="/dashboard/posts/create" class="btn btn-success float-right">New Post</a>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<img src="{{ asset('assets/img/city.jpg') }}" class="img-fluid">
									</div>
									<div class="form-group">
										<a href="#" class="h4">Post Title Goes Here</a>
									</div>
									<div>
										<p>Excert Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat doloremque voluptates vel aliquam officia aliquid</p>
									</div>
									<i class="text-dark">Post Author</i>
									<div class="form-group">
										<button type="submit" class="btn btn-primary">Edit</button>
										<button type="submit" class="btn btn-danger">Delete</button>
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
