@extends('layout.app')

@section('content')

<h3>Tambah Pasien</h3>

<form action="/pasien" method="POST" class="card p-4">
    @csrf

    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control">
    </div>

    <div class="mb-3">
        <label>Umur</label>
        <input type="number" name="umur" class="form-control">
    </div>

    <div class="mb-3">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>Keluhan</label>
        <input type="text" name="keluhan" class="form-control">
    </div>

    <button class="btn btn-success">Simpan</button>
    <a href="/pasien" class="btn btn-secondary">Kembali</a>
</form>

@endsection