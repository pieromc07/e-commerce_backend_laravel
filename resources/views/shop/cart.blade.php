@extends('shop.template.template')

@section('content')


    <!--main area-->
    <main id="main" class="main-site">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    <li class="item-link"><span>cart</span></li>
                </ul>
            </div>
            <div class="main-content-area">

                <div class="wrap-iten-in-cart">
                    <h3 class="box-title">Products Name</h3>
                    <ul class="products-cart">

                        @foreach ($shopping_cart_items as $item)
                            @foreach ($products as $product)
                                @if ($item->product_id == $product->id)
                                    <li class="pr-cart-item">
                                        <div class="product-image">

                                            <figure>
                                                <img src="{{ $product->image }}" alt="{{ $product->name }}">
                                            </figure>
                                        </div>
                                        <div class="product-name">
                                            <a class="link-to-product"
                                                href="{{ route('shop.details', ['id' => $product->id]) }}">
                                                {{ $product->name }}
                                            </a>
                                        </div>
                                        <div class="price-field produtc-price">
                                            <p class="price">
                                                <span class="price-new"
                                                    id="price{{ $product->id }}">${{ $product->price }}</span>
                                            </p>
                                        </div>
                                        <div class="quantity">
                                            <div class="quantity-input">
                                                <input type="number" name="quantity" value="{{ $item->quantity }}" min="1"
                                                    max="{{ $product->stock }}" step="1"
                                                    id="quantity{{ $product->id }}">
                                                <button class="btn btn-reduce" id="reduce"
                                                    value="{{ $product->id }}"></button>
                                                <button class="btn btn-increase" id="increase"
                                                    value="{{ $product->id }}"></button>
                                            </div>
                                        </div>
                                        <div class="price-field sub-total">
                                            <p class="price" id="subTotal{{ $product->id }}">
                                                ${{ $item->price * $item->quantity }}
                                            </p>
                                        </div>
                                        <div class="delete">
                                            <button class="btn btn-delete" id="delete{{ $product->id }}"
                                                value="{{ $product->id }}">
                                                {{-- <span>Delete from your cart</span> --}}
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </li>
                                @endif
                            @endforeach

                        @endforeach
                    </ul>
                </div>
                <div class="summary">
                    <div class="order-summary">
                        <h4 class="title-box">Order Summary</h4>
                        <p class="summary-info">
                            <span class="title">Subtotal</span>
                            <b class="index" id="Total">
                                ${{ $total_price }}
                            </b>
                        </p>
                        <p class="summary-info">
                            <span class="title">Shipping</span>
                            @if ($total_price > 2000)

                                <b class="index" id="shipping">Free Shipping</b>
                            @else
                                <b class="index" id="shipping">${{ $monto_shipping }}</b>

                            @endif
                        </p>
                        <p class="summary-info total-info ">
                            <span class="title">Total</span>
                            <b class="index" id="TotalA">
                                ${{ $total_price + $monto_shipping }}
                            </b>
                        </p>
                    </div>
                    <div class="checkout-info">
                        <a class="btn btn-checkout" href="{{route('shop.showcheckout')}}">Check out</a>
                    </div>

                </div>
                <div class="summary">
                    <div class="update-clear">
                        <a class="btn btn-clear" href="#">Clear Shopping Cart</a>
                        <a class="btn btn-update" href="#">Update Shopping Cart</a>
                        <a class=" btn link-to-shop" href="shop.html">
                            Continue Shopping
                            <i style="margin-left:  10px" class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                <div class="wrap-show-advance-info-box style-1 box-in-site">
                    <h3 class="title-box">Most Viewed Products</h3>
                    <div class="wrap-products">
                        <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5"
                            data-loop="false" data-nav="true" data-dots="false"
                            data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}'>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
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
                                    <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker
                                            [White]</span></a>
                                    <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
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
                                    <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
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
                                    <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
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
                                            Speaker [White]</span></a>
                                    <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="/shop/assets/images/products/digital_21.jpg" width="214"
                                                height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
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
                                    <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
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
                                    <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
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
                                            Speaker [White]</span></a>
                                    <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
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
                                            Speaker [White]</span></a>
                                    <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End wrap-products-->
                </div>

            </div>
            <!--end main content area-->
        </div>
        <!--end container-->

    </main>
    <!--main area-->


