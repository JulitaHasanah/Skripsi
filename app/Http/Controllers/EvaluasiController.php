<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Evaluasi;
use App\Models\Siswa;

use Illuminate\Http\Request;

class EvaluasiController extends Controller
{


public function index(Request $request)
{
    $search = $request->get('search');
    $kelas = $request->get('kelas');

    $query = Evaluasi::with('siswa');

    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->whereHas('siswa', function ($subQuery) use ($search) {
                $subQuery->where('nama', 'like', '%' . $search . '%')
                         ->orWhere('kelas', 'like', '%' . $search . '%');
            })
            ->orWhere('nilai', 'like', '%' . $search . '%')
            ->orWhere('waktu', 'like', '%' . $search . '%');
        });
    }

    if ($kelas) {
        $query->whereHas('siswa', function ($q) use ($kelas) {
            $q->where('kelas', $kelas);
        });
    }

    $data = $query->paginate(5);
    $data->appends(request()->query());

    return view('evaluasi.index', compact('data', 'kelas'));
}

public function downloadPDF(Request $request)
{
    $kelas = $request->get('kelas');

    $query = Evaluasi::with('siswa');

    if ($kelas) {
        $query->whereHas('siswa', function ($q) use ($kelas) {
            $q->where('kelas', $kelas);
        });
    }

    $data = $query->get();
    $evaluasi = 'evaluasi';

    $pdf = Pdf::loadView('evaluasi.pdf', compact('data', 'evaluasi', 'kelas'));

    return $pdf->download("nilai-evaluasi-{$kelas}.pdf");
}

}
