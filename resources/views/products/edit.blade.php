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


        <form action="{{ route('product.update', $product->id) }}" method="POST" class="row"
            enctype="multipart/form-data">
            @csrf
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <h4 class="card-header">General information</h4>
                    <div class="card-body">
                        <p class="card-description">Fill out the form with the product data.</p>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group">
                                    <label for="name_product">Name
                                        <strong class="asterisk">*</strong>
                                    </label>
                                    <input type="text" class="input-control" id="name" name="name" placeholder="Name"
                                        value="{{ $product->name }}">
                                </div>

                                @error('name')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>

                                @enderror

                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <label for="name_product">Category
                                        <strong class="asterisk">*</strong>
                                    </label>
                                    <select class="input-control is-medium" id="category">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                    {{ $category->id == $product->subcategory->category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <label for="name_product"> Sub Category
                                        <strong class="asterisk">*</strong>
                                    </label>
                                    {{-- select sub category --}}
                                    <select class="input-control is-medium" id="subcategory" name="subcategory_id">
                                    </select>
                                </div>
                                @error('subcategory_id')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>

                                @enderror
                            </div>
                            {{-- stock --}}
                            <div class="col-md-6">
                                <div class="input-group">
                                    <label for="name_product">Stock
                                        <strong class="asterisk">*</strong>
                                    </label>
                                    <input type="number" class="input-control" id="stock" name="stock" placeholder="Stock"
                                    value="{{$product->stock}}"    >
                                </div>
                                @error('stock')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <label for="price">Price
                                        <strong class="asterisk">*</strong>
                                    </label>
                                    <input type="number" class="input-control is-medium" id="price" name="price"
                                        placeholder="0" min="0" value="{{$product->price}}" >
                                </div>
                                @error('price')
                                    <span class="text-danger">
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
                                        id="description">{{$product->description}}</textarea>
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
                            <img src="{{ asset('assets/images/page_icon/icon-camera.svg') }}" alt="image product"
                                id="image" accept="image/png, image/jpeg, image/jpg" multiple>
                            <p>Add an image of your product</p>
                        </label>
                        <input type="file" name="image" id="image_file" style="display: none;" accept="image/*">
                    </div>
                    <div class="card-body-picture">
                        <div class="sect">
                            <div class="pt1">
                                <p>Show in store</p>
                            </div>
                            <div class="pt2">
                                {{-- <div for="check_product" class="check-container">
                                    <div class="btn-toggle">
                                        <span class="toggle"></span>
                                    </div>
                                </div> --}}
                                <input type="checkbox" name="status" id="check_product"
                                    {{ $product->status ? 'checked' : '' }}>
                                {{-- <input type="checkbox" name="status" id="check_product"> --}}

                            </div>
                        </div>
                    </div>
                    @error('image')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <hr>
                    <div class="newProduct">
                        <button class="newProduct-btn" type="submit">Update</button>
                    </div>
                </div>
            </div>
        </form>

    </div>

@endsection

@section('custom-scripts')
    <script src="{{ asset('js/tecshop.js') }}"></script>
@endsection

@section('codigo')
    <script>
        $(document).ready(function() {

            ct = $('#category').val();
            $.ajax({
                url: '/getsubcategory/' + ct,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('#subcategory').empty();
                    $.each(data, function(key, value) {
                        if (value.id == {{$product->subcategory_id}}) {
                            $('#subcategory').append('<option value="' + value.id + '" selected>' + value.name +
                                '</option>');
                        } else {
                            $('#subcategory').append('<option value="' + value.id + '">' + value.name + '</option>');
                        }
                    });
                }
            });
            // attr src img
            $('#image').attr('src', '{{$product->image}}');
            // #image_container
            $('#image_container').removeClass('no_image');

            // #image_file click
             var active = true;
            $('#image_file').click(function() {
                if(active){
                    //#image_container
                    $('#image_container').addClass('no_image');
                    active = false;
                }
            });



            $('#category').on('change', function() {
                var category_id = $(this).val();
                if (category_id) {
                    $.ajax({
                        url: '/getsubcategory/' + category_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('#subcategory').empty();
                            $.each(data, function(key, value) {
                                $('#subcategory').append('<option value="' + value.id +
                                    '">' + value.name + '</option>');
                            });
                        }
                    });
                } else {
                    $('#subcategory').empty();
                }
            });
        });
    </script>
@endsection
