@extends('index')

@section('content')

    @include('layouts.home-slider')

{{--    <!--breadcrumb section start-->--}}
{{--    <section class="portfolio-metro bg p-b-0">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-9 col-sm-9 text-center ">--}}
{{--                        <div class="portfolio_section">--}}
{{--                            <div>--}}
{{--                                <h1 class="breadcrumb-text"><span--}}
{{--                                        class="bold-text color-animated">Oracal Indoneisa</span></h1>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-2 col-sm-3 text-center">--}}
{{--                        <img alt="" class="img-fluid man"--}}
{{--                             src="https://themes.pixelstrap.com/unice/assets/images/portfolio/portfolio-new/man.png">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!--breadcrumb section end-->--}}

    <!-- section start -->
    <section class="portfolio-section portfolio-metro zoom-gallery">
        <div class="filter-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="filter-container isotopeFilters">
                            <ul class="list-inline filter">
{{--                                <li class="active"><a data-filter="*" href="#">All </a></li>--}}
{{--                                <li><a data-filter=".fashion" href="#">Fashion</a></li>--}}
{{--                                <li><a data-filter=".bags" href="#">Bags</a></li>--}}
{{--                                <li><a data-filter=".shoes" href="#">Shoes</a></li>--}}
{{--                                <li><a data-filter=".watch" href="#">Watch</a></li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="isotopeContainer row">
                    <div class="col-lg-2 col-md-4 col-6 isotopeSelector shoes">
                        <div class="overlay">
                            <div class="border-portfolio">
                                <a class="zoom_gallery" style="background-color: rgb(300, 300, 300);" href="{{ asset('assets/images/3m.png') }}">
                                    <div class="overlay-background">
                                        <i aria-hidden="true" class="fa fa-link"></i>
                                    </div>
                                    <img alt="" style="background-color: rgb(300, 300, 300);" class="img-fluid" src="{{ asset('assets/images/3m.png') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6  isotopeSelector fashion">
                        <div class="overlay">
                            <div class="border-portfolio">
                                <a class="zoom_gallery" href="{{ asset('assets/images/oracal.jpg') }}">
                                    <div class="overlay-background">
                                        <i aria-hidden="true" class="fa fa-link"></i>
                                    </div>
                                    <img alt="" class="img-fluid" src="{{ asset('assets/images/oracal.jpg') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 isotopeSelector shoes">
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
                    <div class="col-lg-2 col-md-4 col-6 isotopeSelector shoes">
                        <div class="overlay">
                            <div class="border-portfolio">
                                <a class="zoom_gallery" href="{{ asset('assets/images/dcfix.jpg') }}">
                                    <div class="overlay-background">
                                        <i aria-hidden="true" class="fa fa-link"></i>
                                    </div>
                                    <img alt="" class="img-fluid" src="{{ asset('assets/images/dcfix.jpg') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 isotopeSelector shoes">
                        <div class="overlay">
                            <div class="border-portfolio">
                                <a class="zoom_gallery" href="{{ asset('assets/images/transign.jpg') }}">
                                    <div class="overlay-background">
                                        <i aria-hidden="true" class="fa fa-link"></i>
                                    </div>
                                    <img alt="" class="img-fluid" src="{{ asset('assets/images/transign.jpg') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 isotopeSelector shoes">
                        <div class="overlay">
                            <div class="border-portfolio">
                                <a class="zoom_gallery" href="{{ asset('assets/images/goodfix.jpg') }}">
                                    <div class="overlay-background">
                                        <i aria-hidden="true" class="fa fa-link"></i>
                                    </div>
                                    <img alt="" class="img-fluid" src="{{ asset('assets/images/goodfix.jpg') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- pagination Start -->
        <div class="pagination_sec">
            <div class="content_detail__pagination cdp">
                <ul>
                    <li><a class="prev" href="#"><i aria-hidden="true" class="fa fa-angle-double-left"></i></a></li>
                    <li><a class="active cdp_i" href="#">1</a></li>
                    <li><a class="next" href="#"><i aria-hidden="true" class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- pagination End -->

    </section>
    <!-- Section ends -->

@endsection
