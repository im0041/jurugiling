@extends('layouts.admin')

@section('title', 'Tambah Purchase')

@section('content')

<div class="card">

    <div class="card-header">
        <h3 class="card-title">
            Tambah Purchase
        </h3>
    </div>

    <div class="card-body">

        <form action="{{ route('purchases.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="supplier_id" class="form-label">
                    Supplier
                </label>

                <select
                    name="supplier_id"
                    id="supplier_id"
                    class="form-control"
                    required>

                    <option value="">
                        -- Pilih Supplier --
                    </option>

                    @foreach($suppliers as $supplier)
                        <option value="{{ $supplier->id }}">
                            {{ $supplier->name }}
                        </option>
                    @endforeach

                </select>
            </div>

            <div class="mb-3">
                <label for="purchase_date" class="form-label">
                    Tanggal Purchase
                </label>

                <input
                    type="date"
                    name="purchase_date"
                    id="purchase_date"
                    class="form-control"
                    value="{{ old('purchase_date', now()->format('Y-m-d')) }}"
                    required>
            </div>

            <hr>

            <h5>Item Purchase</h5>

            <div class="row">

                <div class="col-md-5">
                    <label class="form-label">
                        Produk
                    </label>

                    <select
                        name="items[0][product_id]"
                        class="form-control"
                        required>

                        <option value="">
                            -- Pilih Produk --
                        </option>

                        @foreach($products as $product)
                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>
                        @endforeach

                    </select>
                </div>

                <div class="col-md-2">
                    <label class="form-label">
                        Qty
                    </label>

                    <input
                        type="number"
                        name="items[0][qty]"
                        class="form-control"
                        min="0.01"
                        step="0.01"
                        required>
                </div>

                <div class="col-md-3">
                    <label class="form-label">
                        Harga
                    </label>

                    <input
                        type="number"
                        name="items[0][price]"
                        class="form-control"
                        min="0"
                        step="0.01"
                        required>
                </div>

            </div>

            <div class="mt-4">

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>

                <a href="{{ route('purchases.index') }}"
                   class="btn btn-secondary">
                    Batal
                </a>

            </div>

        </form>

    </div>

</div>

@endsection