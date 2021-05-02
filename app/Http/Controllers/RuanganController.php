<?php

namespace App\Http\Controllers;

use App\aset;
use Illuminate\Http\Request;
use App\ruangan;
use App\Exports\RuanganExport;
use App\Imports\RuanganImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class RuanganController extends Controller
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
        if (session ('success_message')) {
            alert()->success('Success', session('success_message'))->autoClose(6000);;
        }

        $ruangan = ruangan::all();
        return view('ruangan.index', compact('ruangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'lokasi' => 'required',
            'nama_lokasi' => 'required',
        ]);

        ruangan::create($request->all());
        return redirect()->route('ruangan.index')->withSuccessMessage('Data Ruangan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ruangan $ruangan)
    {
        $aset = aset::where('lokasi', '=', $ruangan->lokasi)->get();
        return view('ruangan.show', compact('ruangan'), compact('aset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ruangan $ruangan)
    {
        $edit = ruangan::all();
        return view('ruangan.edit', compact('ruangan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ruangan $ruangan)
    {
        $request->validate([
            'lokasi' => 'required',
            'nama_lokasi' => 'required',
        ]);

        $ruangan->update($request->all());
        return redirect()->route('ruangan.index')->withSuccessMessage('Data Ruangan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ruangan $ruangan)
    {
        $ruangan->delete();

        return redirect()->route('ruangan.index')
            ->withSuccessMessage('Data Ruangan Berhasil Dihapus');
    }

    public function export()
    {
        return Excel::download(new RuanganExport, 'ruangan.xlsx');
    }

    public function import()
    {
        Excel::import(new RuanganImport, request()->file('file'));
        return redirect()->route('ruangan.index');
    }

}
