<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $table = 'payment_method';

    protected $fillable = [
        'name',
        'description'
    ];

    public $timestamps = false;

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }


}
