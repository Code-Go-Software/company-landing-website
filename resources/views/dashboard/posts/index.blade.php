@extends('dashboard.layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">

			@include('dashboard.layouts.notifications')

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
								
								@forelse ($posts as $post)
									<div class="col-12 col-md-4">
										<div class="form-group">
											<img src="{{ asset('assets/img/' . $post->image) }}" class="img-fluid">
										</div>
										<div class="form-group">
											<a href="/dashboard/posts/{{ $post->id }}" class="h4">{{ $post->title }}</a>
										</div>
										<div>
											<p>{{ $post->excert }}</p>
										</div>
										<i class="text-primary">{{ $post->author }}, {{ $post->created_at }}</i>
										<div class="form-group">
										
											@forelse (explode(',', $post->tags) as $tag)
												<span class="badge badge-primary">{{ $tag }}</span>
											@empty
												<span class="text-secondary">No Tags</span>
											@endforelse
	
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
								@empty
									<div class="alert col-12 text-center">
										No Blog Posts Found
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
