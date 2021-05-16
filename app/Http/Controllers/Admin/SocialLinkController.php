<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateSocialLinkRequest;
use App\Models\SocialLink;

class SocialLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.social-links.index', [
            'links' => SocialLink::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.social-links.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSocialLinkRequest $request)
    {
        $link = new SocialLink();
        $link->website = $request->website;
        $link->link = $request->link;

        $link->save();

        return redirect('/dashboard/links')->with('success', 'Social Media Link Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('/dashboard/links');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialLink $link)
    {
        return view('dashboard.social-links.edit', [
            'link' => $link
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateSocialLinkRequest $request, SocialLink $link)
    {
        $link->website = $request->website;
        $link->link = $request->link;

        $link->save();

        return redirect('/dashboard/links')->with('success', 'Social Media Link Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialLink $link)
    {
        $link->delete();

        return redirect('/dashboard/links')->with('success', 'Social Media Link Deleted Successfully');
    }
}
