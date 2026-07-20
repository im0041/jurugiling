@extends('layouts.admin')

@section('title', 'Edit Kategori')

@section('content')

<h2 class="mb-4">
    Edit Kategori
</h2>

<form action="{{ route('categories.update', $category) }}" method="POST">

    @csrf
    @method('PUT')

    @include('admin.categories._form')

    <button class="btn btn-success">
        Update
    </button>

    <a href="{{ route('categories.index') }}"
        class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection