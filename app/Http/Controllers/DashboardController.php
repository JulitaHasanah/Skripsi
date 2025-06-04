<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
//     public function index()
// {
//     $jumlahSiswa = Siswa::count();

//     // Mengambil jumlah kelas unik berdasarkan kolom 'kelas'
//     $jumlahKelas = Siswa::select('kelas')->distinct()->count();

//     return view('dashboard', compact('jumlahSiswa', 'jumlahKelas'));
// }


public function index()
{
    $jumlahSiswa = Siswa::count();
    $jumlahKelas = Siswa::select('kelas')->distinct()->count();

    // Hitung jumlah siswa per kelas
    $kelasVIIIA = Siswa::where('kelas', 'VIIIA')->count();
    $kelasVIIIB = Siswa::where('kelas', 'VIIIB')->count();
    $kelasVIIIC = Siswa::where('kelas', 'VIIIC')->count();
    $kelasVIIID = Siswa::where('kelas', 'VIIID')->count();

    return view('dashboard', compact(
        'jumlahSiswa', 'jumlahKelas',
        'kelasVIIIA', 'kelasVIIIB', 'kelasVIIIC', 'kelasVIIID'
    ));
}
}
