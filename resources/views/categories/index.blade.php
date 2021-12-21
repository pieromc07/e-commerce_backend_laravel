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
                        <h3>Categories</h3>
                    </div>
                </div>
                <div class="col col-md-6">
                    <div class="row actions">
                        <button type="button" class="btn-shop">
                            <span>
                                see shop
                            </span>

                        </button>
                        <button type="button" class="btn-action">
                            <span>
                                New Category
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
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>AUDIO</td>
                                        <td>Audio, se escucha bacan.</td>
                                        <td>
                                            <a href="#"><i class="fas fa-pen"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>TV</td>
                                        <td>Televisor 20K, se ve bacan.</td>
                                        <td>
                                            <a href="#"><i class="fas fa-pen"></i></a>
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
