@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1 style="color: black">Tambah Titik Lokasi</h1>

        <form action="{{ route('maps.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label" style="color: black; font-size: 20px">Nama Lokasi</label>
                <input type="text" class="form-control" id="name" name="name" required
                       style="border-style: solid; border-width: 1px; border-color:black">
            </div>

            <div class="mb-3">
                <label for="latitude" class="form-label" style="color: black; font-size: 20px">Latitude</label>
                <input type="text" class="form-control" id="latitude" name="latitude" required
                       style="border-style: solid; border-width: 1px; border-color:black">
            </div>

            <div class="mb-3">
                <label for="longitude" class="form-label" style="color: black; font-size: 20px">Longitude</label>
                <input type="text" class="form-control" id="longitude" name="longitude" required
                       style="border-style: solid; border-width: 1px; border-color:black">
            </div>

            <button type="submit" class="btn btn-primary">Tambah Lokasi</button>
        </form>
    </div>
@endsection
