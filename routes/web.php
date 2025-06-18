<?php
use App\Http\Controllers\LoginGuruController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\EvaluasiController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\KuisController;

use App\Models\Evaluasi;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('home');
});

// Route::get('landingpage', [LandingpageController::class, 'index'])->name('landingpage');
Route::get('home', [LandingpageController::class, 'home'])->name('home');
Route::get('cp', [LandingpageController::class, 'cp'])->name('cp');
Route::get('informasi', [LandingpageController::class, 'informasi'])->name('informasi');

Route::get('loginguru', function(){
    return view('loginguru');
})->name('loginguru');

Route::get('/loginguru', [LoginGuruController::class, 'index'])->name('loginguru');

Route::post('/loginguru', [LoginGuruController::class, 'login'])->name('loginguru');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/logoutguru', function () {
    session()->forget('guru'); // menghapus session login
    return redirect()->route('loginguru')->with('success', 'Anda berhasil logout.');
})->name('logoutguru');



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/datasiswa', [DataSiswaController::class, 'index'])->name('datasiswa.index');


Route::get('/kuis', [KuisController::class, 'index'])->name('kuis.index');

// Route::delete('/kuis/{id}', [KuisController::class, 'destroy'])->name('kuis.destroy');
Route::delete('/kuis/{kuis}/{id}', [KuisController::class, 'destroy'])->name('kuis.destroy');

Route::get('/evaluasi', [EvaluasiController::class, 'index'])->name('evaluasi.index');

Route::delete('/evaluasi/{id}', [EvaluasiController::class, 'destroy'])->name('evaluasi.destroy');

// Route::get('/download-nilai-kuis', [KuisController::class, 'downloadPDF'])->name('kuis.download');
Route::get('/kuis/download-pdf', [KuisController::class, 'downloadPDF'])->name('kuis.downloadPDF');

Route::get('/download-nilai-evaluasi', [EvaluasiController::class, 'downloadPDF'])->name('evaluasi.download');





