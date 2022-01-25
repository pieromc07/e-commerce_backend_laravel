<?php

namespace App\Http\Controllers;

use App\Models\CustomerOrders;
use App\Models\Invoice;
use App\Models\OrderItems;
use App\Models\Orders;
use App\Models\Payment;
use App\Models\PaymentMethod;
use App\Models\Shipping;
use App\Models\ShippingMethod;
use App\Models\Shop\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //

    public function index(Request $request)
    {
        if(Auth::check()){
            $user = Auth::user();
            $role = $user->role;

            if($role != 'admin'){
                return redirect('/');
            }
        }else{
            return redirect()->route('admin.login');
        }
        $orders = Orders::all();
        $order_customers = CustomerOrders::all();
        $customers = Customer::all();

        // return $orders;





        return view(
            'orders.index',

            compact('orders', 'order_customers', 'customers')
        );
    }

    public function create(Request $request)
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Request $request, $id)
    {
    }

    public function edit(Request $request, $id)
    {
        if(Auth::check()){
            $user = Auth::user();
            $role = $user->role;

            if($role != 'admin'){
                return redirect('/');
            }
        }else{
            return redirect()->route('admin.login');
        }
        $order = Orders::find($id);
        $order_customer = CustomerOrders::where('orders_id', $id)->first();
        $customer = Customer::find($order_customer->customer_id);
        $shipping = Shipping::where('orders_id', $id)->first();
        $invoice = Invoice::where('orders_id', $id)->first();
        $payment = Payment::where('invoice_id', $invoice->id)->first();
        $payment_method = PaymentMethod::find($payment->payment_method_id);
        $shipping_method = ShippingMethod::find($shipping->shipping_method_id);

        $order_items = OrderItems::where('orders_id', $id)->get();

        $monto_shipping = ($order->total * ($shipping_method->price / 100));

        return view(
            'orders.edit',
            compact(
                'order',
                'customer',
                'shipping',
                'invoice',
                'payment',
                'order_items',
                'payment_method',
                'shipping_method',
                'monto_shipping'
            )
        );
    }


    public function update(Request $request, $id)
    {
        if(Auth::check()){
            $user = Auth::user();
            $role = $user->role;

            if($role != 'admin'){
                return redirect('/');
            }
        }else{
            return redirect()->route('admin.login');
        }
        // editar estado de un pedido
        $order = Orders::find($id);
        $order->status = $request->status;
        $order->save();
        return $order;
    }

    public function destroy(Request $request, $id)
    {
    }
}
