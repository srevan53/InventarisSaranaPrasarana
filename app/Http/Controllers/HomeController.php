<?php

namespace App\Http\Controllers;

use App\aset;
use App\peminjaman;
use App\ruangan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $aset = aset::all();
        $peminjaman = peminjaman::all();
        $ruangan = ruangan::all();
        return view('index', compact('aset', 'peminjaman', 'ruangan'));
    }
}
