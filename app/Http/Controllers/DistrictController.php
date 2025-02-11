<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    function index() {
        $districts = District::all();
        return view('districts.index', compact('districts'));
    }
}
