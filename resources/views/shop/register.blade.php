@extends('shop.template.template')

@section('content')

    <!--main area-->
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    <li class="item-link"><span>Register</span></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                    <div class=" main-content-area">
                        <div class="wrap-login-item ">
                            <div class="register-form form-item ">
                                <form class="form-stl" action="{{ route('shop.register') }}" name="frm-login"
                                    method="POST">
                                    @csrf
                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">Create an account</h3>
                                        <h4 class="form-subtitle">Personal infomation</h4>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="name">Full Name*</label>
                                        <input type="text" id="name" name="name" placeholder="full name*">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>

                                        @enderror

                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="email">Email Address*</label>
                                        <input type="email" id="email" name="email" placeholder="Email address">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>

                                        @enderror


                                    </fieldset>
                                    <fieldset class="wrap-functions ">
                                        <label class="remember-field">
                                            <input name="newletter" id="new-letter" value="forever"
                                                type="checkbox"><span>Sign Up for Newsletter</span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">Login Information</h3>
                                    </fieldset>
                                    <fieldset class="wrap-input item-width-in-half left-item ">
                                        <label for="password">Password *</label>
                                        <input type="text" id="password" name="password" placeholder="Password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>

                                        @enderror

                                    </fieldset>
                                    <fieldset class="wrap-input item-width-in-half ">
                                        <label for="confirmed">Confirm Password *</label>
                                        <input type="text" id="confirmed" name="password_confirmation"
                                            placeholder="Confirm Password">
                                    </fieldset>
                                    <input type="submit" class="btn btn-sign" value="Register" name="register">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end main products area-->
                </div>
            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </main>
    <!--main area-->
@endsection
