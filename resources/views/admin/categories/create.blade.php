@extends('layouts.admin')

@section('title', 'Tambah Kategori')

@section('content')

<h2 class="mb-4">
    Tambah Kategori
</h2>

<form action="{{ route('categories.store') }}" method="POST">

    @csrf

    @include('admin.categories._form')

    <button class="btn btn-success">
        Simpan
    </button>

    <a href="{{ route('categories.index') }}"
        class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection