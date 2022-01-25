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
                        <h3>Order {{ $invoice->invoice_number }}{{$invoice->id}}</h3>
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
                                <label class="order-data-lbl total-lbl">S/{{ $order->total }}</label>
                            </div>
                            <div class="order-data col-6 col-sm-4 col-lg-3">
                                <p class="order-data-p">Shipping</p>
                                <label class="order-data-lbl">S/ {{ $monto_shipping }}</label>
                            </div>
                            <div class="order-data col-6 col-sm-4 col-lg-3">
                                <p class="order-data-p">Order date</p>
                                <label class="order-data-lbl">{{ $order->date_placed }}</label>
                            </div>
                            <div class="order-data col-12 col-sm-8 col-lg-4">
                                <p class="order-data-p">Order status</p>
                                <div class="input-group" class="order-data-lbl">
                                    <select class="input-control is-medium order-data-select" name="status" id="status"
                                        style="text-transform: uppercase"
                                    >
                                        <option value="Pending" @if ($order->status == 'Pending')
                                            selected
                                            @endif
                                            >pending</option>
                                        <option value="Processing" @if ($order->status == 'Processing')
                                            selected
                                            @endif
                                            >processing</option>
                                        <option value="Completed" @if ($order->status == 'Completed')
                                            selected
                                            @endif
                                            >completed</option>
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
                                    <p>{{ $customer->name }} {{ $customer->lastname }}</p>
                                    <p>{{ $customer->email }}</p>
                                    <p>{{ $customer->phone }}</p>
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
                                    S/ {{ $order->total - $monto_shipping }}
                                </div>
                                <div class="col-6 text-payment">
                                    Cost of shipping
                                </div>
                                <div class="col-6 price-payment">
                                    S/ {{ $monto_shipping }}
                                </div>
                                {{-- <div class="col-6 text-payment">
                                    Tax
                                </div>
                                <div class="col-6 price-payment">
                                    S/ {{$order->total * 0.18}}
                                </div> --}}
                                <div class="col-6 total-payment">
                                    Total
                                </div>
                                <div class="col-6 total-payment price-payment">
                                    S/ {{ $order->total }}
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
                                            <th>PRICE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order_items as $order_item)
                                            <tr>
                                                <td class="order-details">{{ $order_item->product->name }}</td>
                                                <td class="order-details quantity-center">{{ $order_item->quantity }}
                                                </td>
                                                <td class="order-details">{{ $order_item->price }}</td>
                                            </tr>
                                        @endforeach
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
                                <p class="shipping-data-text shipping-text">
                                    {{ $customer->addressPhysical->city }} -
                                    {{ $customer->addressPhysical->street_address }}</p>
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
                                    <p class="payment-data-text payment-text" style="text-transform: uppercase">
                                        {{ $payment_method->name }}</p>
                                </section>
                            </div>

                            @if ($payment_method->name == 'visa')
                                <div class="col-6 payment-data-icon">
                                    <i class="fab fa-cc-visa" style="font-size: 5rem"></i>
                                </div>
                            @elseif ($payment_method->name == 'paypal')
                                <div class="col-6 payment-data-icon">
                                    <i class="fab fa-cc-paypal" style="font-size: 5rem"></i>
                                </div>
                            @else
                                <div class="col-6 payment-data-icon">
                                    <i class="fas fa-university" style="font-size: 5rem"></i>
                                </div>


                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection

@section('custom-scripts')
    <script type="text/javascript">

        $(document).ready(function () {

            $('#status').change(function (e) {
                e.preventDefault();

                var status = $(this).val();

                $.ajax({
                    url: '{{ route('order.update', $order->id) }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        status: status
                    },
                    success: function (data) {
                        console.log(data);
                        document.location = '/orders/';
                    }
                });

            });

        });

    </script>
@endsection
