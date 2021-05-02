@extends('layout.table2')

@section('content')

<link rel="stylesheet" href="{{ asset('vendor/sweetalert/sweetalert.all.js') }}">

<script src="{{ $cdn ?? asset('vendor/sweetalert/sweetalert.all.js')  }}"></script>
<!-- Data Tabel -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="row">
      <div class="col">
        <h5 class="m-0 font-weight-bold text-dark">Data User</h5>
      </div>
      <div class="col-auto">
        @if (auth()->user()->level == "admin")
        <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary btn-icon-split">
          <span class="icon">
            <i class="fa fa-plus"></i>
          </span>
          <span class="text">
            Tambah Data
          </span>
        </a>
        @endif
      </div>
    </div>
  </div>

  <div class="card-body">
    <div class="table-responsive">

      <table id="dataTable" class="table table-bordered table-striped table-head-fixed text-nowrap" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIP</th>
            <th>E-mail</th>
            <th>Role</th>
            @if (auth()->user()->level == "admin")
            <th>Opsi</th>
            @endif
          </tr>
        </thead>
        <tbody>
          @foreach( $user as $data )
          <tr class="data-row">
            <th scope="row" class="text-center">{{ $loop->iteration }}</th>
            <td>{{ $data->name }}</td>
            <td>{{ $data->nip }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->level }}</td>
            @if (auth()->user()->level == "admin")
            <td>
              <form action="{{ route('user.destroy', $data->id) }}" method="POST">
                <!--<a class="btn btn-info btn-sm ml-2" href="{{ route('user.show',$data->id) }}">Show</a>-->
                <a href="{{ route('user.edit', $data->id) }}" class="btn btn-sm btn-success ml-2" style="width: 65px;">
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
            </td>
            @endif
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@include('sweetalert::alert')
@endsection