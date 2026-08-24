<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    public function up(): void
    {
    Schema::create('products', function (Blueprint $table) {

        $table->id();

        $table->foreignId('category_id')
              ->constrained()
              ->cascadeOnUpdate()
              ->restrictOnDelete();

        $table->string('sku')->unique();

        $table->string('name');

        $table->string('slug')->unique();

        $table->text('description')->nullable();

        $table->decimal('purchase_price', 12, 2);

        $table->decimal('selling_price', 12, 2);

        $table->integer('stock')->default(0);

        $table->integer('minimum_stock')->default(5);

        $table->string('image')->nullable();

        $table->boolean('is_active')->default(true);

        $table->timestamps();
        });
    }

    public function category(): BelongsTo {
    return $this->belongsTo(Category::class);
    }

    protected $fillable = [
    'category_id',
    'sku',
    'name',
    'slug',
    'description',
    'purchase_price',
    'selling_price',
    'stock',
    'minimum_stock',
    'image',
    'is_active',
    ];
}
