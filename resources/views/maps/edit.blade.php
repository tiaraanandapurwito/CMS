@extends('layouts.dashboard')
@section('title', 'Dashboard Admin I Maps GarudaLink')

@section('content')
    <div class="container">
        <h1 style="color: black">Edit Titik Lokasi</h1>

        <form action="{{ route('maps.update', $location->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label" style="color: black; font-size: 20px">Nama Lokasi</label>
                <input type="text" style="border-style: solid; border-width: 1px; border-color:black"
                class="form-control" id="name" name="name" value="{{ old('name', $location->name) }}" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="latitude" class="form-label" style="color: black; font-size: 20px">Latitude</label>
                <input type="text" style="border-style: solid; border-width: 1px; border-color:black"
                class="form-control" id="latitude" name="latitude" value="{{ old('latitude', $location->latitude) }}" required>
                @error('latitude')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="longitude" class="form-label" style="color: black; font-size: 20px">Longitude</label>
                <input type="text" style="border-style: solid; border-width: 1px; border-color:black"
                class="form-control" id="longitude" name="longitude" value="{{ old('longitude', $location->longitude) }}" required>
                @error('longitude')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="status" class="form-label" style="color: black; font-size: 20px">Status</label>
                <select class="form-select" style="border-style: solid; border-width: 1px; border-color:black"
                id="status" name="status" required>
                    <option value="active" {{ old('status', $location->status) == 'active' ? 'selected' : '' }}>Aktif</option>
                    <option value="inactive" {{ old('status', $location->status) == 'inactive' ? 'selected' : '' }}>Perencanaan</option>
                    <option value="maintenance" {{ old('status', $location->status) == 'maintenance' ? 'selected' : '' }}>Tidak Bisa Dipasang</option>
                </select>
                @error('status')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="color" class="form-label" style="color: black; font-size: 20px">Pilih Warna</label>
                <select class="form-select" style="border-style: solid; border-width: 1px; border-color:black"
                id="color" name="color" required>
                    <option value="red" {{ old('color', $location->color) == 'red' ? 'selected' : '' }}>Merah</option>
                    <option value="green" {{ old('color', $location->color) == 'green' ? 'selected' : '' }}>Hijau</option>
                    <option value="blue" {{ old('color', $location->color) == 'blue' ? 'selected' : '' }}>Biru</option>
                </select>
                @error('color')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script>
        document.getElementById('status').addEventListener('change', function () {
            const colorSelect = document.getElementById('color');
            switch (this.value) {
                case 'active':
                    colorSelect.value = 'green';
                    break;
                case 'inactive':
                    colorSelect.value = 'blue';
                    break;
                case 'maintenance':
                    colorSelect.value = 'red';
                    break;
            }
        });

        // Set the initial color based on the current status value
        window.addEventListener('load', function () {
            const statusValue = document.getElementById('status').value;
            const colorSelect = document.getElementById('color');
            if (statusValue === 'active') {
                colorSelect.value = 'green';
            } else if (statusValue === 'inactive') {
                colorSelect.value = 'blue';
            } else if (statusValue === 'maintenance') {
                colorSelect.value = 'red';
            }
        });
    </script>
@endsection
