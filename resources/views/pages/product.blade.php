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
                                <li><a href="/">Home</a></li>
                                @foreach($categories as $category)
                                    <li class="{{ request()->is('products/' . $category['code']) ? 'active' : '' }}">
                                        <a href="/products/{{ $category['code'] }}">{{ $category['title'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="products" class="row">
                    @foreach($subCategories as $sub)
                        <div class="col-md-12">
                            <label class="font-weight-bold font-primary">{{ $sub['title'] }}</label>
                            <div class="row">
                                @foreach($sub['products'] as $product)
                                    <div class="col-lg-3 col-md-4 col-6 isotopeSelector {{ $product['category'] }}">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="font-600">{{ $product['title'] }}</label>
                                            </div>
                                        </div>
                                        <div class="overlay">
                                            <div class="border-portfolio">
                                                <a class="zoom_gallery" style="background-color: rgb(300, 300, 300);"
                                                   href="{{ asset('assets/images/products/' . $product['img']) }}">
                                                    <div class="overlay-background">
                                                        <i aria-hidden="true" class="fa fa-link"></i>
                                                    </div>
                                                    <img alt="" style="background-color: rgb(300, 300, 300);"
                                                         class="img-fluid"
                                                         title="{{ $product['title'] }}"
                                                         src="{{ asset('assets/images/products/' . $product['img']) }}">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section>
    <!-- Section ends -->

@endsection
