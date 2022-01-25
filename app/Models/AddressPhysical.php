<?php

namespace App\Models;

use App\Models\Shop\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressPhysical extends Model
{
    use HasFactory;

    protected $table = 'address_physical';

    protected $fillable = [
        'street_address',
        'postal_code',
        'city',
        'state',
        'country',
        'customer_id',
    ];

    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
