<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();

        return view('backoffice.service.all', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Service $service, Request $request)
    {
        $request->validate([
            'icone' => "required",
            'titre' => "required",
            'description' => "required",
        ]);
        $service = new Service;
        $service->icone = $request->icone;
        $service->titre = $request->titre;
        $service->description = $request->description;
        $service->save();
        return redirect()->route('services.index')->with("message",  " Votre user  a été créer avec l'id  " . $service->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('backoffice.service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('backoffice.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'icone' => "required",
            'titre' => "required",
            'description' => "required",
        ]);
        $service->icone = $request->icone;
        $service->titre = $request->titre;
        $service->description = $request->description;
        $service->save();
        return redirect()->route('services.index')->with('message', "Vous avez bien modifié la photo: " . $service->nom);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back()->with('message', "Vous avez supprimé l'utilisateur avec l'id "  . $service->id);
    }
}
