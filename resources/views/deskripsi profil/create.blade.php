@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Tambah Deskripsi</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('deskripsi profil.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Tambah</button>
    </form>
</div>
@endsection
