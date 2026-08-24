<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Purchase;

class Supplier extends Model
{
    public function purchases(): HasMany
    {
        return $this->hasMany(Purchase::class);
    }
    use SoftDeletes;
    protected $fillable = [
        'code',
        'name',
        'phone',
        'email',
        'address',
    ];
}
