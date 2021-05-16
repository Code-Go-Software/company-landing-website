<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Category;

use Illuminate\Http\Request;
use App\Http\Requests\CreateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.projects.index', [
            'projects' => Project::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProjectRequest $request)
    {
        $project = new Project();
        $project->name = $request->name;
        $project->category_id = $request->category_id;
        $project->description = $request->description;
        $project->link = $request->link;
        $project->client = $request->client;
        $project->finish_date = $request->finish_date;

        // Create A Uniaue Name For The Image, This Method Is Extended From The Conroller Class
        $image_name = $this->create_image_name('project', $request->image->extension());
        if(!$request->image->move(public_path('assets/img'), $image_name)) return back()->with('error', 'Failed To Upload Image, Try Again');

        $project->image = $image_name;
        $project->save();

        return redirect('/dashboard/projects')->with('success', 'Project Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('/dashboard/projects');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('dashboard.projects.edit', [
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateProjectRequest $request, Project $project)
    {
        //Check if the user send a new image to delete the old and upload the new
        if($request->image){
            //Delete the old image
            if(file_exists(public_path('assets/img/' . $project->image))){
                unlink(public_path('assets/img/' . $project->image));
            }
            //Upload the new image
            $image_name = $this->create_image_name('project', $request->image->extension());
            if(!$request->image->move(public_path('assets/img'), $image_name)) return back()->with('error', 'Failed To Upload Image, Try Again');

            $project->image = $image_name;
        }
        $project->name = $request->name;
        $project->category_id = $request->category_id;
        $project->description = $request->description;
        $project->link = $request->link;
        $project->client = $request->client;
        $project->finish_date = $request->finish_date;

        $project->save();

        return redirect('/dashboard/projects')->with('success', 'Project Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        if(file_exists(public_path('assets/img/' . $project->image))){
            unlink(public_path('assets/img/' . $project->image));
        }
        $project->delete();

        return redirect('/dashboard/projects')->with('success', 'Project Deleted Successfully');
    }
}
