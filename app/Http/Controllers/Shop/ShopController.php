<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Shop\FeatureProduct;
use App\Models\Shop\ShowroomProduct;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    //

    public function index()
    {

        // all categories
        $categories = Category::all();
        // all subcategories
        $subcategories = SubCategory::all();
        // all products
        $products = Product::all();

        // all showroom_product
        $showroom_products = ShowroomProduct::all();

        return view('shop.index', compact('categories',
            'subcategories', 'products', 'showroom_products'));
    }

    // Product details
    public function productDetails($id)
    {
        // all categories
        $categories = Category::all();
        // all subcategories
        $subcategories = SubCategory::all();

        // find product by id
        $product = Product::find($id);

        // all feacture products of this product by id
        $feature_products = FeatureProduct::where('product_id', $id)->get();

         // all showroom_product
         $showroom_products = ShowroomProduct::all();

        return view('shop.details',compact('categories', 'subcategories',
        'product', 'feature_products', 'showroom_products'));
    }

    // cart
    public function cart()
    {
        // all categories
        $categories = Category::all();
        // all subcategories
        $subcategories = SubCategory::all();

        return view('shop.cart', compact('categories', 'subcategories'));
    }

    // checkout
    public function checkout()
    {
        // all categories
        $categories = Category::all();
        // all subcategories
        $subcategories = SubCategory::all();

        return view('shop.checkout', compact('categories', 'subcategories'));
    }

    // shop
    public function shop(Request $request)
    {
        // all categories
        $categories = Category::all();
        // all subcategories
        $subcategories = SubCategory::all();

        if($request->subcategory){
            // all products by name of this subcategory
            $products = DB::table('product')
                ->join('subcategory', 'product.subcategory_id', '=', 'subcategory.id')
                ->where('subcategory.name', $request->subcategory)
                ->paginate(5);
                $products ->appends(['subcategory' => $request->subcategory]);
        }else{
            // all products
            $products = Product::paginate(5);
        }
        return view('shop.shop', compact('categories', 'subcategories', 'products'));
    }

}
