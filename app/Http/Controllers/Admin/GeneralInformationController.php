<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateGeneralInformationRequest;
use App\Models\GeneralInformation;

class GeneralInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.general-informations.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/dashboard/general_information');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect('/dashboard/general_information');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('/dashboard/general_information');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return redirect('/dashboard/general_information');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGeneralInformationRequest $request)
    {
        $website_name = GeneralInformation::where('key', 'website_name')->get();
        $address = GeneralInformation::where('key', 'address')->get();
        $phone = GeneralInformation::where('key', 'phone')->get();
        $email = GeneralInformation::where('key', 'email')->get();
        $about_us = GeneralInformation::where('key', 'about_us')->get();

        $website_name->first()->value = $request->website_name;
        $address->first()->value = $request->address;
        $phone->first()->value = $request->phone;
        $email->first()->value = $request->email;
        $about_us->first()->value = $request->about_us;

        $website_name->first()->save();
        $address->first()->save();
        $phone->first()->save();
        $email->first()->save();
        $about_us->first()->save();

        return redirect('/dashboard/general_information')->with('success', 'Landing Website General Information Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect('/dashboard/general_informations');
    }
}
