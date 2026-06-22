<?php

namespace App\Http\Controllers;

use App\Models\University;

class HomeController extends Controller
{
    public function index()
    {
        $universities = University::all();
        return view('pages.index', compact('universities'));
    }
}
