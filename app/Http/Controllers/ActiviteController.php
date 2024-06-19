<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    public function index()
    {
        $activites = Activite::latest()->get();

        return view('activite.list')->with('activites', $activites);
    }
}
