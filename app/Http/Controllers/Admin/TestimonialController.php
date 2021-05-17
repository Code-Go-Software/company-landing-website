<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTestimonialRequest;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.testimonials.index', [
            'testimonials' => Testimonial::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTestimonialRequest $request)
    {
        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->position = $request->position;
        $testimonial->opinion = $request->opinion;

        //Check for customer image
        if($request->image){
            // Create A Uniaue Name For The Image, This Method Is Extended From The Conroller Class
            $image_name = $this->create_image_name('testimonial', $request->image->extension());
            if(!$request->image->move(public_path('assets/img'), $image_name)) return back()->with('error', 'Failed To Upload Image, Try Again');

            $testimonial->image = $image_name;
        }

        $testimonial->save();

        return redirect('/dashboard/testimonials')->with('success', 'Testimonial Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('/dashboard/testimonials');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('dashboard.testimonials.edit', [
            'testimonial' => $testimonial
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateTestimonialRequest $request, Testimonial $testimonial)
    {
        //Check if the user send a new image to delete the old and upload the new
        if($request->image){
            //Delete the old image
            if(file_exists(public_path('assets/img/' . $testimonial->image)) && is_file(public_path('assets/img/' . $testimonial->image))){
                unlink(public_path('assets/img/' . $testimonial->image));
            }
            //Upload the new image
            $image_name = $this->create_image_name('testmonial', $request->image->extension());
            if(!$request->image->move(public_path('assets/img'), $image_name)) return back()->with('error', 'Failed To Upload Image, Try Again');

            $testimonial->image = $image_name;
        }
        $testimonial->name = $request->name;
        $testimonial->opinion = $request->opinion;
        $testimonial->position = $request->position;

        $testimonial->save();

        return redirect('/dashboard/testimonials')->with('success', 'Testimonial Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        if(file_exists(public_path('assets/img/' . $testimonial->image)) && is_file(public_path('assets/img/' . $testimonial->image))){
            unlink(public_path('assets/img/' . $testimonial->image));
        }
        $testimonial->delete();

        return redirect('/dashboard/testimonials')->with('success', 'Testimonial Deleted Successfully');
    }
}
