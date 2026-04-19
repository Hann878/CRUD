@extends('layout.app')
@section('content')
<div class="card card-outline card-primary">
    <div class="card-header d-flex align-items-center">
        <h5 class="mb-0">Data Siswa</h5>
        <a href="{{ route('student.create') }}" class="btn btn-primary btn-sm ms-auto">
            <i class="bi bi-plus-circle"></i> Tambah siswa
        </a>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                    <th scope="col">No Telp</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Subject ID</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student as $index => $data)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->umur }}</td>
                    <td>{{ $data->no_telp }}</td>
                    <td>{{ $data->Nisn }}</td>
                    <td>{{ $data->subject_id }}</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                        <form action="" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>      
        </table>
    </div>
</div>
@endsection
