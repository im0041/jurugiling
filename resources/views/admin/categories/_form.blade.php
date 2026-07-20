<div class="mb-3">
    <label class="form-label">
        Nama Kategori
    </label>

    <input
        type="text"
        name="name"
        class="form-control @error('name') is-invalid @enderror"
        value="{{ old('name', $category->name ?? '') }}"
    >

    @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">
        Deskripsi
    </label>

    <textarea
        name="description"
        rows="4"
        class="form-control"
    >{{ old('description', $category->description ?? '') }}</textarea>
</div>