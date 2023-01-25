<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreate;
use App\Http\Requests\UsersUpdate;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserCreate $request)
    {
        User::create([
            'name' => $request->imie,
            'surname' => $request->nazwisko,
            'gender' => $request->płeć,
            'number' => $request->telefon,
            'role_id' => $request->rola,
            'email' => $request->email,
            'password' => Hash::make($request->hasło),
        ]);

        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function update(UsersUpdate $request, User $user)
    {
        $user->name = $request->input('imie');
        $user->surname = $request->input('nazwisko');
        $user->gender = $request ->input('płeć');
        $user->email = $request  ->input('email');
        $user->number = $request ->input('telefon');
        $user->role_id = $request ->input('rola');
        $user->save();

        return redirect()->route('users.index');
    }
    public function destroy(User $user)
    {
        try {
            $user->delete();
            Alert::success('Usunieto Uzytkownika');
            return redirect()->route('users.index');
        } catch (Exception $e) {
            Alert::error('Użytkownik ma zaplanowane wizyty');
            return redirect()->route('users.index');
        }
    }
}
