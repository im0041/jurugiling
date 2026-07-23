@extends('layouts.admin')

@section('content')

        <h2 class="mb-4">
           Master Supplier
        </h2>

        <a href="{{ route('suppliers.create') }}" class="btn btn-primary mb-3">
            <i class="bi bi-plus-circle"></i>
            Tambah Supplier
        </a>

    

        <table class="table table-bordered table-hover">

            <thead>

                <tr>
                    <th width="80">No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th width="150">Aksi</th>
                </tr>

            </thead>

            <tbody>

                @forelse($suppliers as $supplier)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $supplier->code }}</td>

                        <td>{{ $supplier->name }}</td>

                        <td>{{ $supplier->phone ?? '-' }}</td>

                        <td>{{ $supplier->email ?? '-' }}</td>

                        <td>

                            <a href="{{ route('suppliers.edit', $supplier) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <button class="btn btn-danger btn-sm" disabled>
                                Hapus
                            </button>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="6" class="text-center">
                            Belum ada data supplier.
                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

        <div class="mt-3">
            {{ $suppliers->links() }}
        </div>

@endsection