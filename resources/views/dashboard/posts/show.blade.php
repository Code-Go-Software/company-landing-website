@extends('dashboard.layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Blog Posts</h4>
                            <p class="card-category">View Post Details</p>
                        </div>
                        <div class="card-body">
							<div class="row">
								<div class="col-12">
									<div class="form-group">
										<img src="{{ asset('assets/img/city.jpg') }}" class="img-fluid">
									</div>
									<div class="form-group">
										<h1>Post Title Goes Here</h1>
									</div>
									<i class="text-primary">Post Author</i>, 
									<i class="text-primary">12-5-2020</i>
									<div class="form-group">
										<span class="badge badge-primary">First Tag</span>
										<span class="badge badge-primary">First Tag</span>
										<span class="badge badge-primary">First Tag</span>
									</div>
									<div>
										<p class="text-secondary">Excert Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat doloremque voluptates vel aliquam officia aliquid</p>
									</div>
									<div>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet doloribus est, rem reiciendis nemo officia minima, ipsa, optio totam fugiat fugit fuga culpa dolorum vitae soluta aliquam omnis velit dicta!</p>
									</div>
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
