@extends('dashboard.layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Edit Blog Post</h4>
                            <p class="card-category">Update Bolg Post Data And Keep Your Updated</p>
                        </div>
                        <div class="card-body">
                            <form>
								<div class="row">
									<div class="col-12 mb-3">
										<img src="{{ asset('assets/img/city.jpg') }}" class="img-fluid">
										<input type="file" class="form-control">
									</div>
								</div>
								<div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Post Title</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                Post Excert
                                            </label>
                                            <textarea class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Post Author</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Post Tags</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                Post Content
                                            </label>
                                            <textarea class="form-control" rows="25"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Save Post</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