@endsection

@section('scripts')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {

            let reduces = document.querySelectorAll('.btn-reduce');
            let increases = document.querySelectorAll('.btn-increase');
            let deletes = document.querySelectorAll('.btn-delete');
            reduces.forEach(function(reduce) {
                reduce.addEventListener('click', function() {
                    let id = reduce.value;
                    let quantity = document.querySelector('#quantity' + id);
                    let max = quantity.getAttribute('max');

                    if (parseInt(quantity.value) > 1) {
                        quantity.value = parseInt(quantity.value) - 1;
                        let sendData = {
                            _token: '{{ csrf_token() }}',
                            productId: id,
                            quantity: quantity.value
                        };

                        $.ajax({
                            type: "post",
                            url: "http://localhost:8000/cart/update/quantity",
                            data: sendData,
                            dataType: "json",
                            success: function(response) {
                                document.querySelector('#Total').innerHTML =
                                    `$${response.total}`;
                                document.querySelector('#subTotal' + id).innerHTML =
                                    `$${response.subTotal}`;
                                if (response.monto_shipping == 0) {
                                    document.querySelector('#shipping').innerHTML =
                                        `${response.shipping_method}`;
                                } else {
                                    document.querySelector('#shipping').innerHTML =
                                        `$${response.monto_shipping}`;
                                }

                                document.querySelector('#TotalA').innerHTML =
                                    `$${response.total + response.monto_shipping}`;
                            }
                        });


                    }
                });
            });

            increases.forEach(function(increase) {
                increase.addEventListener('click', function() {
                    let id = increase.value;
                    let quantity = document.querySelector('#quantity' + id);
                    let max = quantity.getAttribute('max');
                    if (parseInt(quantity.value) < parseInt(max)) {
                        quantity.value = parseInt(quantity.value) + 1;
                        let sendData = {
                            _token: '{{ csrf_token() }}',
                            productId: id,
                            quantity: quantity.value
                        };

                        $.ajax({
                            type: "post",
                            url: "http://localhost:8000/cart/update/quantity",
                            data: sendData,
                            dataType: "json",
                            success: function(response) {

                                document.querySelector('#Total').innerHTML =
                                    `$${response.total}`;
                                document.querySelector('#subTotal' + id).innerHTML =
                                    `$${response.subTotal}`;
                                if (response.monto_shipping == 0) {
                                    document.querySelector('#shipping').innerHTML =
                                        `${response.shipping_method}`;
                                } else {
                                    document.querySelector('#shipping').innerHTML =
                                        `$${response.monto_shipping}`;
                                }

                                document.querySelector('#TotalA').innerHTML =
                                    `$${response.total + response.monto_shipping}`;


                            }
                        });

                    }

                });
            });

            deletes.forEach(function(deletee) {
                deletee.addEventListener('click', function() {
                    let id = deletee.value;
                    let sendData = {
                        _token: '{{ csrf_token() }}',
                        productId: id
                    };

                    $.ajax({
                        type: "post",
                        url: "http://localhost:8000/cart/delete",
                        data: sendData,
                        dataType: "json",
                        success: function(response) {
                            console.log(response);
                            document.querySelector('#Total').innerHTML =
                                `$${response.total}`;
                            if (response.monto_shipping == 0) {
                                document.querySelector('#shipping').innerHTML =
                                    `${response.shipping_method}`;
                            } else {
                                document.querySelector('#shipping').innerHTML =
                                    `$${response.monto_shipping}`;
                            }

                            document.querySelector('#TotalA').innerHTML =
                                `$${response.total + response.monto_shipping}`;

                        }
                    });

                });
            });


        });
    </script>
@endsection
