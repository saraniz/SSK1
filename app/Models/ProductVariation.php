<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariation extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'product_id',
        'size',
        'color',
        'price',
        'stock',
    ];

    protected $primaryKey = 'id';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
