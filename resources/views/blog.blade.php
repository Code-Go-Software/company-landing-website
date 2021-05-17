@extends('layouts.app')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Blog</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Blog</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container">

                <div class="row">

                    @foreach ($posts as $post)
                        <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                            <article class="entry">

                                <div class="entry-img">
                                    <img src="{{ asset('assets/img/' . $post->image) }}" alt="" class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                                href="#">{{ $post->author }}</a></li>
                                        <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                                href="#"><time datetime="2020-01-01">{{ $post->created_at }}</time></a></li>
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <p>
                                        {{ $post->excert }}
                                    </p>
                                    <div class="read-more">
                                        <a href="/posts/{{ $post->id }}">Read More</a>
                                    </div>
                                </div>

                            </article><!-- End blog entry -->
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->
@endsection
