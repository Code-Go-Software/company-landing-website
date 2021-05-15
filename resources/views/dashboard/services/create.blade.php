@extends('dashboard.layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Create New Service</h4>
                            <p class="card-category">Add New Service To Your Landing Website</p>
                        </div>
                        <div class="card-body">
                            <form action="/dashboard/services" method="POST">
                                @csrf
								<div class="row">
									<div class="col-md-12 mb-3">
										<div class="text-center">
                                            <i class="icofont-chart-bar-graph h1"></i>
                                        </div>
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
                                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                Service Description
                                            </label>
                                            <textarea class="form-control" rows="5" name="description">{{ old('description') }}</textarea>

                                            @error('description')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Create Service</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
