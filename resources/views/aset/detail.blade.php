@extends('layout.table2')

@section('content')

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h3 class="card-title mt-2 text-dark">Detail</h3>

      <div class="card-tools">
        <a href="/aset" class="btn btn-sm btn-success btn-icon-split mr-2">

          <span class="text">
            Kembali
          </span>
        </a>

      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12 order-2 order-md-1">
          <div class="row">
            <div class="col-12 col-sm-4">
              <div class="info-box bg-gradient-primary">
                <div class="info-box-content">
                  <span class="info-box-text text-center">Jenis Barang / Nama Barang</span>
                  <span class="info-box-number text-center mb-0">{{ $aset->nama }}</span>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="info-box bg-gradient-primary">
                <div class="info-box-content">
                  <span class="info-box-text text-center">Merk / Type</span>
                  <span class="info-box-number text-center mb-0">{{ $aset->merk }}</span>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="info-box bg-gradient-primary">
                <div class="info-box-content">
                  <span class="info-box-text text-center">Kode Barang</span>
                  <span class="info-box-number text-center mb-0">{{ $aset->kode }}</span>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="info-box bg-gradient-primary">
                <div class="info-box-content">
                  <span class="info-box-text text-center">Register</span>
                  <span class="info-box-number text-center mb-0">{{ $aset->register }}</span>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="info-box bg-gradient-primary">
                <div class="info-box-content">
                  <span class="info-box-text text-center">Lokasi</span>
                  <span class="info-box-number text-center mb-0">{{ $aset->lokasi }}</span>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="info-box bg-gradient-primary">
                <div class="info-box-content">
                  <span class="info-box-text text-center">Jumlah</span>
                  <span class="info-box-number text-center mb-0">{{ $aset->jumlah }}</span>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="info-box bg-gradient-primary">
                <div class="info-box-content">
                  <span class="info-box-text text-center">Keterangan</span>
                  <span class="info-box-number text-center mb-0">{{ $aset->keterangan }}</span>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>

@endsection