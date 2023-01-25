<?php

namespace App\Http\Controllers;

use App\Http\Requests\SurgeryUpdate;
use App\Models\Doctor;
use App\Models\Surgery;
use Exception;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SurgeryController extends Controller
{
    public function index()
    {
        $surgerys = Surgery::all();
        $doctors = Doctor::all();
        return view('surgerys.index', ['surgerys' => $surgerys,'doctors' => $doctors]);
    }
    public function create()
    {
        $doctors = Doctor::all();
        return view('surgerys.create',['doctors' => $doctors]);
    }

    public function store(SurgeryUpdate $request)
    {
        $input = $request->all();
        Surgery::create($input);

        return redirect()->route('surgerys.index');
    }

    // public function show(Surgery $doctor)
    // {
    //     return view('surgerys.show', ['doctor' => $doctor]);
    // }

    public function edit(Surgery $surgery)
    {
        $doctors = Doctor::all();
        return view('surgerys.edit', ['surgery' => $surgery,'doctors' => $doctors]);
    }

    public function update(SurgeryUpdate $request, Surgery $surgery)
    {
        try{
        Doctor::findOrFail(
            $request->doctor_id
            );
            $surgery->name = $request->input('nazwa');
        $surgery->cost = $request->input('cena');
        $surgery->description = $request->input('opis');

        $surgery->doctor_id = $request->input('doctor_id');
        $surgery->save();

        return redirect()->route('surgerys.index');
        }catch(Exception $e){
            Alert::error('Podane id doktora jest nie poprawne');
            return redirect()->route('surgerys.index');

        }

        // $surgery->name = $request->input('nazwa');
        // $surgery->cost = $request->input('cena');
        // $surgery->description = $request->input('opis');

        // $surgery->doctor_id = $request->input('doctor_id');
        // $surgery->save();

        // return redirect()->route('surgerys.index');
    }

    public function destroy(Surgery $surgery)
    {
        try {
            $surgery->delete();
            Alert::success('Usunięto zabieg');
            return redirect()->route('surgerys.index');
        } catch (Exception $e) {
            Alert::error('Zabieg ma zaplanowane wizyty');
            return redirect()->route('surgerys.index');
        }
    }
}
