@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<h2>Dashboard</h2>

<div class="row">

    <x-stat-card
        title="Produk"
        :value="$totalProducts"
        icon="bi-box-seam"
    />

    <x-stat-card
        title="Kategori"
        :value="$totalCategories"
        icon="bi-tags"
    />

    <x-stat-card
        title="Produk Aktif"
        :value="$activeProducts"
        icon="bi-check-circle"
    />

    <x-stat-card
        title="Stok Menipis"
        :value="$lowStockProducts"
        icon="bi-exclamation-triangle"
    />

</div>

@endsection