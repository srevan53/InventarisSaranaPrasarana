@extends('layout.table2')

@section('content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold">DATA KIB B - PERALATAN DAN MESIN</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped" cellspacing="0">
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
          @foreach( $kibb as $inv_b )
          <tr>
            <th scope="row" class="text-center">{{ $loop->iteration }}</th>
            <td>{{ $inv_b->nama }}</td>
            <td>{{ $inv_b->kode }}</td>
            <td>{{ $inv_b->register }}</td>
            <td class="text-nowrap">{{ $inv_b->lokasi }}</td>
            <td>{{ $inv_b->merk }}</td>
            <td>{{ $inv_b->tahun }}</td>
            <td>{{ $inv_b->jumlah }}</td>
            <td>Rp. {{ $inv_b->harga }}</td>
            <td>Rp. {{ $inv_b->nilai }}</td>
            <td>Rp. {{ $inv_b->akumulasi }}</td>
            <td>{{ $inv_b->keterangan }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection