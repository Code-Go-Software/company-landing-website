@extends('dashboard.layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Customers Testimonials</h4>
                            <p class="card-category">The Customers Testimonials That Currently Exists On Your Landing Website</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
								<div class="col-12 mb-3">
									<a href="/dashboard/testimonials/create" class="btn btn-success float-right">New Testimonial</a>
								</div>
                                
                                @forelse ($testimonials as $testimonial)
                                    <div class="col-md-6">
                                        <div class="card card-profile">
                                            <div class="card-avatar">
                                                <a href="javascript:;">
                                                    <img class="img" src="{{ asset('assets/img/' . $testimonial->image) }}" />
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h6 class="card-category text-gray">{{ $testimonial->position }}</h6>
                                                <h4 class="card-title">{{ $testimonial->name }}</h4>
                                                <p class="card-description">
                                                    {{ $testimonial->opinion }}
                                                </p>
                                                <a href="/dashboard/testimonials/{{ $testimonial->id }}/edit" class="btn btn-primary">Edit</a>
                                                <form action="/dashboard/testimonials/{{ $testimonial->id }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="alert col-12 text-center">
                                        No Testimonials Found
                                    </div>
                                @endforelse

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
