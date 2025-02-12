<?php

namespace App\Http\Controllers;

use App\Models\Location;
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
        return view('findlocation', compact('locations'));
    }

    /**
     * API Get All resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function locations($id)
    {
        $locations = Location::all();
        return response()->json(['data' => $locations]);
    }

}
