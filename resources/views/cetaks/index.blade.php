<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Cetak Bukti Booking</title>
</head>

<body>
    @foreach ($cetaks as $cetak)
    <h1>Bukti Booking Hotel Hebat</h1>
    <div class="card text-center border-info" style="width: 35rem;">
        <div class="card-body">
            <h5 class="card-title">Nama Tamu : {{ $cetak->nama_tamu }}</h5>
            <h5 class="card-title">Nama Pemesan: {{ $cetak->nama_pemesan }}</h5>
            <h5 class="card-title">No Handphone: {{ $cetak->no_hp }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Tanggal Booking: {{ $cetak->created_at }}</h6>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Tanggal Check In : {{ $cetak->tgl_check_in }}</li>
                <li class="list-group-item">Tanggal Check Out : {{ $cetak->tgl_check_out }}</li>
                <li class="list-group-item">Tipe Kamar : {{ $cetak->tipe_kamar }}</li>
                <li class="list-group-item">Jumlah Kamar : {{ $cetak->jumlah }}</li>
            </ul>
            <p class="card-text">Simpan bukti ini dan berikan pada resepsionis</p>
        </div>
    </div>
    @endforeach
    <script src="#" onload="window.print()"></script>
</body>

</html>