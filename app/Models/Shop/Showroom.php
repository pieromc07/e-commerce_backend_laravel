<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Shop\ShowroomProduct;

class Showroom extends Model
{
    use HasFactory;

    protected $table = 'showroom';

    protected $fillable = [
        'name'
    ];

    // showroom_product
    public function showroom_product()
    {
        return $this->hasMany(ShowroomProduct::class);
    }
    public $timestamps = false;
}
