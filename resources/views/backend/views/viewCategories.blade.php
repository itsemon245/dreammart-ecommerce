@extends('layouts.master')
@section('title', 'Categories')
@section('content')
    <div class="container-md mt-5">
        <div class="card">
            <div class="card-header">
                <div class="card-body">

                    {{-- table for categories  --}}
                    <div class="card flex-grow-1">

                        <div class="d-flex align-items-center card-header">

                            {{-- modal for add categories --}}

                            <x-ui.modal action="{{ route('categories.store') }}" method="post" title='Add Category'
                                submit='Submit' id="addCategory">
                                <x-slot name="button">
                                    <!-- Button trigger modal -->
                                    <x-ui.modal-button id="addCategory" class='btn btn-primary'>
                                        Add Brand
                                    </x-ui.modal-button>
                                </x-slot>
                                <x-form.input-with-symbol name='category' label="New Category" type='text'
                                    symbol="bx-category-alt" placeholder='category name' />
                            </x-ui.modal>




                            <div class="flex-grow-1 text-center">
                                <strong class="">Categories List</strong>
                            </div>
                        </div>
                        <div class="table-responsive text-nowrap">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        {{-- <th>Status</th> --}}
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($categories as $key => $category)
                                        {{-- <!-- Edit category modal -->
                                        <div class="modal fade" id="{{ 'category' . $category->id }}" tabindex="-1"
                                            aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel1">Edit Category
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="flex-grow-1" action="{{ route('categories.update') }}"
                                                            method="post">
                                                            @csrf
                                                            @method('PUT')

                                                            <x-form.input-with-symbol name='category' label="New Category"
                                                                type='text' value="{{ $category->name }}"
                                                                symbol="bx-category-alt" placeholder='category name' />

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
                                        </div> --}}

                                        {{-- modal for edit category --}}
                                        <x-ui.modal action="{{ route('categories.update', $category->id) }}" method="put"
                                            enctype="multipart/form-data" title='Edit Category' submit='Save Changes'
                                            id="{{ 'category' . $category->id }}">
                                            <x-slot name="button">

                                            </x-slot>
                                            <x-form.input-with-symbol name='category' label="New Category" type='text'
                                                value="{{ $category->name }}" symbol="bx-category-alt"
                                                placeholder='category name' />
                                        </x-ui.modal>
                                        <tr>
                                            <td>
                                                <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                <strong>{{ ++$key }}</strong>
                                            </td>
                                            <td>{{ Str::headline($category->name) }}</td>
                                            <td>
                                                {{ $category->slug }}
                                            </td>
                                            {{-- <td><span class="badge bg-label-primary me-1">Active</span></td> --}}
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">

                                                        {{-- modal for add categories --}}
                                                        <div class="">
                                                            <x-ui.modal-button class="dropdown-item"
                                                                style="border: none; background: none;"
                                                                id="{{ 'category' . $category->id }}">
                                                                <i class="bx
                                                                bx-edit-alt me-1"></i>Edit
                                                            </x-ui.modal-button>
                                                            
                                                        </div>

                                                        <a class="dropdown-item"
                                                            href="{{ route('categories.destroy', $category->id) }}"><i
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
