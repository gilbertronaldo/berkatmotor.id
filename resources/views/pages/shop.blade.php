@extends('index')

@section('content')

    <!-- section start -->
    <section style="padding-top: 100px;">
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    @include('layouts.shop-sidebar')
                    <div class="collection-content col">
                        <div class="page-main-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="top-banner-wrapper">
                                        <a href="#"><img alt="" class="img-fluid"
                                                         src="../assets/images/inner-page/banner.jpg"></a>
                                        <div class="top-banner-content small-section">
                                            <h4>fashion</h4>
                                            <h5>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.</h5>
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen book. It has survived not only five centuries, but
                                                also
                                                the leap into electronic typesetting, remaining essentially unchanged.
                                                It
                                                was popularised in the 1960s with the release of Letraset sheets
                                                containing
                                                Lorem Ipsum passages, and more recently with desktop publishing software
                                                like Aldus PageMaker including versions of Lorem Ipsum.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="collection-product-wrapper">
                                        <div class="product-top-filter">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="filter-main-btn">
                                                    <span class="filter-btn btn btn-default primary-btn radius-0">
                                                        <i aria-hidden="true" class="fa fa-filter"></i> CATEGORY
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper-grid product-load-more">
                                            <div class="row">
                                                <div class="col-xl-4 col-md-6 col-grid-box three">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <a href="#">
                                                                    <img alt=""
                                                                         class="img-fluid"
                                                                         src="../assets/images/inner-page/category/1.jpg">
                                                                </a>
                                                            </div>
                                                            <div class="back">
                                                                <a href="#">
                                                                    <img alt=""
                                                                         class="img-fluid"
                                                                         src="../assets/images/inner-page/category/5.jpg">
                                                                </a>
                                                            </div>
                                                            <div class="cart-info cart-wrap">
                                                                <a href="#" title="Add to cart">
                                                                    <i aria-hidden="true"
                                                                       class="fa fa-shopping-cart"></i>
                                                                </a>
                                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                                    <i aria-hidden="true" class="fa fa-heart-o"></i>
                                                                </a>
                                                                <a data-target="#quick-view" data-toggle="modal"
                                                                   href="#"
                                                                   title="Quick View">
                                                                    <i aria-hidden="true" class="fa fa-search"></i>
                                                                </a>
                                                                <a href="compare.html" title="Compare">
                                                                    <i aria-hidden="true" class="fa fa-refresh"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">
                                                            <div>
                                                                <div class="rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <a href="product-page(no-sidebar).html"><h6>Slim Fit
                                                                        Cotton
                                                                        Shirt</h6></a>
                                                                <p>
                                                                    Lorem Ipsum is simply dummy text of the printing and
                                                                    typesetting industry. Lorem Ipsum has been the
                                                                    industry's standard dummy text ever since the 1500s,
                                                                    when an unknown printer took a galley of type and
                                                                    scrambled it to make a type specimen book
                                                                </p>
                                                                <h4>$500.00</h4>
                                                                <ul class="color-variant">
                                                                    <li class="bg-light0"></li>
                                                                    <li class="bg-light1"></li>
                                                                    <li class="bg-light2"></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="load-more-sec"><a class="loadMore" href="javascript:void(0)">load
                                                more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section End -->

@endsection
