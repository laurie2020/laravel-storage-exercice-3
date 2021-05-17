<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('backoffice.user.all', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(User $user,  Request $request)
    {
        $request->validate([
            'nom' => "required",
            'prenom' => "required",
            'age' => "required",
            'email' => "max: 225|required",
            'password' => "required",
            'photo' => 'required'
        ]);
        $user = new User;

        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->photo = $request->file('photo')->hashName();

        $user->save();
        $request->file('photo')->storePublicly('img', 'public');
        
        return redirect()->route('users.index')->with("message",  " Votre user  a été créer avec l'id  " . $user->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('backoffice.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('backoffice.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'nom' => "required",
            'prenom' => "required",
            'age' => "required",
            'email' => "max: 225|required",
            'password' => "required",
            'photo' => 'required'
        ]);
        Storage::disk('public')->delete("img/" . $user->photo);
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->photo = $request->file('photo')->hashName();
        $user->save();
        $request->file('photo')->storePublicly('img', 'public');
        return redirect()->route('users.index')->with('message', "Vous avez bien modifié l'utilisateur: " . $user->nom);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        Storage::disk('public')->delete('img/' . $user->image);
        $user->delete();
        return redirect()->back()->with('message', "Vous avez supprimé l'utilisateur "  . $user->nom);
    }
    public function download($id)
    {
        $user = User::find($id);
        return Storage::disk('public')->download('img/' . $user->photo);
    }
}
