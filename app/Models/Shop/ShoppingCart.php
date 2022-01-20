<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Shop\Customer;
use App\Models\Shop\ShoppingCartItem;

class ShoppingCart extends Model
{
    use HasFactory;

    protected $table = 'shopping_cart';

    protected $fillable = [
        'status',
        'customer_id',
        'order_date'
    ];

    public $timestamps= false;

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function shoppingCartItems()
    {
        return $this->hasMany(ShoppingCartItem::class);
    }

    ## find or create shoppingCart by session
    public static function findOrCreateShoppingCart($shopping_cart_id){
        if($shopping_cart_id){
            return ShoppingCart::find($shopping_cart_id);
        }else{
            return ShoppingCart::create(
                [
                    'status' => 'active',
                    'customer_id' => null,
                    'order_date' => null
                ]
            );
        }
    }

    ## quantity of products in shopping cart
    public function getQuantity()
    {
        return $this->shoppingCartItems->sum('quantity');
    }

    ## total price of products in shopping cart
    public function getTotalPrice()
    {
        $total_price = 0;
        foreach ($this->shoppingCartItems as $item) {
            $total_price += $item->quantity * $item->price;
        }
        return $total_price;
    }
}
