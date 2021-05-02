<?php

namespace App\Exports;

use App\peminjaman;
use App\aset;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PeminjamanExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return peminjaman::all();
    }

    public function headings(): array
    {
        return [
            'No',
            'Nama Peminjam',
            'Nama Barang',
            'Kode Barang',
            'Jumlah',
            'Tanggal Pinjam',
            'Tanggal Kembali',
            'Status',
            'Created at',
            'Updated at',
        ];
    }
}
