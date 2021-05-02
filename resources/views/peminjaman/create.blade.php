@extends('layout.table2')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('vendor/sweetalert/sweetalert.all.js') }}">
<script src="{{ $cdn ?? asset('vendor/sweetalert/sweetalert.all.js')  }}"></script>

<div class="card shadow mb-4 mx-auto border-bottom-primary card-primary" style="width: 50%">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold">Form Tambah Data</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('peminjaman.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_peminjam">Nama Peminjam</label>
                <input type="text" class="form-control @error('nama_peminjam') is-invalid @enderror" id="nama_peminjam" name="nama_peminjam" value="{{ old('nama_peminjam') }}">
                @error('nama_peminjam')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
                <label for="lokasi">Nama Barang</label>
                <select class="custom-select" id="nama_barang" name="nama-barang">
                    <option selected>-- Pilih Barang --</option>
                    @foreach ($aset as $asets)
                    <option value="{{ $asets->nama_barang }}">{{ $asets->nama }}</option>
                    @endforeach
                </select>
            </div>

            {{--<div class="form-group">
                <label for="kode">Kode Barang</label>
                <input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode" name="kode" value="{{ $asets->kode }}">
            @error('nama_barang')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>--}}

    <div class="form-group">
        <label for="jumlah_pinjam">Jumlah Pinjam</label>
        <input type="number" class="form-control @error('jumlah_pinjam') is-invalid @enderror" id="jumlah_pinjam" name="jumlah_pinjam" value="{{ old('jumlah_pinjam') }}">
        @error('jumlah_pinjam')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="form-group">
        <label for="tgl_pinjam">Tanggal Pinjam</label>
        <input type="date" class="form-control @error('tgl_pinjam') is-invalid @enderror" id="tgl_pinjam" name="tgl_pinjam" value="{{ old('tgl_pinjam') }}">
        @error('tgl_pinjam')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="form-group">
        <label for="tgl_kembali">Tanggal Kembali</label>
        <input type="date" class="form-control @error('tgl_kembali') is-invalid @enderror" id="tgl_kembali" name="tgl_kembali" value="{{ old('tgl_kembali') }}">
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