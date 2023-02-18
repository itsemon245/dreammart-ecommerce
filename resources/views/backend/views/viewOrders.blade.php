@extends('layouts.master')
@section('title', "View Orders")
@section('content')
{{-- {{dd($orders[0]->category->name)}} --}}
<div class="container-md">
    <div class="card mt-3">
        <h5 class="card-header text-center">All Orders</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">
           
          </table>
        </div>
    </div>
</div>
@endsection