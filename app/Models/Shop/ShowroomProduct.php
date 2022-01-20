<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Shop\Showroom;
use App\Models\Product;

class ShowroomProduct extends Model
{
    use HasFactory;

    protected $table = 'showroom_product';

    protected $fillable = [
        'showroom_id',
        'product_id'
    ];

    public $timestamps = false;

    public function showroom()
    {
        return $this->belongsTo(Showroom::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
