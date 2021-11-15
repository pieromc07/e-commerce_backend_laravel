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
                        <h3>New Product</h3>
                    </div>
                </div>
            </div>
        </h1>


        <form action="" method="POST" class="row">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <h4 class="card-header">General information</h4>
                    <div class="card-body">
                        <p class="card-description">Fill out the form with the product data.</p>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group">
                                    <label for="name_product">Name
                                        <strong>*</strong>
                                    </label>
                                    <input type="text" class="input-control is-medium" id="name_product" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <label for="name_product">Category
                                        <strong>*</strong>
                                    </label>
                                    <select  class="input-control is-medium" name="" id="">
                                        <option value="">category 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <label for="name_product"> Sub Category
                                        <strong>*</strong>
                                    </label>
                                    <select class="input-control is-medium" name="" id="">
                                        <option value="">sub category 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <label for="name_product">Brand
                                        <strong>*</strong>
                                    </label>
                                    <select  class="input-control is-medium" name="" id="">
                                        <option value="">brand 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <label for="price">Price
                                        <strong>*</strong>
                                    </label>
                                    <input type="number" class="input-control is-medium" id="price" placeholder="price">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-group">
                                    <label for="description">Example label</label>
                                    <textarea  class="input-control is-medium" rows="4" maxlength="500" name="description" id="description"></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card align-self-start">
                <div class="card">
                    <div class="card-img-top image-container no_image" id="image_container">
                        <label class="image-link" for="image_file" id="image_btn">
                            <img src="{{ asset('assets/images/page_icon/icon-camera.svg') }}"
                            alt="image product" id="image" accept="image/png, image/jpeg, image/jpg" multiple >
                            <p>Add an image of your product</p>
                        </label>
                        <input type="file" name="image_file" id="image_file" style="display: none;">
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-center align-items-center" style="background: red">
                            <div class="col-6">
                                <span>show in store</span>
                            </div>
                            <div class="col-6">
                                <div for="check_product" class="check-container">
                                    <div class="btn-toggle">
                                        <span class="toggle"></span>
                                    </div>
                                </div>
                                <input type="checkbox" name="check_product" id="check_product" style="display: none">

                            </div>
                        </div>
                    </div>
                    <button type="submit">create</button>
                </div>
            </div>
        </form>

    </div>

@endsection

@section('custom-scripts')
    <script src="{{ asset('js/tecshop.js') }}"></script>
@endsection
