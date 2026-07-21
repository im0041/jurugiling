@extends('layouts.admin')

@section('title', 'Edit Produk')

@section('content')

<h2 class="mb-4">
    Edit Produk
</h2>

<form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')

    @include('admin.products._form')

    <button class="btn btn-success">
        Update
    </button>

    <a href="{{ route('products.index') }}"
        class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection