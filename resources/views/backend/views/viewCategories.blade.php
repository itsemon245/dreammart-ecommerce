@extends('layouts.master')
@section('title', "Add Product")
@section('content')
<div class="container-md mt-5">
    <div class="card rounded-4">
        <div class="card-title h3 bg-primary text-white text-center rounded-top rounded-4 p-2">Add Categories</div>
        <div class="card-body px-5 py-3">

            <div class="d-flex gap-4">
                {{-- add category  --}}
            <form class="flex-grow-1" action="" method="post">
                <x-backend.form.input-with-symbol name='category' label="Category Name" type='text' symbol="<i class='bx bx-category-alt'></i>" placeholder='category name' />
                <button class="btn btn-primary mt-3" type="submit">Add Category</button>
            </form>
            {{-- add brand  --}}
            <form class="flex-grow-1" action="" method="post">
                <x-backend.form.input-with-symbol name='brand' label="brand Name" type='text' symbol="<i class='bx bx-git-branch'></i>" placeholder='brand name' />
                <button class="btn btn-primary mt-3" type="submit">Add Brand</button>
            </form>
            </div>
        </div>
    </div>
</div>

@endsection