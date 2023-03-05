@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')

    <div class="container p-5">
        <x-test>
            <x-slot name="header">
                Lorem ipsum, dolor sit amet consectetur adipisicing.
            </x-slot>
        </x-test>
        <div class="card mt-5">
            <x-ui.modal action="{{ route('categories.store') }}" method="post" title='Add Category' submit='Submit'
                id="modalCenter">
                <x-slot name="button">
                    <!-- Button trigger modal -->
                    <x-ui.modal-button title='Add Category' id="modalCenter" />
                </x-slot>
                <x-form.input-with-symbol name='category' label="New Category" type='text' symbol="bx-category-alt"
                    placeholder='category name' />
            </x-ui.modal>
        </div>
    </div>


@endsection
