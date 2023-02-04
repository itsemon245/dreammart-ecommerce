@extends('layouts.master')
@section('title', "Add Product")
@section('content')
<div class="container-md mt-5">
    <div class="card rounded-4">
        <div class="card-title h3 bg-primary text-white text-center rounded-top rounded-4 p-2">Add Product</div>
        <div class="card-body px-5 py-3">
            <form class="d-flex gap-5 " action="" method="post">
                {{-- product image --}}
                    <label>
                        <img class="w-70" src="https://cdn.shopify.com/s/files/1/0533/2089/files/placeholder-images-image_large.png?format=jpg&quality=90&v=1530129081" alt="">
                        <input hidden type="file" name="product_image" id="product_image">
                    </label>
                    {{-- product informations --}}
                    <div class="flex-grow-1">
                        {{-- product name  --}}
                        <x-backend.form.input type='text' name='product_name' label='name' placeholder='Product Name'  />
                    
                        <div class="d-flex gap-3">

                            {{-- product price  --}}
                            <x-backend.form.input-with-symbol name='product_price' label="price" type='text' symbol='$' class="flex-grow-1" placeholder='129.99' />

                            {{-- product discount  --}}
                            <x-backend.form.input-with-symbol name='product_discount' label="discount" type='text' symbol='%' class="flex-grow-1" placeholder='15' />
                        </div>
                        {{-- Select options  --}}
                        <div class="d-flex gap-3">
                            
                            {{-- categories --}}
                            <div class="flex-grow-1">
                                <x-backend.form.select-input name='product_category' label='Category' placeholder="Select category" />
                            </div>
                            {{-- brands --}}
                            <div class="flex-grow-1">
                                <x-backend.form.select-input name='product_brand' label='Brand' placeholder="Select brand" />
                            </div>
                        </div>

                        {{-- product detail --}}
                        <x-backend.form.textarea-input name='product_detail' label='detail' placeholder='Product detail' />

                        {{-- Buttons --}}
                        <div class="mt-3">
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <button class="btn text-primary" type="reset">
                                <strong>Reset</strong>
                            </button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>

@endsection