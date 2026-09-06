@extends('layouts.admin')

@section('title', 'Tambah Supplier')

@section('content')

<div class="card">

    <div class="card-header">
        <h3 class="card-title">
            Tambah Supplier
        </h3>
    </div>

    <div class="card-body">

        <form action="{{ route('suppliers.store') }}" method="POST">

            @csrf

            @include('admin.suppliers._form')

        </form>

    </div>

</div>

@endsection