<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::where('user_id', Auth::id())->latest()->get();

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'technologies' => 'required|string|max:255',
            'github_url' => 'nullable|url',
            'live_url' => 'nullable|url',
        ]);

        $validated['user_id'] = Auth::id();

        Project::create($validated);

        return redirect('/projects')
            ->with('success', 'Project created successfully.');
    }

    public function show(Project $project)
    {
        $this->authorizeProject($project);

        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        $this->authorizeProject($project);

        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $this->authorizeProject($project);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'technologies' => 'required|string',
            'github_url' => 'nullable|url',
            'live_url' => 'nullable|url',
        ]);

        $project->update($validated);

        return redirect('/projects')
            ->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $this->authorizeProject($project);

        $project->delete();

        return redirect('/projects')
            ->with('success', 'Project deleted successfully.');
    }

    private function authorizeProject(Project $project)
    {
        abort_unless($project->user_id === Auth::id(), 403);
    }
}
