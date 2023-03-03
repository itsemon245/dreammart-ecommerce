@extends('layouts.master')
@section('title', "View Roles")
@section('content')
{{-- {{dd($products[0]->category->name)}} --}}
<div class="container-md">
    <div class="card mt-5">
        
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Role</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              <tr>
                <td>1</td>
                <td>
                    <div class="d-flex align-items-center">
                        
                    <div class="avatar avatar-md me-1">
                        <img src="{{asset("assets/img/avatars/5.png")}}" alt="Avatar" class="rounded-circle ">
                       <strong> Albert Cook</strong>
                    </div>
                    </div>
                </td>
                <td>
                    <span class="badge bg-primary me-1 uppercase">admin</span>
                 
                </td>
                <td>
                    <div class="d-flex align-items-center gap-3">
                        <span class="badge bg-label-success me-1">Active</span>
                    <!-- Default switch -->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" checked/>
                    </div>
                    </div>
                </td>
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
                <td>1</td>
                <td>
                    <div class="d-flex align-items-center">
                        
                    <div class="avatar avatar-md me-1">
                        <img src="{{asset("assets/img/avatars/6.png")}}" alt="Avatar" class="rounded-circle ">
                       <strong>Merry Jane</strong>
                    </div>
                    </div>
                </td>
                <td>
                    <span class="badge bg-primary me-1 uppercase">user</span>
                 
                </td>
                <td>
                    <div class="d-flex align-items-center gap-3">
                        <span class="badge bg-label-danger me-1">inactive</span>
                    <!-- Default switch -->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
                    </div>
                    </div>
                </td>
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
@endsection