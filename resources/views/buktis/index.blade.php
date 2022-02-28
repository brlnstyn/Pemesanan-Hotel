<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Booking</title>
</head>
<body>
<div class="container">
@foreach ($buktis as $bukti)
    <h1>Bukti Booking Hotel Hebat</h1>
    <table>
        <td colspan="6">
            -------------------------------------------------------------------------------------------
        </td>
        <tr>
            <td>Tanggal Booking</td>
            <td>{{ $bukti->created_at }}</td>
        </tr>
        <tr>
            <td>Nama Tamu:</td>
            <td>{{ $bukti->nama_tamu }}</td>
        </tr>
        <tr>
            <td>Nama Pemesan:</td>
            <td>{{ $bukti->nama_pemesan }}</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>{{ $bukti->email }}</td>
        </tr>
        <tr>
            <td>No HandPhone:</td>
            <td>{{ $bukti->no_hp }}</td>
        </tr>
        <tr>
            <td>Tanggal Check In:</td>
            <td>{{ $bukti->tgl_check_in }}</td>
        </tr>
        <tr>
            <td>Tanggal Check Out:</td>
            <td>{{ $bukti->tgl_check_out }}</td>
        </tr>
        <tr>
            <td>Tipe Kamar:</td>
            <td>{{ $bukti->tipe_kamar }}</td>
        </tr>
        <tr>
            <td>Jumlah Kamar:</td>
            <td>{{ $bukti->jumlah }}</td>
        </tr>
        <td colspan="6">
        -------------------------------------------------------------------------------------------
        </td>
        <tr>
            <td style = text-align:center;><strong>Simpan bukti ini dan berikan pada resepsionis</strong></td>
        </tr>
        <tr>
            <td>
            <a href="{{ route('cetaks.index') }}" target="_blank" style="text-align:center;">Cetak</a>
            <a href="{{ route('bookings.index') }}" style="text-align:center;">Kembali</a>
            </td>
        </tr>
        <tr>
            <td colspan="6">
            -------------------------------------------------------------------------------------------
            </td>
        </tr>
    </table>
    @endforeach
</div>
</body>
</html>