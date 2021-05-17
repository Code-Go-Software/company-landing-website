@extends('dashboard.layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Manage Landing Website Main Information</h4>
                            <p class="card-category">Edit & Update Your Landing Website General Information</p>
                        </div>
                        <div class="card-body">
                            <form action="/dashboard/general_information" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Website Name</label>
                                            <input type="text" class="form-control" name="website_name" value="{{ $general->where('key', 'website_name')->first()->value }}" required>
                                            
                                            @error('website_name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Business Address</label>
                                            <input type="text" class="form-control" name="address" value="{{ $general->where('key', 'address')->first()->value }}" required>
                                            
                                            @error('address')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Business Phone</label>
                                            <input type="text" class="form-control" name="phone" value="{{ $general->where('key', 'phone')->first()->value }}" required>
                                            
                                            @error('phone')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Business Email</label>
                                            <input type="text" class="form-control" name="email" value="{{ $general->where('key', 'email')->first()->value }}" required>
                                            
                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                About Us Article
                                            </label>
                                            <textarea class="form-control" name="about_us" rows="18" required>{{ $general->where('key', 'about_us')->first()->value }}</textarea>
                                            
                                            @error('about_us')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Save Changes</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
