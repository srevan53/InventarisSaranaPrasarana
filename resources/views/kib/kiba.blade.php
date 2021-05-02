@extends('layout.table2')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col">
                <h6 class="m-0 font-weight-bold text-dark">DATA KIB A - TANAH</h6>
            </div>
            <div class="col-auto">

                {{--<a href="#" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Data
                    </span>
                </a>--}}

            </div>
        </div>
    </div>

  <div class="card-body">
    <div class="table-responsive">
      <table id="example1" class="table table-bordered table-striped" cellspacing="0">
        <thead class="thead text-nowrap">
          <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Alamat</th>
            <th>Luas</th>
            <th>Tahun Pengadaan</th>
            <th>Nilai Perolehan</th>
            <th>Nama OPD</th>
            <th>Nama sub - OPD</th>
            <th>Nama sub - OPD capslock</th>
            <th>Kab/Kota</th>
            <th>Asal Perolehan</th>
            <th>Keterangan</th>
            <th>Kode Barang</th>
            <th>Jenis Barang</th>
          </tr>
        </thead>
        <tbody>
          @foreach( $kiba as $inv_a )
          <tr>
            <th scope="row" class="text-center">{{ $loop->iteration }}</th>
            <td>{{ $inv_a->nama }}</td>
            <td>{{ $inv_a->alamat }}</td>
            <td>{{ $inv_a->luas }}</td>
            <td>{{ $inv_a->tahun }}</td>
            <td>{{ $inv_a->nilai }}</td>
            <td>{{ $inv_a->opd }}</td>
            <td>{{ $inv_a->sub_opd }}</td>
            <td>{{ $inv_a->sub_opd_caps }}</td>
            <td>{{ $inv_a->kota }}</td>
            <td>{{ $inv_a->asal }}</td>
            <td>{{ $inv_a->keterangan }}</td>
            <td>{{ $inv_a->kode }}</td>
            <td>{{ $inv_a->jenis }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection