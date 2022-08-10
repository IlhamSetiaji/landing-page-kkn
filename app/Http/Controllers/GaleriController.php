<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class GaleriController extends Controller
{
    public function index()
    {
        $active = 'galeri';
        return view('galeri',compact('active'));
    }
}
