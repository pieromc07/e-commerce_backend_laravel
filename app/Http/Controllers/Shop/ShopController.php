<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ShippingMethod;
use App\Models\Shop\Customer;
use App\Models\Shop\FeatureProduct;
use App\Models\Shop\ShoppingCart;
use App\Models\Shop\ShowroomProduct;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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

        return view('shop.index', compact(
            'categories',
            'subcategories',
            'products',
            'showroom_products'
        ));
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

        // return $product;

        return view('shop.details', compact(
            'categories',
            'subcategories',
            'product',
            'feature_products',
            'showroom_products'
        ));
    }

    // cart
    public function cart()
    {
        // all categories
        $categories = Category::all();
        // all subcategories
        $subcategories = SubCategory::all();

        // get shoppingcart of session
        $shopping_cart_id = Session::get('shopping_cart_id');
        $shopping_cart = ShoppingCart::findOrCreateShoppingCart($shopping_cart_id);

        //  all items of shoppingcart
        $shopping_cart_items = $shopping_cart->shoppingCartItems;

        // all products
        $products = Product::all();

        // get total price of shoppingcart
        $shipping_method = '';
        $monto_shipping = 0;
        $total_price = $shopping_cart->getTotalPrice();
        if ($total_price > 2000) {
            $shipping_method = 'Free Shipping';
            $monto_shipping = 0;
        } else {

            $shipping_method = 'Standard Shipping';
            $monto_shipping = $total_price * 0.08;
        }


        return view(
            'shop.cart',
            compact(
                'categories',
                'subcategories',
                'shopping_cart_items',
                'products',
                'shopping_cart',
                'shipping_method',
                'monto_shipping',
                'total_price'
            )
        );
    }

    // shop
    public function shop(Request $request)
    {
        // all categories
        $categories = Category::all();
        // all subcategories
        $subcategories = SubCategory::all();

        if ($request->subcategory) {
            // all products by name of this subcategory
            $products = DB::table('product')
                ->join('subcategory', 'product.subcategory_id', '=', 'subcategory.id')
                ->where('subcategory.name', $request->subcategory)
                ->paginate(5);
            $products->appends(['subcategory' => $request->subcategory]);
        } else {
            // all products
            $products = Product::paginate(5);
        }
        return view('shop.shop', compact('categories', 'subcategories', 'products'));
    }

    // showLogin
    public function showLogin()
    {
        // all categories
        $categories = Category::all();
        // all subcategories
        $subcategories = SubCategory::all();

        return view('shop.login', compact('categories', 'subcategories'));
    }

    // login
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($validated)){
            return redirect()->route('shop.showcheckout');
        }

        return redirect()->back()->withErrors(['email' => 'Email or password is incorrect']);
    }


    // showRegister
    public function showRegister()
    {
        // all categories
        $categories = Category::all();
        // all subcategories
        $subcategories = SubCategory::all();

        return view('shop.register', compact('categories', 'subcategories'));
    }

    // register  metodo post registrar usuario
    public function register(Request $request)
    {
        // validar informacion
        $validated = $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:user',
                'password' => 'required|string|min:6|confirmed',
                'password_confirmation' => 'required|string|min:6|same:password',
            ]
        );

        // crear usuario
        $customer = Customer::create([
            'email' => $request->email,
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'Cliente',
            'status' => 'Activo',
            'customer_id' => $customer->id,
        ]);

        // asignar usuario a sesion
        auth()->login($user);
        // // poner al cliente dueño deel carrito
        // $shopping_cart_id = Session::get('shopping_cart_id');
        // $shopping_cart = ShoppingCart::findOrCreateShoppingCart($shopping_cart_id);
        // $shopping_cart->customer_id = auth()->user()->customer->id;

        // redireccionar a checkout
        return redirect()->route('shop.showcheckout');
    }


    // logout
    public function logout()
    {
        // destruir sesion
        auth()->logout();
        // redireccionar a index
        return redirect()->route('shop.index');
    }
}
