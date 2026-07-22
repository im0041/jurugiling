<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\eloquent\SoftDeletes;

class Supplier extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'code',
        'name',
        'phone',
        'email',
        'address',
    ];
}
