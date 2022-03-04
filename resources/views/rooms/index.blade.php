@extends('layout.master')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        <div class="text-right"><a href="{{ route('rooms.create') }}" class="btn btn-primary">Create</a></div>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Tipe Kamar</th>
                    <th>Jumlah Kamar</th>
                    <th>Harga</th>
                    <th>Image</th>
                    <th width="200px">Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Tipe Kamar</th>
                    <th>Jumlah Kamar</th>
                    <th>Harga</th>
                    <th>Image</th>
                    <th width="350px">Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($rooms as $room)
                <tr>
                    <td>{{ $room->tipe_kamar }}</td>
                    <td>{{ $room->jumlah_kamar }}</td>
                    <td>{{ $room->harga }}</td>
                    <td>
                        <img src="/image/{{ $room->image }}" width="100px">
                    </td>
                    <td>
                        <form action="{{ route('rooms.destroy',$room->id) }}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{ route('rooms.edit',$room->id) }}">Edit</a>
                            <a class="btn btn-success btn-sm" href="{{ route('rooms.show',$room->id) }}">Lihat</a>
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {!! $rooms->links() !!}

    @endsection