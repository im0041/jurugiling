<?php

namespace App\Http\Controllers\Admin;

use App\Models\Supplier;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    private function generateCode(): string
    {
        $lastSupplier = Supplier::latest('id')->first();

        $number = $lastSupplier
            ? ((int) substr($lastSupplier->code, 3)) + 1
            : 1;

        return 'SUP' . str_pad($number, 4, '0', STR_PAD_LEFT);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::latest()->paginate(10);
        
        return view('admin.suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSupplierRequest $request)
    {
        Supplier::create([
        'code' => $this->generateCode(),
        'name' => $request->name,
        'phone' => $request->phone,
        'email' => $request->email,
        'address' => $request->address,
    ]);

    return redirect()
        ->route('suppliers.index')
        ->with('success', 'Supplier berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        //
    }
}
