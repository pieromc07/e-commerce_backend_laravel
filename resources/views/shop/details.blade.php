@extends('shop.template.template')

@section('content')

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="{{ route('shop.index') }}" class="link">home</a></li>
            <li class="item-link"><span>detail</span></li>
        </ul>
    </div>
    <div class="row">

        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
            <div class="wrap-product-detail">
                <div class="detail-media">
                    <div class="product-gallery">
                        <img src="{{ $product->image }}" alt="product thumbnail" />
                    </div>
                </div>
                <div class="detail-info">
                    <div class="product-rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <a href="#" class="count-review">(05 review)</a>
                    </div>
                    <h2 class="product-name">{{ $product->name }}</h2>
                    <div class="short-desc">
                        <ul>
                            @foreach ($feature_products as $feacture)
                                <li><strong>{{ $feacture->name }} : </strong>
                                    {{ $feacture->description }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    {{-- <div class="wrap-social">
                        <a class="link-socail" href="#"><img src="/shop/assets/images/social-list.png" alt=""></a>
                    </div> --}}
                    <div class="wrap-price"><span class="product-price">$ {{ $product->price }}</span></div>
                    @if ($product->stock > 0)
                        <div class="stock-info in-stock">

                            <p class="availability">Availability: <b>In Stock</b></p>
                        </div>
                    @else
                        <div class="stock-info out-stock">
                            <p class="availability">Availability: <b>Out of Stock</b></p>
                        </div>
                    @endif

                    <div class="quantity">
                        <span>Quantity:</span>
                        <div class="quantity-input">
                            <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*">

                            <a class="btn btn-reduce" href="#"></a>
                            <a class="btn btn-increase" href="#"></a>
                        </div>
                    </div>
                    <div class="wrap-butons">
                        <a href="#" class="btn add-to-cart">Add to Cart</a>
                        <div class="wrap-btn">
                            <a href="#" class="btn btn-compare">Add Compare</a>
                            <a href="#" class="btn btn-wishlist">Add Wishlist</a>
                        </div>
                    </div>
                </div>
                <div class="advance-info">
                    <div class="tab-control normal">
                        <a href="#description" class="tab-control-item active">description</a>
                        <a href="#add_infomation" class="tab-control-item">Addtional Infomation</a>
                    </div>
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="description">
                            <p>
                                {{ $product->description }}
                            </p>
                        </div>
                        <div class="tab-content-item " id="add_infomation">
                            <table class="shop_attributes">
                                <tbody>
                                    @foreach ($feature_products as $feacture)
                                        <tr>
                                            <th>{{ $feacture->name }}</th>
                                            <td class="product_weight">{{ $feacture->description }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end main products area-->

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
            <div class="widget widget-our-services ">
                <div class="widget-content">
                    <ul class="our-services">

                        <li class="service">
                            <a class="link-to-service" href="#">
                                <i class="fa fa-truck" aria-hidden="true"></i>
                                <div class="right-content">
                                    <b class="title">Free Shipping</b>
                                    <span class="subtitle">On Oder Over $99</span>
                                    <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                </div>
                            </a>
                        </li>

                        <li class="service">
                            <a class="link-to-service" href="#">
                                <i class="fa fa-gift" aria-hidden="true"></i>
                                <div class="right-content">
                                    <b class="title">Special Offer</b>
                                    <span class="subtitle">Get a gift!</span>
                                    <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                </div>
                            </a>
                        </li>

                        <li class="service">
                            <a class="link-to-service" href="#">
                                <i class="fa fa-reply" aria-hidden="true"></i>
                                <div class="right-content">
                                    <b class="title">Order Return</b>
                                    <span class="subtitle">Return within 7 days</span>
                                    <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!-- Categories widget-->

            <div class="widget mercado-widget widget-product">
                <h2 class="widget-title">Popular Products</h2>
                <div class="widget-content">
                    <ul class="products">
                        <li class="product-item">
                            <div class="product product-widget-style">
                                <div class="thumbnnail">
                                    <a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                        <figure><img src="/shop/assets/images/products/digital_01.jpg" alt=""></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                            Speaker...</span></a>
                                    <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                </div>
                            </div>
                        </li>

                        <li class="product-item">
                            <div class="product product-widget-style">
                                <div class="thumbnnail">
                                    <a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                        <figure><img src="/shop/assets/images/products/digital_17.jpg" alt=""></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                            Speaker...</span></a>
                                    <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                </div>
                            </div>
                        </li>

                        <li class="product-item">
                            <div class="product product-widget-style">
                                <div class="thumbnnail">
                                    <a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                        <figure><img src="/shop/assets/images/products/digital_18.jpg" alt=""></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                            Speaker...</span></a>
                                    <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                </div>
                            </div>
                        </li>

                        <li class="product-item">
                            <div class="product product-widget-style">
                                <div class="thumbnnail">
                                    <a href="detail.html" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                        <figure><img src="/shop/assets/images/products/digital_20.jpg" alt=""></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                            Speaker...</span></a>
                                    <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
        <!--end sitebar-->

        <div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="wrap-show-advance-info-box style-1 box-in-site">
                <h3 class="title-box">Related Products</h3>
                <div class="wrap-products">
                    <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5"
                        data-loop="false" data-nav="true" data-dots="false"
                        data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}'>

                        @if ($showroom_products->count() > 0)
                            @foreach ($showroom_products as $show)
                                @if ($show->name == 'LATEST PRODUCTS')

                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href={{ route('shop.details', ['id' => $show->product->id]) }}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="{{$show->product->image}}" width="214"
                                                        height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                </figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="{{ route('shop.details', ['id' => $show->product->id]) }}" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <p class="product-name"><span>{{ $show->product->name }}</span></p>
                                            <div class="wrap-price"><span
                                                    class="product-price">{{ $show->product->price }}</span></div>
                                        </div>
                                    </div>
                                @endif


                            @endforeach
                        @else



                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="/shop/assets/images/products/digital_17.jpg" width="214"
                                                height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
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
                                            Speaker
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
                                        <figure><img src="/shop/assets/images/products/digital_15.jpg" width="214"
                                                height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
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
                                            Speaker
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
                                        <figure><img src="/shop/assets/images/products/digital_01.jpg" width="214"
                                                height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
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
                                            Speaker
                                            [White]</span></a>
                                    <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="/shop/assets/images/products/digital_21.jpg" width="214"
                                                height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                    </a>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional
                                            Speaker
                                            [White]</span></a>
                                    <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="/shop/assets/images/products/digital_03.jpg" width="214"
                                                height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
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
                                            Speaker
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
                                        <figure><img src="/shop/assets/images/products/digital_04.jpg" width="214"
                                                height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
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
                                            Speaker
                                            [White]</span></a>
                                    <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="/shop/assets/images/products/digital_05.jpg" width="214"
                                                height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
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
                                            Speaker
                                            [White]</span></a>
                                    <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
                <!--End wrap-products-->
            </div>
        </div>

    </div>
    <!--end row-->

@endsection
