@extends('layouts.admin')

@section('title', 'Edit Supplier')

@section('content')

<div class="card">

    <div class="card-header">
        <h3 class="card-title">
            Edit Supplier
        </h3>
    </div>

    <div class="card-body">

        <form
            action="{{ route('suppliers.update', $supplier) }}"
            method="POST">

            @csrf
            @method('PUT')

            @include('admin.suppliers._form')

        </form>

    </div>

</div>

@endsection