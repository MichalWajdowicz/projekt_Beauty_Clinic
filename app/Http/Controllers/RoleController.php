<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $r = Role::all();
        return view('test', ['role' => $r]);
    }
}
