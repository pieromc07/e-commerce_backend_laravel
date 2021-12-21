@extends('layout.master')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/tecshop.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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
                                    <tr class="row-order" onclick="document.location = 'orders/1'">
                                        <td>1</td>
                                        <td>Elias</td>
                                        <td>tg.elias.s@gmail.com</td>
                                        <td>11/12/2021</td>
                                        <td>S/3,000</td>
                                        <td class="condition delivered">ENTREGADO</td>
                                    </tr>
                                    <tr class="row-order" onclick="document.location = 'orders/2'">
                                        <td>2</td>
                                        <td>Piero</td>
                                        <td>piero0716.mc@gmail.com</td>
                                        <td>15/11/2021</td>
                                        <td>S/3,299</td>
                                        <td class="condition earring">PENDIENTE</td>
                                    </tr>
                                    <tr class="row-order" onclick="document.location = 'orders/3'">
                                        <td>3</td>
                                        <td>Juan</td>
                                        <td>juan.08@gmail.com</td>
                                        <td>02/10/2021</td>
                                        <td>S/5,499</td>
                                        <td class="condition cancelled">CANCELADO</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
