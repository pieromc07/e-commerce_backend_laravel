<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $table = 'subcategory';

    protected $fillable = ['name', 'description', 'category_id'];

    public $timestamps = false;

    // subcategory has many products
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }

    // subcategory belongs to category
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    // sucategory for id category
    public static function getSubCategory($id)
    {
        return SubCategory::where('category_id', $id)->get();
    }

}
