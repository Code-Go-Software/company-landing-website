@extends('dashboard.layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Create New Blog Post</h4>
                            <p class="card-category">Create New Blog Post To Your Landing Website</p>
                        </div>
                        <div class="card-body">
                            <form action="/dashboard/posts" method="POST" enctype="multipart/form-data">
                                @csrf
								<div class="row">
									<div class="col-12 mb-3">
										<img src="{{ asset('assets/img/city.jpg') }}" class="img-fluid">
										<input type="file" class="form-control" name="image" required>

                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror

									</div>
								</div>
								<div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Post Title</label>
                                            <input type="text" class="form-control" name="title" value="{{ old('title') }}" required>

                                            @error('title')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                Post Excert
                                            </label>
                                            <textarea class="form-control" name="excert" rows="5" required>{{ old('excert') }}</textarea>

                                            @error('excert')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Post Author</label>
                                            <input type="text" class="form-control" name="author" value="{{ old('author') }}" required>

                                            @error('author')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Post Tags</label>
                                            <input type="text" class="form-control" name="tags" value="{{ old('tags') }}">
                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                Post Content
                                            </label>
                                            <textarea class="form-control" name="content" rows="25" required>{{ old('content') }}</textarea>

                                            @error('content')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Create Post</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
