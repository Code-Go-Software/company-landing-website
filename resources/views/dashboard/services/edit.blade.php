@extends('dashboard.layouts.app')

@section('page-name', 'Edit Service')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Edit Service</h4>
                            <p class="card-category">Edit Service That Currently Exists On Your Landing Website</p>
                        </div>
                        <div class="card-body">
                            <form action="/dashboard/services/{{ $service->id }}" method="POST">
                                @csrf
                                @method('PUT')
								<div class="row">
									<div class="col-md-12 mb-3">
										<i class="{{ $service->icon }} h1"></i>
										<select class="form-control" name="icon">
											<option value="icofont-chart-bar-graph">Chart</option>
											<option value="icofont-home">Home</option>
											<option value="icofont-user">User</option>
										</select>

                                        @error('icon')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror

									</div>
								</div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Service Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ $service->name }}">

                                            @error('name')
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
													Service Description
												</label>
                                                <textarea class="form-control" name="description" rows="5">{{ $service->description }}</textarea>

                                                @error('description')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Save Service</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
