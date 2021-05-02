<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kiba extends Model
{
    //
    protected $table = 'kiba';
    protected $fillable = ['nama', 'alamat', 'luas', 'tahun', 'nilai', 'opd', 'sub_opd', 'sub_opd_caps', 'kota', 'asal', 'keterangan', 'kode', 'jenis'];
}
