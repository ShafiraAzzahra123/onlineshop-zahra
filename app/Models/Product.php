<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_product',
        'price_product',
        'detail_product',
        'stock_product',
        'image_product',
        'category_id'
    ];

    function category ()  {
        return $this->belongsTo(Category::class);
    }
}
