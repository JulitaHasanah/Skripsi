<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Kuis1;
use App\Models\Kuis2;
use App\Models\Kuis3;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class KuisController extends Controller
{
    
public function index(Request $request)
{
    $kuis = $request->get('kuis', 'kuis1');
    $search = $request->get('search');

    switch ($kuis) {
        case 'kuis2':
            $query = Kuis2::with('siswa');
            break;
        case 'kuis3':
            $query = Kuis3::with('siswa');
            break;
        default:
            $query = Kuis1::with('siswa');
            break;
    }

    if ($search) {
        $query->where(function ($q) use ($search) {
            // Cari pada relasi siswa: nama dan kelas
            $q->whereHas('siswa', function ($subQuery) use ($search) {
                $subQuery->where('nama', 'like', '%' . $search . '%')
                         ->orWhere('kelas', 'like', '%' . $search . '%');
            })
            // Tambahan cari di kolom nilai dan waktu
            ->orWhere('nilai', 'like', '%' . $search . '%')
            ->orWhere('waktu', 'like', '%' . $search . '%');
        });
    }

    // $data = $query->get();
    $data = $query->paginate(5);
    $data->appends(request()->query());

    return view('kuis.index', compact('data', 'kuis'));
}

public function downloadPDF(Request $request)
{
    $kuis = $request->get('kuis', 'kuis1');

    switch ($kuis) {
        case 'kuis2':
            $data = Kuis2::with('siswa')->get();
            break;
        case 'kuis3':
            $data = Kuis3::with('siswa')->get();
            break;
        default:
            $data = Kuis1::with('siswa')->get();
            break;
    }

    $pdf = pdf::loadView('kuis.pdf', compact('data', 'kuis'));

    return $pdf->download("nilai-{$kuis}.pdf");
}

}
