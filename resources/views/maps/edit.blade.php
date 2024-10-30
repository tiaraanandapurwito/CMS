@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1 style="color: black">Edit Titik Lokasi</h1>

        <form action="{{ route('maps.update', $location->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nama Lokasi</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $location->name }}" required>
            </div>

            <div class="mb-3">
                <label for="latitude" class="form-label">Latitude</label>
                <input type="text" class="form-control" id="latitude" name="latitude" value="{{ $location->latitude }}" required>
            </div>

            <div class="mb-3">
                <label for="longitude" class="form-label">Longitude</label>
                <input type="text" class="form-control" id="longitude" name="longitude" value="{{ $location->longitude }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

