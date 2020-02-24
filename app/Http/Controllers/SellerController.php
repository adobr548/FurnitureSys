<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seller;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellers = Seller::all();
        return view('sellerList')->with('sellers', $sellers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sellerForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seller = new Seller;
        $seller->id_Pardavejas = $request->input('id_Pardavejas');
        $seller->pardavejo_pavadinimas = $request->input('pardavejo_pavadinimas');
        $seller->pardavejo_PVM_kodas = $request->input('pardavejo_PVM_kodas');
        $seller->pardavejo_adresas = $request->input('pardavejo_adresas');
        $seller->pardavejo_el_pastas = $request->input('pardavejo_el_pastas');
        $seller->pardavejo_telefono_nr = $request->input('pardavejo_telefono_nr');
        $seller->save();

        return redirect('/sellers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Seller::find($id);
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
