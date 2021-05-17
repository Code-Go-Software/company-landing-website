@extends('dashboard.layouts.app')

@section('page-name', 'Edit FAQ')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Edit FAQ</h4>
                            <p class="card-category">Edit FAQ That Currently Exists O Your Website</p>
                        </div>
                        <div class="card-body">
                            <form action="/dashboard/faqs/{{ $faq->id }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Question</label>
                                            <input type="text" class="form-control" name="question" value="{{ $faq->question }}" required>

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
                                            <textarea class="form-control" name="answer" rows="10" required>{{ $faq->answer }}</textarea>

                                            @error('answer')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Save FAQ</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
