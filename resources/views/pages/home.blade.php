@extends('index')

@section('content')

    @include('layouts.home-slider')

    <!-- section start -->
    <section class="resume portfolio-section portfolio-metro zoom-gallery">
        <div class="filter-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="filter-container isotopeFilters">
                            <ul class="list-inline filter">
                                <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
                                @foreach($categories as $category)
                                    <li><a href="/products/{{ $category['code'] }}">{{ $category['title'] }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="isotopeContainer row">
                    <div class="col-lg-2 col-md-4 col-6  isotopeSelector">
                        <div class="overlay">
                            <div class="border-portfolio">
                                <a href="/products/oracal">
                                    <div class="overlay-background">
                                        <i aria-hidden="true" class="fa fa-link"></i>
                                    </div>
                                    <img alt="" class="img-fluid" src="{{ asset('assets/images/oracal.jpg') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 isotopeSelector">
                        <div class="overlay">
                            <div class="border-portfolio">
                                <a style="background-color: rgb(300, 300, 300);" href="/products/3m">
                                    <div class="overlay-background">
                                        <i aria-hidden="true" class="fa fa-link"></i>
                                    </div>
                                    <img alt="" style="background-color: rgb(300, 300, 300);" class="img-fluid" src="{{ asset('assets/images/3m.png') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 isotopeSelector">
                        <div class="overlay">
                            <div class="border-portfolio">
                                <a href="/products/vinyl-sticker">
                                    <div class="overlay-background">
                                        <i aria-hidden="true" class="fa fa-link"></i>
                                    </div>
                                    <img alt="" class="img-fluid" src="{{ asset('assets/images/dcfix.jpg') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 isotopeSelector">
                        <div class="overlay">
                            <div class="border-portfolio">
                                <a class="zoom_gallery" href="{{ asset('assets/images/asahi.jpg') }}">
                                    <div class="overlay-background">
                                        <i aria-hidden="true" class="fa fa-link"></i>
                                    </div>
                                    <img alt="" class="img-fluid" src="{{ asset('assets/images/asahi.jpg') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 isotopeSelector">
                        <div class="overlay">
                            <div class="border-portfolio">
                                <a class="zoom_gallery" href="{{ asset('assets/images/transign.png') }}">
                                    <div class="overlay-background">
                                        <i aria-hidden="true" class="fa fa-link"></i>
                                    </div>
                                    <img alt="" class="img-fluid" src="{{ asset('assets/images/transign.png') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 isotopeSelector">
                        <div class="overlay">
                            <div class="border-portfolio">
                                <a class="zoom_gallery" href="{{ asset('assets/images/goodfix.png') }}">
                                    <div class="overlay-background">
                                        <i aria-hidden="true" class="fa fa-link"></i>
                                    </div>
                                    <img alt="" title="Goodfix" class="img-fluid" src="{{ asset('assets/images/goodfix.png') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Section ends -->

@endsection
