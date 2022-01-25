@extends('shop.template.template')

@section('content')
    <!--main area-->
    <main id="main" class="main-site">
        <div class="container">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    <li class="item-link"><span>checkout</span></li>
                </ul>
            </div>
            <div class=" main-content-area">
                <form action="{{ route('shop.checkout') }}" method="POST" name="frm-billing">
                    @csrf
                    <div class="wrap-address-billing">
                        <h3 class="box-title">Billing Address</h3>
                        <p class="row-in-form">
                            <label for="fname">first name<span>*</span></label>
                            <input id="fname" type="text" name="name" @if ($customer->name != null)value="{{ $customer->name }} " disabled @endif placeholder="Your name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="lname">last name<span>*</span></label>
                            <input id="lname" type="text" name="lastname" @if ($customer->name != null)value="{{ $customer->lastname }} " disabled @endif
                                placeholder="Your last name">
                            @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="email">Email Addreess:</label>
                            <input id="email" type="email" name="email" value="{{ $customer->email }}"
                                placeholder="Type your email" disabled>
                        </p>
                        <p class="row-in-form">
                            <label for="phone">Phone number<span>*</span></label>
                            <input id="phone" type="number" name="phone" @if ($customer->name != null)value="{{ $customer->phone }} " disabled @endif
                                placeholder="10 digits format">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="add">Address:</label>
                            <input id="add" type="text" name="street_address" @if ($address_physical != null) value="{{ $address_physical->street_address }} " disabled @endif
                                placeholder="Street at apartment number">
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="country">Country<span>*</span></label>
                            <input id="country" type="text" name="country" @if ($address_physical != null) value="{{ $address_physical->country }}" disabled @endif
                                placeholder="United States">
                            @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="zip-code">Postcode / ZIP:</label>
                            <input id="zip-code" type="number" name="postal_code" @if ($address_physical != null) value="{{ $address_physical->postal_code }}" disabled @endif
                                placeholder="Your postal code">
                            @error('zip-code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </p>
                        <p class="row-in-form">
                            <label for="city">Town / City<span>*</span></label>
                            <input id="city" type="text" name="city" @if ($address_physical != null) value="{{ $address_physical->city }}" disabled @endif placeholder="City name">
                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </p>
                    </div>
                    <div class="summary summary-checkout">
                        <div class="summary-item payment-method">
                            <h4 class="title-box">Payment Method</h4>
                            <p class="summary-info"><span class="title">Check / Money order</span></p>
                            <p class="summary-info"><span class="title">Credit Cart (saved)</span></p>
                            <div class="choose-payment-methods">
                                @foreach ($payment_methods as $payment_method)
                                    <label class="payment-method">
                                        <input type="radio" name="payment_method" value="{{ $payment_method->id }}">
                                        <span class="payment-method-name">{{ $payment_method->name }}</span>
                                        <span class="payment-desc">{{ $payment_method->description }}</span>
                                    </label>
                                @endforeach
                            </div>
                            <p class="summary-info grand-total"><span>Grand Total</span> <span
                                    class="grand-total-price">{{ $shopping_cart->getTotalPrice() + $monto_shipping }}</span>
                            </p>
                            <button type="submit" class="btn btn-medium">Place order now</button>
                        </div>
                        <div class="summary-item shipping-method">
                            <h4 class="title-box f-title">Shipping method</h4>
                            <p class="summary-info"><span class="title">Method {{ $shipping_method }}</span>
                            </p>
                            <p class="summary-info"><span class="title">Price ${{ $monto_shipping }}</span>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
            <!--end main content area-->
        </div>
        <!--end container-->
    </main>
    <!--main area-->
@endsection
