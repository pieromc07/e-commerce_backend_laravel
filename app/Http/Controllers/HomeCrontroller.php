<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeCrontroller extends Controller
{
    //
    public function index()
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


            $data = DB::table('orders_item as I')
            ->select(DB::raw('P.name as producto, count(*) as cantidad'))
            ->join('product as P', 'I.product_id', '=', 'P.id')
            ->groupBy('P.name')
            ->get();

        return view('dashboard', compact('data'));
    }
}
