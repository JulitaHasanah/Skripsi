<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class DataSiswaController extends Controller
{
    
   public function index(Request $request)
{
    $search = $request->input('search');

    $data = Siswa::with(['kuis1', 'kuis2', 'kuis3', 'evaluasi'])
        ->get()
        ->filter(function ($item) use ($search) {
            $total = 4;
            $selesai = 0;
            if ($item->kuis1) $selesai++;
            if ($item->kuis2) $selesai++;
            if ($item->kuis3) $selesai++;
            if ($item->evaluasi) $selesai++;
            $persen = ($selesai / $total) * 100;

            // Konversi status progres
            if ($persen == 100) $status = 'sudah';
            else $status = 'belum';

            // Pencarian berdasarkan nama, kelas, atau status
            return stripos($item->nama, $search) !== false ||
                   stripos($item->kelas, $search) !== false ||
                   stripos($status, $search) !== false;
        });

    // Paginasi manual karena filter() hasilnya Collection
    $perPage = 5;
    $currentPage = request()->input('page', 1);
    $pagedData = $data->slice(($currentPage - 1) * $perPage, $perPage)->values();
    $paginatedData = new \Illuminate\Pagination\LengthAwarePaginator(
        $pagedData,
        $data->count(),
        $perPage,
        $currentPage,
        ['path' => request()->url(), 'query' => request()->query()]
    );

    return view('datasiswa.index', ['data' => $paginatedData]);
}

}
