<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan; // Gunakan Model 

class KaryawanController extends Controller
{
    public function index()
    {
        //Karyawan ini nama model yang kita gunakan.
        $karyawan = Karyawan::latest()->get(); // latest mengambil data dengan urutan data terbaru.
        return view('karyawan.index', compact('karyawan')); // compact atau parsing data dari var karyawan.
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        Karyawan::create($request->all());
        return redirect()->route('karyawan.index');
    }

    public function edit(Karyawan $karyawan)
    {
        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, Karyawan $karyawan)
    {
        $karyawan->update($request->all());
        return redirect()->route('karyawan.index');
    }

    public function delete(Karyawan $karyawan)
    {
        $karyawan->delete();
        return redirect()->back(); //redirect back mengembalikan halaman ke halaman sebelumnya.
    }
}
