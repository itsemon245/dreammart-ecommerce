@extends('layouts.master')
@section('title', 'Pending Orders')
@section('content')
    {{-- {{dd($orders[0]->category->name)}} --}}
    <div class="container-md">
        <div class="card mt-3">
            <h5 class="card-header text-center">Pending Orders</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Order Info</th>
                            <th>Order Items</th>
                            <th>Shipping Info</th>
                            <th>Billing Info</th>
                            <th>Change Status</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($orders as $key => $order)
                            <tr>
                                <td>
                                    <strong>{{ ++$key }}</strong>
                                </td>
                                <td>
                                    <div>
                                        <div>
                                            <strong>Order ID:

                                                <span>{{ $order->id }}</span>
                                            </strong>
                                        </div>
                                        <div>
                                            <strong>Ordered By:
                                                <span>{{ $order->user->name }}</span>
                                            </strong>
                                        </div>
                                        <div>
                                            <strong>Ordered Placed:
                                                <span>{{ Carbon\Carbon::parse($order->created_at)->format('d M Y') }}</span>
                                            </strong>
                                        </div>
                                        <div>
                                            <strong>Status:
                                                <strong
                                                    class="badge bg-{{ $order->status === 'shipped' ? 'info' : 'warning' }} me-1">{{ $order->status }}</strong>
                                            </strong>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                        @foreach ($order->items as $item)
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                class="avatar avatar-lg pull-up" title=""
                                                data-bs-original-title="{{ $item->product->name }}">
                                                <img src="{{ asset('storage/' . $item->product->image) }}"
                                                    alt="{{ $item->product->name }}" class="rounded-circle">
                                                <strong class="text-primary">{{ ' x ' . $item->qty }}</strong>
                                            </li>
                                        @endforeach

                                    </ul>
                                </td>
                                <td>
                                    <div>
                                        <div>
                                            <div>Shipping Address:
                                            </div>
                                        </div>
                                        <div>
                                            <strong style="max-width:150px;">Lorem ipsum dolor sit amet
                                                consectetur.</strong>
                                        </div>
                                        <div>
                                            <div>Contact Info:
                                            </div>
                                            <strong>{{ $order->user->email }}</strong>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <div class="d-flex flex-column">
                                            <div class="d-flex justify-content-between px-5">Total Cost:
                                                <span>{{ "$" . $order->total_price }}</span>
                                            </div>
                                            <div class="d-flex justify-content-between px-5">Ammount Paid:
                                                <span>{{ '-  $' . $order->ammount_paid }}</span>
                                            </div>
                                            <div class="bg-primary my-1" style="height:1px;"></div>
                                            <strong class="d-flex justify-content-between px-5">Ammount To Pay:
                                                <span>{{ "$" . $order->total_price - $order->ammount_paid }}</span>
                                            </strong>
                                        </div>

                                        <div class="px-5 mt-3">
                                            <div>
                                                <strong class="">Payment Method:
                                                </strong>
                                            </div>
                                            <div class="badge bg-primary">Cash On
                                                Delivery</div>
                                        </div>
                                    </div>

                                </td>

                                <td>
                                    <div>
                                        <form action="{{ route('admin.orders.status', $order->id) }}" method="post"
                                            class="d-flex gap-1">
                                            @csrf
                                            @method('put')
                                            <select class="form-select" name="status" id="">
                                                <option selected disabled>Select status</option>
                                                <option value="pending">pending</option>
                                                <option value="shipped">shipped</option>
                                                <option value="completed">completed</option>
                                            </select>
                                            <button class="btn btn-primary" type='submit'>Submit</button>
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
