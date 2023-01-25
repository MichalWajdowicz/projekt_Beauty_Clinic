<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorsUpdate;
use App\Models\Doctor;
use Exception;
use Illuminate\Http\Request;
use Prophecy\Call\Call;
use RealRashid\SweetAlert\Facades\Alert;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.index', ['doctors' => $doctors]);
    }
    public function create()
    {
        return view('doctors.create');
    }

    public function store(DoctorsUpdate $request)
    {
        Doctor::create([
            'name' => $request->imie,
            'surname' => $request->nazwisko,
            'description' => $request->opis,
        ]);

        return redirect()->route('doctors.index');
    }

    public function show(Doctor $doctor)
    {
        return view('Doctors.show', ['doctor' => $doctor]);
    }

    public function edit(Doctor $doctor)
    {
        return view('doctors.edit', ['doctor' => $doctor]);
    }

    public function update(DoctorsUpdate $request, Doctor $doctor)
    {

        $doctor->name = $request->input('imie');
        $doctor->surname = $request->input('nazwisko');
        $doctor->description = $request->input('opis');
        $doctor->save();

        return redirect()->route('doctors.index');
    }

    public function destroy(Doctor $doctor)
    {
        try {
            $doctor->delete();
            Alert::success('Usunieto Dokotora');
            return redirect()->route('doctors.index');
        } catch (Exception $e) {
            Alert::error('Doktor posiada zabiegi w klinice');
            return redirect()->route('doctors.index');
        }
    }
}
