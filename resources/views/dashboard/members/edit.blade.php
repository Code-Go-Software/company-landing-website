@extends('dashboard.layouts.app')

@section('page-name', 'Edit Team Member Data')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Edit Team Member Data</h4>
                            <p class="card-category">Edit The Data Of The Current Team Member On Your Website</p>
                        </div>
                        <div class="card-body">
                            <form action="/dashboard/members/{{ $member->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
								<div class="row">
									<div class="card card-profile col-md-12 mb-3">
										<div class="card-avatar mt-1">
                                            <img class="img" src="{{ asset('assets/img/' . $member->image) }}" />
                                        </div>
										<input type="file" class="form-control" name="image">
									</div>
								</div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ $member->name }}" required>

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
                                            <input type="text" class="form-control" name="position" value="{{ $member->position }}" required>

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
                                            <input type="text" class="form-control" name="twitter" value="{{ $member->twitter }}">
                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Instagram Account Link</label>
                                            <input type="text" class="form-control" name="instagram" value="{{ $member->instagram }}">
                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Facebook Account Link</label>
                                            <input type="text" class="form-control" name="facebook" value="{{ $member->facebook }}">
                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">LinkedIn Account Link</label>
                                            <input type="text" class="form-control" name="linkedin" value="{{ $member->linkdin }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">
													Description
												</label>
                                                <textarea class="form-control" name="description" rows="5">{{ $member->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Save Member</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
