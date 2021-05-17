@extends('dashboard.layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">

			@include('dashboard.layouts.notifications')

            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Frequently Asked Questions (FAQs)</h4>
                            <p class="card-category">FAQs That Currently Exists On Your Landing Website</p>
                        </div>
                        <div class="card-body">
							<div class="row">
								<div class="col-12">
									<a href="/dashboard/faqs/create" class="btn btn-success float-right">New FAQ</a>
								</div>
								
								@forelse ($faqs as $faq)
									<div class="col-12 col-md-6">
										<div class="form-group">
											<h4>{{ $faq->question }}</h4>
										</div>
										<div>
											<p>{{ $faq->answer }}</p>
										</div>
										<div class="form-group">
											<a href="/dashboard/faqs/{{ $faq->id }}/edit" type="submit" class="btn btn-primary">Edit</a>
											<form action="/dashboard/faqs/{{ $faq->id }}" method="POST" class="d-inline">
												@csrf
												@method('DELETE')
												<button type="submit" class="btn btn-danger">Delete</button>
											</form>
										</div>
									</div>
								@empty
									<div class="col-12 text-center alert">
										No FAQS Found
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
