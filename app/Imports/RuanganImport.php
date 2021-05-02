<?php

namespace App\Imports;

use App\ruangan;
use Maatwebsite\Excel\Concerns\ToModel;

class RuanganImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new ruangan([
            'lokasi' => $row[0],
            'nama_lokasi' => $row[1],
        ]);
    }
}
