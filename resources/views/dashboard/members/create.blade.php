@extends('dashboard.layouts.app')

@section('page-name', 'New Team Member')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Add New Team Member</h4>
                            <p class="card-category">Add New Team Member To Your Landing Website</p>
                        </div>
                        <div class="card-body">
                            <form action="/dashboard/members" method="POST" enctype="multipart/form-data">
                                @csrf
								<div class="row">
									<div class="card card-profile col-md-12 mb-3">
										<div class="card-avatar mt-1">
                                            <img class="img" src="{{ asset('assets/img/faces/marc.jpg') }}" />
                                        </div>
										<input type="file" class="form-control" name="image" required>
									</div>
								</div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>

                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Position</label>
                                            <input type="text" class="form-control" name="position" value="{{ old('position') }}" required>

                                            @error('position')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Twitter Account Link</label>
                                            <input type="text" class="form-control" name="twitter" value="{{ old('twitter') }}">
                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Instagram Account Link</label>
                                            <input type="text" class="form-control" name="instagram" value="{{ old('instagram') }}">
                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Facebook Account Link</label>
                                            <input type="text" class="form-control" name="facebook" value="{{ old('facebook') }}">
                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">LinkedIn Account Link</label>
                                            <input type="text" class="form-control" name="linkedin" value="{{ old('linkedin') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                Description
                                            </label>
                                            <textarea class="form-control" name="description" rows="5">{{ old('description') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Add Member</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
