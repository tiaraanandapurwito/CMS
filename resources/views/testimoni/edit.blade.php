@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1 style="color: black">Edit Testimoni</h1>

    <form action="{{ route('testimoni.update', $testimoni->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label" style="color: black; font-size: 20px">Nama</label>
            <input type="text" style="border-style: solid; border-width: 1px; border-color:black"
            class="form-control" id="nama" name="nama" value="{{ $testimoni->nama }}" required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label" style="color: black; font-size: 20px">Foto</label>
            <input type="file" style="border-style: solid; border-width: 1px; border-color:black"
            class="form-control" id="image" name="image">
        </div>
        
        <div class="mb-3">
            <label for="pekerjaan" class="form-label" style="color: black; font-size: 20px">Pekerjaan</label>
            <input type="text" style="border-style: solid; border-width: 1px; border-color:black"
            class="form-control" id="pekerjaan" name="pekerjaan" value="{{ $testimoni->pekerjaan }}" required>
        </div>

        <div class="mb-3">
            <label for="pesan" class="form-label" style="color: black; font-size: 20px">Pesan</label>
            <textarea class="form-control" style="border-style: solid; border-width: 1px; border-color:black"
            id="pesan" name="pesan" required>{{ $testimoni->pesan }}</textarea>
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label" style="color: black; font-size: 20px">Rating</label>
            <input type="number" style="border-style: solid; border-width: 1px; border-color:black"
            class="form-control" id="rating" name="rating" value="{{ $testimoni->rating }}" min="1" max="5" required>
        </div>


        <button type="submit" class="btn btn-primary">Update Testimoni</button>
    </form>
</div>
@endsection
