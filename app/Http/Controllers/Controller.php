<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Coach;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $classes = Classe::with('coach.user', 'schedules')->get();
        $coaches = Coach::all();

        foreach ($classes as $class) {
            foreach ($class->schedules as $schedule) {
                $start_time = Carbon::parse($schedule->start_time);
                $end_time = Carbon::parse($schedule->end_time);
                $schedule->display_time = $start_time->format('h:iA') . ' - ' . $end_time->format('h:iA');
            }
        }

        return view('welcome')->with([
            'coaches' => $coaches,
            'classes' => $classes
        ]);
    }

}
