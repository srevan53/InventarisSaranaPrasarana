@extends('layout.table2')

@section('content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold">DATA KIB E - BUKU</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped" cellspacing="0">
        <thead class="thead text-nowrap">
          <tr>
            <th>No</th>
            <th>Jenis Barang / Nama Barang</th>
            <th>Kode Barang</th>
            <th>Register</th>
            <th>Lokasi</th>
            <th>Merk / Type</th>
            <th>Tahun Pengadaan</th>
            <th>Jumlah Barang</th>
            <th>Harga Satuan (Rp)</th>
            <th>Nilai Tercatat (Rp)</th>
            <th>Akumulasi Penyusutan (Rp)</th>
            <th>Keterangan</th>
          </tr>
        </thead>
        <tbody>
          @foreach( $kibe as $inv_e )
          <tr>
            <th scope="row" class="text-center">{{ $loop->iteration }}</th>
            <td>{{ $inv_e->nama }}</td>
            <td>{{ $inv_e->kode }}</td>
            <td>{{ $inv_e->register }}</td>
            <td class="text-nowrap">{{ $inv_e->lokasi }}</td>
            <td>{{ $inv_e->merk }}</td>
            <td>{{ $inv_e->tahun }}</td>
            <td>{{ $inv_e->jumlah }}</td>
            <td>Rp. {{ $inv_e->harga }}</td>
            <td>Rp. {{ $inv_e->nilai }}</td>
            <td>Rp. {{ $inv_e->akumulasi }}</td>
            <td>{{ $inv_e->keterangan }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection