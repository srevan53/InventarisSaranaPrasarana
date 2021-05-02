<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    protected $table = 'ruangan';
    protected $fillable = ['lokasi', 'nama_lokasi'];

    public function aset()
    {
        return $this->hasOne(aset::class, 'lokasi', 'lokasi');
    }
}
