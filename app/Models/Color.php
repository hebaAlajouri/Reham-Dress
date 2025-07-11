<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = [
        'product_id',
        'color',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
