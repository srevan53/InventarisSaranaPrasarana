@extends('layout.table2')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('vendor/sweetalert/sweetalert.all.js') }}">
</script>
<script src="{{ $cdn ?? asset('vendor/sweetalert/sweetalert.all.js')  }}"></script>

<div class="card shadow mb-4 mx-auto border-bottom-primary">
  <div class="card-header py-3">
    <div class="row">
      <div class="col">
        <h5 class="m-0 font-weight-bold text-dark">Data Ruangan</h5>
      </div>
      <div class="col-auto">

        <button class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#create">
          <span class="icon">
            <i class="fa fa-plus"></i>
          </span>
          <span class="text">
            Tambah Data
          </span>
        </button>

        {{--<div class="btn-group ml-2">
          <button type="button" class="btn btn-info btn-sm ">
            <span class="icon">
              <i class="fa fa-download"></i>
            </span>
            <span class="text">Export</span>
          </button>
          <button type="button" class="btn btn-info dropdown-toggle dropdown-icon btn-sm" data-toggle="dropdown">
          </button>
          <div class="dropdown-menu" role="menu">
            <a class="dropdown-item" href="#">PDF</a>
            <a class="dropdown-item" href="/export">XLS</a>
          </div>
        </div>--}}

        {{--
        <button class="btn btn-sm btn-info btn-icon-split ml-2" data-toggle="modal" data-target="#import">
          <span class="icon">
            <i class="fa fa-download"></i>
          </span>
          <span class="text">
            Import XLS
          </span>
        </button>
        --}}
      </div>
    </div>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table id="dataTable" class="table table-bordered table-striped" cellspacing="0">
        <thead class="thead text-nowrap">
          <tr>
            <th style="width: 10px">No</th>
            <th>Kode Ruangan</th>
            <th>Nama Ruangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach( $ruangan as $ruang )
          <tr>
            <th scope="row" class="text-center">{{ $ruang->id }}</th>
            <td>{{ $ruang->lokasi }}</td>
            <td>{{ $ruang->nama_lokasi }}</td>
            <td>
              <div class="row">
                <form action="{{ route('ruangan.destroy', $ruang->id) }}" method="POST">
                  <!--
                  <a href="/ruangan/{{ $ruang->id }}" class="btn btn-info btn-circle">
                  <i class="fas fa-info-circle"></i>
                  </a>
                  -->
                  <a href="/ruangan/{{ $ruang->id }}" class="btn btn-sm btn-info btn-icon-split ml-2" style="width: 70px;">
                    <span class="icon text-white-10">
                      <i class="fas fa-info-circle"></i>
                    </span>
                    <span class="text">Lihat</span>
                  </a>

                  <a href="{{ route('ruangan.edit', $ruang->id) }}" class="btn btn-sm btn-success ml-2" style="width: 70px;">
                    <span class="icon text-white-10">
                      <i class="fas fa-pencil-alt"></i>
                    </span>
                    <span class="text">Edit</span>
                  </a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger ml-2">
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

<div id="create" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h4 class="modal-title">Masukkan Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('ruangan.store') }}" method="POST">
          @csrf

          <div class="form-group">
            <label for="lokasi">Kode Ruangan</label>
            <input type="text" name="lokasi" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="lokasi">Nama Ruangan</label>
            <input type="text" name="nama_lokasi" class="form-control" required>
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

<!-- Modal Import -->
{{--<div class="modal fade" id="import" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Import XLS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="modal-body">
  <div class="form-group">
    <input type="file" name="file" required>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Import</button>
</div>
</form>
</div>
</div>
</div>--}}

@include('sweetalert::alert')
@endsection