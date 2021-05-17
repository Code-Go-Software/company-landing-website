@extends('layouts.app')

@section('content')

    <main id="main">

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details my-5">
            <div class="container my-4">

                <div class="row">

                    <div class="col-lg-8">
                        <h2 class="portfolio-title">{{ $project->name }}</h2>
                        <div class="owl-carousel portfolio-details-carousel">
                            <img src="{{ asset('assets/img/' . $project->image) }}" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-4 portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong>: {{ $project->category->name }}</li>
                            <li><strong>Client</strong>: {{ $project->client }}</li>
                            <li><strong>Project date</strong>: {{ $project->finish_date }}</li>
                            @if ($project->link)
								<li><strong>Project URL</strong>: <a href="{{ $project->link }}">Check Out The Project</a></li>
							@endif
                        </ul>

                        <p>
                            {{ $project->description }}
                        </p>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

@endsection
