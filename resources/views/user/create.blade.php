@extends('layout.table2')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('vendor/sweetalert/sweetalert.all.js') }}">
<script src="{{ $cdn ?? asset('vendor/sweetalert/sweetalert.all.js')  }}"></script>

<div class="card shadow mb-4 mx-auto border-bottom-primary card-primary" style="width: 50%">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold">Form Tambah Data</h6>
    </div>
    <div class="card-body">
        <form method="post" action="{{ route('user.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="nip">NIP</label>
                <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ old('nip') }}">
                @error('nip')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}">
                @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
                <label for="level">Role</label>
                <select name="level" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="Kepala Bengkel - IOP">Kepala Bengkel - IOP</option>
                    <option value="Kepala Bengkel - TPTU">Kepala Bengkel - TPTU</option>
                    <option value="Kepala Bengkel - TEI">Kepala Bengkel - TEI</option>
                    <option value="Kepala Bengkel - TOI">Kepala Bengkel - TOI</option>
                    <option value="Kepala Bengkel - PFPT">Kepala Bengkel - PFPT</option>
                    <option value="Kepala Bengkel - SIJA">Kepala Bengkel - SIJA</option>
                    <option value="Kepala Bengkel - RPL">Kepala Bengkel - RPL</option>
                    <option value="Kepala Bengkel - TEDK">Kepala Bengkel - TEDK</option>
                    <option value="Kepala Bengkel - MEKA">Kepala Bengkel - MEKA</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-1">Tambah Data</button>
        </form>
    </div>
</div>
@include('sweetalert::alert')
@endsection