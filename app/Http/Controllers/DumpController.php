<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DumpController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome');
    }
}
