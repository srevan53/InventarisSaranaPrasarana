<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facedes\DB;
use Illuminate\Database\Eloquent\Collection;

class peminjaman extends Model
{
    protected $table = 'peminjaman';
    protected $fillable = ['nama_peminjam', 'nama_barang', 'jumlah_pinjam', 'tgl_pinjam', 'tgl_kembali', 'status'];

    public function aset()
    {
        return $this->belongsTo(aset::class, 'nama', 'nama');
    }
}
