<?php

namespace App\Http\Controllers;

use App\Models\Abonnement;
use App\Models\Classe;
use Illuminate\Http\Request;

class AbonnementController extends Controller
{
    public function index()
    {
        $abonnements = Abonnement::orderBy('id_cours')->orderBy('duree')->get();
        $classes = Classe::all();

        return view('abonnement.list')->with([
            'abonnements' => $abonnements,
            'classes' => $classes
        ]);
    }

    public function create(Request $request)
    {
        $abonnement = new Abonnement();

        $abonnement->id_cours = $request->id_cours;
        $abonnement->duree = $request->duree;
        $abonnement->tarif = $request->tarif;

        $abonnement->save();
        return redirect()->back();
    }
}
