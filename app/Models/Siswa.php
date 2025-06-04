<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';
    public $timestamps = false;

    public function kuis1()
    {
        return $this->hasOne(Kuis1::class, 'id_siswa');
    }

    public function kuis2()
    {
        return $this->hasOne(Kuis2::class, 'id_siswa');
    }

    public function kuis3()
    {
        return $this->hasOne(Kuis3::class, 'id_siswa');
    }

    public function evaluasi()
    {
        return $this->hasOne(Evaluasi::class, 'id_siswa');
    }
}

