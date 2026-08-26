@extends('layouts.admin')

@section('title', 'Detail Purchase')

@section('content')

<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">

        <h3 class="card-title">
            Detail Purchase
        </h3>

        <a href="{{ route('purchases.index') }}"
           class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>
            Kembali

        </a>

    </div>

    <div class="card-body">

        <div class="row mb-4">

            <div class="col-md-4">
                <strong>Invoice</strong>
                <div>
                    {{ $purchase->invoice_number }}
                </div>
            </div>

            <div class="col-md-4">
                <strong>Supplier</strong>
                <div>
                    {{ $purchase->supplier->name }}
                </div>
            </div>

            <div class="col-md-4">
                <strong>Tanggal</strong>
                <div>
                    {{ $purchase->purchase_date->format('d-m-Y') }}
                </div>
            </div>

        </div>

        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Produk</th>
                    <th>Qty</th>
                    <th>Harga Beli</th>
                    <th>Subtotal</th>
                </tr>
            </thead>

            <tbody>

                @foreach($purchase->items as $item)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>
                            {{ $item->product->name }}
                        </td>

                        <td>
                            {{ $item->qty }}
                        </td>

                        <td>
                            Rp {{ number_format($item->price, 0, ',', '.') }}
                        </td>

                        <td>
                            Rp {{ number_format($item->subtotal, 0, ',', '.') }}
                        </td>

                    </tr>

                @endforeach

            </tbody>

            <tfoot>

                <tr>
                    <th colspan="4" class="text-end">
                        Total
                    </th>

                    <th>
                        Rp {{ number_format($purchase->total, 0, ',', '.') }}
                    </th>
                </tr>

            </tfoot>

        </table>

    </div>

</div>

@endsection