<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function index()
    {
        $classes = Classe::all();

        return view('classe.list')->with('classes', $classes);
    }

    public function create(Request $request)
    {
        $classe = new Classe();

        $classe->libelle = $request->libelle;
        $classe->tarif = $request->tarif;

        $classe->save();
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $classe = Classe::findOrFail($request->input('id'));

        $classe->libelle = $request->input('libelle');
        $classe->tarif = $request->input('tarif');

        $classe->save();

        return redirect()->route('cours.index');
    }

}
