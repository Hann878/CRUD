@extends('layout.app')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h3>Data Pasien</h3>
    <a href="/pasien/create" class="btn btn-primary">+ Tambah</a>
</div>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Keluhan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->umur }}</td>
            <td>{{ $d->keluhan }}</td>
            <td>
                <a href="/pasien/{{ $d->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

                <form action="/pasien/{{ $d->id }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection