@extends('layout.table2')

@section('content')
<div class="card shadow mb-4 mx-auto border-bottom-primary card-primary" style="width: 50%">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold">Form Tambah Data</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="#">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Barang</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama">
                <div class="invalid-feedback">Masukan Nama Barang</div>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat">
                <div class="invalid-feedback">Masukan Alamat</div>
            </div>
            <div class="form-group">
                <label for="luas">Luas</label>
                <input type="text" class="form-control @error('luas') is-invalid @enderror" id="luas" name="luas">
                <div class="invalid-feedback">Masukan Luas</div>
            </div>

            <div class="form-group">
                <label for="tahun">Tahun Pengadaan</label>
                <input type="text" class="form-control @error('tahun') is-invalid @enderror" id="tahun" name="tahun">
                <div class="invalid-feedback">Masukan Merek Barang</div>
            </div>
            <div class="form-group">
                <label for="nilai">Nilai Perolehan</label>
                <input type="text" class="form-control @error('nilai') is-invalid @enderror" id="nilai" name="nilai">
                <div class="invalid-feedback">Masukan Nilai Perolehan</div>
            </div>
            <div class="form-group">
                <label for="namaopd">Nama OPD</label>
                <input type="text" class="form-control @error('namaopd') is-invalid @enderror" id="namaopd" name="namaopd">
                <div class="invalid-feedback">Masukan Nama OPD</div>
            </div>
            <div class="form-group">
                <label for="subopd">Nama sub - OPD</label>
                <input type="text" class="form-control @error('subopd') is-invalid @enderror" id="subopd" name="subopd">
                <div class="invalid-feedback">Masukan Nama sub - OPD</div>
            </div>
            <div class="form-group">
                <label for="subopd">Nama sub - OPD capslock</label>
                <input type="text" class="form-control @error('subopd') is-invalid @enderror" id="subopd" name="subopd">
                <div class="invalid-feedback">Masukan Nama sub - OPD capslock</div>
            </div>
            <div class="form-group">
                <label for="kota">Kab/Kota</label>
                <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota" name="kota">
                <div class="invalid-feedback">Masukan Kab/Kota</div>
            </div>
            <div class="form-group">
                <label for="asal">Asal Perolehan</label>
                <input type="text" class="form-control @error('asal') is-invalid @enderror" id="asal" name="asal">
                <div class="invalid-feedback">Masukan Asal Perolehan</div>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan">
                <div class="invalid-feedback">Masukan Keterangan</div>
            </div>
            <div class="form-group">
                <label for="kode">Kode Barang</label>
                <input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode" name="kode">
                <div class="invalid-feedback">Masukan Kode Barang</div>
            </div>
            <div class="form-group">
                <label for="jenis">Jenis Barang</label>
                <input type="text" class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis">
                <div class="invalid-feedback">Masukan Jenis Barang</div>
            </div>

            <button type="submit" class="btn btn-primary mt-1">Tambah Data</button>
        </form>
    </div>
</div>
@endsection