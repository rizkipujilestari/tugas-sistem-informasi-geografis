<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Location;
use App\Models\Religion;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::all();
        return view('locations.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $religions = Religion::all();
        $districts = District::all();
        return view('locations.create', compact('religions', 'districts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'location_name' => 'required',
            'latitude'      => 'required',
            'longitude'     => 'required',
            'religion_id'   => 'required',
            'district_id'   => 'required',
        ]);

        $insertData = request()->except(['_token']);
        Location::create($insertData);

        return redirect('admin/locations')->with('success', 'Location created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $findLocation = Location::findOrFail($id);
        return $findLocation;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location = Location::findOrFail($id);
        $religions = Religion::all();
        $districts = District::all();
        return view('locations.edit', compact('location', 'religions', 'districts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'location_name' => 'required',
            'latitude'      => 'required',
            'longitude'     => 'required',
            'religion_id'   => 'required',
            'district_id'   => 'required',
        ]);

        $location = Location::findOrFail($id);
        $updateData = request()->except(['_token']);
        $updateData = request()->except(['_method']);
        $location->update($updateData);
        
        return redirect('admin/locations')->with('success', 'Success Update Location.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location = Location::findOrFail($id);
        $location->delete();
        
        return redirect('admin/locations')->with('success', 'Location Deleted Successfully.');
    }
}
