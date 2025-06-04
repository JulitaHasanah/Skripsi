<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginGuruController extends Controller
{
   
   public function index()
    {
        return view('loginguru'); //menampilkan halaman landingpage
    }
   
   
    public function login(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'password' => 'required',
    ]);

    $guru = DB::table('guru')->where('nama', $request->nama)->first();

    if ($guru && $guru->password === $request->password) {
        session(['guru' => $guru]);

        // Kirim pesan sukses ke session
        return redirect('/dashboard')->with('success', 'Login berhasil, selamat datang ' . $guru->nama . '!');
    }

    return back()->with('error', 'Nama atau password salah.');
}

}
