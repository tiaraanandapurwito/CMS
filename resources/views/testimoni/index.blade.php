@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1 style="color: black">Testimoni</h1>
        <a href="/admin/testimoni/create" class="btn btn-primary">Masukkan Testimoni</a>
        
{{-- @if (session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif --}}

        <table class="table mt-3">
            <thead>
                <tr>
                    <th style="width: 3px">ID</th>
                    <th style="width: 3px">Nama</th>
                    <th style="width: 3px">Foto</th>
                    <th style="width: 3px">Pekerjaan</th>
                    <th style="width: 3px">Pesan</th>
                    <th style="width: 3px">Rating</th>
                    <th style="width: 3px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($testimonis as $index => $testimoni)
                    <tr>
                        <td>{{ $index + 1 }}</td> <!-- Menampilkan urutan berdasarkan indeks -->
                        <td>{{ $testimoni->nama }}</td>
                        <td>
                            @if ($testimoni->image)
                                <img src="{{ asset('storage/' . $testimoni->image) }}" width="50" alt="Foto">
                            @endif
                        </td>
                        <td>{{ $testimoni->pekerjaan }}</td>
                        <td>{{ $testimoni->pesan }}</td>
                        <td>{{ $testimoni->rating }}</td>
                        <td>
                            <a href="{{ route('testimoni.edit', $testimoni->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('testimoni.delete', $testimoni->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
