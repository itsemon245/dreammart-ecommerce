@extends('layouts.master')
@section('title', 'Brands')
@section('content')
    <div class="container-md mt-5">
        <div class="card">
            <div class="card-header">
                <div class="card-body">

                    {{-- table for brands  --}}
                    <div class="card flex-grow-1">

                        <div class="d-flex align-items-center card-header">
                            {{-- modal for add categories --}}
                            <div class="">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#brandModal">
                                    Add New
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="brandModal" tabindex="-1" aria-hidden="true"
                                    style="display: none;">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Add Brand</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="flex-grow-1" action="{{ route('categories.brand.store') }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <x-form.input-with-symbol name='brand' label="New brand"
                                                        type='text' symbol="bx-git-branch" placeholder='brand name' />
                                                    <x-form.input-with-symbol name='logo' label="brand logo"
                                                        type='file' symbol="bx-landscape" />

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" class="btn btn-primary">Add</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="flex-grow-1 text-center">
                                <strong class="">Brands List</strong>
                            </div>
                        </div>
                        <div class="table-responsive text-nowrap">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Logo</th>
                                        {{-- <th>Status</th> --}}
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($brands as $key => $brand)
                                        <!-- edit modal -->
                                        <div class="modal fade" id="{{ 'brand' . $brand->id }}" tabindex="-1"
                                            aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel1">Edit Brand
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="flex-grow-1"
                                                            action="{{ route('categories.brand.update', $brand->id) }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="old_logo"
                                                                value="{{ asset('storage/' . $brand->logo) }}">
                                                            <x-form.input-with-symbol name='brand' label="New brand"
                                                                type='text' value="{{ $brand->name }}"
                                                                symbol="bx-git-branch" placeholder='brand name' />
                                                            <x-form.input-with-symbol name='logo' label="brand logo"
                                                                type='file' symbol="bx-landscape" />

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-secondary"
                                                            data-bs-dismiss="modal">
                                                            Close
                                                        </button>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <tr>
                                            <td>
                                                <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                <strong>{{ ++$key }}</strong>
                                            </td>
                                            <td>{{ Str::headline($brand->name) }}</td>
                                            <td>
                                                <img style="width: 40px; " src="{{ asset('storage/' . $brand->logo) }}"
                                                    alt="{{ "$brand->name logo" }}">
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">

                                                        {{-- modal for add categories --}}
                                                        <div class="">
                                                            <!-- Button trigger modal -->
                                                            <button class="dropdown-item"
                                                                style="border: none; background: none;" type="button"
                                                                class="btn btn-primary" data-bs-toggle="modal"
                                                                data-bs-target="{{ '#brand' . $brand->id }}">
                                                                <i class="bx bx-edit-alt me-1"></i>Edit
                                                            </button>
                                                        </div>

                                                        <a class="dropdown-item"
                                                            href="{{ route('categories.brand.destroy', $brand->id) }}"><i
                                                                class="bx bx-trash me-1"></i> Delete</a>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
