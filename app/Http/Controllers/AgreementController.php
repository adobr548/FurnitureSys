<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract;
use App\Employee;
use App\Customer;
use DB;

class AgreementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contracts = DB::select('SELECT * FROM sutartys
         LEFT JOIN darbuotojai
         ON sutartys.fk_Darbuotojasid_Darbuotojas = darbuotojai.id_Darbuotojas
         LEFT JOIN pirkejai
         ON sutartys.fk_Pirkejasid_Pirkejas = pirkejai.id_Pirkejas');

        return view('contractList')->with('contracts', $contracts); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::all();
        $customers = Customer::all();
        return view('contractForm')->with('employees', $employees)->with('customers', $customers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contract = new Contract;
        $contract->id_Sutartis = $request->input('id_Sutartis');
        $contract->sutarties_data = $request->input('sutarties_data');
        $contract->sutarties_pradzios_data = $request->input('sutarties_pradzios_data');
        $contract->sutarties_pabaigos_data = $request->input('sutarties_pabaigos_data');
        $contract->sutarties_tipas = $request->input('sutarties_tipas');
        $contract->busena = $request->input('busena');
        $contract->fk_Pirkejasid_Pirkejas= $request->input('fk_Pirkejasid_Pirkejas');
        $contract->fk_Darbuotojasid_Darbuotojas = $request->input('fk_Darbuotojasid_Darbuotojas');
        $contract->save();

        return redirect('/contracts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Contract::find($id);
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
