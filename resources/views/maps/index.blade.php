@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1 style="color: black">Daftar Titik Lokasi</h1>
        <a href="{{ route('maps.create') }}" class="btn btn-primary">Tambah Titik Lokasi</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Lokasi</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($locations as $index => $location)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $location->name }}</td>
                        <td>{{ $location->latitude }}</td>
                        <td>{{ $location->longitude }}</td>
                        <td>
                            <a href="{{ route('maps.edit', $location) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('maps.destroy', $location) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
