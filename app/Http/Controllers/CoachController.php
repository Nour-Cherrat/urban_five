<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\User;
use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function index()
    {
        $coaches = Coach::all();
        $classes = Classe::all();

        return view('coach.list')->with([
            'coaches' => $coaches,
            'classes' => $classes
        ]);
    }
}
