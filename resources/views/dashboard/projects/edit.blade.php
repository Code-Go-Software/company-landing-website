@extends('dashboard.layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Edit Project</h4>
                            <p class="card-category">Edit Project That Currently Exists On Your Landing Website</p>
                        </div>
                        <div class="card-body">
                            <form action="/dashboard/projects/{{ $project->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
								<div class="row">
									<div class="col-md-12 mb-3">
										<img src="{{ asset('assets/img/' . $project->image) }}" class="img-fluid">
										<input type="file" class="form-control" name="image">

                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror

									</div>
								</div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Project Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ $project->name }}" required>

                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control" name="category_id" required>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"  {{ ($category->id == $project->category_id) ? 'selected' : '' }}>{{ $category->name }}</option>
                                                @endforeach
                                            </select>

                                            @error('category_id')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Client</label>
                                            <input type="text" class="form-control" name="client" value="{{ $project->client }}" required>

                                            @error('client')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Project Link</label>
                                            <input type="text" class="form-control" name="link" value="{{ $project->link }}">
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="finish_date" value="{{ $project->finish_date }}" required>

                                            @error('finish_date')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">
													Project Description
												</label>
                                                <textarea class="form-control" name="description" rows="10" required>{{ $project->description }}</textarea>

                                                @error('description')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Save Project</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
