@extends('layout')
@section('title')
    Home
@endsection
@section('content')
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animated fadeInDown">Welcome to <span>SIB FSWD LARAVEL</span></h2>
                            <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et
                                est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea
                                voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi
                                architecto.</p>
                            <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animated fadeInDown">Lorem Ipsum Dolor</h2>
                            <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et
                                est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea
                                voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi
                                architecto.</p>
                            <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animated fadeInDown">Sequi ea ut et est quaerat</h2>
                            <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et
                                est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea
                                voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi
                                architecto.</p>
                            <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->
@endsection
