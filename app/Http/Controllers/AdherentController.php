<?php

namespace App\Http\Controllers;

use App\Models\Adherent;
use App\Models\Classe;
use Illuminate\Http\Request;

class AdherentController extends Controller
{
    public function index()
    {
        $adherents = Adherent::all();
        $classes = Classe::all();

        return view('adherent.list')->with([
            'adherents' => $adherents,
            'classes' => $classes
        ]);
    }

    public function create(Request $request)
    {
        $adherent = new Adherent();

        $adherent->nom = $request->nom;
        $adherent->prenom = $request->prenom;
        $adherent->email = $request->email;
        $adherent->tel = $request->tel;
        $adherent->date_inscription = $request->date_inscription;
        $adherent->gender = $request->gender;
        $adherent->id_classe = $request->id_classe;

        $adherent->save();
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $adherent = Adherent::findOrFail($request->input('id'));

        $adherent->nom = $request->input('nom');
        $adherent->prenom = $request->input('prenom');
        $adherent->email = $request->input('email');
        $adherent->tel = $request->input('tel');
        $adherent->date_inscription = $request->input('date_inscription');
        $adherent->date_fin = $request->input('date_fin');
        $adherent->gender = $request->input('gender');
        $adherent->id_classe = $request->input('id_classe');

        $adherent->save();

        return redirect()->route('adherent.index');
    }

}
