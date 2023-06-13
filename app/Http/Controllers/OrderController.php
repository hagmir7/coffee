<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Dompdf\Dompdf;



class OrderController extends Controller
{
    public function create(Request $request){


        $order = Order::create([
            'creator_id' => Auth::user()->id,
            'server_id' => $request->input('server_id'),
            'table_id' => $request->input('table_id')
        ]);

        return redirect()->route('order.show', $order->id);
    }

    public function show(Order $order){
        return view('order.show', [
            'order' => $order,
            'products' => Product::all()
        ]);
    }

    public function list(){
        return view('order.list', [
            'orders' => Order::paginate(15)
        ]);
    }


    public function orderItem(Request $request,Order $order, Product $product){
        OrderDetail::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'quantity' => $request->input('quantity')
        ]);

        return redirect()->route('order.show', [$order->id, $product->id]);
    }

    public function valid(Order $order){
        $order->update([ 'status' =>  true  ]);

        $order->server->update([
            'wage' => $order->server->wage += $order->getTotal()
        ]);
        return redirect()->route('order.invoice', $order->id )->with(["message" => 'Order has been validate successfully.']);
    }

    public function cancel(Order $order){
        $order->update([ 'status' =>  false ]);

        $order->server->update([
            'wage' => $order->server->wage -= $order->getTotal()
        ]);
        return redirect()->route('dashboard')->with(["message" => 'Order has been canceld successfully.']);
    }

    
    public function delete(Order $order){
        $order->delete();
        return redirect()->route('dashboard')->with(["message" => 'Order has been deleted successfully.']);
    }

    public function invoice(Order $order){
        $data = [
            "order" => $order
        ];
        $html =  View::make('order.invoice', $data);
        
    // Create a new instance of Dompdf
    $pdf = new Dompdf();

    // Load the HTML into Dompdf
    $pdf->loadHtml($html);

    // Set the paper size and orientation
    $pdf->setPaper(array(0, 0, 500, 300), 'landscape');

    // Render the PDF
    $pdf->render();

    // Output the PDF to the browser
    $pdf->stream($order->id.'-invoice.pdf');
    }
    
}
