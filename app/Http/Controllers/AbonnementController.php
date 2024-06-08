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

}
