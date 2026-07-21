@extends('layouts.admin')

@section('title', 'Master Produk')

@section('content')

<h2 class="mb-4">
    Master Produk
</h2>

<a href="{{ route('products.create') }}"
    class="btn btn-primary mb-3">
    Tambah Produk
</a>
@if(session('success'))

<div class="alert alert-success">
    {{ session('success') }}
</div>

@endif

<table class="table table-bordered">

    <thead>

        <tr>

            <th>No</th>

            <th>SKU</th>

            <th>Nama</th>

            <th>Kategori</th>

            <th>Harga</th>

            <th>Stok</th>

            <th>Aksi</th>

        </tr>

    </thead>

    <tbody>

        @forelse($products as $product)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $product->sku }}</td>

                <td>{{ $product->name }}</td>

                <td>{{ $product->category->name }}</td>

                <td>Rp {{ number_format($product->selling_price, 0, ',', '.') }}</td>

                <td>{{ $product->stock }}</td>

                <td>-</td>

            </tr>

        @empty

            <tr>

                <td colspan="7" class="text-center">

                    Belum ada produk.

                </td>

            </tr>

        @endforelse

    </tbody>

</table>

@endsection