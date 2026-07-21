<div class="mb-3">

        <label class="form-label">
            Kategori
        </label>
        <div class="mb-3">
    <select
        name="category_id"
        class="form-select"
    >
        <option value="">-- Pilih Kategori --</option>
        @foreach($categories as $category)
            <option
                value="{{ $category->id }}"
                {{ old('category_id') == $category->id ? 'selected' : '' }}
            >
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    
    <div class="mb-3">
    <label class="form-label">SKU</label>

    <input
        type="text"
        name="sku"
        class="form-control"
        value="{{ old('sku') }}"
    >
    </div>

    <div class="mb-3">
    <label class="form-label">Nama Produk</label>

    <input
        type="text"
        name="name"
        class="form-control"
        value="{{ old('name') }}"
    >
    </div>
    
    <div class="mb-3">
    <label class="form-label">Harga Modal</label>

    <input
        type="number"
        name="purchase_price"
        class="form-control"
        value="{{ old('purchase_price') }}"
    >
    </div>

    <div class="mb-3">
    <label class="form-label">Harga Jual</label>

    <input
        type="number"
        name="selling_price"
        class="form-control"
        value="{{ old('selling_price') }}"
    >
    </div>

    <div class="mb-3">
    <label class="form-label">Stok</label>

    <input
        type="number"
        name="stock"
        class="form-control"
        value="{{ old('stock', 5) }}"
    >
    </div>

    <div class="mb-3">
    <label class="form-label">Minimum Stok</label>

    <input
        type="number"
        name="minimum_stock"
        class="form-control"
        value="{{ old('minimum_stock', 5) }}"
    >
    </div>

    <div class="mb-3">

    <label class="form-label">
        Deskripsi
    </label>

    <textarea
        name="description"
        rows="4"
        class="form-control"
    >{{ old('description') }}</textarea>
    </div>

    <div class="form-check mb-3">

    <input
        class="form-check-input"
        type="checkbox"
        name="is_active"
        value="1"
        checked
    >

    <label class="form-check-label">

        Produk Aktif

    </label>
    </div>