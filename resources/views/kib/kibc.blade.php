@extends('layout.table2')

@section('content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="row">
      <div class="col">
        <h6 class="m-0 font-weight-bold">DATA KIB C - GEDUNG DAN BANGUNAN</h6>
      </div>
      <div class="col-auto">
        {{--
        <button class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#create">
          <span class="icon">
            <i class="fa fa-plus"></i>
          </span>
          <span class="text">
            Tambah Data
          </span>
        </button>
        --}}
      </div>
    </div>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped" cellspacing="0">
        <thead class="thead text-nowrap">
          <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Alamat</th>
            <th>Luas</th>
            <th>Bulan Pengadaan</th>
            <th>Tahun Pengadaan</th>
            <th>Asal / Dokumen</th>
            <th>Umur Ekonomis</th>
            <th>Nama OPD</th>
            <th>Nama Sub-OPD</th>
            <th>Kab/Kota</th>
            <th>Keterangan</th>
          </tr>
        </thead>
        <tbody>
          @foreach( $kibc as $inv_c )
          <tr>
            <th scope="row" class="text-center">{{ $loop->iteration }}</th>
            <td>{{ $inv_c->kode }}</td>
            <td>{{ $inv_c->nama }}</td>
            <td>{{ $inv_c->alamat }}</td>
            <td>{{ $inv_c->luas }}</td>
            <td>{{ $inv_c->bulan }}</td>
            <td>{{ $inv_c->tahun }}</td>
            <td>{{ $inv_c->asal }}</td>
            <td>{{ $inv_c->umur }}</td>
            <td>{{ $inv_c->opd }}</td>
            <td>{{ $inv_c->sub_opd }}</td>
            <td>{{ $inv_c->kota }}</td>
            <td>{{ $inv_c->keterangan }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

{{--
<div id="create" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h4 class="modal-title">Form Input Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/kibc/store" method="POST">
          @csrf
          <div class="form-group">
            <label for="kode">Kode Barang</label>
            <input type="text" name="kode" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="nama">Nama Barang</label>
            <input type="text" name="nama" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="luas">Luas</label>
            <input type="text" name="luas" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="bulan">Bulan Pengadaan</label>
            <input type="text" name="bulan" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="tahun">Tahun Pengadaan</label>
            <input type="text" name="tahun" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="asal">Asal</label>
            <input type="text" name="asal" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="umur">Umur</label>
            <input type="text" name="umur" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="opd">OPD</label>
            <input type="text" name="opd" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="sub_opd">Sub OPD</label>
            <input type="text" name="sub_opd" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="kota">Kota</label>
            <input type="text" name="kota" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" name="keterangan" class="form-control" required>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
--}}

@endsection