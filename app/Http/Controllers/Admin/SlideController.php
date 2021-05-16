<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Slide;

use Illuminate\Http\Request;
use App\Http\Requests\CreateSlideRequest;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.slides.index', [
            'slides' => Slide::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.slides.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSlideRequest $request)
    {
        $slide = new Slide();
        $slide->title = $request->title;
        $slide->read_more_button = $request->read_more;
        $slide->description = $request->description;

        // Create A Uniaue Name For The Image, This Method Is Extended From The Conroller Class
        $image_name = $this->create_image_name('slide', $request->image->extension());
        if(!$request->image->move(public_path('assets/img'), $image_name)) return back()->with('error', 'Failed To Upload Image, Try Again');

        $slide->image = $image_name;
        $slide->save();

        return redirect('/dashboard/slides')->with('success', 'Slide Image Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('/dashboard/slides');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Slide $slide)
    {
        return view('dashboard.slides.edit', [
            'slide' => $slide
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateSlideRequest $request, Slide $slide)
    {
        //Check if the user send a new image to delete the old and upload the new
        if($request->image){
            //Delete the old image
            if(file_exists(public_path('assets/img/' . $slide->image))){
                unlink(public_path('assets/img/' . $slide->image));
            }
            //Upload the new image
            $image_name = $this->create_image_name('slide', $request->image->extension());
            if(!$request->image->move(public_path('assets/img'), $image_name)) return back()->with('error', 'Failed To Upload Image, Try Again');

            $slide->image = $image_name;
        }
        $slide->title = $request->title;
        $slide->description = $request->description;
        $slide->read_more_button = $request->read_more;

        $slide->save();

        return redirect('/dashboard/slides')->with('success', 'Slide Image Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $slide)
    {
        if(file_exists(public_path('assets/img/' . $slide->image))){
            unlink(public_path('assets/img/' . $slide->image));
        }
        $slide->delete();

        return redirect('/dashboard/slides')->with('success', 'Slide Image Deleted Successfully');
    }
}
