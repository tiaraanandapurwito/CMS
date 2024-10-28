@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1 style="color: black">Tambah Testimoni</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('testimoni.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label" style="color: black; font-size: 20px">Nama</label>
            <input type="text" style="border-style: solid; border-width: 1px; border-color:black" name="name" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="job" class="form-label" style="color: black; font-size: 20px">Pekerjaan</label>
            <input type="text" style="border-style: solid; border-width: 1px; border-color:black" name="job" id="job" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label" style="color: black; font-size: 20px">Pesan</label>
            <textarea name="message" style="border-style: solid; border-width: 1px; border-color:black" id="message" class="form-control" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label" style="color: black; font-size: 20px">Rating (1-5)</label>
            <input type="number" style="border-style: solid; border-width: 1px; border-color:black" name="rating" id="rating" class="form-control" min="1" max="5" required>
        </div>

        <button type="submit" class="btn btn-primary">Masukkan Testimoni</button>
    </form>
</div>
@endsection
