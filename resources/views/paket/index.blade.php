@extends('layouts.dashboard')

@section('content')
    @csrf
    <div class="container">
        <h1 style="color: black">Paket</h1>
        <a href="{{ route('paket.create') }}" class="btn btn-primary">Masukkan Paket Internet</a>

        @if (session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
    </div>
</form>
@endsection
