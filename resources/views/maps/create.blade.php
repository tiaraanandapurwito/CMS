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

            <div class="mb-3">
                <label for="status" class="form-label" style="color: black; font-size: 20px">Status</label>
                <select class="form-select" id="status" name="status" required
                        style="border-style: solid; border-width: 1px; border-color:black">
                    <option value="active">Aktif</option>
                    <option value="inactive">Perencanaan</option>
                    <option value="maintenance">Tidak bisa dipasang</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="color" class="form-label" style="color: black; font-size: 20px">Warna</label>
                <select class="form-select" id="color" name="color" required
                        style="border-style: solid; border-width: 1px; border-color:black">
                    <option value="green">Hijau</option>
                    <option value="blue">Biru</option>
                    <option value="red">Merah</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Lokasi</button>
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
    </script>
@endsection
