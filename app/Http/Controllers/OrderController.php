<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Contract;
use App\Customer;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        
        return view('orderList')->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contracts = Contract::all();
        $customers = Customer::all();
        return view('OrderForm')->with('customers', $customers)->with('contracts', $contracts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $order = new Order;
        $order->id_Uzsakymas = $request->input('id_Uzsakymas');
        $order->uzsakytos_prekes_pavadinimas = $request->input('uzsakytos_prekes_pavadinimas');
        $order->uzsakymo_kiekis = $request->input('uzsakymo_kiekis');
        $order->uzsakymo_kaina = $request->input('uzsakymo_kaina');
        $order->uzsakymo_suma = $request->input('uzsakymo_suma');
        $order->pristatymo_data = $request->input('pristatymo_data');
        $order->fk_Pirkejasid_Pirkejas = $request->input('fk_Pirkejasid_Pirkejas');
        $order->fk_Sutartisid_Sutartis = $request->input('fk_Sutartisid_Sutartis');
        $order->save();

        return redirect('/orders');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Order::find($id);
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
    }
}
