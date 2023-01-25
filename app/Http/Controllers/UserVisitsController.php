<?php

namespace App\Http\Controllers;

use App\Models\Surgery;
use App\Models\User;
use App\Models\Visit;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserVisitsController extends Controller
{
    public function show($id)
    {
        if(Auth::user()->id == $id){
        $surgerys = Surgery::all();
        $visits = Visit::whereuser_id(
            $id
        )->get();
        return view('user.visits.index', ['visits' => $visits,'surgerys' => $surgerys]);
        }
        (Alert::error('Zle id'));
        return redirect()->back();
    }
}
