<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Booking</title>
</head>
<body>
<div class="container">
    <h1>Bukti Booking Hotel Hebat</h1>
    <table>
        <td colspan="4">
            -------------------------------------------------------------------------
        </td>
        <tr>
            <td>Nama Tamu:</td>
            @foreach ($bookings as $booking)
            <td>{{ $booking->nama_tamu }}</td>
        </tr>
        <tr>
            <td>Nama Pemesan:</td>
            <td>{{ $booking->nama_pemesan }}</td>
        </tr>
        <tr>
            <td>Tanggal Check In:</td>
            <td>{{ $booking->tgl_check_in }}</td>
        </tr>
        <tr>
            <td>Tanggal Check Out:</td>
            <td>{{ $booking->tgl_check_out }}</td>
        </tr>
        <tr>
            <td>Tipe Kamar:</td>
            <td>{{ $booking->tipe_kamar }}</td>
        </tr>
        <tr>
            <td>Jumlah Kamar:</td>
            <td>{{ $booking->jumlah }}</td>
            @endforeach
        </tr>
        <td colspan="4">
            -------------------------------------------------------------------------
        </td>
    </table>
</div>
</body>
</html>