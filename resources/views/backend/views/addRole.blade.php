
@extends('layouts.master')
@section('title', "Dashboard")
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
                             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                             Add Role
                             </button>
             
                             <!-- Modal -->
                             <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true" style="display: none;">
                                 <div class="modal-dialog" role="document">
                                     <div class="modal-content">
                                         <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel1">Add Role</h5>
                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                         </div>
                                         <div class="modal-body">
                                             <form class="flex-grow-1" action="" method="post">
                                                 @csrf
                                                 <x-backend.form.input-with-symbol name='role' label="New Role" type='text' symbol="<i class='bx bx-role-alt'></i>" placeholder='role name' />
                                             
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
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              <tr>
                <td>1</td>
                <td>
                    <strong class="text-primary"> Admin</strong>
                </td>
                <td>
                    <a class="btn btn-danger" href="javascript:void(0);">
                      <div class="d-flex align-items-center gap-1">
                        <i class="bx bx-trash me-1"></i>
                         <span>Delete</span>
                      </div>
                    </a>
                </td>
              </tr>
              
            </tbody>
          </table>
        </div>
    </div>
</div>

@endsection

