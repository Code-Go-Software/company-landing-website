@extends('layouts.app')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>About</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>About</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row content">
                    <div class="col-lg-12">
                        {{ $general->where('key', 'about_us')->first()->value }}
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Team</h2>
                    <p>Our Hardowrking Team</p>
                </div>

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

        <!-- ======= Our Skills Section ======= -->
        <!--
        <section id="skills" class="skills">
            <div class="container">

                <div class="section-title">
                    <h2>Our Skills</h2>
                    <p>Check our Our Skills</p>
                </div>

                <div class="row skills-content">

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill">HTML <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">CSS <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">JavaScript <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill">PHP <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">WordPress/CMS <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Photoshop <i class="val">55%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        -->
        <!-- End Our Skills Section -->

    </main><!-- End #main -->
@endsection
