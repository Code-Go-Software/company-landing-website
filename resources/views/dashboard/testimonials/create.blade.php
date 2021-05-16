@extends('dashboard.layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Add New Customer Testimonial</h4>
                            <p class="card-category">Add New Customer Testimonial To Your Landing Website</p>
                        </div>
                        <div class="card-body">
                            <form action="/dashboard/testimonials" method="POST" enctype="multipart/form-data">
                                @csrf
								<div class="row">
									<div class="card card-profile col-md-12 mb-3">
										<div class="card-avatar mt-1">
                                            <img class="img" src="{{ asset('assets/img/faces/marc.jpg') }}" />
                                        </div>
										<input type="file" class="form-control" name="image">
									</div>
								</div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Customer Name</label>
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
                                            <label class="bmd-label-floating">Customer Position</label>
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
                                            <div class="form-group">
                                                <label class="bmd-label-floating">
													Opinion
												</label>
                                                <textarea class="form-control" name="opinion" rows="5" required>{{ old('opinion') }}</textarea>

                                                @error('opinion')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Add Testimonial</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
