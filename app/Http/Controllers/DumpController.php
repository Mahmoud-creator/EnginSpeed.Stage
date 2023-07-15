<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DumpController extends Controller
{
    public function index(Request $request)
    {
        dd($request->all());
    }
}
