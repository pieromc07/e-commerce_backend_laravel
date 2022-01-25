<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\AddressPhysical;
use App\Models\Category;
use App\Models\Invoice;
use App\Models\OrderItems;
use App\Models\Orders;
use App\Models\Payment;
use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\Shipping;
use App\Models\Shop\ShoppingCart;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShoppingCartController extends Controller
{
    //addToCart
    public function addToCart(Request $request)
    {


        // get shoppingcart of session
        $shopping_cart_id = Session::get('shopping_cart_id');
        $shopping_cart = ShoppingCart::findOrCreateShoppingCart($shopping_cart_id);

        //  all items of shoppingcart
        $shopping_cart_items = $shopping_cart->shoppingCartItems;

        foreach ($shopping_cart_items as $item) {
            if ($item->product_id == $request->id) {
                $item->update([
                    'quantity' => $item->quantity + $request->quantity
                ]);
                return redirect()->back();
            }
        }



        $shopping_cart->shoppingCartItems()->create([
            'product_id' => Product::find($request->id)->id,
            'quantity' => $request->quantity,
            'price' => Product::find($request->id)->price
        ]);

        // return back();
        return redirect()->back();
    }


    //updateQuantity
    public function updateQuantity(Request $request)
    {
        $shopping_cart_id = Session::get('shopping_cart_id');
        $shopping_cart = ShoppingCart::findOrCreateShoppingCart($shopping_cart_id);

        $shopping_cart_item = $shopping_cart->shoppingCartItems->where('product_id', $request->productId)->first();

        $shopping_cart_item->update([
            'quantity' => $request->quantity
        ]);

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


        return json_encode([
            'success' => true,
            'quantity' => $shopping_cart_item->quantity,
            'subTotal' => $shopping_cart_item->quantity * $shopping_cart_item->price,
            'total' => $shopping_cart->getTotalPrice(),
            'monto_shipping' => $monto_shipping,
            'shipping_method' => $shipping_method,



        ]);
    }

    //deleteItem
    public function deleteItem(Request $request)
    {
        $shopping_cart_id = Session::get('shopping_cart_id');
        $shopping_cart = ShoppingCart::findOrCreateShoppingCart($shopping_cart_id);

        $shopping_cart_item = $shopping_cart->shoppingCartItems->where('product_id', $request->productId)->first();

        $shopping_cart_item->delete();

        $shopping_cart = ShoppingCart::findOrCreateShoppingCart($shopping_cart_id);



        // get total price of shoppingcart
        $shipping_method = '';
        $monto_shipping = 0;
        $total_price = $shopping_cart->getTotalPrice();
        if ($total_price > 2000) {
            $shipping_method = 'Free Shipping';
            $monto_shipping = 0;
        } else if ($total_price == 0) {

            $shipping_method = '';
            $monto_shipping = 0;
        } else {
            $shipping_method = 'Standard Shipping';
            $monto_shipping = $total_price * 0.08;
        }
        return json_encode([
            'success' => true,
            'total' => $shopping_cart->getTotalPrice(),
            'monto_shipping' => $monto_shipping,
            'shipping_method' => $shipping_method,
        ]);
    }

    // checkout
    public function showcheckout(Request $request)
    {

        // ver si el usuario esta logueado
        if (!auth()->check()) {
            return redirect()->route('shop.login');
        }

        // all categories
        $categories = Category::all();
        // all subcategories
        $subcategories = SubCategory::all();

        // usuario logueado
        $user = auth()->user();

        // customer de usuario logueado
        $customer = $user->customer;


        //  first address_physical de customer
        $address_physical =  AddressPhysical::where('customer_id', $customer->id)->first();
        if (!$address_physical) {
            $address_physical = null;
        }

        // methods de pyment
        $payment_methods = PaymentMethod::all();

        $shopping_cart_id = Session::get('shopping_cart_id');
        $shopping_cart = ShoppingCart::findOrCreateShoppingCart($shopping_cart_id);

        // get total price of shoppingcart
        $shipping_method = '';
        $monto_shipping = 0;
        $total_price = $shopping_cart->getTotalPrice();
        if ($total_price > 2000) {
            $shipping_method = 'Free Shipping';
            $monto_shipping = 0;
        } else if ($total_price == 0) {

            $shipping_method = '';
            $monto_shipping = 0;
        } else {
            $shipping_method = 'Standard Shipping';
            $monto_shipping = $total_price * 0.08;
        }

        return view('shop.checkout', compact(
            'categories',
            'subcategories',
            'customer',
            'address_physical',
            'payment_methods',
            'shopping_cart',
            'shipping_method',
            'monto_shipping'
        ));
    }


    // checkout
    public function checkout(Request $request)
    {

        // ver si el usuario esta logueado
        if (!auth()->check()) {
            return redirect()->route('shop.login');
        }

        $shopping_cart_id = Session::get('shopping_cart_id');
        $shopping_cart = ShoppingCart::findOrCreateShoppingCart($shopping_cart_id);

        // obtener el customer de usuario logueado
        $user = auth()->user();
        $customer = $user->customer;

        // actualizar customer
        $customer->update([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'phone' => $request->phone
        ]);

        // get total price of shoppingcart
        $shipping_method = 1;
        $monto_shipping = 0;
        $total_price = $shopping_cart->getTotalPrice();
        if ($total_price > 2000) {
            $shipping_method = 1;
            $monto_shipping = 0;
        } else if ($total_price == 0) {

            $shipping_method = '';
            $monto_shipping = 0;
        } else {
            $shipping_method = 2;
            $monto_shipping = $total_price * 0.08;
        }


        // obtener el address_physical de customer
        $address_physical =  AddressPhysical::where('customer_id', $customer->id)->first();
        if (!$address_physical) {
            // agregar address_physical
            $address_physical = AddressPhysical::create([
                'customer_id' => $customer->id,
                'postal_code' => $request->postal_code,
                'street_address' => $request->street_address,
                'city' => $request->city,
                'state' => "Peru",
                'country' => $request->country
            ]);
        }



        //  crear order
        $order = Orders::create([
            'total' => $shopping_cart->getTotalPrice() + $monto_shipping,
            'status' => 'Pending',
            'date_placed' => Carbon::now(),
        ]);

        // crear order_items
        foreach ($shopping_cart->shoppingCartItems as $shopping_cart_item) {
            $order_item = OrderItems::create([
                'orders_id' => $order->id,
                'product_id' => $shopping_cart_item->product_id,
                'quantity' => $shopping_cart_item->quantity,
                'price' => $shopping_cart_item->price,
            ]);
        }

        // crear customer_order
        $customer->customerOrders()->create([
            'orders_id' => $order->id,

        ]);

        // crear invoice
        $invoice = Invoice::create([
            'invoice_number' => '000',
            'invoice_date' => Carbon::now(),
            'invoice_total' => $order->total,
            'orders_id' => $order->id,
            'customer_id' => $customer->id,
        ]);

        // crear payment
        $payment = Payment::create([
            'payment_method_id' => $request->payment_method,
            'payment_date' => Carbon::now(),
            'payment_amount' => $order->total,
            'invoice_id' => $invoice->id,
        ]);

        // crear shipping
        $shipping = Shipping::create([
            'shipping_method_id' => $shipping_method,
            'shipping_date' => Carbon::now(),
            'shipping_amount' => $monto_shipping,
            'invoice_id' => $invoice->id,
            'orders_id' => $order->id,
        ]);

        // eliminar items de shoppingcart
        $shopping_cart->shoppingCartItems->each(function ($item) {
            $item->delete();
        });


        // enviar correo

        // terminar
        return redirect()->route('shop.index');


    }
}
