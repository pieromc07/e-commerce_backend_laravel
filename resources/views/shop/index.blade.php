@extends('shop.template.template')


@section('content')
    <!--MAIN SLIDE-->
    <div class="wrap-main-slide">
        <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">

            <div class="item-slide">
                <img src="shop/assets/images/main-slider-1-1.jpg" alt="" class="img-slide">
                <div class="slide-info slide-1">
                    <h2 class="f-title">Kid Smart <b>Watches</b></h2>
                    <span class="subtitle">Compra todos tus productos Smart por internet.</span>
                    <p class="sale-info">Only price: <span class="price">$59.99</span></p>
                    <a href="{{ route('shop.shop') }}" class="btn-link">Shop Now</a>
                </div>
            </div>
            <div class="item-slide">
                <img src="shop/assets/images/main-slider-1-2.jpg" alt="" class="img-slide">
                <div class="slide-info slide-2">
                    <h2 class="f-title">Extra 25% Off</h2>
                    <span class="f-subtitle">On online payments</span>
                    <p class="discount-code">Use Code: #FA6868</p>
                    <h4 class="s-title">Get Free</h4>
                    <p class="s-subtitle">TRansparent Bra Straps</p>
                </div>
            </div>
            <div class="item-slide">
                <img src="shop/assets/images/main-slider-2-1.jpg" alt="" class="img-slide">
                <div class="slide-info slide-3">
                    <h2 class="f-title">Great Range of <b>Exclusive Furniture Packages</b></h2>
                    <span class="f-subtitle">Exclusive Furniture Packages to Suit every need.</span>
                    <p class="sale-info">Stating at: <b class="price">$225.00</b></p>
                    <a href="{{ route('shop.shop') }}" class="btn-link">Shop Now</a>
                </div>
            </div>
        </div>
    </div>

    <!--BANNER-->
    <div class="wrap-banner style-twin-default">
        <div class="banner-item">
            <a href="{{ route('shop.shop') }}" class="link-banner banner-effect-1">
                <figure><img src="shop/assets/images/home-1-banner-1.jpg" alt="" width="580" height="190"></figure>
            </a>
        </div>
        <div class="banner-item">
            <a href="{{ route('shop.shop') }}" class="link-banner banner-effect-1">
                <figure><img src="shop/assets/images/home-1-banner-2.jpg" alt="" width="580" height="190"></figure>
            </a>
        </div>
    </div>

    <!--On Sale-->
    <div class="wrap-show-advance-info-box style-1 has-countdown">
        <h3 class="title-box">On Sale</h3>
        <div class="wrap-countdown mercado-countdown" data-expire="2020/12/12 12:34:56"></div>
        <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false"
            data-nav="true" data-dots="false"
            data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

            @if ($showroom_products->count() > 0)
                @foreach ($showroom_products as $show)

                    @if ($show->showroom->name == 'ON SALE')
                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="{{ route('shop.details', ['id' => $show->product->id]) }}"
                                    title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ $show->product->image }}" width="800" height="800"
                                            alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                                <div class="group-flash">
                                    <span class="flash-item sale-label">sale</span>
                                </div>
                                <div class="wrap-btn">
                                    <a href="{{ route('shop.details', ['id' => $show->product->id]) }}"
                                        class="function-link">quick
                                        view</a>
                                </div>
                            </div>
                            <div class="product-info">
                                <p class="product-name"><span>{{ $show->product->name }}</span></p>
                                <div class="wrap-price"><span
                                        class="product-price">{{ $show->product->price }}</span>
                                </div>
                            </div>
                        </div>
                    @endif

                @endforeach
            @else
                <div class="product product-style-2 equal-elem ">
                    <div class="product-thumnail">
                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                            <figure><img src="shop/assets/images/products/tools_equipment_7.jpg" width="800" height="800"
                                    alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                        </a>
                        <div class="group-flash">
                            <span class="flash-item sale-label">sale</span>
                        </div>
                        <div class="wrap-btn">
                            <a href="#" class="function-link">quick view</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                [White]</span></a>
                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                    </div>
                </div>

                <div class="product product-style-2 equal-elem ">
                    <div class="product-thumnail">
                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                            <figure><img src="shop/assets/images/products/digital_18.jpg" width="800" height="800" alt="">
                            </figure>
                        </a>
                        <div class="group-flash">
                            <span class="flash-item sale-label">sale</span>
                        </div>
                        <div class="wrap-btn">
                            <a href="#" class="function-link">quick view</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                [White]</span></a>
                        <div class="wrap-price"><ins>
                                <p class="product-price">$168.00</p>
                            </ins> <del>
                                <p class="product-price">$250.00</p>
                            </del></div>
                    </div>
                </div>

                <div class="product product-style-2 equal-elem ">
                    <div class="product-thumnail">
                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                            <figure><img src="shop/assets/images/products/fashion_08.jpg" width="800" height="800"
                                    alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                        </a>
                        <div class="group-flash">
                            <span class="flash-item sale-label">sale</span>
                        </div>
                        <div class="wrap-btn">
                            <a href="#" class="function-link">quick view</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                [White]</span></a>
                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                    </div>
                </div>

                <div class="product product-style-2 equal-elem ">
                    <div class="product-thumnail">
                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                            <figure><img src="shop/assets/images/products/digital_17.jpg" width="800" height="800" alt="">
                            </figure>
                        </a>
                        <div class="group-flash">
                            <span class="flash-item sale-label">sale</span>
                        </div>
                        <div class="wrap-btn">
                            <a href="#" class="function-link">quick view</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                [White]</span></a>
                        <div class="wrap-price"><ins>
                                <p class="product-price">$168.00</p>
                            </ins> <del>
                                <p class="product-price">$250.00</p>
                            </del></div>
                    </div>
                </div>

                <div class="product product-style-2 equal-elem ">
                    <div class="product-thumnail">
                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                            <figure><img src="shop/assets/images/products/tools_equipment_3.jpg" width="800" height="800"
                                    alt="">
                            </figure>
                        </a>
                        <div class="group-flash">
                            <span class="flash-item sale-label">sale</span>
                        </div>
                        <div class="wrap-btn">
                            <a href="#" class="function-link">quick view</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                [White]</span></a>
                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                    </div>
                </div>

                <div class="product product-style-2 equal-elem ">
                    <div class="product-thumnail">
                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                            <figure><img src="shop/assets/images/products/fashion_05.jpg" width="800" height="800"
                                    alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                        </a>
                        <div class="group-flash">
                            <span class="flash-item sale-label">sale</span>
                        </div>
                        <div class="wrap-btn">
                            <a href="#" class="function-link">quick view</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                [White]</span></a>
                        <div class="wrap-price"><ins>
                                <p class="product-price">$168.00</p>
                            </ins> <del>
                                <p class="product-price">$250.00</p>
                            </del></div>
                    </div>
                </div>

                <div class="product product-style-2 equal-elem ">
                    <div class="product-thumnail">
                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                            <figure><img src="shop/assets/images/products/digital_04.jpg" width="800" height="800"
                                    alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                        </a>
                        <div class="group-flash">
                            <span class="flash-item sale-label">sale</span>
                        </div>
                        <div class="wrap-btn">
                            <a href="#" class="function-link">quick view</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                [White]</span></a>
                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                    </div>
                </div>

                <div class="product product-style-2 equal-elem ">
                    <div class="product-thumnail">
                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                            <figure><img src="shop/assets/images/products/kidtoy_05.jpg" width="800" height="800"
                                    alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                        </a>
                        <div class="group-flash">
                            <span class="flash-item sale-label">sale</span>
                        </div>
                        <div class="wrap-btn">
                            <a href="#" class="function-link">quick view</a>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                [White]</span></a>
                        <div class="wrap-price"><ins>
                                <p class="product-price">$168.00</p>
                            </ins> <del>
                                <p class="product-price">$250.00</p>
                            </del></div>
                    </div>
                </div>
            @endif


        </div>
    </div>
    <!--end on sale -->
    <!--Latest Products-->
    <div class="wrap-show-advance-info-box style-1">
        <h3 class="title-box">Latest Products</h3>
        <div class="wrap-top-banner">
            <a href="{{ route('shop.shop') }}" class="link-banner banner-effect-2">
                <figure><img src="shop/assets/images/digital-electronic-banner.jpg" width="1170" height="240" alt="">
                </figure>
            </a>
        </div>
        <div class="wrap-products">
            <div class="wrap-product-tab tab-style-1">
                <div class="tab-contents">
                    <div class="tab-content-item active" id="digital_1a">
                        <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5"
                            data-loop="false" data-nav="true" data-dots="false"
                            data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                            @if ($showroom_products->count() > 0)
                                @foreach ($showroom_products as $show)
                                    @if ($show->name == 'MOST VIEWED PRODUCT')
                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="{{ route('shop.details', ['id' => $show->product->id]) }}"
                                                    title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ $show->product->image }}" width="800"
                                                            height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    </figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="{{ route('shop.details', ['id' => $show->product->id]) }}"
                                                        class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <p class="product-name">
                                                    <span>
                                                        {{ $show->product->name }}
                                                    </span>
                                                </p>
                                                <div class="wrap-price">
                                                    <span class="product-price">
                                                        {{ $show->product->price }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @else
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="shop/assets/images/products/digital_04.jpg" width="800"
                                                    height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            </figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item new-label">new</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="shop/assets/images/products/digital_17.jpg" width="800"
                                                    height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            </figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item sale-label">sale</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker [White]</span></a>
                                        <div class="wrap-price"><ins>
                                                <p class="product-price">$168.00</p>
                                            </ins> <del>
                                                <p class="product-price">$250.00</p>
                                            </del></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="shop/assets/images/products/digital_15.jpg" width="800"
                                                    height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            </figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item new-label">new</span>
                                            <span class="flash-item sale-label">sale</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker [White]</span></a>
                                        <div class="wrap-price"><ins>
                                                <p class="product-price">$168.00</p>
                                            </ins> <del>
                                                <p class="product-price">$250.00</p>
                                            </del></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="shop/assets/images/products/digital_01.jpg" width="800"
                                                    height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            </figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item bestseller-label">Bestseller</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="shop/assets/images/products/digital_21.jpg" width="800"
                                                    height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            </figure>
                                        </a>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="shop/assets/images/products/digital_03.jpg" width="800"
                                                    height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            </figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item sale-label">sale</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker [White]</span></a>
                                        <div class="wrap-price"><ins>
                                                <p class="product-price">$168.00</p>
                                            </ins> <del>
                                                <p class="product-price">$250.00</p>
                                            </del></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="shop/assets/images/products/digital_04.jpg" width="800"
                                                    height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            </figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item new-label">new</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                    </div>
                                </div>

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="shop/assets/images/products/digital_05.jpg" width="800"
                                                    height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            </figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item bestseller-label">Bestseller</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                                Speaker [White]</span></a>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Product Categories-->
    <div class="wrap-show-advance-info-box style-1">
        <h3 class="title-box">Product Categories</h3>
        <div class="wrap-top-banner">
            <a href="{{ route('shop.shop') }}" class="link-banner banner-effect-2">
                <figure><img src="shop/assets/images/fashion-accesories-banner.jpg" width="1170" height="240" alt="">
                </figure>
            </a>
        </div>
        <div class="wrap-products">
            <div class="wrap-product-tab tab-style-1">
                <div class="tab-control">
                    @foreach ($categories as $key => $category)
                        @if ($key == 0)
                            <a href="#{{ $category->name }}"
                                class="tab-control-item active">{{ $category->name }}</a>
                        @else
                            <a href="#{{ $category->name }}" class="tab-control-item">{{ $category->name }}</a>
                        @endif
                    @endforeach
                </div>
                <div class="tab-contents">

                    @foreach ($categories as $key => $category)
                        @if ($key == 0)
                            <div class="tab-content-item active" id="{{ $category->name }}">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                    @foreach ($subcategories as $subcategory)
                                        @if ($category->id == $subcategory->category->id)
                                            @foreach ($products as $product)
                                                @if ($subcategory->id == $product->subcategory_id)
                                                    <div class="product product-style-2 equal-elem ">
                                                        <div class="product-thumnail">
                                                            <a href="{{ route('shop.details', ['id' => $product->id]) }}"
                                                                title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                                <figure><img src="{{ $product->image }}" width="800"
                                                                        height="800"
                                                                        alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                                </figure>
                                                            </a>
                                                            <div class="group-flash">
                                                                <span class="flash-item new-label">new</span>
                                                            </div>
                                                            <div class="wrap-btn">
                                                                <a href="{{ route('shop.details', ['id' => $product->id]) }}"
                                                                    class="function-link">quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <p class="product-name"><span>{{ $product->name }}</span>
                                                            </p>
                                                            <div class="wrap-price"><span
                                                                    class="product-price">{{ $product->price }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                        @else
                            <div class="tab-content-item" id="{{ $category->name }}">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="5" data-loop="false" data-nav="true" data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                    @foreach ($subcategories as $subcategory)
                                        @if ($category->id == $subcategory->category->id)
                                            @foreach ($products as $product)
                                                @if ($subcategory->id == $product->subcategory_id)
                                                    <div class="product product-style-2 equal-elem ">
                                                        <div class="product-thumnail">
                                                            <a href="{{ route('shop.details', ['id' => $product->id]) }}"
                                                                title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                                <figure><img src="{{ $product->image }}" width="800"
                                                                        height="800"
                                                                        alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                                </figure>
                                                            </a>
                                                            <div class="group-flash">
                                                                <span class="flash-item new-label">new</span>
                                                            </div>
                                                            <div class="wrap-btn">
                                                                <a href="{{ route('shop.details', ['id' => $product->id]) }}"
                                                                    class="function-link">quick view</a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <p class="product-name"><span>{{ $product->name }}</span>
                                                            </p>
                                                            <div class="wrap-price"><span
                                                                    class="product-price">{{ $product->price }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
