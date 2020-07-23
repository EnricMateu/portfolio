<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    
    public function index()
    {
        return view('projects.index', [ 
            'projects'=>Project::latest()->paginate() 
            ]);
    }

    public function create()
    {
        return view('projects.create');
    }

   
    public function store(Request $request)
    {
        Project::create([
            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description'),
        ]);

        return redirect()->route('projects.index');
    }

    
    public function show(Project $project)
    {
        return view('projects.show', [
            'project' => $project
        ]);
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
