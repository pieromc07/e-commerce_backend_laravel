<?php

namespace App\Models\Shop;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureProduct extends Model
{
    use HasFactory;

    protected $table = 'feature_product';

    protected $fillable = [
        'name', 'description', 'product_id'
    ];

    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
