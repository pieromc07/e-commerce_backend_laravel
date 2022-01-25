<?php

namespace App\Models;

use App\Models\Shop\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerOrders extends Model
{
    use HasFactory;

    protected $table = 'customer_orders';

    protected $fillable = [
        'customer_id',
        'orders_id',
    ];

    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function orders()
    {
        return $this->belongsTo(Orders::class);
    }

}
