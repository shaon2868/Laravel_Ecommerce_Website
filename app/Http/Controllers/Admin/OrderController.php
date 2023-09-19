<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function Index(){
        $pending_orders = Order::where('status', 'pending')->latest()->get();
        return view('admin.pendingorders', compact('pending_orders'));
    }

    public function AcceptOrder($id)
    {
        $order = Order::find($id);
        $order->status = 'approved';
        $order->save();
        return redirect()->back();
    }
}
