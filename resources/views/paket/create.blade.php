@extends('layouts.dashboard')
@section('title', 'Dashboard Admin I Paket')

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


    <div class="container">
        <h1 style="color: black">Tambah Paket Internet</h1>
        <form action="{{ route('paket.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="nama_paket" style="color: black; font-size: 20px">Nama Paket</label>
                <input type="text" style="border-style: solid; border-width: 1px; border-color:black" class="form-control"
                    id="nama_paket" name="nama_paket" required>
            </div>
            <div class="form-group mb-3">
                <label for="warna_paket" style="color: black; font-size: 20px">Warna Paket</label>
                <input type="color" class="form-control form-control-color" id="warna_paket" name="warna_paket"
                    value="#000000" style="border-style: solid; border-width: 1px; border-color:black" required>
            </div>
            <div class="form-group mb-3">
                <label for="harga_paket" style="color: black; font-size: 20px">Harga Paket</label>
                <div class="input-group">
                    <span class="input-group-text" style="border-color:black">Rp</span>
                    <input type="number" style="border-style: solid; border-width: 1px; border-color:black"
                        class="form-control" id="harga_paket" name="harga_paket" required>
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="deskripsi_paket" style="color: black; font-size: 20px">Deskripsi Paket</label>
                <textarea class="form-control" style="border-style: solid; border-width: 1px; border-color:black" id="deskripsi_paket"
                    name="deskripsi_paket" rows="4" required></textarea>
                <small class="text-muted mt-2">Nb: Jika ingin memberi baris baru harap dikasih tanda titik diujung kata atau
                    kalimat</small>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Paket</button>
        </form>
    </div>
@endsection
