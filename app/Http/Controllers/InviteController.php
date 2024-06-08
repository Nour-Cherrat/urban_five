<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Invite;
use Illuminate\Http\Request;

class InviteController extends Controller
{
    public function index()
    {
        $invites = Invite::all();
        $classes = Classe::all();

        return view('invite.list')->with([
            'invites' => $invites,
            'classes' => $classes
        ]);
    }

    public function create(Request $request)
    {
        $invite = new Invite();

        $invite->nom = $request->nom;
        $invite->prenom = $request->prenom;
        $invite->email = $request->email;
        $invite->tel = $request->tel;
        $invite->date = $request->date;
        $invite->gender = $request->gender;
        $invite->id_classe = $request->id_classe;

        $invite->save();

        return redirect()->back();
    }


}
