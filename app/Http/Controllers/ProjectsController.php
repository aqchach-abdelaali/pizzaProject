<?php


namespace App\Http\Controllers;
use App\Http\Requests\ProjectRequest;
use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){

        $projects = Project::latest()->get();

       /* Project::create([
            
            'name' => "Saluuuut!",
            'description' => "Voici ma présentation"
        ]);*/
        return view('projects.index')->withProjects($projects);
    }
    public function create()
    {
       return view('projects.create' ,['project' => new Project()]);
    }

    public function store(ProjectRequest $request)
    {
        $project = Project::create(\request()->all());
        /*______________________________________
        Project::create([
            'name' => \request('name'),
            'description' => \request('description')
        ]);
        _________________________________________
        /*$project = new Project();
        $project->name = \request()->name;    
        $project->description = \request()->description; 
        $project->save();*/   

        return redirect()->route('projects.show', $project);
    }

    public function show(Project $project /*$id*/){
        
        //$project = Project::where(['id' => $id])->first();
        //$project = Project::find($id);
        
        return view('projects.show',[
            'project' => $project
        ]);
    }
    
    public function edit(Project $project){
        
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    public function update(Project $project, ProjectRequest $request)  
    {
       /* $project->update([
            'name' => $request->name,
            'description' => $request->description
        ]);*/

        $project->update($request->all());

        return redirect()
            ->route('projects.show', $project)
            ->with([
                'color' => 'green-600',
                'title' => "Projet mise à jour",
                'message' => "Le projet {$project->name} a bien mis à jour !",
            ]);
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/');
    }
}
