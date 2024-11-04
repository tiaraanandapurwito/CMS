@extends('layouts.dashboard')
@section('title', 'Dashboard Admin I Profil Perusahaan')

@section('content')
    <div class="container px-3">
        <h1 class="mt-4" style="color: black; font-size: 1.75rem;">Profil Perusahaan</h1>

        @if ($descriptions->isEmpty())
            <a href="{{ route('deskripsi profil.create') }}" class="btn btn-primary mt-3">Masukkan Deskripsi</a>
        @endif

        {{-- Uncomment if you want to show success messages --}}
        {{-- @if (session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif --}}

        <div class="table-responsive mt-3">
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th style="width: 5%;">ID</th>
                        <th>Deskripsi</th>
                        <th style="width: 20%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($descriptions as $deskripsi)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="text-wrap" style="max-width: 400px;">
                                    {!! $deskripsi->description !!}
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column flex-md-row gap-1">
                                    <a href="{{ route('deskripsi profil.edit', $deskripsi->id) }}" class="btn btn-warning btn-sm mb-1 mb-md-0">Edit</a>
                                    <form action="/admin/profilperusahaan/delete" method="POST" style="display:inline;">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $deskripsi->id }}">
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

        .table {
            font-size: 0.875rem;
        }

        @media (max-width: 768px) {
            .container {
                padding: 0.5rem;
            }

            h1 {
                font-size: 1.5rem;
            }

            .table th, .table td {
                font-size: 0.75rem;
                padding: 0.5rem;
            }

            .text-wrap {
                word-wrap: break-word;
            }

            .btn-sm {
                font-size: 0.75rem;
            }

            .d-flex {
                flex-direction: column;
            }
        }

        @media (max-width: 576px) {
            h1 {
                font-size: 1.25rem;
            }

            .table th, .table td {
                font-size: 0.7rem;
                padding: 0.4rem;
            }
        }
    </style>
@endsection
