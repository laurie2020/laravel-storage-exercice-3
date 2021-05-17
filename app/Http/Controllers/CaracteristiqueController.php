<?php

namespace App\Http\Controllers;

use App\Models\Caracteristique;
use Illuminate\Http\Request;

class CaracteristiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caracteristiques = Caracteristique::all();
        return view('backoffice.caracteristique.all', compact('caracteristique'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.caracteristique.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Caracteristique $caracteristique ,Request $request)
    {
        $request->validate([
            'icone' => "required",
            'chiffre' => "required",
            'nom' => "required",
        ]);

        $caracteristique = new Caracteristique;
        $caracteristique->icone = $request->icone;
        $caracteristique->chiffre = $request->chiffre;
        $caracteristique->nom = $request->nom;
        $caracteristique->save();
        return redirect()->route('caracteristique.index')->with("message",  " Vous avez créer une  caracteristique   qui a comme id  " . $caracteristique->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caracteristique  $caracteristique
     * @return \Illuminate\Http\Response
     */
    public function show(Caracteristique $caracteristique)
    {
        return view('backoffice.caracteristique.create', compact('caracteristique'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Caracteristique  $caracteristique
     * @return \Illuminate\Http\Response
     */
    public function edit(Caracteristique $caracteristique)
    {
        return view('backoffice.caracteristique.edit', compact('caracteristique'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Caracteristique  $caracteristique
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caracteristique $caracteristique)
    {
        $request->validate([
            'icone' => "required",
            'chiffre' => "required",
            'nom' => "required",
        ]);

        $caracteristique->icone = $request->icone;
        $caracteristique->chiffre = $request->chiffre;
        $caracteristique->nom = $request->nom;
        $caracteristique->save();
        return redirect()->route('caracteristique.index')->with('message', "Vous avez bien modifié les Caracteristique de  : " . $caracteristique->nom);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caracteristique  $caracteristique
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caracteristique $caracteristique)
    {
        $caracteristique->delete();
        return redirect()->back()->with('message', "Le Caracteritique" . $caracteristique->nom . "a été supprimer");
    }
}
