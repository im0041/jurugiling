@extends('layouts.admin')

@section('title', 'Purchase')

@section('content')
        <h2 class="mb-4">
            Purchases
        </h2>

        <a href="#" class="btn btn-primary mb-3">
            <i class="bi bi-plus-circle"></i>
            Tambah Purchase
        </a>

        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Invoice</th>
                    <th>Supplier</th>
                    <th>Tanggal</th>
                    <th>Total</th>
                </tr>
            </thead>

            <tbody>

                @forelse($purchases as $purchase)

                    <tr>
                        <td>{{ $purchases->firstItem() + $loop->index }}</td>

                        <td>{{ $purchase->invoice_number }}</td>

                        <td>{{ $purchase->supplier->name }}</td>

                        <td>
                            {{ $purchase->purchase_date->format('d-m-Y') }}
                        </td>

                        <td>
                            Rp {{ number_format($purchase->total, 0, ',', '.') }}
                        </td>
                    </tr>

                @empty

                    <tr>
                        <td colspan="5" class="text-center">
                            Belum ada data purchase.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>


            {{ $purchases->links() }}


@endsection