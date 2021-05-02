@extends('layout.table2')

@section('content')
<div class="card shadow mb-4 mx-auto border-bottom-primary card-primary" style="width: 50%">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold">Form Edit Data</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('aset.update', $aset->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama Barang</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $aset->nama }}">
                <div class="invalid-feedback">Masukan Nama Barang</div>
            </div>
            <div class="form-group">
                <label for="kode">Kode Barang</label>
                <input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode" name="kode" value="{{ $aset->kode }}">
                <div class="invalid-feedback">Masukan Kode Barang</div>
            </div>
            <div class="form-group">
                <label for="register">Nomor Registrasi Barang</label>
                <input type="text" class="form-control @error('register') is-invalid @enderror" id="register" name="register" value="{{ $aset->register }}">
                <div class="invalid-feedback">Masukan Nomor Registrasi Barang</div>
            </div>
            <div class="form-group">
                <label for="kib">Jenis KIB</label>
                <select class="form-control" id="" name="kib">
                    <option selected value="{{ $aset->kib }}">{{ $aset->kib }}</option>
                    <option value="KIB E">KIB E</option>
                </select>
            </div>

            <div class="form-group">
                <label for="lokasi">Lokasi Barang</label>
                <select class="form-control" id="" name="lokasi">
                    <option selected value="{{ $aset->lokasi }}">{{ $aset->lokasi }}</option>
                    @foreach ($ruangan as $ruang)
                    <option value="{{ $ruang->id }}">{{ $ruang->lokasi }} / {{ $ruang->nama_lokasi }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="merk">Merek Barang</label>
                <input type="text" class="form-control @error('merk') is-invalid @enderror" id="merk" name="merk" value="{{ $aset->merk }}">
                <div class="invalid-feedback">Masukan Merek Barang</div>
            </div>
            <div class="form-group">
                <label for="tahun">Tahun Pengadaan Barang</label>
                <input type="text" class="form-control @error('tahun') is-invalid @enderror" id="tahun" name="tahun" value="{{ $aset->tahun }}">
                <div class="invalid-feedback">Masukan Tahun Pengadaan Barang</div>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah Barang</label>
                <input type="number" maxlength="4" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" value="{{ $aset->jumlah }}">
                <div class="invalid-feedback">Masukan Jumlah Barang</div>
            </div>
            <div class="form-group">
                <label for="harga">Harga Satuan Barang</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp.</span>
                    </div>
                    <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ $aset->harga }}">
                    <div class="invalid-feedback">Masukan Harga Barang</div>
                </div>
            </div>
            <div class="form-group">
                <label for="nilai">Nilai Tercatat Barang</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp.</span>
                    </div>
                    <input type="number" class="form-control @error('nilai') is-invalid @enderror" id="nilai" name="nilai" value="{{ $aset->nilai }}">
                    <div class="invalid-feedback">Masukan Nilai Tercatat Barang</div>
                </div>
            </div>
            <div class="form-group">
                <label for="akumulasi">Akumulasi Penyusutan Barang</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp.</span>
                    </div>
                    <input type="number" class="form-control @error('akumulasi') is-invalid @enderror" id="akumulasi" name="akumulasi" value="{{ $aset->akumulasi }}">
                    <div class="invalid-feedback">Masukan Akumulasi Penyusutan Barang</div>
                </div>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <select class="form-control" id="" name="keterangan" required>
                    <option selected value="{{ $aset->keterangan }}">{{ $aset->keterangan }}</option>
                    <option value="RUSAK BERAT">RUSAK BERAT</option>
                    <option value="RUSAK RINGAN">RUSAK RINGAN</option>
                    <option value="BARANG TIDAK ADA">BARANG TIDAK ADA</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-1">Tambah Data</button>
        </form>
    </div>
</div>
@endsection