@extends('layouts.admin')

@section('title', 'Tambah Produk')

@section('content')

<h2 class="mb-4">
    Tambah Produk
</h2>

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('admin.products._form')
    <button class="btn btn-success">
    Simpan
</button>
<a href="{{ route('products.index') }}"
    class="btn btn-secondary">
    Kembali
</a>
</div>

    </div>

</form>

@endsection