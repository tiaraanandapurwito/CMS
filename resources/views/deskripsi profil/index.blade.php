@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Profil Perusahaan</h1>
        <a href="{{ route('deskripsi profil.create') }}" class="btn btn-primary">Masukkan Deskripsi</a>

        @if (session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif

        <table class="table mt-3">
            <thead>
                <tr>
                    <th style="width: 10px">ID</th>
                    <th style="width: 10px">Deskripsi</th>
                    <th style="width: 10px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($descriptions as $deskripsi)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $deskripsi->description }}</td>

                        <td>
                            <a href="{{ route('deskripsi profil.edit', $deskripsi->id) }}" class="btn btn-warning">Edit</a>
                            <form action="/admin/profilperusahaan/delete" method="POST"
                                style="display:inline;">
                                @csrf
                                <input type="hidden" name="id" value="{{ $deskripsi->id }}">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
