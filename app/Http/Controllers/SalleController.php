<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    public function index()
    {
        $salles = Salle::all();

        return view('salle.list')->with('salles', $salles);
    }

    public function create(Request $request)
    {
        $salle = new Salle();

        $salle->numSE = $request->numSE;
        $salle->nomSE = $request->nomSE;
        $salle->superficieSE = $request->superficieSE;

        $salle->save();

        return redirect()->back();
    }
}
