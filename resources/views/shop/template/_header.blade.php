<header id="header" class="header header-style-1">
    <div class="container-fluid">
        <div class="row">
            <div class="topbar-menu-area">
                <div class="container">
                    <div class="topbar-menu left-menu">
                        <ul>
                            <li class="menu-item">
                                <a href="#">
                                    <span class="icon label-before fa fa-mobile"></span>
                                    phone: (+51) 456 789
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topbar-menu right-menu">
                        <ul>
                            {{-- si esta autenticado --}}
                            @if (Auth::check())
                                {{-- avatar user --}}
                                <li class="menu-item">
                                    <a href="">
                                        <span class="icon label-before fa fa-user"></span>
                                        {{ Auth::user()->name }}
                                    </a>
                                </li>


                                <li class="menu-item">
                                    <a href="{{ route('shop.logout') }}">
                                        <span
                                            class="icon
                                        label-before fa fa-sign-out"></span>
                                        {{ __('Logout') }}
                                    </a>
                                </li>
                            @else
                                <li class="menu-item">
                                    <a href="{{ route('shop.showLogin') }}">
                                        <span
                                            class="icon
                                        label-before fa fa-sign-in"></span>
                                        {{ __('Login') }}
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('shop.showRegister') }}">
                                        <span
                                            class="icon
                                        label-before fa fa-user"></span>
                                        {{ __('Register') }}
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="mid-section main-info-area">

                    <div class="wrap-logo-top left-section">
                        <a href="/" class="link-to-home" style="font-size: 3.6rem;">
                            <span>TEC<strong>SHOP</strong></span>
                        </a>
                    </div>

                    <div class="wrap-search center-section">
                        <div class="wrap-search-form">
                            <form action="#" id="form-search-top" name="form-search-top">
                                <input type="text" name="search" value="" placeholder="Search here...">
                                <button form="form-search-top" type="button"><i class="fa fa-search"
                                        aria-hidden="true"></i></button>
                                <div class="wrap-list-cate">
                                    <input type="hidden" name="product-cate" value="0" id="product-cate">
                                    <a href="#" class="link-control">All Category</a>
                                    <ul class="list-cate">
                                        <li class="level-0">All Category</li>
                                        @foreach ($categories as $category)
                                            <li class="level-1">-{{ $category->name }}</li>
                                            @foreach ($subcategories as $subcategory)
                                                @if ($subcategory->category_id == $category->id)
                                                    <li class="level-2">{{ $subcategory->name }}</li>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="wrap-icon right-section">
                        <div class="wrap-icon-section wishlist">
                            <a href="#" class="link-direction">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <div class="left-info">
                                    <span class="index">0 item</span>
                                    <span class="title">Wishlist</span>
                                </div>
                            </a>
                        </div>
                        <div class="wrap-icon-section minicart">
                            <a href="/cart" class="link-direction">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <div class="left-info">
                                    <span class="index">{{ $shopping_cart->getQuantity() }} items</span>
                                    <span class="title">CART</span>
                                </div>
                            </a>
                        </div>
                        <div class="wrap-icon-section show-up-after-1024">
                            <a href="#" class="mobile-navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="nav-section header-sticky">
                {{-- <div class="header-nav-section">
                    <div class="container">
                        <ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info">
                            <li class="menu-item"><a href="#" class="link-term">Weekly Featured</a><span
                                    class="nav-label hot-label">hot</span></li>
                            <li class="menu-item"><a href="#" class="link-term">Hot Sale items</a><span
                                    class="nav-label hot-label">hot</span></li>
                            <li class="menu-item"><a href="#" class="link-term">Top new items</a><span
                                    class="nav-label hot-label">hot</span></li>
                            <li class="menu-item"><a href="#" class="link-term">Top Selling</a><span
                                    class="nav-label hot-label">hot</span></li>
                            <li class="menu-item"><a href="#" class="link-term">Top rated items</a><span
                                    class="nav-label hot-label">hot</span></li>
                        </ul>
                    </div>
                </div> --}}

                <div class="primary-nav-section">
                    <div class="container">
                        <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                            <li class="menu-item home-icon">
                                <a href="{{ route('shop.index') }}" class="link-term mercado-item-title"><i
                                        class="fa fa-home" aria-hidden="true"></i></a>
                            </li>
                            {{-- <li class="menu-item">
                                <a href="about-us.html" class="link-term mercado-item-title">About Us</a>
                            </li> --}}
                            <li class="menu-item">
                                <a href="{{ route('shop.shop') }}" class="link-term mercado-item-title">Shop</a>
                            </li>
                            {{-- <li class="menu-item">
                                <a href="{{ route('shop.cart') }}" class="link-term mercado-item-title">Cart</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('shop.checkout') }}"
                                    class="link-term mercado-item-title">Checkout</a>
                            </li> --}}
                            {{-- <li class="menu-item">
                                <a href="contact-us.html" class="link-term mercado-item-title">Contact Us</a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
