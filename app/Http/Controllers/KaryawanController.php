<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan; // Gunakan Model
use Mail;
use App\Mail\SendRequestNotification;

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

    public function sendRequestNotification($id){
        $karyawan = Karyawan::find($id);
        Mail::to($karyawan->email)->send(new SendRequestNotification($karyawan->nama_lengkap,$karyawan->id));
        return redirect()->route("karyawan.index");
    }

    public function storeToken(Request $request){
        $karyawan = Karyawan::find($request->user_id);
        $karyawan->token = $request->token;
        $karyawan->update();
        return response()->json([
            "status"    => "ok"
        ],200);
    }

    public function updateRequestNotification($id){
        return view("firebasetest",compact('id'));
    }
}
