<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluasi extends Model
{
    protected $table = 'evaluasi'; // Nama tabel
    protected $primaryKey = 'id_evaluasi'; // Primary key

    // Jika kolom waktu bertipe string dan kamu tidak pakai timestamps
    public $timestamps = false;

    // Relasi ke tabel siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
}
