@extends('layouts.admin')

@section('title', 'Kategori')

@section('content')

<h2 class="mb-4">
    Master Kategori
</h2>

<a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">
    <i class="bi bi-plus-circle"></i>
    Tambah Kategori
</a>
@if(session('success'))

<div class="alert alert-success">

    {{ session('success') }}

</div>

@endif

<table class="table table-bordered">

    <thead>

        <tr>

            <th width="80">No</th>
            <th>Nama</th>
            <th>Slug</th>
            <th width="150">Aksi</th>

        </tr>

    </thead>

    <tbody>

        @forelse($categories as $category)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $category->name }}</td>

            <td>{{ $category->slug }}</td>

            <td>
                <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('categories.destroy', $category) }}"
                method="POST"
                class="d-inline"
                onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>

        </tr>

        @empty

        <tr>

            <td colspan="4" class="text-center">

                Belum ada data

            </td>

        </tr>

        @endforelse

    </tbody>

</table>

{{ $categories->links() }}

@endsection