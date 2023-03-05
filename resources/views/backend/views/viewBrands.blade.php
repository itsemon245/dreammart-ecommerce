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

                            {{-- modal for add brand --}}
                            <x-ui.modal action="{{ route('categories.brand.store') }}" method="post"
                                enctype="multipart/form-data" title='Add Brand' submit='Submit' id="addBrand">
                                <x-slot name="button">
                                    <!-- Button trigger modal -->
                                    <x-ui.modal-button id="addBrand" class='btn btn-primary'>
                                        Add Brand
                                    </x-ui.modal-button>
                                </x-slot>
                                <x-form.input-with-symbol name='brand' label="New brand" type='text' value=""
                                    symbol="bx-git-branch" placeholder='brand name' />
                                <x-form.input-with-symbol name='logo' label="brand logo" type='file'
                                    symbol="bx-landscape" />
                            </x-ui.modal>


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
                                        {{-- modal for edit brand --}}
                                        <x-ui.modal action="{{ route('categories.brand.update', $brand->id) }}"
                                            method="put" enctype="multipart/form-data" title='Edit Brand'
                                            submit='Save Changes' id="{{ 'brand' . $brand->id }}">
                                            <x-slot name="button">

                                            </x-slot>
                                            <input type="hidden" name="old_logo"
                                                value="{{ asset('storage/' . $brand->logo) }}">
                                            <x-form.input-with-symbol name='brand' label="New brand" type='text'
                                                value="{{ $brand->name }}" symbol="bx-git-branch"
                                                placeholder='brand name' />
                                            <x-form.input-with-symbol name='logo' label="brand logo" type='file'
                                                symbol="bx-landscape" />
                                        </x-ui.modal>
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
                                                            <x-ui.modal-button id="{{ 'brand' . $brand->id }}"
                                                                class='dropdown-item'
                                                                style="border: none; background: none;">
                                                                <i class="bx bx-edit-alt me-1"></i>Edit
                                                            </x-ui.modal-button>

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
