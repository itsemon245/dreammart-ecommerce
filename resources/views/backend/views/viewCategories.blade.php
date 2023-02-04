@extends('layouts.master')
@section('title', "Add Product")
@section('content')
<div class="container-md mt-5">
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <div class="d-flex gap-3 mt-3">
                    {{-- table for categories  --}}
                    <div class="card flex-grow-1">
            
                        <div class="d-flex align-items-center card-header">
                           {{-- modal for add categories --}}
                            <div class="">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                                Add Category
                                </button>
                
                                <!-- Modal -->
                                <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">Add Category</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="flex-grow-1" action="{{route('categories.store')}}" method="post">
                                            @csrf
                                            <x-backend.form.input-with-symbol name='category' label="New Category" type='text' symbol="<i class='bx bx-category-alt'></i>" placeholder='category name' />
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
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
                                <th>Status</th>
                                <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <tr>
                                <td>
                                    <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong>
                                </td>
                                <td>Fashion</td>
                                <td>
                                fashion
                                </td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                <td>
                                    <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                    </div>
                                </td>
                                </tr>
                                <tr>
                                <td>
                                    <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong>
                                </td>
                                <td>Fashion</td>
                                <td>
                                fashion
                                </td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                <td>
                                    <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                    </div>
                                </td>
                                </tr>
                            </tbody>
                            </table>
                        </div> 
                    </div>

                     {{-- table for brands  --}}
                     <div class="card flex-grow-1">
            
                        <div class="d-flex align-items-center card-header">
                           {{-- modal for add brands --}}
                            <div class="">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#brandModal">
                                Add Brand
                                </button>
                
                                <!-- Modal -->
                                <div class="modal fade" id="brandModal" tabindex="0" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">Add Brand</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="flex-grow-1" action="{{route('categories.brand.store')}}" method="post">
                                            @csrf
                                            <x-backend.form.input-with-symbol name='brand' class="mb-3" label="New Brand" type='text' symbol="<i class='bx bx-git-branch'></i>" placeholder='brand name' />
                                            <x-backend.form.input-with-symbol name='logo' label="brand logo" type='file' symbol="<i class='bx bx-landscape'></i>" />
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
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
                                <th>Status</th>
                                <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <tr>
                                <td>
                                    <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong>
                                </td>
                                <td>Fashion</td>
                                <td>
                                fashion
                                </td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                <td>
                                    <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                    </div>
                                </td>
                                </tr>
                                <tr>
                                <td>
                                    <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong>
                                </td>
                                <td>Fashion</td>
                                <td>
                                fashion
                                </td>
                                <td><span class="badge bg-label-primary me-1">Active</span></td>
                                <td>
                                    <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                    </div>
                                </td>
                                </tr>
                            </tbody>
                            </table>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection