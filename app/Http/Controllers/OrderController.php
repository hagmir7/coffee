<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create(Request $request){


        $order = Order::create([
            'creator_id' => Auth::user()->id,
            'server_id' => $request->input('server_id')
        ]);

        return redirect()->route('order.show', $order->id);
    }

    public function show(Order $order){
        return view('order.show', [
            'order' => $order,
            'products' => Product::all()
        ]);
    }


    public function orderItem(Request $request,Order $order, Product $product){
        OrderDetail::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'quantity' => $request->input('quantity')
        ]);
    }

    public function valid(Order $order){
        $order->update([ 'status' =>  true  ]);

        $order->server->update([
            'wage' => $order->server->wage += $order->getTotal()
        ]);
        return redirect()->route('dashbaord')->with(["message" => 'Order has been validate successfully.']);
    }

    public function cancel(Order $order){
        $order->update([ 'status' =>  false ]);

        $order->server->update([
            'wage' => $order->server->wage +- $order->getTotal()
        ]);
        return redirect()->route('dashbaord')->with(["message" => 'Order has been validate successfully.']);
    }

    
    public function delete(Order $order){
        $order->delete();
        return redirect()->route('dashboard')->with(["message" => 'Order has been validate successfully.']);
    }
    
}
