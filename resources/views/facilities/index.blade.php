@extends('layout.master')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        <div class="text-right"><a href="{{ route('facilities.create') }}" class="btn btn-primary">Create</a></div>
    </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Nama Fasilitas</th>
                        <th>Keterangan</th>
                        <th>Image</th>
                        <th width="200px">Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nama Fasilitas</th>
                        <th>Keterangan</th>
                        <th>Image</th>
                        <th width="200px">Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                @foreach ($facilities as $facility)
                    <tr>
                        <td>{{ $facility->nama_fasilitas }}</td>
                        <td>{{ $facility->keterangan }}</td>
                        <td>
                            <img src="/image/{{ $facility->image }}" width="100px">
                        </td>
                        <td>
                        <form  method="POST">
                            <a class="btn btn-primary" href="{{ route('facilities.edit',$facility->id) }}">Edit</a>
                            <a class="btn btn-primary" href="{{ route('facilities.show',$facility->id) }}">Lihat</a>
                        </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
{!! $facilities->links() !!}

@endsection