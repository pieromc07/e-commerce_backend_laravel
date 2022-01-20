<?php

namespace App\Models\Shop;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;
use App\Models\Shop\ShoppingCart;

class ShoppingCartItem extends Model
{
    use HasFactory;

    protected $table = 'shopping_cart_item';

    protected $fillable = [
        'shopping_cart_id',
        'product_id',
        'quantity',
        'price'
    ];

    public $timestamps = false;

    public function shoppingCart()
    {
        return $this->belongsTo(ShoppingCart::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }




}
