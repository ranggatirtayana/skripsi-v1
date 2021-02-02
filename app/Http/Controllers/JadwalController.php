<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwal = Jadwal::latest()->get(); // latest mengambil data dengan urutan data terbaru.
        return view('jadwal.index', compact('jadwal')); // compact atau parsing data dari var karyawan.
    }

    public function create()
    {
        return view('jadwal.create');
    }

    public function store(Request $request)
    {
        Jadwal::create($request->all());
        return redirect()->route('jadwal.index');
    }

    public function edit(Jadwal $jadwal)
    {
        return view('jadwal.edit', compact('jadwal'));
    }

    public function update(Request $request, Jadwal $jadwal)
    {
        $jadwal->update($request->all());
        return redirect()->route('jadwal.index');
    }

    public function delete(Jadwal $jadwal)
    {
        $jadwal->delete();
        return redirect()->back(); //redirect back mengembalikan halaman ke halaman sebelumnya.
    }
}
