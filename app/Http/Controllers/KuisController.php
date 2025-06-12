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
    $kelas = $request->get('kelas');
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

    return view('kuis.index', compact('data', 'kuis'));
}

public function downloadPDF(Request $request)
{
    $kuis = $request->get('kuis', 'kuis1');
    $kelas = $request->get('kelas'); // bisa null

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

    // Filter berdasarkan kelas jika ada
    if ($kelas) {
        $query->whereHas('siswa', function ($q) use ($kelas) {
            $q->where('kelas', $kelas);
        });
    }

    $data = $query->get();

    $pdf = Pdf::loadView('kuis.pdf', compact('data', 'kuis'));

    return $pdf->download("nilai-{$kuis}" . ($kelas ? "-{$kelas}" : '') . ".pdf");
}



}
