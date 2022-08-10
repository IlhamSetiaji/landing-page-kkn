<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StrukturController extends Controller
{
    public function index()
    {
        $active = 'struktur';
        return view('struktur',compact('active'));
    }
}
