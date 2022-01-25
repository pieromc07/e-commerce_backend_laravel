<?php

namespace App\Models;

use App\Models\CustomerOrders;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'total',
        'status',
        'date_placed'
    ];

    public $timestamps = false;

    // orders_item
    public function orderItems()
    {
        return $this->hasMany(OrderItems::class);

    }

    // invoice

    public function invoice()
    {
        return $this->hasOne(Invoice::class);

    }

    // shipping

    public function shipping()
    {
        return $this->hasOne(Shipping::class);

    }


 // customer Orders

        public function customerOrders()
        {
            return $this->hasMany(CustomerOrders::class);

        }

}
