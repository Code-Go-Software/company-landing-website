@extends('dashboard.layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Edit Customer Testimonial</h4>
                            <p class="card-category">Edit Customer Testimonial That Currently Exists On Your Landing Website</p>
                        </div>
                        <div class="card-body">
                            <form>
								<div class="row">
									<div class="card card-profile col-md-12 mb-3">
										<div class="card-avatar mt-1">
                                            <img class="img" src="{{ asset('assets/img/faces/marc.jpg') }}" />
                                        </div>
										<input type="file" class="form-control">
									</div>
								</div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Customer Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Customer Position</label>
                                            <input type="text" class="form-control">
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
                                                <textarea class="form-control" rows="5"></textarea>
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
