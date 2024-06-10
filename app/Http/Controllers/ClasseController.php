<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\ClassSchedule;
use App\Models\Coach;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function index()
    {
        $classes = Classe::all();

        $user = auth()->user();

        if ($user && $user->type === 'Coach') {
            $coachClassId = Coach::where('id_user', $user->id)->value('id_classe');

            $classCoach = Classe::where('id', $coachClassId)->get();

            return view('classe.list')->with([
                'classCoach' => $classCoach,
                'classes' => $classes
            ]);
        } else {
            return view('classe.list')->with('classes', $classes);
        }
    }

    public function create(Request $request)
    {
        $classe = new Classe();

        $classe->libelle = $request->libelle;
        $classe->num_salle = $request->num_salle;
        $classe->desc = $request->desc;

        $classe->save();

        if ($request->has('jours')) {
            $jours = $request->jours;
            $startTimes = $request->start_times;
            $endTimes = $request->end_times;

            foreach ($jours as $index => $jour) {
                $classSchedule = new ClassSchedule();

                $classSchedule->id_classe = $classe->id;
                $classSchedule->jour = $jour;
                $classSchedule->start_time = $startTimes[$index];
                $classSchedule->end_time = $endTimes[$index];

                $classSchedule->save();
            }
        }

        return redirect()->back();
    }

    public function update(Request $request)
    {
        $classe = Classe::findOrFail($request->input('id'));

        // Update class details
        $classe->libelle = $request->input('libelle');
        $classe->num_salle = $request->input('num_salle');
        $classe->desc = $request->input('desc');
        $classe->save();

        // Update or add schedules
        $jours = $request->input('jours');
        $start_times = $request->input('start_times');
        $end_times = $request->input('end_times');

        // Delete existing schedules for the class
        $classe->schedules()->delete();

        // Add new schedules
        if ($jours && $start_times && $end_times) {
            for ($i = 0; $i < count($jours); $i++) {
                $schedule = new ClassSchedule();
                $schedule->jour = $jours[$i];
                $schedule->start_time = $start_times[$i];
                $schedule->end_time = $end_times[$i];
                $schedule->id_classe = $classe->id;
                $schedule->save();
            }
        }

        return redirect()->route('cours.index')->with('success', 'Cours updated successfully');
    }


    public function delete(Request $request)
    {
        $coursId = $request->input('coursId');

        Classe::destroy($coursId);

        return redirect()->route('cours.index');
    }
}
