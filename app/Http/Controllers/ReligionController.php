<?php

namespace App\Http\Controllers;

use App\Models\Religion;
use Illuminate\Http\Request;

class ReligionController extends Controller
{
    function index() {
        $religion = Religion::all();
        return view('religion.index', compact('religion'));
    }
}
