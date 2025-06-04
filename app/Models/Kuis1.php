<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kuis1 extends Model
{
    protected $table = 'kuis1'; // Nama tabel
    protected $primaryKey = 'id_kuis1'; // Primary key

    // Jika kolom waktu bertipe string dan kamu tidak pakai timestamps
    public $timestamps = false;

    // Relasi ke tabel siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
}

