@extends('dashboard.layouts.app')

@section('page-name', 'New FAQ')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Create New FAQ</h4>
                            <p class="card-category">Add New FAQ To Your Landing Website To Help Answer Your Customers Expected Questions</p>
                        </div>
                        <div class="card-body">
                            <form action="/dashboard/faqs" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Question</label>
                                            <input type="text" class="form-control" name="question" value="{{ old('question') }}" required>

                                            @error('question')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">
                                                Answer
                                            </label>
                                            <textarea class="form-control" name="answer" rows="10" required>{{ old('answer') }}</textarea>

                                            @error('answer')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Add FAQ</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
