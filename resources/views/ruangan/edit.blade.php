@extends('layout.table2')

@section('content')

<div class="card shadow mb-4 mx-auto border-bottom-primary card-primary" style="width: 50%">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold">Form Edit Data</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('ruangan.update', $ruangan->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" value="{{ $ruangan->lokasi }}">
                <div class="invalid-feedback">Masukan Lokasi</div>
            </div>
            <div class="form-group">
                <label for="nama_lokasi">Nama Lokasi</label>
                <input type="text" class="form-control @error('nama_lokasi') is-invalid @enderror" id="nama_lokasi" name="nama_lokasi" value="{{ $ruangan->nama_lokasi }}">
                <div class="invalid-feedback">Masukkan Nama Lokasi</div>
            </div>

            <button type="submit" class="btn btn-primary mt-1">Submit</button>
        </form>
    </div>
</div>

@endsection