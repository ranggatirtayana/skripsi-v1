<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth; //Gunakan Auth

class LoginController extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    //Proses Pencarian Data
    public function cekLogin(Request $request)
    {
        $up = $request->only('username','password');
        if (Auth::attempt($up)) {
            return redirect()->route('karyawan.index'); //Jika datanya ada maka akan dialihkan ke route dengan alias karyawan.index
        }

        return redirect()->back(); //Jika data tidak ada maka akan di kembalikan ke halaman sebelumnya
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
