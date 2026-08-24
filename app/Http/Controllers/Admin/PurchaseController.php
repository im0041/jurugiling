<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\PurchaseItem;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorePurchaseRequest;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purchases = Purchase::with('supplier')
            ->latest('purchase_date')
            ->paginate(10);
        return view('admin.purchases.index', compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suppliers = Supplier::orderBy('name')->get();
        $products = Product::where('is_active', true)
            ->orderBy('name')
            ->get();
        return view('admin.purchases.create', compact(
            'suppliers',
            'products'
            ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePurchaseRequest $request)
    {
        $data = $request->validated();
        DB::transaction(function () use ($data) {
            $total = 0;
            $purchase = Purchase::create([
                'invoice_number' => $this->generateInvoiceNumber(),
                'supplier_id' => $data['supplier_id'],
                'purchase_date' => $data['purchase_date'],
                'total' => 0,
            ]);
            foreach ($data['items'] as $item) {
                $subtotal = $item['qty'] * $item['price'];
                $purchase->items()->create([
                    'product_id' => $item['product_id'],
                    'qty' => $item['qty'],
                    'price' => $item['price'],
                    'subtotal' => $subtotal,
                    ]);
                $total += $subtotal;
            }
                $purchase->update([
                    'total' => $total,
                ]);
        });
        return redirect()
            ->route('purchases.index')
            ->with('success', 'Purchase berhasil dibuat.');
    }

    private function generateInvoiceNumber(): string 
    {
        $date = now()->format('Ymd');
        $lastPurchase = Purchase::whereDate('created_at', now()->toDateString())
            ->latest('id')
            ->first();
        $sequence = $lastPurchase ? ((int) substr($lastPurchase->invoice_number, -4)) + 1 : 1;
        
        return 'PO-' . $date . '-' . str_pad($sequence, 4, '0', STR_PAD_LEFT);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
