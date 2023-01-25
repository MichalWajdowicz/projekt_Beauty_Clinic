<?php

namespace App\Http\Controllers;

use App\Models\Surgery;
use App\Models\User;
use App\Models\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function index()
    {
        $visits = Visit::all();
        $users = User::all();
        $surgerys = Surgery::all();
        return view('visits.index', ['visits' => $visits,'users' => $users,'surgerys' => $surgerys]);
    }
}
