<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [
        'name',
        'image',
        'description',
        'price',
        'stock',
        'status',
        'subcategory_id',
    ];

    // timestamp
    public $timestamps = false;

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItems::class);
    }
}
