<?php

namespace App\Http\Controllers;

use App\Models\Adherent;
use Illuminate\Http\Request;

class AdherentController extends Controller
{
    public function index()
    {
        $adherents = Adherent::all();

        return view('adherent.list')->with('adherents', $adherents);
    }
}
