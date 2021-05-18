<?php

namespace App\Http\Controllers;

use App\Models\Galerie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeries = Galerie::paginate(8);

        return view('backoffice.galerie.all', compact('galeries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.galerie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Galerie $galerie, Request $request)
    {
        $request->validate([
            'nom' => "required",
            'image' => "required",
            'description' => "max: 225|required",
        ]);
        $galerie = new Galerie;
        $galerie->nom = $request->nom;
        $galerie->image = $request->file('image')->hashName();
        $galerie->description = $request->description;
        $galerie->save();
        $request->file('image')->storePublicly('img', 'public');
        return redirect()->route('galeries.index') > with("message",  " Votre Galerie  a été créer avec l'id  " . $galerie->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    public function show(Galerie $galerie)
    {
        return view('backoffice.galerie.show', compact('galerie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    public function edit(Galerie $galerie)
    {
        return view('backoffice.galerie.edit', compact('galerie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galerie $galerie)
    {
        $request->validate([
            'nom' => "required",
            'image' => "required",
            'description' => "max: 225|required",
        ]);
        Storage::disk('public')->delete('img/' . $galerie->image);
        $galerie->nom = $request->nom;
        $galerie->image = $request->file('image')->hashName();
        $galerie->description = $request->description;
        $galerie->save();
        $request->file('image')->storePublicly('img', 'public');
        return redirect()->route('galeries.index')->with('message', "Vous avez bien modifié la Galerie: " . $galerie->nom);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galerie  $galerie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galerie $galerie)
    {
        Storage::disk('public')->delete('img/' . $galerie->image);
        $galerie->delete();
        return redirect()->back()->with('message', "Vous avez supprimé l'utilisateur "  . $galerie->nom);
    }
    public function download($id)
    {
        $galerie = Galerie::find($id);
        return Storage::disk('public')->download('img/' . $galerie->image);
    }
}
