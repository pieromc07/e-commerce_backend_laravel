<?php

namespace App\Models;

use App\Models\Shop\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoice';

    protected $fillable = [
        'invoice_number',
        'invoice_date',
        'invoice_total',
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

    // payment
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    // shipping
    public function shipping()
    {
        return $this->hasOne(Shipping::class);
    }
}
