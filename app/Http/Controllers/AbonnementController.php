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
        $existingAbonnement = Abonnement::where('id_cours', $request->id_cours)
            ->where('duree', $request->duree)
            ->exists();

        if ($existingAbonnement) {
            return redirect()->back()->with('error', 'Cet abonnement existe déjà.');
        }

        $abonnement = new Abonnement();

        $abonnement->id_cours = $request->id_cours;
        $abonnement->duree = $request->duree;
        $abonnement->tarif = $request->tarif;

        $abonnement->save();
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $abonnement = Abonnement::findOrFail($request->input('id'));

        $abonnement->id_cours = $request->input('id_cours');
        $abonnement->duree = $request->input('duree');
        $abonnement->tarif = $request->input('tarif');

        $abonnement->save();

        return redirect()->route('abonnement.index');
    }
}
