@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1 style="color: black">Tambah Testimoni</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('testimoni.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="nama" class="form-label" style="color: black; font-size: 20px">Nama</label>
                <input type="text" style="border-style: solid; border-width: 1px; border-color:black"
                    class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label" style="color: black; font-size: 20px">Foto</label>
                <input type="file" style="border-style: solid; border-width: 1px; border-color:black"
                    class="form-control" id="image" name="image">
            </div>
            <div class="mb-3">
                <label for="pekerjaan" class="form-label" style="color: black; font-size: 20px">Pekerjaan</label>
                <input type="text" style="border-style: solid; border-width: 1px; border-color:black"
                    class="form-control" id="pekerjaan" name="pekerjaan" required>
            </div>
            <div class="form-group">
                <label for="pesan" style="color: black; font-size: 20px">Pesan</label>
                <textarea class="form-control" style="border-style: solid; border-width: 1px; border-color:black" id="pesan"
                    name="pesan" rows="4"></textarea>
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label" style="color: black; font-size: 20px">Rating (1-5)</label>
                <input type="number" style="border-style: solid; border-width: 1px; border-color:black" name="rating" id="rating" class="form-control" min="1" max="5" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
