<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Bukti Booking</title>
</head>
<body>
<div class="container">
@foreach ($cetaks as $cetak)
    <h1>Bukti Booking Hotel Hebat</h1>
    <table>
        <td colspan="6">
            -------------------------------------------------------------------------------------------
        </td>
        <tr>
            <td>Tanggal Booking</td>
            <td>{{ $cetak->created_at }}</td>
        </tr>
        <tr>
            <td>Nama Tamu:</td>
            <td>{{ $cetak->nama_tamu }}</td>
        </tr>
        <tr>
            <td>Nama Pemesan:</td>
            <td>{{ $cetak->nama_pemesan }}</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>{{ $cetak->email }}</td>
        </tr>
        <tr>
            <td>No HandPhone:</td>
            <td>{{ $cetak->no_hp }}</td>
        </tr>
        <tr>
            <td>Tanggal Check In:</td>
            <td>{{ $cetak->tgl_check_in }}</td>
        </tr>
        <tr>
            <td>Tanggal Check Out:</td>
            <td>{{ $cetak->tgl_check_out }}</td>
        </tr>
        <tr>
            <td>Tipe Kamar:</td>
            <td>{{ $cetak->tipe_kamar }}</td>
        </tr>
        <tr>
            <td>Jumlah Kamar:</td>
            <td>{{ $cetak->jumlah }}</td>
        </tr>
        <td colspan="6">
        -------------------------------------------------------------------------------------------
        </td>
        <tr>
            <td style = text-align:center;><strong>Simpan bukti ini dan berikan pada resepsionis</strong></td>
        </tr>
        <tr>
            <td colspan="6">
            -------------------------------------------------------------------------------------------
            </td>
        </tr>
    </table>
    @endforeach
    <script src="#" onload="window.print()"></script>
</div>
</body>
</html>