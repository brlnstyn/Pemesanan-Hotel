@extends('layout.master')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        <div class="pull-right"><a href="{{ route('rooms.create') }}" class="btn btn-primary">Create</a></div>
    </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Tipe Kamar</th>
                        <th>Jumlah Kamar</th>
                        <th>Image</th>
                        <th width="200px">Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Tipe Kamar</th>
                        <th>Fasilitas</th>
                        <th>Image</th>
                        <th width="200px">Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                @foreach ($rooms as $room)
                    <tr>
                        <td>{{ $room->tipe_kamar }}</td>
                        <td>{{ $room->fasilitas }}</td>
                        <td>
                            <img src="/image/{{ $room->image }}" width="100px">
                        </td>
                        <td>
                        <form  method="POST">
                            <a class="btn btn-primary" href="{{ route('rooms.edit',$room->id) }}">Edit</a>
                            <a class="btn btn-danger" href="{{ route('rooms.show',$room->id) }}">Lihat</a>
                        </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
{!! $rooms->links() !!}

@endsection