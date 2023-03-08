@extends('layouts.master')
@section('title', 'View Roles')
@section('content')
    {{-- {{dd($products[0]->category->name)}} --}}
    <div class="container-md">
        <div class="card mt-5">
            <div class="card-header text-center display-6">All Users</div>
            <div class="ps-5">
                <x-ui.modal action="{{ route('admin.user.create') }}" method="post" title='Add User' submit='Add'
                    id="addUser">
                    <x-slot name="button">
                        <!-- Button trigger modal -->
                        <x-ui.modal-button id="addUser" class='btn btn-primary'>
                            Add User
                        </x-ui.modal-button>
                    </x-slot>
                    <div class="d-flex gap-3">
                        <x-form.input-with-symbol name='name' label="Full Name" type='text' symbol="Aa"
                            placeholder='Name' />
                        <x-form.input-with-symbol name='username' label="Username" type='text' symbol="bx bx-user"
                            placeholder='johndoe243' />
                    </div>
                    <div class="d-flex gap-3">
                        <x-form.input-with-symbol name='email' label="email" type='email' symbol="bx bx-envelope"
                            placeholder='example@gamil.com' />
                        <div class="flex-grow-1">
                            <x-form.select name='role' label='Role' :options="$roles" placeholder="Select role" />
                        </div>
                    </div>
                    <div class="d-flex gap-3">
                        <x-form.input-with-symbol name='password' label="password" type='password' symbol="bx bx-shield"
                            placeholder='min 8, mixed letters & symbol' />
                        <x-form.input-with-symbol name='confirm_password' label="confirm password" type='password'
                            symbol="bx bx-shield" placeholder='min 8, mixed letters & symbol' />

                    </div>
                </x-ui.modal>
            </div>

            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Profile</th>
                            <th>Roles</th>
                            <th>Status</th>
                            <th>Toggle Status</th>
                            <th>Assign Role</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($users as $key => $user)
                            {{-- modal for edit brand --}}
                            <x-ui.modal action="{{ route('role.assign', $user->id) }}" method="post"
                                title='Assign Role To {{ $user->name }}' submit='Assign' id="{{ 'user' . $user->id }}">
                                <x-form.select name='role' label='Assign Role' :options="$roles"
                                    placeholder="Select role" value='{{ $user->roles[0]->id }}' />
                            </x-ui.modal>
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>
                                    <strong>{{ $user->name }}</strong>
                                </td>
                                <td>
                                    <div class="avatar avatar-md">
                                        <img src="{{ Str::contains($user->avater, 'uploads') ? asset('storage/' . $user->avater) : $user->avater }}"
                                            alt="{{ $user->name . '-avater' }}" class="rounded-circle ">
                                    </div>
                                </td>
                                <td>
                                    @foreach ($user->roles as $userRole)
                                        <span class="badge bg-primary me-1 uppercase">
                                            {{ $userRole->name }}
                                        </span>
                                    @endforeach
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <span
                                            class="badge {{ $user->status ? 'bg-label-success' : 'bg-label-warning' }} me-1">{{ $user->status ? 'active' : 'inactive' }}</span>
                                        <!-- Default switch -->

                                    </div>
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('toggle.userStatus', $user->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="text-secondary"
                                            style="background: none; border:none; ">
                                            @if ($user->status)
                                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgba(105, 108, 255, 1);transform: ;msFilter:;">
                                                    <path
                                                        d="M16 6H8c-3.296 0-5.982 2.682-6 5.986v.042A6.01 6.01 0 0 0 8 18h8c3.309 0 6-2.691 6-6s-2.691-6-6-6zm0 9c-1.627 0-3-1.373-3-3s1.373-3 3-3 3 1.373 3 3-1.373 3-3 3z">
                                                    </path>
                                                </svg>
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                                    viewBox="0 0 24 24"
                                                    style="fill: rgba(111, 111, 111, 0.688);transform: ;msFilter:;">
                                                    <path
                                                        d="M8 9c-1.628 0-3 1.372-3 3s1.372 3 3 3 3-1.372 3-3-1.372-3-3-3z">
                                                    </path>
                                                    <path
                                                        d="M16 6H8c-3.3 0-5.989 2.689-6 6v.016A6.01 6.01 0 0 0 8 18h8a6.01 6.01 0 0 0 6-5.994V12c-.009-3.309-2.699-6-6-6zm0 10H8a4.006 4.006 0 0 1-4-3.99C4.004 9.799 5.798 8 8 8h8c2.202 0 3.996 1.799 4 4.006A4.007 4.007 0 0 1 16 16zm4-3.984.443-.004.557.004h-1z">
                                                    </path>
                                                </svg>
                                            @endif
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <div>
                                        <form action="{{ route('role.assign', $user->id) }}" method="post"
                                            class="d-flex gap-1">
                                            @csrf
                                            @method('put')
                                            <select class="form-select" name="role" id=""
                                                style="max-width:max-content;">
                                                <option selected disabled>Select Role</option>
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                            <button class="btn btn-primary" type='submit'>Assign</button>
                                        </form>
                                    </div>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
