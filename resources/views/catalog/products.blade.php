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
                                <li class="breadcrumb-item active" aria-current="page">Каталог</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- page main wrapper start -->
    <div class="shop-main-wrapper section-padding">
        <div class="container">
            <div class="row">
                <!-- sidebar area start -->
                <div class="col-lg-3 order-2 order-lg-1">
                    <aside class="sidebar-wrapper">
                        <!-- single sidebar start -->
                        <div class="sidebar-single">
                            <h5 class="sidebar-title">Категории</h5>
                            <div class="sidebar-body">
                                <ul class="shop-categories">

                                    @foreach($categories as $category)
                                        <li><a href="{{ route('show_by_category', array_merge(request()->input(), ['href_category' => $category->href_category])) }}">{{$category->name}}
                                            <span>
                                               ({{$category_data[$category->id] ?? 0}})
                                            </span></a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <!-- single sidebar end -->

                        <!-- single sidebar start -->
{{--                        <div class="sidebar-single">--}}
{{--                            <h5 class="sidebar-title">Цена</h5>--}}
{{--                            <div class="sidebar-body">--}}
{{--                                <div class="price-range-wrap">--}}
{{--                                    <div class="price-range" data-min="1" data-max="1000"></div>--}}
{{--                                    <div class="range-slider">--}}
{{--                                        <form action="#" class="d-flex align-items-center justify-content-between">--}}
{{--                                            <div class="price-input">--}}
{{--                                                <label for="amount">Цена: </label>--}}
{{--                                                <input type="text" id="amount">--}}
{{--                                            </div>--}}
{{--                                            <button class="filter-btn">Фильтр</button>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <!-- single sidebar end -->

                        <!-- single sidebar start -->
{{--                        <div class="sidebar-single">--}}
{{--                            <h5 class="sidebar-title">Тип изделия</h5>--}}
{{--                            <div class="sidebar-body">--}}
{{--                                <ul class="checkbox-container categories-list">--}}
{{--                                    <li>--}}
{{--                                        <div class="custom-control custom-checkbox">--}}
{{--                                            <input type="checkbox" class="custom-control-input" id="customCheck2">--}}
{{--                                            <label class="custom-control-label" for="customCheck2">Все (3)</label>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}

{{--                                    @foreach($types as $type)--}}
{{--                                        <li>--}}
{{--                                            <div class="custom-control custom-checkbox">--}}
{{--                                                <input type="checkbox" class="custom-control-input" id="customCheck2">--}}
{{--                                                <label class="custom-control-label" for="customCheck2">{{$type->name}}(3)</label>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    @endforeach--}}

{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <!-- single sidebar end -->

                        <!-- single sidebar start -->
                        <div class="sidebar-banner">
                            <div class="img-container">
                                <a href="#">
                                    <img src="/images/sidebar-banner.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- single sidebar end -->
                    </aside>
                </div>
                <!-- sidebar area end -->

                <!-- shop main wrapper start -->
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="shop-product-wrapper">
                        <!-- shop product top wrap start -->
                        <div class="shop-top-bar">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-6 order-2 order-md-1">
                                    <div class="top-bar-left">
                                        <div class="product-view-mode">
                                            <a class="active" href="" data-target="grid-view" data-toggle="tooltip" title="Сетка"><i class="fa fa-th"></i></a>
                                            <a href="" data-target="list-view" data-toggle="tooltip" title="Список"><i class="fa fa-list"></i></a>
                                        </div>
                                        <div class="product-amount">

                                            @if ($products->firstItem() !== $products->lastItem())
                                                <span>Показано с {{ $products->firstItem() }} - {{ $products->lastItem() }} из {{$products->total()}}</span>
                                            @elseif ($products->total() == null)
                                                <span>Нет изделий</span>
                                            @else
                                                <span>Показан {{ $products->lastItem() }} из {{$products->total()}} </span>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 order-1 order-md-2">
                                    <div class="top-bar-right">
                                        <div class="product-short">
                                            <p>Сортировка : </p>
                                            <select id="sort_selector" class="nice-select" name="sortby">

                                                @foreach($sort_links as $link)
                                                    <option data-link="{{$link['link']}}" {{ ($link['is_selected'] ? "selected" : "") }}>{{ $link['name'] }}</option>
                                                @endforeach

                                            </select>
                                            <script>
                                                $(function() {
                                                    $("#sort_selector").change(function() {
                                                        window.location = $("#sort_selector option:selected").data("link")
                                                    });
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- shop product top wrap start -->

                        <!-- product item list wrapper start -->
                        <div class="shop-product-wrap grid-view row mbn-30">
                            <!-- product single item start -->

                            @foreach($products as $product)
                            <div class="col-md-4 col-sm-6">
                                <!-- product grid start -->
                                <div class="product-item">
                                    <figure class="product-thumb">
                                        <a href="/catalog/product_detail/{{$product->id}}">
                                            <img class="pri-img" src="{{ \Storage::url($product->image_url) }}" alt="product">
                                            <img class="sec-img" src="{{ \Storage::url($product->image_url) }}" alt="product">
                                        </a>
{{--                                        <div class="button-group">--}}
{{--                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>--}}
{{--                                            <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>--}}
{{--                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="cart-hover">--}}
{{--                                            <button class="btn btn-cart">add to cart</button>--}}
{{--                                        </div>--}}
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
                                <!-- product grid end -->

                                <!-- product list item start -->
                                <div class="product-list-item">
                                    <figure class="product-thumb">
                                        <a href="/catalog/product_detail/{{$product->id}}">
                                            <img class="pri-img" src="{{ \Storage::url($product->image_url) }}" alt="product">
                                            <img class="sec-img" src="{{ \Storage::url($product->image_url) }}" alt="product">
                                        </a>
{{--                                        <div class="button-group">--}}
{{--                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="pe-7s-like"></i></a>--}}
{{--                                            <a href="compare.html" data-toggle="tooltip" data-placement="left" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>--}}
{{--                                            <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="pe-7s-search"></i></span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="cart-hover">--}}
{{--                                            <button class="btn btn-cart">add to cart</button>--}}
{{--                                        </div>--}}
                                    </figure>
                                    <div class="product-content-list">
                                        <div class="manufacturer-name">
                                            <a href="product-details.html">{{$product->category === null ? ‘’ :$product->category->name}}</a>
                                        </div>
                                        <h5 class="product-name"><a href="/catalog/product_detail/{{$product->id}}">{{$product->name}}</a></h5>
                                        <div class="price-box">
                                            <span class="price-regular">{{$product->price}} р</span>
                                        </div>
                                        <p>{{$product->preview_text}}</p>
                                    </div>
                                </div>
                                <!-- product list item end -->
                            </div>
                            @endforeach

                            <!-- product single item start -->
                        </div>
                        <!-- product item list wrapper end -->

                        <!-- start pagination area -->

                        {{ $products->appends(request()->input())->links('pagination') }}

                        <!-- end pagination area -->
                    </div>
                </div>
                <!-- shop main wrapper end -->
            </div>
        </div>
    </div>
    <!-- page main wrapper end -->

@endsection
