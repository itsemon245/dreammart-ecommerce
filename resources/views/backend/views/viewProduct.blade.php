@extends('layouts.master')
@section('title', "View Product")
@section('content')
{{-- {{dd($products[0]->category->name)}} --}}
<div class="container-md">
    <div class="card mt-3">
        <h5 class="card-header text-center">All Products</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr>
                <th><strong>#</strong></th>
                <th>Product info</th>
                <th>Product Image</th>
                <th>Brand</th>
                <th class="text-center">Status</th>
                <th class="text-center">Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
             @foreach ($products as $key=>$product)
             
             <tr>
                <td><strong>1</strong></td>
                <td>
                   <div class="" >
                         {{-- product name  --}}
                        <div class="row" >
                        <h5 class="mb-1 text-dark"><strong>{{$product->name}}</strong></h5>
                        </div>
                        {{-- product category  --}}
                        <div class="row">
                            <h6 class="mb-1 "><strong>Category: </strong><span class="badge bg-primary"><strong>{{$product->category->name}}</strong></span></h6>
                        </div>
                        {{-- product price  --}}
                        <div class="row">
                            <h6 class="mb-1 "><strong>Price: <span class="text-primary">${{$product->price}}</span> </strong></h6>
                        </div>
                        {{-- product stock  --}}
                        <div class="row">
                            <h6 class="mb-1 "><strong>In-stock: <span class="text-primary">{{$product->in_stock}}</span></strong> pcs</h6>
                        </div>
                        {{-- product discount  --}}
                        <div class="row">
                            <h6 class="mb-1 "><strong>Discount: </strong><span class="badge bg-label-primary"><strong>{{$product->discount}}%</strong></span></h6>
                        </div>
                   </div>
                </td>
                <td>
                    <div style="width: 150px;">
                        <img src="{{asset('storage/'.$product->image)}}" alt="{{$product->name}}" class="rounded-3 w-100">
                    </div>
                </td>
                <td>
                    <div style="max-width: 100px;">
                       
                        <img src="{{asset('storage/'.$product->brand->image)}}" alt="{{$product->brand->name}}" class="mt-5 rounded-3 w-100">
                        <h6 class="mt-1 text-center"><strong>{{$product->brand->name}}</strong></h6>
                    </div>
                </td>
                <td class="text-center">
                    <span class="badge {{$product->status === 1? "bg-label-success" : "bg-label-warning"}} me-1">{{$product->status ===1? "Active" : "Inactive"}}</span>
                </td>
                <td class="text-center">
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{route('product.update.view', $product->id)}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                      <form action="{{route('product.delete')}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <button type="submit" class="dropdown-item" href="{{}}"><i class="bx bx-trash me-1"></i> Delete</button></form>
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
@endsection