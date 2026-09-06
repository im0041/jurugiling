<div class="mb-3">
    <label class="form-label">Nama Supplier</label>

    <input
        type="text"
        name="name"
        class="form-control @error('name') is-invalid @enderror"
        value="{{ old('name', $supplier->name ?? '') }}">

    @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Telepon</label>

    <input
        type="text"
        name="phone"
        class="form-control"
        value="{{ old('phone', $supplier->phone ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Email</label>

    <input
        type="email"
        name="email"
        class="form-control"
        value="{{ old('email', $supplier->email ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Alamat</label>

    <textarea
        name="address"
        class="form-control"
        rows="4">{{ old('address', $supplier->address ?? '') }}</textarea>
</div>

<div class="mt-4">

    <button class="btn btn-primary">
        Simpan
    </button>

    <a href="{{ route('suppliers.index') }}"
       class="btn btn-secondary">

        Kembali

    </a>

</div>