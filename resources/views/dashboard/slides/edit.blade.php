@extends('dashboard.layouts.app')

@section('page-name', 'Edit Image Slide')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Edit Slide</h4>
                            <p class="card-category">Edit Slide On Your Landing Website</p>
                        </div>
                        <div class="card-body">
                            <form action="/dashboard/slides/{{ $slide->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
								<div class="row">
									<div class="col-md-12 mb-3">
										<img src="{{ asset('assets/img/' . $slide->image) }}" class="img-fluid">
										<input type="file" class="form-control" name="image">

                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror

									</div>
								</div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Slide Title</label>
                                            <input type="text" class="form-control" name="title" value="{{ $slide->title }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Add Read More Button</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="read_more" id="yes" value="1" {{ ($slide->read_more_button) ? 'checked' : '' }}>
                                                    <label for="yes">Yes</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="radio" name="read_more" id="no" value="0" {{ (!$slide->read_more_button) ? 'checked' : '' }}>
                                                    <label for="no">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">
													Slide Description
												</label>
                                                <textarea class="form-control" name="description" rows="5">{{ $slide->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Save Slide</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
