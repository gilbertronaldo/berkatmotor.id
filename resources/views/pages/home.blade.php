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
                                <li class="active"><a data-filter="*" href="#">All</a></li>
                                @foreach($categories as $category)
                                    <li><a data-filter="{{ '.' . $category['code'] }}"
                                           href="#">{{ $category['title'] }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="isotopeContainer row">
                    @foreach($products as $product)
                        <div class="col-lg-2 col-md-4 col-6 isotopeSelector {{ $product['category'] }}">
                            <div class="overlay">
                                <div class="border-portfolio">
                                    <a class="zoom_gallery" style="background-color: rgb(300, 300, 300);"
                                       href="{{ asset('assets/images/products/' . $product['img']) }}">
                                        <div class="overlay-background">
                                            <i aria-hidden="true" class="fa fa-link"></i>
                                        </div>
                                        <img alt="" style="background-color: rgb(300, 300, 300);" class="img-fluid"
                                             title="{{ $product['title'] }}"
                                             src="{{ asset('assets/images/products/' . $product['img']) }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section>
    <!-- Section ends -->

@endsection
