@extends('layouts.dashboard')
@section('title', 'Dashboard Admin I Testimoni')

@section('content')
    <div class="container px-3">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
            <h1 class="h2 fw-bold mb-0" style="color: black; background-color: #f1f3f5; padding: 1rem; border-radius: 0.5rem;">Testimoni</h1>
            <a href="/admin/testimoni/create" class="btn btn-primary">
                <i class="fas fa-plus-circle me-2"></i>Masukkan Testimoni
            </a>
        </div>

        <!-- Mobile Cards View -->
        <div class="d-md-none">
            @foreach ($testimonis as $index => $testimoni)
                <div class="card mb-3 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            @if ($testimoni->image)
                                <img src="{{ asset('storage/' . $testimoni->image) }}"
                                     class="rounded-circle"
                                     width="60"
                                     height="60"
                                     alt="Foto {{ $testimoni->nama }}"
                                     style="object-fit: cover;">
                            @else
                                <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center"
                                     style="width: 60px; height: 60px;">
                                    <i class="fas fa-user text-white"></i>
                                </div>
                            @endif
                            <div>
                                <h6 class="card-title mb-1 fw-bold">{{ $testimoni->nama }}</h6>
                                <p class="text-muted small mb-0">{{ $testimoni->pekerjaan }}</p>
                            </div>
                        </div>

                        <div class="testimonial-content mb-3">
                            <div class="rating mb-2">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $testimoni->rating)
                                        <i class="fas fa-star text-warning"></i>
                                    @else
                                        <i class="far fa-star text-warning"></i>
                                    @endif
                                @endfor
                                <span class="ms-2 text-muted">({{ $testimoni->rating }}/5)</span>
                            </div>
                            <p class="card-text">{{ $testimoni->pesan }}</p>
                        </div>

                        <div class="d-flex gap-2 justify-content-end">
                            <a href="{{ route('testimoni.edit', $testimoni->id) }}"
                               class="btn btn-warning btn-sm">
                                <i class="fas fa-edit me-1"></i>Edit
                            </a>
                            <form action="{{ route('testimoni.delete', $testimoni->id) }}"
                                  method="POST"
                                  class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash me-1"></i>Hapus
                                </button>
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
                        <th style="width: 15%">Nama</th>
                        <th style="width: 10%">Foto</th>
                        <th style="width: 15%">Pekerjaan</th>
                        <th style="width: 30%">Pesan</th>
                        <th style="width: 10%">Rating</th>
                        <th style="width: 15%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($testimonis as $index => $testimoni)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td class="fw-medium">{{ $testimoni->nama }}</td>
                            <td>
                                @if ($testimoni->image)
                                    <img src="{{ asset('storage/' . $testimoni->image) }}"
                                         class="rounded-circle"
                                         width="40"
                                         height="40"
                                         alt="Foto"
                                         style="object-fit: cover;">
                                @endif
                            </td>
                            <td>{{ $testimoni->pekerjaan }}</td>
                            <td>
                                <div class="text-truncate" style="max-width: 250px;">
                                    {{ $testimoni->pesan }}
                                </div>
                            </td>
                            <td>
                                <div class="rating">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $testimoni->rating)
                                            <i class="fas fa-star text-warning"></i>
                                        @else
                                            <i class="far fa-star text-warning"></i>
                                        @endif
                                    @endfor
                                </div>
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('testimoni.edit', $testimoni->id) }}"
                                       class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit me-1"></i>Edit
                                    </a>
                                    <form action="{{ route('testimoni.delete', $testimoni->id) }}"
                                          method="POST"
                                          class="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash me-1"></i>Hapus
                                        </button>
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
        /* Enhanced Header Styling */
        h1 {
            background-color: #f1f3f5;
            padding: 1rem;
            border-radius: 0.5rem;
        }

        /* Improved Card Styling */
        .card {
            border-radius: 1rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        /* Button Styles */

        .btn-primary {
            background: linear-gradient(135deg, #3498db, #2980b9);
            border: none;
            color: white;
        }

        .btn-warning {
            background-color: #f39c12;
            border: none;
            color: #fff;
        }

        .btn-danger {
            background-color: #e74c3c;
            border: none;
            color: #fff;
        }

        /* Rating Star Enhancements */
        .fa-star {
            font-size: 1rem;
            margin-right: 2px;
        }

        /* Table Enhancements */
        .table th, .table td {
            padding: 1rem;
            border-radius: 0.25rem;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f3f5;
        }

        .text-truncate {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .card-body {
                padding: 1.25rem;
            }

            .rating .fa-star {
                font-size: 0.875rem;
            }
        }
    </style>
@endsection
