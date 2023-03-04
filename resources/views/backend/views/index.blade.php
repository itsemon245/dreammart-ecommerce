@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')

    <x-form.input-with-symbol symbol='bx-user' class="form-control" name="email" label="Enter your email" type='email'
        placeholder='email' />
@endsection
