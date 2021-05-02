<?php

namespace App\Exports;

use App\ruangan;
use App\aset;
use Maatwebsite\Excel\Concerns\FromCollection;

class RuanganExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return ruangan::all();
    }
}
