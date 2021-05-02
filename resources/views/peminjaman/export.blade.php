<!DOCTYPE html>
<html>
<head>
    <title>Export PDF</title>

    <style type="text/css">

        * {
          font-family: sans-serif; /* Change your font family */
        }

        .content-table {
          border-collapse: collapse;
          margin: 25px 0;
          font-size: 0.9em;
          min-width: 400px;
          border-radius: 5px 5px 0 0;
          overflow: hidden;
          box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
          margin-left: 1cm;
          margin-right: 1cm;
        }

        .content-table thead tr {
          background-color: #009879;
          color: #ffffff;
          text-align: left;
          font-weight: bold;
        }

        .content-table th,
        .content-table td {
          padding: 12px 15px;
        }

        .content-table tbody tr {
          border-bottom: 1px solid #dddddd;
        }

        .content-table tbody tr:nth-of-type(even) {
          background-color: #f3f3f3;
        }

        .content-table tbody tr:last-of-type {
          border-bottom: 2px solid #009879;
        }

        .content-table tbody tr.active-row {
          font-weight: bold;
          color: #009879;
        }

    </style>
</head>
<body>
    <table class="content-table" width="100%">
        <thead>
            <tr>
            <th>No</th>
            <th>Nama Peminjam</th>
            <th>Nama Barang</th>
            <th>Kode Barang</th>
            <th>Jumlah Pinjam</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Status</th>
            <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($peminjaman as $pinjam)
                <tr>
                    <th>{{ $pinjam->id }}</th>
                    <th>{{ $pinjam->nama_peminjam }}</th>
                    <th>{{ $pinjam->nama_barang }}</th>
                    <th>{{ $pinjam->kode }}<</th>
                    <th>{{ $pinjam->jumlah_pinjam }}</th>
                    <th>{{ $pinjam->tgl_pinjam }}</th>
                    <th>{{ $pinjam->tgl_kembali }}</th>
                    <th>{{ $pinjam->status }}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>