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
                        <h3>Sub ategories</h3>
                    </div>
                </div>
                <div class="col col-md-6">
                    <div class="row actions">
                        <a href="#" class="btn-shop">
                            see shop
                        </a>
                        <a  href="{{ route('subcategory.create') }}" class="btn-action">
                            New Sub subCategory
                            <i class="mdi mdi-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </h1>

        <div class="row">
            <div class="col grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="Tsubcategories">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($subcategories->count() > 0)
                                        @foreach ($subcategories as $subcategory)
                                            <tr>
                                                <td>{{ $subcategory->name }}</td>
                                                <td>{{ $subcategory->category->name }}</td>
                                                <td>{{ $subcategory->description }}</td>
                                                <td>
                                                    <a href="{{ route('subcategory.edit', $subcategory->id) }}" class="btn btn-primary">
                                                        <i class="mdi mdi-pencil"></i>
                                                    </a>
                                                    <form action="{{ route('subcategory.delete', $subcategory->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="mdi mdi-delete"></i>
                                                        </button>

                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4">
                                                <h3>No data</h3>
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('codigo')
<script type="text/javascript">

    $(document).ready( function () {
        $('#Tsubcategories').DataTable();
    } );
    </script>
@endsection
