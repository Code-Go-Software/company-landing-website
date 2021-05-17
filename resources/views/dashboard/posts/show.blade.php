@extends('dashboard.layouts.app')

@section('page-name', 'View Blog Post')

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
										<img src="{{ asset('assets/img/' . $post->image) }}" class="img-fluid">
									</div>
									<div class="form-group">
										<h1>{{ $post->title }}</h1>
									</div>
									<i class="text-primary">{{ $post->author }}</i>, 
									<i class="text-primary">{{ $post->created_at }}</i>
									<div class="form-group">
										
										@forelse (explode(',', $post->tags) as $tag)
											<span class="badge badge-primary">{{ $tag }}</span>
										@empty
											<span class="text-secondary">No Tags</span>
										@endforelse

									</div>
									<div>
										<p class="text-secondary">{{ $post->excert }}</p>
									</div>
									<div>
										<p>{{ $post->content }}</p>
									</div>
									<div class="form-group">
										<a href="/dashboard/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>
										<form action="/dashboard/posts/{{ $post->id }}" method="POST" class="d-inline">
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-danger">Delete</button>
										</form>
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
