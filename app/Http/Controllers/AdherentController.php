<?php

namespace App\Http\Controllers;

use App\Models\Adherent;
use App\Models\Classe;
use App\Models\Coach;
use Illuminate\Http\Request;

class AdherentController extends Controller
{
    public function index()
    {
        $adherents = Adherent::all();
        $classes = Classe::all();

        $user = auth()->user();

        if ($user && $user->type === 'Coach') {
            $coachClassId = Coach::where('id_user', $user->id)->value('id_classe');

            $adherentsCoach = Adherent::where('id_classe', $coachClassId)->get();

            return view('adherent.list')->with([
                'adherentsCoach' => $adherentsCoach,
                'classes' => $classes
            ]);
        } else {
            return view('adherent.list')->with([
                'adherents' => $adherents,
                'classes' => $classes
            ]);
        }
    }

    public function create(Request $request)
    {
        $adherent = new Adherent();

        $adherent->nom = $request->nom;
        $adherent->prenom = $request->prenom;
        $adherent->adresse = $request->adresse;
        $adherent->ville = $request->ville;
        $adherent->email = $request->email;
        $adherent->tel = $request->tel;
        $adherent->date_inscription = $request->date_inscription;
        $adherent->date_naissance = $request->date_naissance;
        $adherent->gender = $request->gender;
        $adherent->id_classe = $request->id_classe;

        $adherent->save();
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $adherent = Adherent::findOrFail($request->input('id'));

        $adherent->nom = $request->input('nom');
        $adherent->prenom = $request->input('prenom');
        $adherent->adresse = $request->input('adresse');
        $adherent->ville = $request->input('ville');
        $adherent->email = $request->input('email');
        $adherent->tel = $request->input('tel');
        $adherent->date_inscription = $request->input('date_inscription');
        $adherent->date_fin = $request->input('date_fin');
        $adherent->date_naissance = $request->input('date_naissance');
        $adherent->gender = $request->input('gender');
        $adherent->id_classe = $request->input('id_classe');

        $adherent->save();

        return redirect()->route('adherent.index');
    }

    public function delete(Request $request)
    {
        $adherentId = $request->input('adherentId');

        Adherent::destroy($adherentId);

        return redirect()->route('adherent.index');
    }

    public function updateStatus($id)
    {
        $adherent = Adherent::find($id);
        if (!$adherent) {
            return response()->json(['error' => 'Adherent not found'], 404);
        }

        $adherent->statut = $adherent->statut == 'Actif' ? 'Non-actif' : 'Actif';
        $adherent->save();

        return response()->json(['message' => 'Status updated successfully', 'new_status' => $adherent->statut]);
    }

    public function profile(Request $request)
    {

        $adherent = Adherent::findOrFail($request->input('id'));

        return view('adherent.profile')->with('adherent', $adherent);

    }
}
