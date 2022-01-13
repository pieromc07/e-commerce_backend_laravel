<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // all products
        $products = Product::all();

        return view('products.index' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        $subcategories = SubCategory::all();
        return view('products.create', compact('categories', 'subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'subcategory_id' => 'required',
            'stock' => 'required | numeric | min:1',
            'price' => 'required | numeric | min:1',
            'description' => 'required',
            'image' => 'required|image|max:2048',
        ]);
        if($request->status){
            $status = 1;
        }else{
            $status = 0;
        }
        $url_image = Storage::url($request->file('image')->store('public/products'));

        Product::create([
            'name' => $request->name,
            'image' => $url_image,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'subcategory_id' => $request->subcategory_id,
            'status' => $status,
        ]);

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::find($id);
        $categories = Category::all();
        $subcategories = SubCategory::all();
        // return ;

        return view('products.edit', compact('product', 'categories', 'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name' => 'required',
            'subcategory_id' => 'required',
            'stock' => 'required | numeric | min:1',
            'price' => 'required | numeric | min:1',
            'description' => 'required',
            'image' => 'image|max:2048',
        ]);
        $product = Product::find($id);

        if($request->status){
            $status = 1;
        }else{
            $status = 0;
        }
        $url = str_replace('/storage', '', $product->image);
        if($product->image){
            if(Storage::disk( 'public' )->delete( $url )){
                $url_image = Storage::url($request->file('image')->store('public/products'));
                $product->update([
                    'name' => $request->name,
                    'image' => $url_image,
                    'description' => $request->description,
                    'price' => $request->price,
                    'stock' => $request->stock,
                    'subcategory_id' => $request->subcategory_id,
                    'status' => $status,
                ]);
            }

        }
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id)->delete();

        return redirect()->route('product.index');
    }
}