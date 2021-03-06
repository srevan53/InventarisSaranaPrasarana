@extends('layout.table2')

@section('content')

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="row">
      <div class="col">
        <h6 class="m-0 font-weight-bold mb-2">DATA Ruang {{ $ruangan->lokasi }} / {{ $ruangan->nama_lokasi}}</h6>
      </div>
      <div class="col-auto">
        <a href="/aset/create" class="btn btn-sm btn-primary btn-icon-split">
          <span class="icon">
            <i class="fa fa-plus"></i>
          </span>
          <span class="text">
            Input Barang
          </span>
        </a>
      </div>
    </div>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table id="dataTable" class="table table-bordered table-striped" cellspacing="0">
        <thead class="thead text-nowrap">
          <tr>
            <th>No</th>
            <th>Jenis Barang/ Nama Barang</th>
            <th>Kode Barang</th>
            <th>Register</th>
            <th>Lokasi</th>
            <th>Merk/ Type</th>
            <th>Tahun Pengadaan</th>
            <th>Jumlah Barang</th>
            <th>Harga Satuan (Rp)</th>
            <th>Nilai Tercatat (Rp)</th>
            <th>Akumulasi Penyusutan (Rp)</th>
            <th>Keterangan</th>
          </tr>
        </thead>
        <tbody>
          @foreach( $aset as $inv )
          <tr>
            <th scope="row" class="text-center">{{ $loop->iteration }}</th>
            <td>{{ $inv->nama }}</td>
            <td>{{ $inv->kode }}</td>
            <td>{{ $inv->register }}</td>
            <td class="text-nowrap">{{ $inv->lokasi }}</td>
            <td>{{ $inv->merk }}</td>
            <td>{{ $inv->tahun }}</td>
            <td>{{ $inv->jumlah }}</td>
            <td>Rp. {{ $inv->harga }}</td>
            <td>Rp. {{ $inv->nilai }}</td>
            <td>Rp. {{ $inv->akumulasi }}</td>
            <td>{{ $inv->keterangan }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection