<?php

namespace App\Models\Shop;

use App\Models\AddressPhysical;
use App\Models\CustomerOrders;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'payment_method',

    ];

    public $timestamps = false;

    public function addressPhysical()
    {
        return $this->hasOne(AddressPhysical::class);
    }

    // customerOrders
    public function customerOrders()
    {
        return $this->hasMany(CustomerOrders::class);
    }
}
