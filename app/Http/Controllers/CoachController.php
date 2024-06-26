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

        $currentMonth = now()->format('m');
        $studentsCount = [];

        foreach ($coaches as $coach) {
            $class = $coach->classe;

            $studentsEnrolled = $class->adherents()
                ->whereMonth('created_at', $currentMonth)
                ->count();

            $studentsCount[$coach->id] = $studentsEnrolled;
        }

        return view('coach.list')->with([
            'coaches' => $coaches,
            'classes' => $classes,
            'studentsCount' => $studentsCount
        ]);
    }

    public function create(Request $request)
    {
        $user = new User();

        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->tel = $request->tel;
        $user->type = 'Coach';

        $user->save();

        $coach = new Coach();

        $coach->id_user = $user->id;
        $coach->id_classe = $request->id_classe;
        $coach->salaire = $request->salaire;


        $coach->save();
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $coach = Coach::findOrFail($request->input('id'));
        $user = User::findOrFail($coach->id_user);

        $user->nom = $request->input('nom');
        $user->prenom = $request->input('prenom');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->tel = $request->input('tel');
        $user->type = 'Coach';

        $user->save();

        $coach->id_classe = $request->input('id_classe');
        $coach->salaire = $request->input('salaire');

        $coach->save();

        return redirect()->route('coach.index');
    }

    public function delete(Request $request)
    {
        $coachId = $request->input('coachId');

        Coach::destroy($coachId);

        return redirect()->route('coach.index');
    }

    public function profile(Request $request)
    {
        $coach = Coach::findOrFail($request->input('id'));
        $class = $coach->classe;

        $totalStudentsCount = $class->adherents()->count();

        return view('coach.profile')->with([
            'coach' => $coach,
            'totalStudentsCount' => $totalStudentsCount,
        ]);
    }
}
