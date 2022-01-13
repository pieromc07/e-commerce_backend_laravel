<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    protected $fillable = ['name', 'description'];

   
    public $timestamps = false;

    // category has many subcategories
    public function subcategories()
    {
        return $this->hasMany('App\Models\SubCategory');
    }


}
