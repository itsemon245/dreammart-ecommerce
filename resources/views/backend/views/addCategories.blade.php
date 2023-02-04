@extends('layouts.master')
@section('title', "Add Product")
@section('content')
<div class="container-md mt-5">
    <div class="card rounded-4">
        <div class="card-title h3 bg-primary text-white text-center rounded-top rounded-4 p-2">Add Categories</div>
        <div class="card-body px-5 py-3">
            <form class="" action="" method="post">
                            {{-- category  --}}
                            <x-backend.form.input-with-symbol name='category' label="Category Name" type='text' symbol='$' placeholder='category' />
                            <button class="btn btn-primary mt-3" type="submit">Add Category</button>
            </form>
        </div>
    </div>
</div>

@endsection