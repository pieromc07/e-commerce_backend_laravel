@extends('layout.master')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/tecshop.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
@endsection

@section('content')

    <div class="container ">
        {{-- header general --}}
        <h1 class="mb-5">
            <div class="row header-content">
                <div class="col col-md-6 header-content__title">
                    <div class="row">
                        <div class="container-icon-shop">
                            <img src="{{ url('/assets/images/page_icon/icon-shop.svg', []) }}" alt="">
                        </div>
                        <h3>Order [number of order]</h3>
                    </div>
                </div>
            </div>
        </h1>

        <div class="row">
            <div class="col grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        {{-- <h4 class="card-title">Hoverable Table</h4>
                        <p class="card-description"> Add class <code>.table-hover</code> </p> --}}
                        <div class="row">
                            <div class="order-data col-6 col-sm-4 col-lg-2">
                                <p class="order-data-p">Total</p>
                                <label class="order-data-lbl total-lbl">S/3000</label>
                            </div>
                            <div class="order-data col-6 col-sm-4 col-lg-2">
                                <p class="order-data-p">Shipping</p>
                                <label class="order-data-lbl">S/0</label>
                            </div>
                            <div class="order-data col-6 col-sm-4 col-lg-2">
                                <p class="order-data-p">Order date</p>
                                <label class="order-data-lbl">15/11/2021</label>
                            </div>
                            <div class="order-data col-6 col-sm-4 col-lg-2">
                                <p class="order-data-p">Order time</p>
                                <label class="order-data-lbl">12:32 PM</label>
                            </div>
                            <div class="order-data col-12 col-sm-8 col-lg-4">
                                <p class="order-data-p">Order status</p>
                                <div class="input-group" class="order-data-lbl">
                                    <select class="input-control is-medium order-data-select" name="" id="">
                                        <option value="">sub category 1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class=" col-md-8 col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        {{-- <h4 class="card-title">Hoverable Table</h4>
                        <p class="card-description"> Add class <code>.table-hover</code> </p> --}}
                        <div class="row">

                            <div class="col-12">
                                <p class="order-title-card">CLIENT DATA</p>
                                <hr>
                            </div>
                            <div class="col-6 data-client">
                                <img src="https://picsum.photos/200/200" alt="Foto de Perfil" class="order-img-card">
                            </div>
                            <div class="col-6 data-client">
                                <section class="order-data-card">
                                    <p>Elias</p>
                                    <p>tg.elias.s@gmail.com</p>
                                    <p>930562711</p>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        {{-- <h4 class="card-title">Hoverable Table</h4>
                        <p class="card-description"> Add class <code>.table-hover</code> </p> --}}
                        <div class="row">

                            <div class="col-12">
                                <p class="order-title-card">PAYMENT SUMMARY</p>
                                <hr>
                            </div>
                            <div class="row payment-summary">
                                <div class="col-6 top-text text-payment">
                                    Subtotal
                                </div>
                                <div class="col-6 top-text price-payment">
                                    S/3,299
                                </div>
                                <div class="col-6 text-payment">
                                    Cost of shipping
                                </div>
                                <div class="col-6 price-payment">
                                    S/0
                                </div>
                                <div class="col-6 text-payment">
                                    Tax
                                </div>
                                <div class="col-6 price-payment">
                                    S/0
                                </div>
                                <div class="col-6 total-payment">
                                    Total
                                </div>
                                <div class="col-6 total-payment price-payment">
                                    S/3,299
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        {{-- <h4 class="card-title">Hoverable Table</h4>
                        <p class="card-description"> Add class <code>.table-hover</code> </p> --}}
                        <div class="row">
                            <div class="col-12">
                                <p class="order-title-card">ORDER DETAIL</p>
                                <hr>

                                <table class="table table-responsive-xl">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>PRODUCTS</th>
                                            <th>QUANTITY</th>
                                            <th>TAX</th>
                                            <th>PRICE</th>
                                            <th>TOTAL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="order-details">Televisor Samsung 65"AU7000 UHD 4K Smart TV 2021
                                                UN65AU7000GXPE</td>
                                            <td class="order-details quantity-center">1</td>
                                            <td class="order-details">S/0</td>
                                            <td class="order-details">S/3,299</td>
                                            <td class="order-details">S/3,299</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class=" col-md-8 col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        {{-- <h4 class="card-title">Hoverable Table</h4>
                        <p class="card-description"> Add class <code>.table-hover</code> </p> --}}
                        <div class="row">

                            <div class="col-12">
                                <p class="order-title-card">SHIPPING INFORMATION</p>
                                <hr>
                            </div>

                        </div>

                        <div class="row shipping-data">
                            <i class="fal fa-map-marker-alt"></i>
                            <section class="shipping-data-section">
                                <p class="shipping-data-text shipping-title">Address</p>
                                <p class="shipping-data-text shipping-text">Independencia #30</p>
                            </section>
                        </div>

                        <div class="row shipping-data">
                            <i class="far fa-comment-alt"></i>
                            <section class="shipping-data-section">
                                <p class="shipping-data-text shipping-title">Additional information</p>
                                <p class="shipping-data-text shipping-text">A una puerta del colegio 237</p>
                            </section>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-md-4 col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        {{-- <h4 class="card-title">Hoverable Table</h4>
                        <p class="card-description"> Add class <code>.table-hover</code> </p> --}}
                        <div class="row">

                            <div class="col-12">
                                <p class="order-title-card">PAYMENT INFORMATION</p>
                                <hr>
                            </div>

                        </div>

                        <div class="row payment-data">
                            <div class="col-6 payment-data-section">
                                <section>
                                    <p class="payment-data-text payment-title">Chosen method</p>
                                    <p class="payment-data-text payment-text">Pedido vía Whatsapp</p>
                                </section>
                            </div>
                            <div class="col-6 payment-data-icon">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
