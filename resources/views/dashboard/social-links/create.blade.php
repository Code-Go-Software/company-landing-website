@extends('dashboard.layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Create New Social Link</h4>
                            <p class="card-category">Add New Social Media Link To Help Your Customers Contact You</p>
                        </div>
                        <div class="card-body">
                            <form action="/dashboard/links" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select class="form-control" name="website" required>
												<option value="facebook">Facebook</option>
												<option value="instagram">Instagram</option>
												<option value="twitter">Twitter</option>
												<option value="linkedin">LinkedIn</option>
											</select>

                                            @error('website')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Profile Link</label>
                                            <input type="text" class="form-control" name="link" value="{{ old('link') }}" required>

                                            @error('link')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Add Social Link</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
