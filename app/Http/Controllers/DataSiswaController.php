<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class DataSiswaController extends Controller
{
    
   public function index(Request $request)
{
    $search = strtolower($request->input('search')); // lowercase biar pencarian tidak case-sensitive
    $kelas = $request->input('kelas');

    $data = Siswa::with(['kuis1', 'kuis2', 'kuis3', 'evaluasi'])
        ->get()
        ->filter(function ($item) use ($search, $kelas) {
            $total = 4;
            $selesai = 0;
            if ($item->kuis1) $selesai++;
            if ($item->kuis2) $selesai++;
            if ($item->kuis3) $selesai++;
            if ($item->evaluasi) $selesai++;
            $persen = ($selesai / $total) * 100;

            $status = $persen == 100 ? 'selesai' : 'belum';

            // Cocokkan keyword dari search
            $matchSearch = !$search || 
                str_contains(strtolower($item->nama), $search) ||
                str_contains(strtolower($item->kelas), $search) ||
                str_contains($status, $search); // status dalam lowercase

            // Filter berdasarkan dropdown kelas (jika ada)
            $matchKelas = !$kelas || $item->kelas === $kelas;

            return $matchSearch && $matchKelas;
        });

    // Paginasi manual
    $perPage = 5;
    $currentPage = $request->input('page', 1);
    $pagedData = $data->slice(($currentPage - 1) * $perPage, $perPage)->values();
    $paginatedData = new \Illuminate\Pagination\LengthAwarePaginator(
        $pagedData,
        $data->count(),
        $perPage,
        $currentPage,
        ['path' => $request->url(), 'query' => $request->query()]
    );

    return view('datasiswa.index', [
        'data' => $paginatedData,
        'kelas' => $kelas,
    ]);
}

}