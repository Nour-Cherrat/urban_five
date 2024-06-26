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
        $invite->date_naissance = $request->date_naissance;
        $invite->gender = $request->gender;
        $invite->id_classe = $request->id_classe;

        $invite->save();

        return redirect()->back();
    }

    public function update(Request $request)
    {
        $invite = Invite::findOrFail($request->input('id'));

        $invite->nom = $request->input('nom');
        $invite->prenom = $request->input('prenom');
        $invite->email = $request->input('email');
        $invite->tel = $request->input('tel');
        $invite->date = $request->input('date');
        $invite->date_naissance = $request->input('date_naissance');
        $invite->gender = $request->input('gender');
        $invite->id_classe = $request->input('id_classe');

        $invite->save();

        return redirect()->route('invite.index');
    }

    public function delete(Request $request)
    {
        $inviteId = $request->input('inviteId');

        Invite::destroy($inviteId);

        return redirect()->route('invite.index');
    }

    public function profile(Request $request)
    {
        $invite = Invite::findOrFail($request->input('id'));

        $visitData = Invite::where('nom', $invite->nom)
            ->where('nom', $invite->nom)
            ->where('prenom', $invite->prenom)
            ->with('classe')
            ->get();

        $visitsCount = $visitData->count();
        $visitHistory = $visitData;

        return view('invite.profile')->with([
            'invite' => $invite,
            'visitsCount' => $visitsCount,
            'visitHistory' => $visitHistory,
        ]);
    }
}
