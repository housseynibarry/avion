<?php

namespace App\Http\Controllers;

use App\Models\Vol;
use Illuminate\Http\Request;

class VolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avion= Vol::all();
        return view('vols.index',compact('avion'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('vols.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donne=$request->validate([
            'code_vol'=> 'required',
            'date_depart'=> 'required',
            'heure_depart'=> 'required',
            'destination'=> 'required',
            'nbre_placeA'=> 'required',
            'nbre_placeB'=> 'required',
            'prix_classeA'=> 'required',
            'prix_classeB'=> 'required',
        ]);

        Vol::create($donne);
        return redirect('/vols');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $avionkelen = Vol::findOrFail($id);
        return view('vols.show',compact('avionkelen'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $donnef= Vol::findOrFail($id);
        return view('vols.edit',compact('donnef'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $donnef=$request->validate([
            'code_vol'=> 'required',
            'date_depart'=> 'required',
            'heure_depart'=> 'required',
            'destination'=> 'required',
            'nbre_placeA'=> 'required',
            'nbre_placeB'=> 'required',
            'prix_classeA'=> 'required',
            'prix_classeB'=> 'required',
        ]);
         Vol::whereId($id)->update($donnef);
         return redirect('/vols');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $aboye= Vol::findOrFail($id);
        $aboye->delete();
        return redirect('/vols');

    }
}
