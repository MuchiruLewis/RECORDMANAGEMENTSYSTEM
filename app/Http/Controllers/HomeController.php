<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locations;
use App\Models\Policeob;
use App\Models\Suspicious;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$locations = Locations::where('description', 'ROAD ACCIDENTS')->get();
        $locations = Locations::all();
        $policeob = Policeob::all();
        $suspicious = Suspicious::all();
        
        return view ('homee' , compact('locations','policeob','suspicious'));
    }
}
