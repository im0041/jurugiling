@extends('layouts.admin')

@section('content')

    
        <h2 class="mb-4">
           Master Supplier
        </h2>

        <a href="{{ route('suppliers.trash') }}"
               class="btn btn-secondary mb-3">
                <i class="bi bi-trash"></i>
                Recycle Bin
        </a>
        <a href="{{ route('suppliers.create') }}" class="btn btn-primary mb-3">
            <i class="bi bi-plus-circle"></i>
            Tambah Supplier
        </a>
    

    <div class="card-body">
        @include('admin.suppliers._table', [
        'isTrash' => false
        ])
    </div>


@endsection