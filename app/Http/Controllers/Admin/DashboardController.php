<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index(){
         $totalProducts = Product::count();

    $totalCategories = Category::count();

    $activeProducts = Product::where('is_active', true)->count();

    $lowStockProducts = Product::whereColumn(
        'stock',
        '<=',
        'minimum_stock'
    )->count();

    return view('admin.dashboard', compact(
        'totalProducts',
        'totalCategories',
        'activeProducts',
        'lowStockProducts'
    ));
    }
}
