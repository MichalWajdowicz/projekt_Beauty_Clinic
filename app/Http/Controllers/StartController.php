<?php

namespace App\Http\Controllers;

use App\Models\Surgery;
use App\Models\Doctor;
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        $surgerys = Surgery::all();
        return view('index', ['surgerys' => $surgerys,'doctors' => $doctors]);
    }
}
