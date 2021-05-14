@extends('dashboard.layouts.app')

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
                            <form>
								<div class="row">
									<div class="col-md-12 mb-3">
										<img src="{{ asset('assets/img/city.jpg') }}" class="img-fluid">
										<input type="file" class="form-control">
									</div>
								</div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Project Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option value="1">Category</option>
                                            </select>
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Client</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Project Link</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control">
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
                                                <textarea class="form-control" rows="10"></textarea>
                                            </div>
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
