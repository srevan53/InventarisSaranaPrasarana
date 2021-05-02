<?php

namespace App\Http\Controllers;

use App\aset;
use Illuminate\Http\Request;
use App\kiba;
use App\kibc;
use App\kibd;

class KibController extends Controller
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
    public function kiba()
    {
        $kiba = kiba::all();
        return view('kib.kiba', compact('kiba'));
    }

    public function createa(){
        $createa = kiba::all();
        return view('kib.kiba-create', compact('createa'));
    }

    public function storea(Request $request)
    {   
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'luas' => 'required',
            'tahun' => 'required',
            'nilai' => 'required',
            'opd' => 'required',
            'sub_opd' => 'required',
            'sub_opd_caps' => 'required',
            'kota' => 'required',
            'asal' => 'required',
            'keterangan' => 'required',
            'kode' => 'required',
            'jenis' => 'required',
        ]);

        kiba::createa($request->all());
        return redirect()->route('kib.kiba')
            ->with('success', 'Data Aset Berhasil Ditambahkan');
        
    }
    //==========================================================
    // DATA KIB-B
    //==========================================================
    public function kibb()
    {
        $kibb = aset::where('kib', '=', 'KIB B')->get();
        return view('kib.kibb', compact('kibb'));
    }
    //==========================================================
    // DATA KIB-C
    //==========================================================
    public function kibc()
    {
        $kibc = kibc::all();
        return view('kib.kibc', compact('kibc'));
    }
    //==========================================================
    // DATA KIB-D
    //==========================================================
    public function kibd()
    {
        $kibd = kibd::all();
        return view('kib.kibd', compact('kibd'));
    }
    //==========================================================
    // DATA KIB-E
    //==========================================================
    public function kibe()
    {
        $kibe = aset::where('kib', '=', 'KIB E')->get();
        return view('kib.kibe', compact('kibe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

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
        return redirect()->route('aset.index')
            ->with('success', 'Data Aset Berhasil Ditambahkan');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
