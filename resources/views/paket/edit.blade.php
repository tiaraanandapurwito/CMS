@extends('layouts.dashboard')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container" style="color: black">
    <h1>Edit Paket Internet</h1>
    <form action="{{ route('paket.update', $paket->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="nama_paket" style="color: black; font-size: 20px">Nama Paket</label>
            <input type="text" class="form-control" id="nama_paket" name="nama_paket" value="{{ $paket->nama_paket }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="harga" style="color: black; font-size: 20px">Harga Paket</label>
            <div class="input-group">
                <span class="input-group-text" style="border-color:black">Rp</span>
                <input type="number" style="border-style: solid; border-width: 1px; border-color:black" class="form-control" id="harga" name="harga" value="{{ $paket->harga }}" required>
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="deskripsi" style="color: black; font-size: 20px">Deskripsi Paket</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required>{{ $paket->deskripsi }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="warna_paket" style="color: black; font-size: 20px">Warna Paket</label>
            <input type="color" class="form-control form-control-color" id="warna_paket" name="warna_paket" value="{{ $paket->warna_paket }}" style="border-style: solid; border-width: 1px; border-color:black" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Paket</button>
    </form>
</div>
@endsection

