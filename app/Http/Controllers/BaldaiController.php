<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Furniture;
use App\Seller;
use DB;

class BaldaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $furnitures = DB::select('SELECT
        baldai.id_Baldas,
        baldai.pavadinimas,
        baldai.matavimo_vienetas,
        baldai.prekiu_kiekis,
        baldai.prekes_kaina,
        baldai.mokestis_PVM,
        baldai.antkainis,
        pardavejai.pardavejo_pavadinimas AS pardPav
         FROM baldai
         LEFT JOIN pardavejai
         ON baldai.fk_Pardavejasid_Pardavejas = pardavejai.id_Pardavejas');

        return view('furnitureList')->with('furnitures', $furnitures);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sellers = Seller::all();
        return view ('furnitureForm')->with('sellers', $sellers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [ 
            'pavadinimas' => 'required',
            'id_Baldas' => 'required',
            'fk_Pardavejasid_Pardavejas' => 'required' 
            ]);

        //Create new furniture
        $furniture = new Furniture;
        $furniture->id_Baldas = $request->input('id_Baldas');
        $furniture->pavadinimas = $request->input('pavadinimas');
        $furniture->matavimo_vienetas = $request->input('matavimo_vienetas');
        $furniture->prekiu_kiekis = $request->input('prekiu_kiekis');
        $furniture->prekes_kaina = $request->input('prekes_kaina');
        $furniture->mokestis_PVM = $request->input('mokestis_PVM');
        $furniture->antkainis = $request->input('antkainis');
        $furniture->fk_Pardavejasid_Pardavejas = $request->input('fk_Pardavejasid_Pardavejas');
        $furniture->save();
        //redirect
        return redirect('/furnitures')->with('success','Irasas sukurtas');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$furniture = Furniture::find($id);
        //return view('furnitures.show')->with('furniture', $furniture);
        return Furniture::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $furniture = Furniture::find($id);
        //return view('furnitures.edit')->with('furniture', $furniture);
        return view('furnitureEdit')->with('furniture', $furniture);
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
        $this->validate($request, [ 
            'pavadinimas' => 'required',
            'id_Baldas' => 'required',
            'fk_Pardavejasid_Pardavejas' => 'required' 
            ]);

        //update furniture
        $furniture = Furniture::find($id);
        $furniture->id_Baldas = $request->input('id_Baldas');
        $furniture->pavadinimas = $request->input('pavadinimas');
        $furniture->matavimo_vienetas = $request->input('matavimo_vienetas');
        $furniture->prekiu_kiekis = $request->input('prekiu_kiekis');
        $furniture->prekes_kaina = $request->input('prekes_kaina');
        $furniture->mokestis_PVM = $request->input('mokestis_PVM');
        $furniture->antkainis = $request->input('antkainis');
        $furniture->fk_Pardavejasid_Pardavejas = $request->input('fk_Pardavejasid_Pardavejas');
        $furniture->save();
        //redirect 
        return redirect('/furnitures')->with('success','Irasas atnaujintas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete
        $furniture = Furniture::find($id);
        if ($furniture != null){
        $furniture->delete();
        //redirect
        return redirect('/furnitures');
        }
    }
}
