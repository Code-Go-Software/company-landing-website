@extends('layouts.app')


@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                @foreach ($slides as $slide)
                    <div class="carousel-item active" style="background-image: url({{ asset('assets/img/' . $slide->image) }})">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">{{ $slide->title }}</h2>
                                <p class="animate__animated animate__fadeInUp">{{ $slide->description }}</p>
                                @if ($slide->read_more_button)
                                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">ReadMore</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach 

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row content">
                    <div class="col-12">
                        {!! $general->where('key', 'about_us')->first()->value !!}
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Clients Section ======= -->
        <!--
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section>-->
        <!-- End Clients Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Service</h2>
                    <p>The Services We Offer</p>
                </div>

                <div class="row">

                    @foreach ($services as $service)
                        <div class="col-md-6">
                            <div class="icon-box">
                                <i class="icofont-{{ $service->icon }}"></i>
                                <h4><a href="#">{{ $service->name }}</a></h4>
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                    @endforeach
                    
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>Recent Works</p>
                </div>

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
