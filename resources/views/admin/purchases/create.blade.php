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
                <div id="purchase-items">
                    <div class="purchase-item row mb-3">
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
                        <div class="col-md-2">
                            <label class="form-label">
                                Subtotal
                            </label>
                            <input
                            type="text"
                            class="form-control item-subtotal"
                            value="0"
                            readonly>
                        </div>
                        <div class="col-md-2 d-flex align-items-end">
                            <button
                            type="button"
                            class="btn btn-danger remove-item">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="text-end mb-3">

    <h5>
        Total:
        Rp <span id="purchase-total">0</span>
    </h5>

</div>
                <button
                type="button"
                id="add-item"
                class="btn btn-success mb-3">
                    <i class="bi bi-plus-circle"></i>
                    Tambah Item
                </button>
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

@push('scripts')
<script>
    let itemIndex = 1;

    // 1. Fungsi hitung total
    function calculateTotal() {
        let total = 0;

        document.querySelectorAll('.purchase-item').forEach(function (item) {

            const qty = parseFloat(
                item.querySelector('[name*="[qty]"]').value
            ) || 0;

            const price = parseFloat(
                item.querySelector('[name*="[price]"]').value
            ) || 0;

            const subtotal = qty * price;

            item.querySelector('.item-subtotal').value =
                subtotal.toLocaleString('id-ID');

            total += subtotal;
        });

        document.getElementById('purchase-total').textContent =
            total.toLocaleString('id-ID');
    }


    // 2. Event ketika Qty / Harga berubah
    document.addEventListener('input', function (event) {

        if (
            event.target.matches('[name*="[qty]"]') ||
            event.target.matches('[name*="[price]"]')
        ) {
            calculateTotal();
        }

    });


    // 3. Tambah item
    document.getElementById('add-item').addEventListener('click', function () {

        const container = document.getElementById('purchase-items');

        const item = document
            .querySelector('.purchase-item')
            .cloneNode(true);

        item.querySelectorAll('[name]').forEach(function (element) {
            const name = element.getAttribute('name');
            element.setAttribute(
                'name',
                name.replace(/\[\d+\]/, `[${itemIndex}]`)
            );
            element.value = '';
        });
        
        container.appendChild(item);
        itemIndex++;
        calculateTotal();
    });


    // 4. Hapus item
    document.addEventListener('click', function (event) {

        if (event.target.closest('.remove-item')) {

            const items = document.querySelectorAll('.purchase-item');

            if (items.length > 1) {
                event.target.closest('.purchase-item').remove();

                calculateTotal();
            }

        }

    });

</script>
@endpush