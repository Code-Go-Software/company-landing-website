@extends('layouts.app')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Portolio</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Portolio</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            @foreach ($categories as $category)
                                <li data-filter=".filter-{{ $category->name }}">{{ $category->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">

                    @foreach ($projects as $project)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $project->category->name }}">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('assets/img/' . $project->image) }}" class="img-fluid">
                                <div class="portfolio-info">
                                    <h4><a href="/projects/{{ $project->id }}">{{ $project->name }}</a></h4>
                                    <p>{{ $project->category->name }}</p>
                                    <!--
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery"
                                            class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" data-gall="portfolioDetailsGallery"
                                            data-vbtype="iframe" class="venobox" title="Portfolio Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                    -->
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->
@endsection
