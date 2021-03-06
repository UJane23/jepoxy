@extends('layout.main')

@section('page_content')

    <main>
        <!-- hero slider area start -->
{{--        <section class="slider-area">--}}
{{--            <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">--}}
{{--                <!-- single slider item start -->--}}
{{--                <div class="hero-single-slide hero-overlay">--}}
{{--                    <div class="hero-slider-item bg-img" data-bg="layout/img/slider/home1-slide2.jpg">--}}
{{--                        <div class="container">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <div class="hero-slider-content slide-1">--}}
{{--                                        <h2 class="slide-title">Family Jewellery <span>Collection</span></h2>--}}
{{--                                        <h4 class="slide-desc">Designer Jewellery Necklaces-Bracelets-Earings</h4>--}}
{{--                                        <a href="shop.html" class="btn btn-hero">Read More</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- single slider item start -->--}}

{{--                <!-- single slider item start -->--}}
{{--                <div class="hero-single-slide hero-overlay">--}}
{{--                    <div class="hero-slider-item bg-img" data-bg="layout/img/slider/home1-slide3.jpg">--}}
{{--                        <div class="container">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <div class="hero-slider-content slide-2 float-md-right float-none">--}}
{{--                                        <h2 class="slide-title">Diamonds Jewellery<span>Collection</span></h2>--}}
{{--                                        <h4 class="slide-desc">Shukra Yogam & Silver Power Silver Saving Schemes.</h4>--}}
{{--                                        <a href="shop.html" class="btn btn-hero">Read More</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- single slider item start -->--}}

{{--                <!-- single slider item start -->--}}
{{--                <div class="hero-single-slide hero-overlay">--}}
{{--                    <div class="hero-slider-item bg-img" data-bg="layout/img/slider/home1-slide1.jpg">--}}
{{--                        <div class="container">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <div class="hero-slider-content slide-3">--}}
{{--                                        <h2 class="slide-title">Grace Designer<span>Jewellery</span></h2>--}}
{{--                                        <h4 class="slide-desc">Rings, Occasion Pieces, Pandora & More.</h4>--}}
{{--                                        <a href="shop.html" class="btn btn-hero">Read More</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- single slider item end -->--}}
{{--            </div>--}}
{{--        </section>--}}
        <!-- hero slider area end -->

        <!-- service policy area start -->
{{--        <div class="service-policy">--}}
{{--            <div class="container">--}}
{{--                <div class="policy-block section-padding">--}}
{{--                    <div class="row mtn-30">--}}
{{--                        <div class="col-sm-6 col-lg-3">--}}
{{--                            <div class="policy-item">--}}
{{--                                <div class="policy-icon">--}}
{{--                                    <i class="pe-7s-plane"></i>--}}
{{--                                </div>--}}
{{--                                <div class="policy-content">--}}
{{--                                    <h6>Free Shipping</h6>--}}
{{--                                    <p>Free shipping all order</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-6 col-lg-3">--}}
{{--                            <div class="policy-item">--}}
{{--                                <div class="policy-icon">--}}
{{--                                    <i class="pe-7s-help2"></i>--}}
{{--                                </div>--}}
{{--                                <div class="policy-content">--}}
{{--                                    <h6>Support 24/7</h6>--}}
{{--                                    <p>Support 24 hours a day</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-6 col-lg-3">--}}
{{--                            <div class="policy-item">--}}
{{--                                <div class="policy-icon">--}}
{{--                                    <i class="pe-7s-back"></i>--}}
{{--                                </div>--}}
{{--                                <div class="policy-content">--}}
{{--                                    <h6>Money Return</h6>--}}
{{--                                    <p>30 days for free return</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-6 col-lg-3">--}}
{{--                            <div class="policy-item">--}}
{{--                                <div class="policy-icon">--}}
{{--                                    <i class="pe-7s-credit"></i>--}}
{{--                                </div>--}}
{{--                                <div class="policy-content">--}}
{{--                                    <h6>100% Payment Secure</h6>--}}
{{--                                    <p>We ensure secure payment</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- service policy area end -->

        <!-- banner statistics area start -->
        <div class="banner-statistics-area section-padding">
            <div class="container">
                <div class="row row-20 mtn-20">
                    <div class="col-sm-6">
                        <figure class="banner-statistics mt-20">
                            <a href="{{ route('show_by_category', ['href_category' => 'pendants']) }}">
                                <img src="/images/20210802_095631.jpg" style="max-width: 545px; max-height: 250px" alt="product banner">
                            </a>
                            <div class="banner-content text-right">
                                {{--                                <h5 class="banner-text1">BEAUTIFUL</h5>--}}
                                <h2 class="banner-text2">????????????</h2>
                                {{--                                <a href="shop.html" class="btn btn-text">Shop Now</a>--}}
                            </div>
                        </figure>
                    </div>
                    <div class="col-sm-6">
                        <figure class="banner-statistics mt-20">
                            <a href="{{ route('show_by_category', ['href_category' => 'accessories']) }}">
                                <img src="/images/20210802_094600.jpg" style="max-width: 545px; max-height: 250px" alt="product banner">
                            </a>
                            <div class="banner-content text-center">
                                {{--                                <h5 class="banner-text1">EARRINGS</h5>--}}
                                <h2 class="banner-text2">????????????????????</h2>
                                {{--                                <a href="shop.html" class="btn btn-text">Shop Now</a>--}}
                            </div>
                        </figure>
                    </div>
                    <div class="col-sm-6">
                        <figure class="banner-statistics mt-20">
                            <a href="{{ route('show_by_category', ['href_category' => 'blanks']) }}">
                                <img src="/images/20210802_103748.jpg" style="max-width: 545px; max-height: 250px" alt="product banner">
                            </a>
                            <div class="banner-content text-center">
                                {{--                                <h5 class="banner-text1">NEW ARRIVALLS</h5>--}}
                                <h2 class="banner-text2">??????????????????</h2>
                                {{--                                <a href="shop.html" class="btn btn-text">Shop Now</a>--}}
                            </div>
                        </figure>
                    </div>
                    <div class="col-sm-6">
                        <figure class="banner-statistics mt-20">
                            <a href="{{ route('show_by_category', ['href_category' => 'kits']) }}">
                                <img src="/images/20210802_101614.jpg" style="max-width: 545px; max-height: 250px" alt="product banner">
                            </a>
                            <div class="banner-content text-right">
                                {{--                                <h5 class="banner-text1">NEW DESIGN</h5>--}}
                                <h2 class="banner-text2">??????????????????</h2>
                                {{--                                <a href="shop.html" class="btn btn-text">Shop Now</a>--}}
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner statistics area end -->

        <!-- product area start -->
        <section class="product-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- section title start -->
                        <div class="section-title text-center">
                            <h2 class="title">???????? ??????????????</h2>
{{--                            <p class="sub-title">Add our products to weekly lineup</p>--}}
                        </div>
                        <!-- section title start -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-container">
                            <!-- product tab menu start -->
{{--                            <div class="product-tab-menu">--}}
{{--                                <ul class="nav justify-content-center">--}}
{{--                                    <li><a href="#tab1" class="active" data-toggle="tab">Entertainment</a></li>--}}
{{--                                    <li><a href="#tab2" data-toggle="tab">Storage</a></li>--}}
{{--                                    <li><a href="#tab3" data-toggle="tab">Lying</a></li>--}}
{{--                                    <li><a href="#tab4" data-toggle="tab">Tables</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                            <!-- product tab menu end -->

                            <!-- product tab content start -->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab1">
                                    <div class="product-carousel-4 slick-row-10 slick-arrow-style">
                                    @foreach($products->random(5) as $product)
                                        <!-- product item start -->
                                            <div class="product-item">
                                                <figure class="product-thumb">
                                                    <a href="catalog/product_detail/{{$product->id}}">
                                                        <img class="pri-img" src="{{ \Storage::url($product->image_url)  }}" alt="product">
                                                        <img class="sec-img" src="{{ \Storage::url($product->image_url)  }}" alt="product">
                                                    </a>
{{--                                                    <div class="button-group">--}}
{{--                                                        <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>--}}
{{--                                                        <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>--}}
{{--                                                        <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="cart-hover">--}}
{{--                                                        <button class="btn btn-cart">add to cart</button>--}}
{{--                                                    </div>--}}
                                                </figure>
                                                <div class="product-caption text-center">
                                                    <div class="product-identity">
                                                        <p class="manufacturer-name">{{$product->category === null ? ?????? :$product->category->name}}</p>
                                                    </div>
                                                    <div class="pro">
                                                        <span>??????. {{$product->article}}</span>
                                                    </div>
                                                    <h6 class="product-name">
                                                        <a href="/catalog/product_detail/{{$product->id}}">{{$product->name}}</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-regular">{{$product->price}} ??</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product item end -->
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- product tab content end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product area end -->

        <!-- group product start -->
{{--        <section class="group-product-area section-padding">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <!-- section title start -->--}}
{{--                        <div class="section-title text-center">--}}
{{--                            <h2 class="title">??????????????</h2>--}}
{{--                            <p class="sub-title">Add new products to weekly lineup</p>--}}
{{--                        </div>--}}
{{--                        <!-- section title start -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="group-list-carousel--3 slick-row-10 slick-arrow-style">--}}
{{--                            <!-- group list item start -->--}}
{{--                            <div class="group-slide-item">--}}
{{--                                <div class="group-item">--}}
{{--                                    <div class="group-item-thumb">--}}
{{--                                        <a href="product-details.html">--}}
{{--                                            <img src="layout/img/product/product-1.jpg" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="group-item-desc">--}}
{{--                                        <h5 class="group-product-name"><a href="product-details.html">--}}
{{--                                                Diamond Exclusive ring</a></h5>--}}
{{--                                        <div class="price-box">--}}
{{--                                            <span class="price-regular">$50.00</span>--}}
{{--                                            <span class="price-old"><del>$29.99</del></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- group list item end -->--}}

{{--                            <!-- group list item start -->--}}
{{--                            <div class="group-slide-item">--}}
{{--                                <div class="group-item">--}}
{{--                                    <div class="group-item-thumb">--}}
{{--                                        <a href="product-details.html">--}}
{{--                                            <img src="layout/img/product/product-3.jpg" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="group-item-desc">--}}
{{--                                        <h5 class="group-product-name"><a href="product-details.html">--}}
{{--                                                Handmade Golden ring</a></h5>--}}
{{--                                        <div class="price-box">--}}
{{--                                            <span class="price-regular">$55.00</span>--}}
{{--                                            <span class="price-old"><del>$30.00</del></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- group list item end -->--}}

{{--                            <!-- group list item start -->--}}
{{--                            <div class="group-slide-item">--}}
{{--                                <div class="group-item">--}}
{{--                                    <div class="group-item-thumb">--}}
{{--                                        <a href="product-details.html">--}}
{{--                                            <img src="layout/img/product/product-5.jpg" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="group-item-desc">--}}
{{--                                        <h5 class="group-product-name"><a href="product-details.html">--}}
{{--                                                exclusive gold Jewelry</a></h5>--}}
{{--                                        <div class="price-box">--}}
{{--                                            <span class="price-regular">$45.00</span>--}}
{{--                                            <span class="price-old"><del>$25.00</del></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- group list item end -->--}}

{{--                            <!-- group list item start -->--}}
{{--                            <div class="group-slide-item">--}}
{{--                                <div class="group-item">--}}
{{--                                    <div class="group-item-thumb">--}}
{{--                                        <a href="product-details.html">--}}
{{--                                            <img src="layout/img/product/product-7.jpg" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="group-item-desc">--}}
{{--                                        <h5 class="group-product-name"><a href="product-details.html">--}}
{{--                                                Perfect Diamond earring</a></h5>--}}
{{--                                        <div class="price-box">--}}
{{--                                            <span class="price-regular">$50.00</span>--}}
{{--                                            <span class="price-old"><del>$29.99</del></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- group list item end -->--}}

{{--                            <!-- group list item start -->--}}
{{--                            <div class="group-slide-item">--}}
{{--                                <div class="group-item">--}}
{{--                                    <div class="group-item-thumb">--}}
{{--                                        <a href="product-details.html">--}}
{{--                                            <img src="layout/img/product/product-9.jpg" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="group-item-desc">--}}
{{--                                        <h5 class="group-product-name"><a href="product-details.html">--}}
{{--                                                Handmade Golden Necklace</a></h5>--}}
{{--                                        <div class="price-box">--}}
{{--                                            <span class="price-regular">$90.00</span>--}}
{{--                                            <span class="price-old"><del>$100.</del></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- group list item end -->--}}

{{--                            <!-- group list item start -->--}}
{{--                            <div class="group-slide-item">--}}
{{--                                <div class="group-item">--}}
{{--                                    <div class="group-item-thumb">--}}
{{--                                        <a href="product-details.html">--}}
{{--                                            <img src="layout/img/product/product-11.jpg" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="group-item-desc">--}}
{{--                                        <h5 class="group-product-name"><a href="product-details.html">--}}
{{--                                                Handmade Golden Necklace</a></h5>--}}
{{--                                        <div class="price-box">--}}
{{--                                            <span class="price-regular">$20.00</span>--}}
{{--                                            <span class="price-old"><del>$30.00</del></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- group list item end -->--}}

{{--                            <!-- group list item start -->--}}
{{--                            <div class="group-slide-item">--}}
{{--                                <div class="group-item">--}}
{{--                                    <div class="group-item-thumb">--}}
{{--                                        <a href="product-details.html">--}}
{{--                                            <img src="layout/img/product/product-13.jpg" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="group-item-desc">--}}
{{--                                        <h5 class="group-product-name"><a href="product-details.html">--}}
{{--                                                Handmade Golden ring</a></h5>--}}
{{--                                        <div class="price-box">--}}
{{--                                            <span class="price-regular">$55.00</span>--}}
{{--                                            <span class="price-old"><del>$30.00</del></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- group list item end -->--}}

{{--                            <!-- group list item start -->--}}
{{--                            <div class="group-slide-item">--}}
{{--                                <div class="group-item">--}}
{{--                                    <div class="group-item-thumb">--}}
{{--                                        <a href="product-details.html">--}}
{{--                                            <img src="layout/img/product/product-15.jpg" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="group-item-desc">--}}
{{--                                        <h5 class="group-product-name"><a href="product-details.html">--}}
{{--                                                exclusive gold Jewelry</a></h5>--}}
{{--                                        <div class="price-box">--}}
{{--                                            <span class="price-regular">$45.00</span>--}}
{{--                                            <span class="price-old"><del>$25.00</del></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- group list item end -->--}}

{{--                            <!-- group list item start -->--}}
{{--                            <div class="group-slide-item">--}}
{{--                                <div class="group-item">--}}
{{--                                    <div class="group-item-thumb">--}}
{{--                                        <a href="product-details.html">--}}
{{--                                            <img src="layout/img/product/product-17.jpg" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="group-item-desc">--}}
{{--                                        <h5 class="group-product-name"><a href="product-details.html">--}}
{{--                                                Handmade Golden Necklace</a></h5>--}}
{{--                                        <div class="price-box">--}}
{{--                                            <span class="price-regular">$50.00</span>--}}
{{--                                            <span class="price-old"><del>$29.99</del></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- group list item end -->--}}

{{--                            <!-- group list item start -->--}}
{{--                            <div class="group-slide-item">--}}
{{--                                <div class="group-item">--}}
{{--                                    <div class="group-item-thumb">--}}
{{--                                        <a href="product-details.html">--}}
{{--                                            <img src="layout/img/product/product-16.jpg" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="group-item-desc">--}}
{{--                                        <h5 class="group-product-name"><a href="product-details.html">--}}
{{--                                                Handmade Golden Necklaces</a></h5>--}}
{{--                                        <div class="price-box">--}}
{{--                                            <span class="price-regular">$55.00</span>--}}
{{--                                            <span class="price-old"><del>$30.00</del></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- group list item end -->--}}

{{--                            <!-- group list item start -->--}}
{{--                            <div class="group-slide-item">--}}
{{--                                <div class="group-item">--}}
{{--                                    <div class="group-item-thumb">--}}
{{--                                        <a href="product-details.html">--}}
{{--                                            <img src="layout/img/product/product-12.jpg" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="group-item-desc">--}}
{{--                                        <h5 class="group-product-name"><a href="product-details.html">--}}
{{--                                                exclusive silver top bracellet</a></h5>--}}
{{--                                        <div class="price-box">--}}
{{--                                            <span class="price-regular">$45.00</span>--}}
{{--                                            <span class="price-old"><del>$25.00</del></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- group list item end -->--}}

{{--                            <!-- group list item start -->--}}
{{--                            <div class="group-slide-item">--}}
{{--                                <div class="group-item">--}}
{{--                                    <div class="group-item-thumb">--}}
{{--                                        <a href="product-details.html">--}}
{{--                                            <img src="layout/img/product/product-11.jpg" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="group-item-desc">--}}
{{--                                        <h5 class="group-product-name"><a href="product-details.html">--}}
{{--                                                top Perfect Diamond necklace</a></h5>--}}
{{--                                        <div class="price-box">--}}
{{--                                            <span class="price-regular">$50.00</span>--}}
{{--                                            <span class="price-old"><del>$29.99</del></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- group list item end -->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        <!-- group product end -->

        <!-- product banner statistics area start -->
{{--        <section class="product-banner-statistics section-padding pt-0">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="product-banner-carousel slick-row-10">--}}
{{--                            <!-- banner single slide start -->--}}
{{--                            <div class="banner-slide-item">--}}
{{--                                <figure class="banner-statistics">--}}
{{--                                    <a href="#">--}}
{{--                                        <img src="layout/img/banner/img1-middle.jpg" alt="product banner">--}}
{{--                                    </a>--}}
{{--                                    <div class="banner-content banner-content_style2">--}}
{{--                                        <h5 class="banner-text3"><a href="#">????????????????</a></h5>--}}
{{--                                    </div>--}}
{{--                                </figure>--}}
{{--                            </div>--}}
{{--                            <!-- banner single slide start -->--}}
{{--                            <!-- banner single slide start -->--}}
{{--                            <div class="banner-slide-item">--}}
{{--                                <figure class="banner-statistics">--}}
{{--                                    <a href="#">--}}
{{--                                        <img src="layout/img/banner/img2-middle.jpg" alt="product banner">--}}
{{--                                    </a>--}}
{{--                                    <div class="banner-content banner-content_style2">--}}
{{--                                        <h5 class="banner-text3"><a href="#">????????????????</a></h5>--}}
{{--                                    </div>--}}
{{--                                </figure>--}}
{{--                            </div>--}}
{{--                            <!-- banner single slide start -->--}}
{{--                            <!-- banner single slide start -->--}}
{{--                            <div class="banner-slide-item">--}}
{{--                                <figure class="banner-statistics">--}}
{{--                                    <a href="#">--}}
{{--                                        <img src="layout/img/banner/img3-middle.jpg" alt="product banner">--}}
{{--                                    </a>--}}
{{--                                    <div class="banner-content banner-content_style2">--}}
{{--                                        <h5 class="banner-text3"><a href="#">????????????</a></h5>--}}
{{--                                    </div>--}}
{{--                                </figure>--}}
{{--                            </div>--}}
{{--                            <!-- banner single slide start -->--}}
{{--                            <!-- banner single slide start -->--}}
{{--                            <div class="banner-slide-item">--}}
{{--                                <figure class="banner-statistics">--}}
{{--                                    <a href="#">--}}
{{--                                        <img src="layout/img/banner/img4-middle.jpg" alt="product banner">--}}
{{--                                    </a>--}}
{{--                                    <div class="banner-content banner-content_style2">--}}
{{--                                        <h5 class="banner-text3"><a href="#">??????????</a></h5>--}}
{{--                                    </div>--}}
{{--                                </figure>--}}
{{--                            </div>--}}
{{--                            <!-- banner single slide start -->--}}
{{--                            <!-- banner single slide start -->--}}
{{--                            <div class="banner-slide-item">--}}
{{--                                <figure class="banner-statistics">--}}
{{--                                    <a href="#">--}}
{{--                                        <img src="layout/img/banner/img5-middle.jpg" alt="product banner">--}}
{{--                                    </a>--}}
{{--                                    <div class="banner-content banner-content_style2">--}}
{{--                                        <h5 class="banner-text3"><a href="#">????????</a></h5>--}}
{{--                                    </div>--}}
{{--                                </figure>--}}
{{--                            </div>--}}
{{--                            <!-- banner single slide start -->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        <!-- product banner statistics area end -->
    </main>

@endsection
