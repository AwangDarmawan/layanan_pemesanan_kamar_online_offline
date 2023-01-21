<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <h1 class="text-center">Riwayat reservasi</h1>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>KODE RESERVASI</th>
                <th>TAGGAL CHECK-IN</th>
                <th>TANGGAL CHECK-OUT</th>
                <th>KAMAR</th>
                <th>TAMU</th>
                <th>LAMA MENGINAP</th>
                <th>TOTAL PEMBAYARAN</th>
            </tr>
        </thead>
        <tbody>
            @php $no=1; @endphp
            @foreach($reservasis as $reservasi)
            <tr>
                <td>{{ $reservasi->id }}</td>
                <td>{{ $reservasi->tgl_masuk }}</td>
                <td>{{ $reservasi->tgl_keluar }}</td>
                <td>{{ $reservasi->kamar->no_kamar }}</td>
                <td>{{ $reservasi->tamu->name}}</td>
                <td>{{ $reservasi->tamu->lama_menginap}}</td>
                <td>{{ $reservasi->total_pembayaran }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
