<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Location;
use App\Models\Religion;
use Illuminate\Http\Request;

class FindLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::all();
        $districts = District::all();
        $religions = Religion::all();
        return view('findlocation', compact('locations', 'districts', 'religions'));
    }

    /**
     * API Get All resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getLocations(Request $request)
    {
        $locations = Location::all();
        return response()->json(['data' => $locations]);
    }

}
