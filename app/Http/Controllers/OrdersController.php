<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\Costumer;


class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order =Order::all();
        return view('order.index', compact('order'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $costumer = Costumer::all();
        $product = Product::all();
        return view('order.create', compact('product','costumer'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
       $request->validate([
            'id_product' => 'required',
            'quantity' => 'required|integer',
            'date' => 'required',
            'id_costumer' => 'required'
        ], [
            'id_product' => 'Product name must be filled!',
            'quantity' => 'The number of items(quantity) must  above 0!',
            'date' => 'Date order must be filled!',
            'id_costumer' => 'Unknowned customer name'
        ]);
        $order = new Order();
        $order->id_product = $request->id_product;
        $order->quantity = $request->quantity;
        $order->date = $request->date;
        $order->id_costumer = $request->id_costumer;
        $order->save();
        return  redirect()->route('order.index')->with('success','Thank you for ordering!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);
        $product =Product ::all();
        $costumer =Costumer ::all();
        return view('order.show', compact('order', 'product','costumer'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $product =Product ::all();
        $costumer =Costumer ::all();
        return view('order.edit', compact('order', 'product','costumer'));

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
        $order = Order::findOrFail($id);
        $product =Product ::all();
        $costumer =Costumer ::all();
        $order->id_product = $request->id_product;
        $order->quantity = $request->quantity;
        $order->date = $request->date;
        $order->id_costumer = $request->id_costumer;
        $order->save();
        return  redirect()->route('order.index', compact('order', 'product', 'costumer'))->with('success', 'The order has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = order::findOrFail($id);
        $order->delete();
        return redirect()->route('order.index')->with('success', 'The data was moved into trash!');

    }
}
