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

}
