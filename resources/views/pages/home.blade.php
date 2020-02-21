@extends('index')

@section('content')

    @include('layouts.header')

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
                                <li class="active"><a data-filter="*" href="#">All </a></li>
                                <li><a data-filter=".fashion" href="#">Fashion</a></li>
                                <li><a data-filter=".bags" href="#">Bags</a></li>
                                <li><a data-filter=".shoes" href="#">Shoes</a></li>
                                <li><a data-filter=".watch" href="#">Watch</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="isotopeContainer row">
                    <div class="col-lg-2 col-md-4 col-6 isotopeSelector shoes">
                        <div class="overlay">
                            <div class="border-portfolio">
                                <a class="zoom_gallery" href="../assets/images/portfolio/12.png">
                                    <div class="overlay-background">
                                        <i aria-hidden="true" class="fa fa-link"></i>
                                    </div>
                                    <img alt="" class="img-fluid" src="../assets/images/portfolio/12.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6  isotopeSelector fashion">
                        <div class="overlay">
                            <div class="border-portfolio">
                                <a class="zoom_gallery" href="../assets/images/portfolio/2.jpg">
                                    <div class="overlay-background">
                                        <i aria-hidden="true" class="fa fa-link"></i>
                                    </div>
                                    <img alt="" class="img-fluid" src="../assets/images/portfolio/2.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 isotopeSelector shoes">
                        <div class="overlay">
                            <div class="border-portfolio">
                                <a class="zoom_gallery" href="../assets/images/portfolio/3.jpg">
                                    <div class="overlay-background">
                                        <i aria-hidden="true" class="fa fa-link"></i>
                                    </div>
                                    <img alt="" class="img-fluid" src="../assets/images/portfolio/3.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 isotopeSelector fashion">
                        <div class="overlay">
                            <div class="border-portfolio">
                                <a class="zoom_gallery" href="../assets/images/portfolio/5.jpg">
                                    <div class="overlay-background">
                                        <i aria-hidden="true" class="fa fa-link"></i>
                                    </div>
                                    <img alt="" class="img-fluid" src="../assets/images/portfolio/5.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 isotopeSelector watch">
                        <div class="overlay">
                            <div class="border-portfolio">
                                <a class="zoom_gallery" href="../assets/images/portfolio/4.jpg">
                                    <div class="overlay-background">
                                        <i aria-hidden="true" class="fa fa-link"></i>
                                    </div>
                                    <img alt="" class="img-fluid" src="../assets/images/portfolio/4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 isotopeSelector watch">
                        <div class="overlay">
                            <div class="border-portfolio">
                                <a class="zoom_gallery" href="../assets/images/portfolio/5.jpg">
                                    <div class="overlay-background">
                                        <i aria-hidden="true" class="fa fa-link"></i>
                                    </div>
                                    <img alt="" class="img-fluid" src="../assets/images/portfolio/5.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 isotopeSelector fashion">
                        <div class="overlay">
                            <div class="border-portfolio">
                                <a class="zoom_gallery" href="../assets/images/portfolio/6.jpg">
                                    <div class="overlay-background">
                                        <i aria-hidden="true" class="fa fa-link"></i>
                                    </div>
                                    <img alt="" class="img-fluid" src="../assets/images/portfolio/6.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 isotopeSelector bags">
                        <div class="overlay">
                            <div class="border-portfolio">
                                <a class="zoom_gallery" href="../assets/images/portfolio/7.jpg">
                                    <div class="overlay-background">
                                        <i aria-hidden="true" class="fa fa-link"></i>
                                    </div>
                                    <img alt="" class="img-fluid" src="../assets/images/portfolio/7.jpg">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 isotopeSelector shoes">
                        <div class="overlay">
                            <div class="border-portfolio">
                                <a class="zoom_gallery" href="../assets/images/portfolio/8.png">
                                    <div class="overlay-background">
                                        <i aria-hidden="true" class="fa fa-link"></i>
                                    </div>
                                    <img alt="" class="img-fluid" src="../assets/images/portfolio/8.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 isotopeSelector fashion">
                        <div class="overlay">
                            <div class="border-portfolio">
                                <a class="zoom_gallery" href="../assets/images/portfolio/9.jpg">
                                    <div class="overlay-background">
                                        <i aria-hidden="true" class="fa fa-link"></i>
                                    </div>
                                    <img alt="" class="img-fluid" src="../assets/images/portfolio/9.jpg">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 isotopeSelector shoes">
                        <div class="overlay">
                            <div class="border-portfolio">
                                <a class="zoom_gallery" href="../assets/images/portfolio/10.jpg">
                                    <div class="overlay-background">
                                        <i aria-hidden="true" class="fa fa-link"></i>
                                    </div>
                                    <img alt="" class="img-fluid" src="../assets/images/portfolio/10.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 isotopeSelector fashion">
                        <div class="overlay">
                            <div class="border-portfolio">
                                <a class="zoom_gallery" href="../assets/images/portfolio/11.jpg">
                                    <div class="overlay-background">
                                        <i aria-hidden="true" class="fa fa-link"></i>
                                    </div>
                                    <img alt="" class="img-fluid" src="../assets/images/portfolio/11.jpg">
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
                    <li><a class="cdp_i" href="#">2</a></li>
                    <li><a class="cdp_i" href="#">3</a></li>
                    <li><a class="next" href="#"><i aria-hidden="true" class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- pagination End -->

    </section>
    <!-- Section ends -->

    <!-- footer start -->
    <footer class="resume copyright copyright-bg inner-pages-footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="link link-horizontal  text-center mb-3">
                        <img alt="" class="img-fluid" src="../assets/images/logo/5.png">
                    </div>
                </div>
                <div class="col-12">
                    <div class="link link-horizontal">
                        <ul class="justify-content-center">
                            <li><a class="copyright-text" href="#">home</a></li>
                            <li><a class="copyright-text" href="#">couple</a></li>
                            <li><a class="copyright-text" href="#">invitation</a></li>
                            <li><a class="copyright-text" href="#">album </a></li>
                            <li><a class="copyright-text" href="#">friends say</a></li>
                            <li><a class="copyright-text" href="#">gift</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="text-center">
                        <div class="social-link link-horizontal">
                            <ul class="justify-content-center">
                                <li><a class="copyright-text" href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a>
                                </li>
                                <li><a class="copyright-text" href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a>
                                </li>
                                <li><a class="copyright-text" href="#"><i aria-hidden="true"
                                                                          class="fa fa-google"></i></a>
                                </li>
                                <li><a class="copyright-text " href="#"><i aria-hidden="true"
                                                                           class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <!-- copyright start -->
    <div class="agency copyright inner-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="link-horizontal">
                        <ul>
                            <li><a class="copyright-text" href="#">Privacy Policy</a></li>
                            <li><a class="copyright-text" href="#">Terms &amp; Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div>
                        <h6 class="copyright-text text-white text-right">Copyright ©2019 Unice by <i aria-hidden="true"
                                                                                                     class="fa fa-heart"></i>pixelstrap
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright end -->

    <!-- Tap on Top-->
    <div class="tap-top">
        <div><i class="fa fa-angle-double-up"></i></div>
    </div>
    <!-- Tap on Ends-->

@endsection
