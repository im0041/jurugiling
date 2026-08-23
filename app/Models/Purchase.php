<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    Schema::create('purchases', function (Blueprint $table) {

    $table->id();

    $table->string('invoice_number')->unique();

    $table->foreignId('supplier_id')
          ->constrained()
          ->cascadeOnUpdate()
          ->restrictOnDelete();

    $table->date('purchase_date');

    $table->decimal('total', 15, 2)->default(0);

    $table->timestamps();

});
}
