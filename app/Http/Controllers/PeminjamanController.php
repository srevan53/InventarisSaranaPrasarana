<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\peminjaman;
use App\aset;
use DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Exports\PeminjamanExport;
use Maatwebsite\Excel\Facades\Excel;
use BBarryvdh\DomPDF\Facade;
use PDF;

class PeminjamanController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session('success_message')) {
            alert()->success('Success', session('success_message'))->autoClose(6000);;
        }

        $peminjaman = peminjaman::all();
        return view('peminjaman.index', compact('peminjaman'));
    }

    public function exportExcel()
    {
        return Excel::download(new PeminjamanExport, 'Transaksi.xlsx');
    }

    public function exportPDF()
    {
        $peminjaman = peminjaman::all();
        $pdf = PDF::loadView('peminjaman.export', ['peminjaman' => $peminjaman]);
        return $pdf->download('transaksi.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $create = peminjaman::all();
        $aset = aset::all();
        return view('peminjaman.create', compact('create'), compact('aset'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_peminjam' => 'required',
            'nama_barang' => 'required',
            'jumlah_pinjam' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
            'status' => 'required',
        ]);

        peminjaman::create($request->all());
        return redirect()->route('peminjaman.index')->withSuccessMessage('Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(peminjaman $peminjaman)
    {
        return view('peminjaman.edit', compact('peminjaman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, peminjaman $peminjaman)
    {
        $request->validate([
            'nama_peminjam' => 'required',
            'nama_barang' => 'required',
            'jumlah_pinjam' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
            'status' => 'required',
        ]);

        $peminjaman->update($request->all());

        return redirect()->route('peminjaman.index')
            ->withSuccessMessage('Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(peminjaman $peminjaman)
    {
        $peminjaman->delete();

        return redirect()->route('peminjaman.index')
            ->withSuccessMessage('Data Berhasil Dihapus');
    }
}
