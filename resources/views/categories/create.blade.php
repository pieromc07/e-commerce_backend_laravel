@extends('layout.master')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/tecshop.css') }}">
@endsection

@section('content')

    <div class="container">
        <h1 class="mb-5">
            <div class="row header-content">
                <div class="col col-md-6 header-content__title">
                    <div class="row">
                        <div class="container-icon-shop">
                            <img src="{{ url('/assets/images/page_icon/icon-shop.svg', []) }}" alt="">
                        </div>
                        <h3>New Category</h3>
                    </div>
                </div>
            </div>
        </h1>

        <form action="{{ route('category.store') }}" method="POST" class="row d-flex justify-content-around">
            @csrf
            <div class="col-md-10 grid-margin stretch-card">
                <div class="card">
                    <h4 class="card-header">General information</h4>
                    <div class="card-body">
                        <p class="card-description">Fill out the form with the category data.</p>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group">
                                    <label for="name_product">Name
                                        <strong class="asterisk">*</strong>
                                    </label>
                                    <input type="text" class="input-control is-medium" id="name" name="name"
                                        placeholder="Name">
                                </div>

                                @error('name')
                                    <span class="text-danger mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>

                                @enderror
                            </div>

                            <div class="col-12">
                                <div class="input-group">
                                    <label for="description">Description
                                        <strong class="asterisk">*</strong>
                                    </label>
                                    <textarea class="input-control is-medium" rows="4" maxlength="500" name="description"
                                        id="description"></textarea>
                                </div>
                                @error('description')
                                    <span class="text-danger mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>

                                @enderror
                            </div>
                            <div class="newCategory">
                                <button class="newCategory-btn" type="submit">Create</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('custom-scripts')
    <script src="{{ asset('js/tecshop.js') }}"></script>
@endsection
