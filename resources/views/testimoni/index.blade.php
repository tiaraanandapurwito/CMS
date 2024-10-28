@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1 style="color: black">Testimoni</h1>
        <a href="{{ route('testimoni.create') }}" class="btn btn-primary">Masukkan Testimoni</a>

        @if (session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th style="width: 3px">ID</th>
                <th style="width: 3px">Nama</th>
                <th style="width: 3px">Foto</th>
                <th style="width: 3px">Pekerjaan</th>
                <th style="width: 3px">Pesan</th>
                <th style="width: 3px">Rating</th>
                <th style="width: 3px">Actions</th>
            </tr>
        </thead>
    </div>
</form>
@endsection
