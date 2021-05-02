<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facedes\DB;
use Illuminate\Database\Eloquent\Collection;

class aset extends Model
{
    protected $table = 'aset';
    protected $fillable = ['nama', 'kode', 'register', 'kib', 'lokasi', 'merk', 'tahun', 'jumlah', 'harga', 'nilai', 'akumulasi', 'keterangan'];

    public function ruangan()
    {
        return $this->belongsTo(ruangan::class, 'lokasi', 'lokasi');
    }

    public function peminjaman()
    {
        return $this->belongsTo(peminjaman::class, 'nama', 'nama');
    }
}
