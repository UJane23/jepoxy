@extends('layout.main')

@section('page_content')

    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/catalog">Каталог</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Описание изделия</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- page main wrapper start -->
    <form method="post" action="{{route('product_detail', isset($item->id) ? $item->id : 0)}}" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="shop-main-wrapper section-padding pb-0">
            <div class="container">
                <div class="row">
                    <!-- product details wrapper start -->
                    <div class="col-lg-12 order-1 order-lg-2">
                        <!-- product details inner end -->
                        <div class="product-details-inner">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="product-large-slider">
                                        <div class="pro-large-img img-zoom">
                                            <img src="{{ \Storage::url($item->image_url)  }}" alt="product-details" />
                                        </div>
{{--                                        <div class="pro-large-img img-zoom">--}}
{{--                                            <img src="/layout/img/product/product-details-img2.jpg" alt="product-details" />--}}
{{--                                        </div>--}}
{{--                                        <div class="pro-large-img img-zoom">--}}
{{--                                            <img src="/layout/img/product/product-details-img3.jpg" alt="product-details" />--}}
{{--                                        </div>--}}
{{--                                        <div class="pro-large-img img-zoom">--}}
{{--                                            <img src="/layout/img/product/product-details-img4.jpg" alt="product-details" />--}}
{{--                                        </div>--}}
{{--                                        <div class="pro-large-img img-zoom">--}}
{{--                                            <img src="/layout/img/product/product-details-img5.jpg" alt="product-details" />--}}
{{--                                        </div>--}}
                                    </div>
{{--                                    <div class="pro-nav slick-row-10 slick-arrow-style">--}}
{{--                                        <div class="pro-nav-thumb">--}}
{{--                                            <img src="/layout/img/product/product-details-img1.jpg" alt="product-details" />--}}
{{--                                        </div>--}}
{{--                                        <div class="pro-nav-thumb">--}}
{{--                                            <img src="/layout/img/product/product-details-img2.jpg" alt="product-details" />--}}
{{--                                        </div>--}}
{{--                                        <div class="pro-nav-thumb">--}}
{{--                                            <img src="/layout/img/product/product-details-img3.jpg" alt="product-details" />--}}
{{--                                        </div>--}}
{{--                                        <div class="pro-nav-thumb">--}}
{{--                                            <img src="/layout/img/product/product-details-img4.jpg" alt="product-details" />--}}
{{--                                        </div>--}}
{{--                                        <div class="pro-nav-thumb">--}}
{{--                                            <img src="/layout/img/product/product-details-img5.jpg" alt="product-details" />--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                                <div class="col-lg-7">
                                    <div class="product-details-des">
                                        <div class="manufacturer-name">
                                            <a href="{{ route('show_by_category', ['href_category' => $item->category === null ? "" : $item->category->href_category]) }}">{{$item->category === null ? "" :$item->category->name}}</a>
                                        </div>
                                        <h3 class="product-name">{{$item->name}}</h3>
                                        <div class="pro">
                                            <span>Артикул: {{$item->article}}</span>
                                        </div>
                                        <div class="price-box">
                                            <span class="price-regular">{{$item->price}} р</span>
                                        </div>
                                        <div class="availability">
                                            <i class="fa fa-check-circle"></i>
                                            <span>{{$item->availability}} шт.</span>
                                        </div>
                                        <p class="pro-desc">{{$item->description}}</p>
{{--                                        <div class="quantity-cart-box d-flex align-items-center">--}}
{{--                                            <h6 class="option-title">qty:</h6>--}}
{{--                                            <div class="quantity">--}}
{{--                                                <div class="pro-qty"><input type="text" value="1"></div>--}}
{{--                                            </div>--}}
{{--                                            <div class="action_link">--}}
{{--                                                <a class="btn btn-cart2" href="#">Add to cart</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}


{{--                                        <table class="table table-bordered group-product-table">--}}
{{--                                            <tbody>--}}
{{--                                            <tr class="text-center">--}}
{{--                                                <td>Размер</td>--}}
{{--                                                <td><a href="#">Necklace</a></td>--}}
{{--                                                <td>$120</td>--}}
{{--                                            </tr>--}}
{{--                                            <tr class="text-center">--}}
{{--                                                <td>Материалы</td>--}}
{{--                                                <td><a href="#">Earrings</a></td>--}}
{{--                                                <td>$100</td>--}}
{{--                                            </tr>--}}
{{--                                            </tbody>--}}
{{--                                        </table>--}}

                                        <div class="tab-pane fade show" id="tab_two">
                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td style="max-width:100px">Размер</td>
                                                    <td style="width:600px">{{$item->size}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Материалы</td>
                                                    <td>{{$item->material}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

{{--                                        <div class="tab-content reviews-tab">--}}
{{--                                            <div class="tab-pane fade" id="tab_one">--}}
{{--                                                <div class="tab-one">--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam--}}
{{--                                                        fringilla augue nec est tristique auctor. Ipsum metus feugiat--}}
{{--                                                        sem, quis fermentum turpis eros eget velit. Donec ac tempus--}}
{{--                                                        ante. Fusce ultricies massa massa. Fusce aliquam, purus eget--}}
{{--                                                        sagittis vulputate, sapien libero hendrerit est, sed commodo--}}
{{--                                                        augue nisi non neque.Cras neque metus, consequat et blandit et,--}}
{{--                                                        luctus a nunc. Etiam gravida vehicula tellus, in imperdiet--}}
{{--                                                        ligula euismod eget. Pellentesque habitant morbi tristique--}}
{{--                                                        senectus et netus et malesuada fames ac turpis egestas. Nam--}}
{{--                                                        erat mi, rutrum at sollicitudin rhoncus</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="tab-pane fade" id="tab_three">--}}

{{--                                                <h5>1 review for <span>Chaz Kangeroo</span></h5>--}}
{{--                                                <div class="total-reviews">--}}
{{--                                                    <div class="rev-avatar">--}}
{{--                                                        <img src="/layout/img/about/avatar.jpg" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="review-box">--}}
{{--                                                        <div class="ratings">--}}
{{--                                                            <span class="good"><i class="fa fa-star"></i></span>--}}
{{--                                                            <span class="good"><i class="fa fa-star"></i></span>--}}
{{--                                                            <span class="good"><i class="fa fa-star"></i></span>--}}
{{--                                                            <span class="good"><i class="fa fa-star"></i></span>--}}
{{--                                                            <span><i class="fa fa-star"></i></span>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="post-author">--}}
{{--                                                            <p><span>admin -</span> 30 Mar, 2019</p>--}}
{{--                                                        </div>--}}
{{--                                                        <p>Aliquam fringilla euismod risus ac bibendum. Sed sit--}}
{{--                                                            amet sem varius ante feugiat lacinia. Nunc ipsum nulla,--}}
{{--                                                            vulputate ut venenatis vitae, malesuada ut mi. Quisque--}}
{{--                                                            iaculis, dui congue placerat pretium, augue erat--}}
{{--                                                            accumsan lacus</p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <div class="col">--}}
{{--                                                        <label class="col-form-label"><span class="text-danger">*</span>--}}
{{--                                                            Your Name</label>--}}
{{--                                                        <input type="text" class="form-control" required="">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <div class="col">--}}
{{--                                                        <label class="col-form-label"><span class="text-danger">*</span>--}}
{{--                                                            Your Email</label>--}}
{{--                                                        <input type="email" class="form-control" required="">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <div class="col">--}}
{{--                                                        <label class="col-form-label"><span class="text-danger">*</span>--}}
{{--                                                            Your Review</label>--}}
{{--                                                        <textarea class="form-control" required=""></textarea>--}}
{{--                                                        <div class="help-block pt-10"><span class="text-danger">Note:</span>--}}
{{--                                                            HTML is not translated!--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-group row">--}}
{{--                                                    <div class="col">--}}
{{--                                                        <label class="col-form-label"><span class="text-danger">*</span>--}}
{{--                                                            Rating</label>--}}
{{--                                                        &nbsp;&nbsp;&nbsp; Bad&nbsp;--}}
{{--                                                        <input type="radio" value="1" name="rating">--}}
{{--                                                        &nbsp;--}}
{{--                                                        <input type="radio" value="2" name="rating">--}}
{{--                                                        &nbsp;--}}
{{--                                                        <input type="radio" value="3" name="rating">--}}
{{--                                                        &nbsp;--}}
{{--                                                        <input type="radio" value="4" name="rating">--}}
{{--                                                        &nbsp;--}}
{{--                                                        <input type="radio" value="5" name="rating" checked="">--}}
{{--                                                        &nbsp;Good--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="buttons">--}}
{{--                                                    <button class="btn btn-sqr" type="submit">Continue</button>--}}
{{--                                                </div>--}}
{{--                                                <!-- end of review-form -->--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="useful-links">--}}
{{--                                            <a href="#" data-toggle="tooltip" title="Compare"><i--}}
{{--                                                    class="pe-7s-refresh-2"></i>compare</a>--}}
{{--                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i--}}
{{--                                                    class="pe-7s-like"></i>wishlist</a>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product details inner end -->

                        <!-- product details reviews start -->
{{--                        <div class="product-details-reviews section-padding pb-0">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-12">--}}
{{--                                    <div class="product-review-info">--}}
{{--                                        <ul class="nav review-tab">--}}
{{--                                            <li>--}}
{{--                                                <a class="active" data-toggle="tab" href="#tab_one">description</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a data-toggle="tab" href="#tab_two">information</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a data-toggle="tab" href="#tab_three">reviews (1)</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                        <div class="tab-content reviews-tab">--}}
{{--                                            <div class="tab-pane fade show active" id="tab_one">--}}
{{--                                                <div class="tab-one">--}}
{{--                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam--}}
{{--                                                        fringilla augue nec est tristique auctor. Ipsum metus feugiat--}}
{{--                                                        sem, quis fermentum turpis eros eget velit. Donec ac tempus--}}
{{--                                                        ante. Fusce ultricies massa massa. Fusce aliquam, purus eget--}}
{{--                                                        sagittis vulputate, sapien libero hendrerit est, sed commodo--}}
{{--                                                        augue nisi non neque.Cras neque metus, consequat et blandit et,--}}
{{--                                                        luctus a nunc. Etiam gravida vehicula tellus, in imperdiet--}}
{{--                                                        ligula euismod eget. Pellentesque habitant morbi tristique--}}
{{--                                                        senectus et netus et malesuada fames ac turpis egestas. Nam--}}
{{--                                                        erat mi, rutrum at sollicitudin rhoncus</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="tab-pane fade" id="tab_two">--}}
{{--                                                <table class="table table-bordered">--}}
{{--                                                    <tbody>--}}
{{--                                                    <tr>--}}
{{--                                                        <td>color</td>--}}
{{--                                                        <td>black, blue, red</td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td>size</td>--}}
{{--                                                        <td>L, M, S</td>--}}
{{--                                                    </tr>--}}
{{--                                                    </tbody>--}}
{{--                                                </table>--}}
{{--                                            </div>--}}
{{--                                            <div class="tab-pane fade" id="tab_three">--}}
{{--                                                <form action="#" class="review-form">--}}
{{--                                                    <h5>1 review for <span>Chaz Kangeroo</span></h5>--}}
{{--                                                    <div class="total-reviews">--}}
{{--                                                        <div class="rev-avatar">--}}
{{--                                                            <img src="/layout/img/about/avatar.jpg" alt="">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="review-box">--}}
{{--                                                            <div class="ratings">--}}
{{--                                                                <span class="good"><i class="fa fa-star"></i></span>--}}
{{--                                                                <span class="good"><i class="fa fa-star"></i></span>--}}
{{--                                                                <span class="good"><i class="fa fa-star"></i></span>--}}
{{--                                                                <span class="good"><i class="fa fa-star"></i></span>--}}
{{--                                                                <span><i class="fa fa-star"></i></span>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="post-author">--}}
{{--                                                                <p><span>admin -</span> 30 Mar, 2019</p>--}}
{{--                                                            </div>--}}
{{--                                                            <p>Aliquam fringilla euismod risus ac bibendum. Sed sit--}}
{{--                                                                amet sem varius ante feugiat lacinia. Nunc ipsum nulla,--}}
{{--                                                                vulputate ut venenatis vitae, malesuada ut mi. Quisque--}}
{{--                                                                iaculis, dui congue placerat pretium, augue erat--}}
{{--                                                                accumsan lacus</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="form-group row">--}}
{{--                                                        <div class="col">--}}
{{--                                                            <label class="col-form-label"><span class="text-danger">*</span>--}}
{{--                                                                Your Name</label>--}}
{{--                                                            <input type="text" class="form-control" required>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="form-group row">--}}
{{--                                                        <div class="col">--}}
{{--                                                            <label class="col-form-label"><span class="text-danger">*</span>--}}
{{--                                                                Your Email</label>--}}
{{--                                                            <input type="email" class="form-control" required>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="form-group row">--}}
{{--                                                        <div class="col">--}}
{{--                                                            <label class="col-form-label"><span class="text-danger">*</span>--}}
{{--                                                                Your Review</label>--}}
{{--                                                            <textarea class="form-control" required></textarea>--}}
{{--                                                            <div class="help-block pt-10"><span--}}
{{--                                                                    class="text-danger">Note:</span>--}}
{{--                                                                HTML is not translated!--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="form-group row">--}}
{{--                                                        <div class="col">--}}
{{--                                                            <label class="col-form-label"><span class="text-danger">*</span>--}}
{{--                                                                Rating</label>--}}
{{--                                                            &nbsp;&nbsp;&nbsp; Bad&nbsp;--}}
{{--                                                            <input type="radio" value="1" name="rating">--}}
{{--                                                            &nbsp;--}}
{{--                                                            <input type="radio" value="2" name="rating">--}}
{{--                                                            &nbsp;--}}
{{--                                                            <input type="radio" value="3" name="rating">--}}
{{--                                                            &nbsp;--}}
{{--                                                            <input type="radio" value="4" name="rating">--}}
{{--                                                            &nbsp;--}}
{{--                                                            <input type="radio" value="5" name="rating" checked>--}}
{{--                                                            &nbsp;Good--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="buttons">--}}
{{--                                                        <button class="btn btn-sqr" type="submit">Continue</button>--}}
{{--                                                    </div>--}}
{{--                                                </form> <!-- end of review-form -->--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <!-- product details reviews end -->
                    </div>
                    <!-- product details wrapper end -->
                </div>
            </div>
        </div>
        <!-- page main wrapper end -->

        <!-- related products area start -->
        <section class="related-products section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- section title start -->
                        <div class="section-title text-center">
                            <h2 class="title">Больше изделий</h2>
{{--                            <p class="sub-title">Add related products to weekly lineup</p>--}}
                        </div>
                        <!-- section title start -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-carousel-4 slick-row-10 slick-arrow-style">
                        @foreach($products->random(5) as $product)
                            <!-- product item start -->
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="/catalog/product_detail/{{$product->id}}">
                                        <img class="pri-img" src="{{ \Storage::url($product->image_url)  }}" alt="product">
                                        <img class="sec-img" src="{{ \Storage::url($product->image_url)  }}" alt="product">
                                    </a>
{{--                                    <div class="product-badge">--}}
{{--                                        <div class="product-label new">--}}
{{--                                            <span>new</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-label discount">--}}
{{--                                            <span>10%</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="button-group">--}}
{{--                                        <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>--}}
{{--                                        <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>--}}
{{--                                        <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="cart-hover">--}}
{{--                                        <button class="btn btn-cart">add to cart</button>--}}
{{--                                    </div>--}}
                                </figure>
                                <div class="product-caption text-center">
                                    <div class="product-identity">
                                        <p class="manufacturer-name">{{$product->category === null ? ‘’ :$product->category->name}}</p>
                                    </div>
                                    <div class="pro">
                                        <span>Арт. {{$product->article}}</span>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="/catalog/product_detail/{{$product->id}}">{{$product->name}}</a>
                                    </h6>
                                    <div class="price-box">
                                        <span class="price-regular">{{$product->price}} р</span>
                                    </div>
                                </div>
                            </div>
                            <!-- product item end -->
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- related products area end -->

    </form>
@endsection
