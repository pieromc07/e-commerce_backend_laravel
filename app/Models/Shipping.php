<?php

namespace App\Models;

use App\Models\Invoice;
use App\Models\Orders;
use App\Models\ShippingMethod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;

    protected $table = 'shipping';

    protected $fillable = [
        'shipping_date',
        'shipping_amount',
        'shipping_method_id',
        'orders_id',
        'invoice_id',
    ];

    public $timestamps = false;

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function orders()
    {
        return $this->belongsTo(Orders::class);
    }

    public function shippingMethod()
    {
        return $this->belongsTo(ShippingMethod::class);
    }



}
