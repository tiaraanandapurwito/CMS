@extends('layouts.dashboard')
@section('title', 'Dashboard Admin I Paket')

@section('content')
    <div class="container px-3">
        <h1 class="h2 fw-bold mb-4" style="color: black">Paket</h1>
        <a href="{{ route('paket.create') }}" class="btn btn-primary mb-3">Masukkan Paket Internet</a>

        {{-- Uncomment if you want to show success messages --}}
        {{-- @if (session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif --}}

        <!-- Mobile Cards View -->
        <div class="d-md-none">
            @foreach ($pakets as $index => $paket)
                <div class="card mb-3 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-2">{{ $paket->nama_paket }}</h5>
                        <p class="mb-1">Harga: <strong>Rp {{ number_format($paket->harga, 2) }}</strong></p>
                        <p class="mb-1">Deskripsi: {{ $paket->deskripsi }}</p>
                        <p class="mb-3">Warna Paket:
                            <span class="d-inline-block rounded-circle"
                                style="width: 20px; height: 20px; background-color: {{ $paket->warna_paket }};">
                            </span>
                        </p>
                        <div class="d-flex gap-2">
                            <a href="{{ route('paket.edit', $paket) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="/admin/paket/{{ $paket->id }}/delete" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Desktop Table View -->
        <div class="table-responsive d-none d-md-block">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th style="width: 5%">ID</th>
                        <th style="width: 20%">Nama Paket</th>
                        <th style="width: 15%">Harga</th>
                        <th style="width: 40%">Deskripsi</th>
                        <th style="width: 10%">Warna Paket</th>
                        <th style="width: 10%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pakets as $index => $paket)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td class="fw-medium">{{ $paket->nama_paket }}</td>
                            <td>Rp {{ number_format($paket->harga, 2) }}</td>
                            <td>
                                <div class="text-truncate" style="max-width: 250px;">{{ $paket->deskripsi }}</div>
                            </td>
                            <td>
                                <div class="rounded-circle"
                                    style="width: 20px; height: 20px; background-color: {{ $paket->warna_paket }};"></div>
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('paket.edit', $paket) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="/admin/paket/{{ $paket->id }}/delete" method="POST"
                                        class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .card {
            border: none;
            border-radius: 0.5rem;
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-2px);
        }

        .btn-sm {
            padding: 0.375rem 0.75rem;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 1.75rem;
            }

            .card-body {
                padding: 1rem;
            }

            .btn-group-sm>.btn,
            .btn-sm {
                padding: 0.25rem 0.5rem;
                font-size: 0.875rem;
            }
        }

        @media (max-width: 576px) {
            h1 {
                font-size: 1.5rem;
            }

            .container {
                padding: 0.5rem;
            }

            .card {
                margin-bottom: 0.75rem;
            }
        }
    </style>
@endsection
