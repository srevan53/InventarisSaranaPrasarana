@extends('layout.table2')

@section('content')
<div class="row">
  <div class="col-12 col-sm-6 col-md-3">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>{{ $peminjaman->count() }}</h3>

        <p>Transaksi</p>
      </div>
      <div class="icon">
        <i class="fas fa-book"></i>
      </div>
      <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
    </div>
  </div>

  <div class="col-12 col-sm-6 col-md-3">
    <!-- small box -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>{{ $ruangan->count() }}</h3>

        <p>Ruangan</p>
      </div>
      <div class="icon">
        <i class="fa fa-university"></i>
      </div>
      <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
    </div>
  </div>

  <div class="col-12 col-sm-6 col-md-3">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3>{{ $aset->count() }}</h3>

        <p>Jumlah Aset</p>
      </div>
      <div class="icon">
        <i class="fa fa-cubes"></i>
      </div>
      <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
    </div>
  </div>

  <div class="col-12 col-sm-6 col-md-3">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>{{ Auth::user()->count() }}</h3>

        <p>User</p>
      </div>
      <div class="icon">
        <i class="fas fa-user"></i>
      </div>
      <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
    </div>
  </div>

</div>

<!-- Data Tabel -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="row">
      <div class="col">
        <h5 class="m-0 font-weight-bold text-dark">Data Aset</h5>
      </div>
      <div class="col-auto">

      </div>
    </div>
  </div>

  <div class="card-body">
    <div class="table-responsive">

      <table id="dataTable" class="table table-bordered table-striped table-head-fixed text-nowrap" cellspacing="0">
        <thead>
          <tr>
            <th style="width: 10px">No</th>
            <th>Jenis Barang / Nama Barang</th>
            <th>Merk / Type</th>
            <th>Kode Barang</th>
            <th>Register</th>
            <th>Lokasi</th>
            <th>Jumlah</th>
            <th>Keterangan</th>


          </tr>
        </thead>
        <tbody>
          @foreach( $aset as $data )
          <tr class="data-row">
            <th scope="row" class="text-center">{{ $loop->iteration }}</th>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->merk }}</td>
            <td>{{ $data->kode }}</td>
            <td>{{ $data->register }}</td>
            <td class="text-nowrap"><a href="/ruangan/{{ $data->ruangan->id}}">{{ $data->lokasi }}</a></td>
            <td>{{ $data->jumlah }}</td>
            <td>{{ $data->keterangan }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
{{-- Table Transaksi --}}

@endsection