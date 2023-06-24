@extends('layouts.master')
@section('title', 'Edit Product')
@section('content')
    @php
    @endphp
    <div class="container-md mt-5">
        <div class="card rounded-4">
            <div class="card-title h3 bg-primary text-white text-center rounded-top rounded-4 p-2">Edit Product</div>
            <div class="card-body p-3 pb-5">
                <form class="d-flex gap-5 " action="{{ route('product.update', $product->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row align-items-center justify-content-center">
                        {{-- product image --}}
                        <div class="col-lg-4">
                            <div style="width:100%;">
                                <label style="cursor: pointer;">
                                    <img id="image-holder" class="w-100 mt-2 rounded-3"
                                        src="{{ asset('storage/' . $product->image) }}" alt="image_placeholder">
                                    <input hidden type="file" name="product_image" id="product-image">
                                </label>
                                <div>
                                    <p>Product Image (max: 1024kb)</p>
                                    @error('product_image')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        {{-- product informations --}}
                        <div class="col-lg-6">
                            <div class="flex-grow-1">
                                {{-- product name  --}}
                                <x-form.input type='text' name='product_name' label='name' placeholder='Product Name'
                                    :value="$product->name" />

                                <div class="d-flex gap-3">

                                    {{-- product price  --}}
                                    <x-form.input-with-symbol name='product_price' label="price" type='text'
                                        symbol='$' class="flex-grow-1" placeholder='129.99' :value="$product->price" />

                                    {{-- product discount  --}}
                                    <x-form.input-with-symbol name='product_discount' label="discount" type='number'
                                        symbol='%' class="flex-grow-1" placeholder='15' :value="$product->discount" />

                                    {{-- product stock  --}}
                                    <x-form.input-with-symbol name='product_in_stock' label="Stock" type='number'
                                        symbol="bx-package" class="flex-grow-1" placeholder='11'
                                        :value="$product->in_stock" />
                                </div>
                                {{-- Select options  --}}
                                <div class="d-flex gap-3">

                                    {{-- categories --}}
                                    <div class="flex-grow-1">
                                        <x-form.select name='product_category' label='Category' :options="$categories"
                                            :value="$product->category_id" placeholder="Select category" />
                                    </div>
                                    {{-- brands --}}
                                    <div class="flex-grow-1">
                                        <x-form.select name='product_brand' label='Brand' :options="$brands"
                                            :value="$product->brand_id" placeholder="Select brand" />
                                    </div>
                                    {{-- events --}}
                                    <div class="flex-grow-1">
                                        <x-form.select name='product_event' label='Event' :options="$events"
                                            :value="$product->event_id" placeholder="Select event" />
                                    </div>
                                </div>

                                {{-- product detail --}}
                                <x-form.textarea-input name='product_detail' label='detail' placeholder='Product detail'
                                    :value="$product->detail" row='4' />

                                {{-- Buttons --}}
                                <div class="mt-3">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                    <button class="btn text-primary" type="reset">
                                        <strong>Reset</strong>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('customJs')
        <script defer>
            const bannerInput = $('#product-image');
            const imageHolder = $('#image-holder');
            bannerInput.change(function() {
                let blob = this.files[0];
                let url = URL.createObjectURL(blob);
                imageHolder.attr('src', url);
            })
        </script>
    @endpush
@endsection
