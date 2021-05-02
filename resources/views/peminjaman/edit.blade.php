@extends('layout.table2')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('vendor/sweetalert/sweetalert.all.js') }}">
<script src="{{ $cdn ?? asset('vendor/sweetalert/sweetalert.all.js')  }}"></script>

<div class="card shadow mb-4 mx-auto border-bottom-primary card-primary" style="width: 50%">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold">Form Edit Data</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('peminjaman.update', $peminjaman->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_peminjam">Nama Peminjam</label>
                <input type="text" class="form-control @error('nama_peminjam') is-invalid @enderror" id="nama_peminjam" name="nama_peminjam" value="{{ $peminjaman->nama_peminjam }}">
                @error('nama_peminjam')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang" name="nama_barang" value="{{ $peminjaman->nama_barang }}">
                @error('nama_barang')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="kode">Kode Barang</label>
                <input type="text" class="form-control @error('barang') is-invalid @enderror" id="barang" name="kode" value="{{ $peminjaman->kode }}">
                @error('kode')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
                <label for="jumlah_pinjam">Jumlah Pinjam</label>
                <input type="number" class="form-control @error('jumlah_pinjam') is-invalid @enderror" id="jumlah_pinjam" name="jumlah_pinjam" value="{{ $peminjaman->jumlah_pinjam }}">
                @error('jumlah_pinjam')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="tgl_pinjam">Tanggal Pinjam</label>
                <input type="date" class="form-control @error('tgl_pinjam') is-invalid @enderror" id="tgl_pinjam" name="tgl_pinjam" value="{{ $peminjaman->tgl_pinjam }}">
                @error('tgl_pinjam')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="tgl_kembali">Tanggal Kembali</label>
                <input type="date" class="form-control @error('tgl_kembali') is-invalid @enderror" id="tgl_kembali" name="tgl_kembali" value="{{ $peminjaman->tgl_kembali }}">
                @error('tgl_kembali')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control">
                    <option value="Belum Dikembalikan">Belum Dikembalikan</option>
                    <option value="Dikembalikan">Dikembalikan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-1">Tambah Data</button>
        </form>
    </div>
</div>
@include('sweetalert::alert')
@endsection