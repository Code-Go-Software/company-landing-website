@extends('layouts.app')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Testimonials</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Testimonials</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="row">

                    @foreach ($testimonials as $testimonial)
                        <div class="col-lg-6">
                            <div class="testimonial-item">
                                @if ($testimonial->image)
                                    <img src="{{ asset('assets/img/' . $testimonial->image) }}" class="testimonial-img" alt="">
                                @endif
                                <h3>{{ $testimonial->name }}</h3>
                                <h4>{{ $testimonial->position }}</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    {{ $testimonial->opinion }}
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Testimonials Section -->

    </main><!-- End #main -->
@endsection
