<?php

namespace App\Http\Controllers;

use App\Models\Surgery;
use Illuminate\Http\Request;

class UserSurgeryController extends Controller
{
    public function index()
    {
        $surgerys = Surgery::all();
        return view('surgerys.user.index', ['surgerys' => $surgerys]);
    }

      public function show( $id)
    {
        $surgery = Surgery::findOrFail(
            $id
        );
        return view('surgerys.user.show', ['surgery' => $surgery]);
    }
}
