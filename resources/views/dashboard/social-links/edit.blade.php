@extends('dashboard.layouts.app')

@section('page-name', 'Edit Social Media Link')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Edit Social Media Link</h4>
                            <p class="card-category">Edit Social Media Link Currently Exists On Your Landing Website</p>
                        </div>
                        <div class="card-body">
                            <form action="/dashboard/links/{{ $link->id }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select class="form-control" name="website" required>
												<option value="facebook" {{ ($link->website == 'facebook') ? 'selected' : '' }}>Facebook</option>
												<option value="instagram" {{ ($link->website == 'instagram') ? 'selected' : '' }}>Instagram</option>
												<option value="twitter" {{ ($link->website == 'twitter') ? 'selected' : '' }}>Twitter</option>
												<option value="linkedin" {{ ($link->website == 'linkedin') ? 'selected' : '' }}>LinkedIn</option>
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
                                            <input type="text" class="form-control" name="link" value="{{ $link->link }}" required>

                                            @error('link')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Save Social Link</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
