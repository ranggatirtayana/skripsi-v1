<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta; // Gunakan Model Peserta

class PesertaController extends Controller
{
    public function index()
    {
        //Peserta ini nama model yang kita gunakan.
        $peserta = Peserta::latest()->get(); // latest mengambil data dengan urutan data terbaru.
        return view('peserta.index', compact('peserta')); // compact atau parsing data dari var peserta.
    }

    public function create()
    {
        return view('peserta.create');
    }

    public function store(Request $request)
    {
        Peserta::create($request->all());
        return redirect()->route('peserta.index');
    }

    public function edit(Peserta $peserta)
    {
        return view('peserta.edit', compact('peserta'));
    }

    public function update(Request $request, Peserta $peserta)
    {
        $peserta->update($request->all());
        return redirect()->route('peserta.index');
    }

    public function delete(Peserta $peserta)
    {
        $peserta->delete();
        return redirect()->back(); //redirect back mengembalikan halaman ke halaman sebelumnya.
    }
}
