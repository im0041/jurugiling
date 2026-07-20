@extends('layouts.admin')

@section('title', 'Kategori')

@section('content')

<h2 class="mb-4">
    Master Kategori
</h2>

<a href="#" class="btn btn-primary mb-3">
    Tambah Kategori
</a>

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

                Edit

                Hapus

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