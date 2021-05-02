@extends('layout.table2')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('vendor/sweetalert/sweetalert.all.js') }}">
</script>
<script src="{{ $cdn ?? asset('vendor/sweetalert/sweetalert.all.js')  }}"></script>

<div class="card shadow mb-4 mx-auto border-bottom-primary card-primary" style="width: 50%">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold">Form Change Password</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('password.edit') }}">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="old_password">Old Password</label>
                <input type="password" class="form-control @error('old_password') is-invalid @enderror" id="old_password" name="old_password">
                @error('old_password')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation">
                @error('password_confirmation')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <button type="submit" class="btn btn-primary mt-1">Submit</button>
        </form>
    </div>
</div>
@include('sweetalert::alert')
@endsection