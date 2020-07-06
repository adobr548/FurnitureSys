<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Symfony\Component\HttpKernel\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customerList')->with('customers', $customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customerForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer;
        $customer->id_Pirkejas = $request->input('id_Pirkejas');
        $customer->pirkejo_pavadinimas = $request->input('pirkejo_pavadinimas');
        $customer->pirkejo_PVM_kodas = $request->input('pirkejo_PVM_kodas');
        $customer->adresas = $request->input('adresas');
        $customer->el_pastas = $request->input('el_pastas');
        $customer->telefono_nr = $request->input('telefono_nr');
        $customer->save();

        return redirect('/customers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Customer::find($id);
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
        $customer = Customer::find($id);
        if ($customer != null){
        $customer->delete();
        //redirect
        return redirect('/customers');
        }
    }
}
