@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')

    <div class="container px-5 mt-5">



        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <div class="d-flex">
                        {{-- table for categories  --}}
                        <div class="flex-grow-1">
                            <div class="d-flex align-items-center card-header">
                                {{-- modal for add categories --}}
                                <div class="">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#basicModal">
                                        Add Role
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true"
                                        style="display: none;">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Add Role</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="flex-grow-1" action="{{ route('role.create') }}"
                                                        method="post">
                                                        @csrf
                                                        <x-form.input-with-symbol name='role' label="New Role"
                                                            type='text' symbol="bx-role-alt" placeholder='role name' />

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
                                    <strong class="display-6">Roles List</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Role Name</th>
                                    <th>Permissions</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @if (count($roles) > 0)
                                    @foreach ($roles as $key => $role)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>
                                                <strong class="text-primary">{{ Str::headline($role->name) }}</strong>
                                            </td>
                                            <td>
                                                {{ count($role->permissions) }}
                                            </td>
                                            <td>
                                                <a href="{{ route('role.edit', $role->id) }}" class="btn btn-primary">
                                                    <div class="d-flex align-items-center gap-1">
                                                        <i class="bx bx-edit me-1"></i>
                                                        <span>Edit</span>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="3">
                                            <div class="text-center mt-2">
                                                Nothing to show
                                            </div>
                                        </td>
                                    </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        @endsection
