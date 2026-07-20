@extends('layouts.admin')

@section('title', 'Edit Kategori')

@section('content')

<h2 class="mb-4">
    Edit Kategori
</h2>

<form action="{{ route('categories.update', $category) }}" method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">

        <label class="form-label">
            Nama Kategori
        </label>

        <input
            type="text"
            name="name"
            class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name', $category->name) }}"
        >

        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>

    <div class="mb-3">

        <label class="form-label">
            Deskripsi
        </label>

        <textarea
            name="description"
            rows="4"
            class="form-control"
        >{{ old('description', $category->description) }}</textarea>

    </div>

    <button class="btn btn-success">
        Update
    </button>

    <a href="{{ route('categories.index') }}"
       class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection