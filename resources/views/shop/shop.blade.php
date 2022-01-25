@extends('shop.template.template')

@section('content')

    <!--main area-->
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    <li class="item-link"><span>Digital & Electronics</span></li>
                </ul>
            </div>
            <div class="row">

                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                    <div class="wrap-shop-control">

                        <h1 class="shop-title">Digital & Electronics</h1>
                    </div>
                    <div class="row">
                        <ul class="product-list grid-products equal-container">

                            @foreach ($products as $product)
                                <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                    <div class="product product-style-3 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{ route('shop.details', ['id' => $product->id]) }}"
                                                title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure>
                                                    <img src="{{ $product->image }}" alt="{{ $product->name }}">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{ route('shop.details', ['id' => $product->id]) }}"
                                                class="product-name">
                                                <span>
                                                    {{ $product->name }}
                                                </span>
                                            </a>
                                            <div class="wrap-price">
                                                <span class="product-price">
                                                    {{ $product->price }}
                                                </span>
                                            </div>


                                            @if ($product->stock > 0)
                                            <form action="{{ route('shop.addToCart') }}" method="POST">
                                                @csrf

                                                <input type="hidden" name="id" value="{{ $product->id }}">
                                                {{-- quantity --}}
                                                <input type="hidden" name="quantity" value="1">

                                                <button type="submit" class="btn add-to-cart">Add to Cart</button>
                                            </form>

                                            @endif

                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>

                    </div>

                    <div class="wrap-pagination-info">
                        {{ $products->links() }}
                    </div>
                </div>
                <!--end main products area-->

                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                    <div class="widget mercado-widget categories-widget">
                        <h2 class="widget-title">All Categories</h2>
                        <div class="widget-content">
                            <ul class="list-category">
                                @foreach ($categories as $category)
                                    <li class="category-item has-child-cate">
                                        <a style="border: none; background: none;"
                                            class="cate-link">{{ $category->name }}</a>
                                        <span class="toggle-control">+</span>
                                        <ul class="sub-cate">
                                            @foreach ($subcategories as $subcategory)
                                                @if ($subcategory->category == $category)
                                                    <li class="sub-cate-item">
                                                        <a href="/shopping?subcategory={{ $subcategory->name }}"
                                                            class="cate-link">
                                                            {{ $subcategory->name }}
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div><!-- Categories widget-->
                </div>
                <!--end sitebar-->

            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </main>
    <!--main area-->

@endsection
