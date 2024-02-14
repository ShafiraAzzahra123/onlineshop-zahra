<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'customer_phone',
        'customer_address',
        'customer_email',
        'payment_proof',
        'image_product',
        'name_product',
        'detail_product',
        'quantity_product',
        'price_product',
        'total_amount'
    ];
}
