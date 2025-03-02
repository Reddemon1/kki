<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = ['product_id', 'price', 'stock', 'sold', 'description', 'url'];

    protected $casts = [
        'price' => 'decimal:2',
        'stock' => 'integer',
        'sold' => 'integer',
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
