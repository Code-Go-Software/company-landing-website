@extends('dashboard.layouts.app')

@section('page-name', 'New Portfolio Project')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Create New Project</h4>
                            <p class="card-category">Add New Project To Your Landing Website</p>
                        </div>
                        <div class="card-body">
                            <form action="/dashboard/projects" method="POST" enctype="multipart/form-data">
                                @csrf
								<div class="row">
									<div class="col-md-12 mb-3">
										<img src="{{ asset('assets/img/city.jpg') }}" class="img-fluid">
										<input type="file" class="form-control" name="image" required>

                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror

									</div>
								</div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Project Name</label>
                                            <input type="text" class="form-control" name="name" required value="{{ old('name') }}">

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
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                                            <input type="text" class="form-control" name="client" value="{{ old('client') }}" required>

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
                                            <input type="text" class="form-control" name="link" value="{{ old('link') }}">
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="finish_date" value="{{ old('finish_date') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                Project Description
                                            </label>
                                            <textarea class="form-control" name="description" rows="10">{{ old('description') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Create Project</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
