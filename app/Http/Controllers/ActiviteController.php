<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    public function index()
    {
        $activites = Activite::all();

        return view('activite.list')->with('activites', $activites);
    }

    public function create(Request $request)
    {
        $activite = new Activite();

        $activite->libelle = $request->libelle;
        $activite->description = $request->description;
        $activite->type = $request->type;
        $activite->statut = $request->statut;

        $activite->save();

        return redirect()->back();
    }
}
