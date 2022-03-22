@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-danger" href="{{ route('facilities.index') }}">Back</a>
        </div>
    </div>
</div>
<br>
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('facilities.update', $facility->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Fasilitas</strong>
                <input type="text" name="nama_fasilitas" class="form-control" placeholder="Nama Fasilitas" value="{{$facility->nama_fasilitas}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan</strong>
                <textarea name="keterangan" class="form-control">{{$facility->keterangan}}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
            <div class="form-group">
                <strong>Image</strong>
                <input type="file" name="image" class="form-control" placeholder="Image" value="{{$facility->image}}">
                <img src="/image/{{ $facility->image }}" width="300px">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection