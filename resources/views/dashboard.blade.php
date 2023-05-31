@extends('layout')

@section('title')
    Dashboard
@endsection
@section('content')
    <section id="services" class="services">
        <div class="container mt-4">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <div class="card mb-3" style="max-width: 720px;">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="land/img/slides-1.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <a href="/dfproduk-edit" class="btn btn-light btn-sm bi bi-plus-square"></a>
                                        <a href="/dfproduk-edit" class="btn btn-light btn-sm bi bi-pencil-square"></a>
                                        <form action="/dfproduk-del" class="d-inline">
                                            <button type="submit" id="deluser" name="deluser" value=""
                                                class="btn btn-light btn-sm bi bi-trash"></button>
                                        </form>
                                        <h5 class="text-body">First slide label</h5>
                                        <p class="text-body">Some representative placeholder content for the first slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="land/img/slides-2.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <a href="/dfproduk-edit" class="btn btn-light btn-sm bi bi-plus-square"></a>
                                        <a href="/dfproduk-edit" class="btn btn-light btn-sm bi bi-pencil-square"></a>
                                        <form action="/dfproduk-del" class="d-inline">
                                            <button type="submit" id="deluser" name="deluser" value=""
                                                class="btn btn-light btn-sm bi bi-trash"></button>
                                        </form>
                                        <h5 class="text-body">Second slide label</h5>
                                        <p class="text-body">Some representative placeholder content for the second slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="land/img/slides-3.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <a href="/dfproduk-edit" class="btn btn-light btn-sm bi bi-plus-square"></a>
                                        <a href="/dfproduk-edit" class="btn btn-light btn-sm bi bi-pencil-square"></a>
                                        <form action="/dfproduk-del" class="d-inline">
                                            <button type="submit" id="deluser" name="deluser" value=""
                                                class="btn btn-light btn-sm bi bi-trash"></button>
                                        </form>
                                        <h5 class="text-body">Third slide label</h5>
                                        <p class="text-body">Some representative placeholder content for the third slide.</p>
                                    </div>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
