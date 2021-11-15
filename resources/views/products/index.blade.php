@extends('layout.master')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/tecshop.css') }}">
@endsection

@section('content')

    <div class="container ">
        {{--  header general --}}
        <h1 class="mb-5">
            <div class="row header-content">
                <div class="col col-md-6 header-content__title">
                    <div class="row">
                        <div class="container-icon-shop">
                            <img src="{{ url('/assets/images/page_icon/icon-shop.svg', []) }}" alt="">
                        </div>
                        <h3>Products</h3>
                    </div>
                </div>
                <div class="col col-md-6">
                    <div class="row actions">
                        <button  type="button" class="btn-shop">
                            <span>
                                see shop
                            </span>

                        </button>
                        <button type="button" class="btn-action">
                            <span>
                                New Porduct
                                <i class="mdi mdi-plus"></i>
                            </span>

                        </button>
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
                                    <th>Name</th>
                                    <th>Brand</th>
                                    <th>Category</th>
                                    <th>Sale</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Xiaomi Mi 11 Lite</td>
                                    <td>Xiaomi</td>
                                    <td>Celulares y Smartphones</td>
                                    <td class="text-danger">
                                        28.76% <i class="mdi mdi-arrow-down"></i>
                                    </td>

                                    <td>
                                    <label class="badge badge-success">Publico</label>
                                    </td>
                                    <td class="text-info" style="font-size: 1.2rem; cursor:pointer; text-align:center;">
                                        <i class="mdi mdi-border-color"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Asus Notebook 15.6"</td>
                                    <td>Asus</td>
                                    <td>Laptops</td>
                                    <td class="text-success"> 21.06% <i class="mdi mdi-arrow-up"></i>
                                    </td>
                                    <td>
                                    <label class="badge badge-warning">Privado</label>
                                    </td>
                                    <td class="text-info" style="font-size: 1.2rem; cursor:pointer; text-align:center;">
                                        <i class="mdi mdi-border-color"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Lenovo Notebook 14"</td>
                                    <td>Lenovo</td>
                                    <td>Laptops</td>
                                    <td class="text-danger"> 21.06% <i class="mdi mdi-arrow-down"></i>
                                    </td>
                                    <td>
                                    <label class="badge badge-danger">Agotado</label>
                                    </td>
                                    <td class="text-info" style="font-size: 1.2rem; cursor:pointer; text-align:center;">
                                        <i class="mdi mdi-border-color"></i>
                                    </td>
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
