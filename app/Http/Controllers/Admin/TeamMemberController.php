<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamMember;
use App\Http\Requests\CreateTeamMemberRequest;

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.members.index', [
            'members' => TeamMember::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTeamMemberRequest $request)
    {
        $member = new TeamMember();
        $member->name = $request->name;
        $member->position = $request->position;
        $member->description = $request->description;
        $member->facebook = $request->facebook;
        $member->instagram = $request->instagram;
        $member->linkedin = $request->linkedin;
        $member->twitter = $request->twitter;

        // Create A Uniaue Name For The Image, This Method Is Extended From The Conroller Class
        $image_name = $this->create_image_name('member', $request->image->extension());
        if(!$request->image->move(public_path('assets/img'), $image_name)) return back()->with('error', 'Failed To Upload Image, Try Again');

        $member->image = $image_name;
        $member->save();

        return redirect('/dashboard/members')->with('success', 'Team Member Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('/dashboard/members');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamMember $member)
    {
        return view('dashboard.members.edit', [
            'member' => $member
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateTeamMemberRequest $request, TeamMember $member)
    {
        //Check if the user send a new image to delete the old and upload the new
        if($request->image){
            //Delete the old image
            if(file_exists(public_path('assets/img/' . $member->image))){
                unlink(public_path('assets/img/' . $member->image));
            }
            //Upload the new image
            $image_name = $this->create_image_name('member', $request->image->extension());
            if(!$request->image->move(public_path('assets/img'), $image_name)) return back()->with('error', 'Failed To Upload Image, Try Again');

            $member->image = $image_name;
        }
        $member->name = $request->name;
        $member->position = $request->position;
        $member->description = $request->description;
        $member->facebook = $request->facebook;
        $member->instagram = $request->instagram;
        $member->linkedin = $request->linkedin;
        $member->twitter = $request->twitter;

        $member->save();

        return redirect('/dashboard/members')->with('success', 'Team Member Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamMember $member)
    {
        if(file_exists(public_path('assets/img/' . $member->image))){
            unlink(public_path('assets/img/' . $member->image));
        }
        $member->delete();

        return redirect('/dashboard/members')->with('success', 'Team Member Deleted Successfully');
    }
}
