<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\Contract;
use DB;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = DB::select(
            'SELECT * FROM saskaitos
            LEFT JOIN sutartys
            ON saskaitos.fk_Sutartisid_Sutartis = sutartys.id_Sutartis');
        return view('accountList')->with('accounts', $accounts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contracts = Contract::all();
        return view('accountForm')->with('contracts', $contracts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $account = new Account;
        $account->id_Saskaita = $request->input('id_Saskaita');
        $account->saskaitos_data = $request->input('saskaitos_data');
        $account->prekes_pavadinimas = $request->input('prekes_pavadinimas');
        $account->kekis = $request->input('kekis');
        $account->kaina = $request->input('kaina');
        $account->suma = $request->input('suma');
        $account->fk_Sutartisid_Sutartis = $request->input('fk_Sutartisid_Sutartis');
        $account->save();

        return redirect('/accounts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Account::find($id);
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
        $account = Account::find($id);
         if ($account != null){
             $account->delete();
         //redirect
         return redirect('/accounts');
         }
    }
}
