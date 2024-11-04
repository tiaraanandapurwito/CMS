@extends('layouts.dashboard')
@section('title', 'Dashboard Admin I Maps GarudaLink')

@section('content')
    <div class="container px-3">
        <h1 class="text-center mb-4 fw-bold" style="color: black;">Daftar Titik Lokasi</h1>

        <div class="d-flex justify-content-between mb-4 flex-wrap gap-2">
            <a href="{{ route('maps.create') }}" class="btn btn-primary">
                <i class="fas fa-plus-circle me-2"></i>Tambah Titik Lokasi
            </a>
        </div>

        <!-- Mobile Cards View (visible on mobile only) -->
        <div class="d-md-none">
            @foreach ($locations as $index => $location)
                <div class="card mb-3 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h6 class="card-title mb-0 fw-bold">{{ $location->name }}</h6>
                            <span style="display:inline-block; width:20px; height:20px; background-color:{{ $location->color }}; border:1px solid #000;"></span>
                        </div>
                        <div class="location-details mb-3">
                            <div class="row g-2">
                                <div class="col-6">
                                    <small class="text-muted d-block">Latitude:</small>
                                    <div class="fw-medium">{{ $location->latitude }}</div>
                                </div>
                                <div class="col-6">
                                    <small class="text-muted d-block">Longitude:</small>
                                    <div class="fw-medium">{{ $location->longitude }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                @switch($location->status)
                                    @case('active')
                                        <span class="badge bg-success">Aktif</span>
                                        @break
                                    @case('inactive')
                                        <span class="badge bg-warning">Perencanaan</span>
                                        @break
                                    @case('maintenance')
                                        <span class="badge bg-danger">Tidak Bisa Dipasang</span>
                                        @break
                                    @default
                                        <span class="badge bg-secondary">Unknown</span>
                                @endswitch
                            </div>
                            <div class="d-flex gap-2">
                                <a href="{{ route('maps.edit', $location) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('maps.destroy', $location) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Table View (visible on tablet and desktop) -->
        <div class="table-responsive d-none d-md-block">
            <table class="table table-bordered table-hover shadow-sm">
                <thead class="table-light">
                    <tr>
                        <th class="text-center" width="5%">ID</th>
                        <th>Nama Lokasi</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th width="15%">Status</th>
                        <th width="10%">Color</th>
                        <th width="15%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($locations as $index => $location)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $location->name }}</td>
                            <td>{{ $location->latitude }}</td>
                            <td>{{ $location->longitude }}</td>
                            <td>
                                @switch($location->status)
                                    @case('active')
                                        <span class="badge bg-success">Aktif</span>
                                        @break
                                    @case('inactive')
                                        <span class="badge bg-warning">Perencanaan</span>
                                        @break
                                    @case('maintenance')
                                        <span class="badge bg-danger">Tidak Bisa Dipasang</span>
                                        @break
                                    @default
                                        <span class="badge bg-secondary">Unknown</span>
                                @endswitch
                            </td>
                            <td class="text-center">
                                <span style="display:inline-block; width:20px; height:20px; background-color:{{ $location->color }}; border:1px solid #000;"></span>
                            </td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center">
                                    <a href="{{ route('maps.edit', $location) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit me-1"></i> Edit
                                    </a>
                                    <form action="{{ route('maps.destroy', $location) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash me-1"></i> Delete
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
        /* General Styles */
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Desktop Styles */
        @media (min-width: 769px) {
            h1 {
                font-size: 2rem;
            }

            .table th {
                font-size: 0.9rem;
                font-weight: 600;
            }

            .table td {
                font-size: 0.9rem;
                vertical-align: middle;
            }

            .badge {
                font-size: 0.8rem;
                padding: 0.5em 0.75em;
            }
        }

        /* Tablet Styles */
        @media (max-width: 768px) {
            h1 {
                font-size: 1.75rem;
            }

            .table th,
            .table td {
                font-size: 0.85rem;
                padding: 0.75rem;
            }

            .badge {
                font-size: 0.75rem;
            }
        }

        /* Mobile Styles */
        @media (max-width: 576px) {
            h1 {
                font-size: 1.5rem;
                margin-bottom: 1rem;
            }

            .card {
                border-radius: 0.5rem;
            }

            .card-body {
                padding: 1rem;
            }

            .location-details {
                background-color: #f8f9fa;
                padding: 0.75rem;
                border-radius: 0.375rem;
                margin: 0.5rem 0;
            }

            .btn-sm {
                padding: 0.375rem 0.75rem;
            }

            .badge {
                font-size: 0.7rem;
                padding: 0.35em 0.65em;
            }
        }

        /* Animation for cards */
        .card {
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-2px);
        }

        /* Button hover effects */
        .btn {
            transition: all 0.2s ease-in-out;
        }

        .btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
    </style>
@endsection
