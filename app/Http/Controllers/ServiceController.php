<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view('service.list')->with('services', $services);
    }

    public function create(Request $request)
    {
        $service = new Service();

        $service->libelle = $request->libelle;
        $service->description = $request->description;

        $service->save();

        return redirect()->back();
    }
}
