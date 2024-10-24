@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1 style="color: black">Tambah Deskripsi</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('deskripsi profil.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="description" style="color: black; font-size: 20px">Deskripsi</label>
            <textarea class="form-control" style="border-style: solid; border-width: 1px; border-color:black" id="description" name="description" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Tambah</button>
    </form>
</div>
@endsection
