@extends('layout.table2')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('vendor/sweetalert/sweetalert.all.js') }}">
<script src="{{ $cdn ?? asset('vendor/sweetalert/sweetalert.all.js')  }}"></script>

<!-- Data Tabel -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col">
                <h5 class="m-0 font-weight-bold text-dark">Data Aset</h5>
            </div>
            <div class="col-auto">

                <a href="{{ route('aset.create') }}" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Data
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
                        <th style="width: 10px">No</th>
                        <th>Jenis Barang / Nama Barang</th>
                        <th>Merk / Type</th>
                        <th>Kode Barang</th>
                        <th>Register</th>
                        <th>Lokasi</th>
                        <th>Jumlah</th>
                        <th>Keterangan</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $aset as $data )
                    <tr>
                        <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->merk }}</td>
                        <td>{{ $data->kode }}</td>
                        <td>{{ $data->register }}</td>
                        <td class="text-nowrap"><a href="/ruangan/{{ $data->ruangan->id}}">{{ $data->lokasi }}</a></td>
                        <td>{{ $data->jumlah }}</td>
                        <td>{{ $data->keterangan }}</td>
                        <td>
                            <div class="row">
                                <form action="{{ route('aset.destroy', $data->id) }}" method="POST">
                                    <a href="{{ route('aset.show',$data->id) }}" class="btn btn-sm btn-info ml-2"style="width: 70px;">
                                        <span class="icon text-white-10">
                                            <i class="fas fa-info-circle"></i>
                                        </span>
                                        <span class="text">Detail</span>
                                    </a>
                                    <a href="{{ route('aset.edit', $data->id) }}" class="btn btn-sm btn-success ml-2" style="width: 70px;">
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