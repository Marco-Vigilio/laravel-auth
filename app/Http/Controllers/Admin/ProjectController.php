<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::paginate(15);

        return view("admins.project.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admins.project.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        dd($request->all());
        /*
        $data = $request->validate([
            'title'=> ['required', 'unique:post', 'min:10', 'max:255'],
            'image'=> ['url:https'],
            'content'=> ['required', 'min:10'],
        ]);

        $data['slug'] = Str::of($data['title'])->slug('-');
        $newProject = Project::create($data);

        return redirect()->route('admins.project.index');
        */
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view("admins.project.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
