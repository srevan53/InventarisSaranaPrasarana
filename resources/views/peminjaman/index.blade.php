@extends('layout.table2')

@section('content')

<link rel="stylesheet" href="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
<script src="{{ $cdn ?? asset('vendor/sweetalert/sweetalert.all.js')  }}"></script>

<!-- Data Tabel -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="row">
      <div class="col">
        <h5 class="m-0 font-weight-bold text-dark">Data Peminjaman</h5>
      </div>
      <div class="col-auto">

        <a href="{{ route('peminjaman.create') }}" class="btn btn-sm btn-primary btn-icon-split">
          <span class="icon">
            <i class="fa fa-plus"></i>
          </span>
          <span class="text">
            Tambah Data
          </span>
        </a>

        <a href="/exportExcel" class="btn btn-sm btn-info btn-icon-split ml-2">
          <span class="icon">
            <i class="fa fa-download"></i>
          </span>
          <span class="text">
            Export
          </span>
        </a>

      </div>
    </div>
  </div>

  <div class="card-body">
    <div class="table-responsive">

      <table id="dataTable" class="table table-bordered table-striped table-head-fixed text-nowrap" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Peminjam</th>
            <th>Nama Barang</th>
            <th>Jumlah Pinjam</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Status</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($peminjaman as $pinjam)
          <tr class="data-row">
            <th scope="row" class="text-center">{{ $loop->iteration }}</th>
            <td>{{ $pinjam->nama_peminjam }}</td>
            <td>{{ $pinjam->nama_barang }}</td>
            <td>{{ $pinjam->jumlah_pinjam }}</td>
            <td>{{ $pinjam->tgl_pinjam }}</td>
            <td>{{ $pinjam->tgl_kembali }}</td>
            <td>{{ $pinjam->status }}</td>
            <td>
              <div class="row">
              <form action="{{ route('peminjaman.destroy', $pinjam->id) }}" method="POST">
                <a href="{{ route('peminjaman.edit', $pinjam->id) }}" class="btn btn-sm btn-success ml-2" style="width: 70px;">
                  <span class="icon text-white-10">
                    <i class="fas fa-pencil-alt"></i>
                  </span>
                  <span class="text">Edit</span>
                </a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger ml-2" style="width: 70px;">
                  <span class="icon text-white-10">
                    <i class="fas fa-trash-alt"></i>
                  </span>
                  <span class="text">Hapus</span>
                </button>
              </form>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@include('sweetalert::alert')
@endsection