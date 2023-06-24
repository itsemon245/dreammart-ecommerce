@extends('layouts.master')
@section('title', "Edit Role")
@section('content')

<form action="{{route('role.update', $role->id)}}" method="POST">
    @method('PUT')
    @csrf
    <div class=" mt-5 px-3">
        <div class="card">
            <div class="card-body">
                <div class="card-header">
                    <h4 class="text-center text-primary">Edit Role & Permissions</h4>
                </div>
            
                
                



               <div class="px-3">
                <h5 class="text-center">Permissions</h5>
                    <div class="row">
                        @foreach ($permissions as $key=>$permission)
                        <div class="col-md-3" style="margin: 12px 0px;">
                            
                            <div class="d-flex align-items-center" style="gap:10px">
                                

                                <div class="form-check form-switch " style="opacity: {{ $hasPermissions->search($permission->id) !== false ? '100%' : '70%' }}">

                                    <input class="form-check-input" type="checkbox" id="permission_{{ $permission->id }}" value="{{ $permission->id }}"
                                    {{ $hasPermissions->search($permission->id) !== false? 'checked' : '' }}
                                    name="permissions[]"/>

                                    <label class="unselectable" for="permission_{{ $permission->id }}"><strong>{{++$key.". "}}</strong>{{ Str::headline($permission->name) }}</label>
       
                                </div>
                            </div>
                           
                        </div>
                        @endforeach

                    </div>
               </div>


               <div class="row px-3 mt-5">
                   <div class="col-2 d-flex justify-content-end align-items-center">
                    <label for="role"><strong>Role Name</strong></label>
                   </div>
                <div class="col-7 d-flex">
                    <input class="form-control" id="role" type="text" name="role" value="{{ $role->name }}">
                @error('role')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    <a href="{{route('role.add')}}" class="btn btn-outline-secondary">Cancel</a>
                </div>
               </div>
            </div>

        </div>

    </div>

</form>
@endsection