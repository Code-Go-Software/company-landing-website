@extends('layouts.app')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Our Team</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Team</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team ">
            <div class="container">

                <div class="row">

                    @foreach ($members as $member)
                        <div class="col-lg-6">
                            <div class="member d-flex align-items-start">
                                <div class="pic"><img src="{{ asset('assets/img/' . $member->image) }}" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>{{ $member->name }}</h4>
                                    <span>{{ $member->position }}</span>
                                    @if ($member->description)
                                        <p>{{ $member->description }}</p>
                                    @endif
                                    <div class="social">
                                        @if ($member->facebook)
                                            <a href="{{ $member->facebook }}"><i class="ri-facebook-fill"></i></a>
                                        @endif
                                        @if ($member->twitter)
                                            <a href="{{ $member->twitter }}"><i class="ri-twitter-fill"></i></a>
                                        @endif
                                        @if ($member->instagram)
                                            <a href="{{ $member->instagram }}"><i class="ri-instagram-fill"></i></a>
                                        @endif
                                        @if ($member->linkedin)
                                            <a href="{{ $member->linkedin }}"><i class="ri-linkedin-fill"></i></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Team Section -->

    </main><!-- End #main -->
@endsection
