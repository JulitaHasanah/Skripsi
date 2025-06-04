<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Evaluasi;
use App\Models\Siswa;

use Illuminate\Http\Request;

class EvaluasiController extends Controller
{
//     public function index()
// {
//     $data = Evaluasi::with('siswa')->get(); // relasi siswa di-join otomatis
//     return view('evaluasi.index', compact('data'));
// }

public function index(Request $request)
{
    $data = Evaluasi::with('siswa')->get();

    $search = $request->get('search');

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

    // $data = $query->get();
    $data = $query->paginate(5);
    $data->appends(request()->query());

    return view('evaluasi.index', compact('data'));
}

public function downloadPDF(Request $request)
{
    $evaluasi = $request->get('evaluasi', 'evaluasi');
    $data = Evaluasi::with('siswa')->get();

    

    $pdf = Pdf::loadView('evaluasi.pdf', compact('data', 'evaluasi'));

    return $pdf->download("nilai-evaluasi.pdf");
}

}
