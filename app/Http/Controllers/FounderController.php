<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class FounderController extends Controller
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

    public function index()
    {
        return view('add_project');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'review' => 'required|string',
            'achivements' => 'required|string',
            'photo' => 'required|string',
            'section' => 'required|string',
        ]);
        Project::create($request->all());
        return redirect('home');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);

        return view('edit_project');
    }

    public function update($id, Request $request)
    {

    }
}
