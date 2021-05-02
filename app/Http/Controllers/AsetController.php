<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\aset;
use App\ruangan;
use App\peminjaman;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class AsetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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

        $aset = aset::all();
        return view('aset.index', compact('aset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $create = aset::all();
        $ruangan = ruangan::all();
        $peminjaman = peminjaman::all();
        return view('aset.create', compact('create'), compact('ruangan'), compact('peminjaman'));
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
            'nama' => 'required',
            'kode' => 'required',
            'register' => 'required',
            'kib' => 'required',
            'lokasi' => 'required',
            'merk' => 'required',
            'tahun' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'nilai' => 'required',
            'akumulasi' => 'required',
            'keterangan' => 'required',
        ]);

        aset::create($request->all());
        return redirect()->route('aset.index')->withSuccessMessage('Data Aset Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(aset $aset)
    {
        return view('aset.detail', compact('aset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(aset $aset)
    {
        $edit = aset::all();
        $ruangan = ruangan::all();
        return view('aset.edit', compact('aset'), compact('ruangan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, aset $aset)
    {
        $request->validate([
            'nama' => 'required',
            'kode' => 'required',
            'register' => 'required',
            'kib' => 'required',
            'lokasi' => 'required',
            'merk' => 'required',
            'tahun' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'nilai' => 'required',
            'akumulasi' => 'required',
            'keterangan' => 'required',
        ]);

        $aset->update($request->all());
        return redirect()->route('aset.index')->withSuccessMessage('Data Aset Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(aset $aset)
    {
        $aset->delete();

        return redirect()->route('aset.index')
            ->withSuccessMessage('Data Aset Berhasil Dihapus');
    }
}
