@extends('layouts.admin')

@section('title', 'Recycle Bin Supplier')

@section('content')

<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">

        <h3 class="card-title">

            Recycle Bin Supplier

        </h3>

        <a href="{{ route('suppliers.index') }}"
           class="btn btn-primary">

            Kembali

        </a>

    </div>

    <div class="card-body">

        @include('admin.suppliers._table', [
        'isTrash' => true
        ])

    </div>

</div>

@endsection