<?php

namespace App\Http\Controllers;

use App\Models\Project;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects = Project::all();
        return view('home', compact(['projects']));
    }
}
