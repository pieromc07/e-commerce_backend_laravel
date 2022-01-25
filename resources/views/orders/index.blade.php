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
                        <h3>Orders</h3>
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
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>CLIENT</th>
                                        <th>EMAIL</th>
                                        <th>DATE</th>
                                        <th>TOTAL</th>
                                        <th>CONDITION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $key => $order)

                                        @foreach ($order_customers as $order_customer)

                                            @if ($order->id == $order_customer->orders_id)

                                                @foreach ($customers as $customer)

                                                    @if ($customer->id == $order_customer->customer_id)
                                                        <tr class="row-order"
                                                            onclick="document.location = '/order/edit/{{ $order->id }}'">
                                                            <td> {{ $key + 1 }}</td>
                                                            <td>{{ $customer->name }} {{ $customer->lastname }}</td>
                                                            <td>{{ $customer->email }}</td>
                                                            <td>{{ $order->date_placed }}</td>
                                                            <td>S/ {{ $order->total }}</td>

                                                            @if ($order->status == 'Pending')

                                                                <td class="condition cancelled"
                                                                    style="text-transform: uppercase;"> {{ $order->status }}
                                                                </td>
                                                            @elseif ($order->status == 'Processing')

                                                                    <td class="condition earring"
                                                                        style="text-transform: uppercase;"> {{ $order->status }}
                                                                    </td>
                                                            @else

                                                                    <td class="condition completed"
                                                                        style="text-transform: uppercase;"> {{ $order->status }}
                                                                    </td>
                                                            @endif
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
