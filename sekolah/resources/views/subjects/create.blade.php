@extends('layout.app')
@section('content')
<div class="container mt-5">
    <h2>Tambah Subject</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('subjects.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="subject_name" class="form-label">Nama Subject</label>
            <input type="text" name="subject_name" class="form-control" id="subject_name" value="{{ old('subject_name') }}">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('subjects.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection