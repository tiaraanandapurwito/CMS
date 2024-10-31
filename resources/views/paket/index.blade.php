@extends('layouts.dashboard')

@section('content')
    @csrf
    <div class="container">
        <h1 style="color: black">Paket</h1>
        <a href="{{ route('paket.create') }}" class="btn btn-primary">Masukkan Paket Internet</a>

        {{-- @if (session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif --}}

    <table class="table mt-3">
        <thead>
            <tr>
                <th style="width: 3px">ID</th>
                <th style="width: 3px">Nama Paket</th>
                <th style="width: 3px">Harga</th>
                <th style="width: 3px">Deskripsi</th>
                <th style="width: 3px">Warna Paket</th>
                <th style="width: 3px">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pakets as $index => $paket)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $paket->nama_paket }}</td>
                <td>Rp {{ number_format($paket->harga, 2) }}</td>
                <td>{{ $paket->deskripsi }}</td>
                <td><div style="width: 20px; height: 20px; background-color: {{ $paket->warna_paket }};"></div></td>
                <td>
                    <a href="{{ route('paket.edit', $paket) }}" class="btn btn-warning">Edit</a>
                    <form action="/admin/paket/{{ $paket->id }}/delete" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </div>
</form>
@endsection
