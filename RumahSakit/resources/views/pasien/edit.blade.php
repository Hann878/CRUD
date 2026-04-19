@extends('layout.app')

@section('content')

<h3>Edit Pasien</h3>

<form action="/pasien/{{ $data->id }}" method="POST" class="card p-4">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $data->nama }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Umur</label>
        <input type="number" name="umur" value="{{ $data->umur }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control">{{ $data->alamat }}</textarea>
    </div>

    <div class="mb-3">
        <label>Keluhan</label>
        <input type="text" name="keluhan" value="{{ $data->keluhan }}" class="form-control">
    </div>

    <button class="btn btn-primary">Update</button>
    <a href="/pasien" class="btn btn-secondary">Kembali</a>
</form>

@endsection