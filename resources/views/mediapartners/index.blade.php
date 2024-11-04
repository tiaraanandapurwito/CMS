@extends('layouts.dashboard')
@section('title', 'Dashboard Admin I Media Partner')

@section('content')
    <div class="container">
        <h1 style="color: black">Media Partner</h1>
        <a href="{{ route('mediapartners.create') }}" class="btn btn-primary">Masukkan Media Partner</a>

        <div class="table-responsive mt-3 d-none d-md-block">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Logo MediaPartner</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mediapartners as $mediapartner)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @if ($mediapartner->image)
                                    <img src="{{ asset('storage/' . $mediapartner->image) }}"
                                        alt="{{ $mediapartner->mediapartner }}" width="100">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('mediapartners.toggle-status', $mediapartner->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-sm {{ $mediapartner->is_active ? 'btn-success' : 'btn-secondary' }}">
                                        {{ $mediapartner->is_active ? 'Active' : 'Inactive' }}
                                    </button>
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('mediapartners.edit', $mediapartner->id) }}" class="btn btn-warning">Edit</a>
                                <form action="/admin/mediapartner/{{ $mediapartner->id }}/delete" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Mobile View --}}
        <div class="d-md-none mt-3">
            @foreach ($mediapartners as $mediapartner)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">ID: {{ $loop->iteration }}</h5>
                        <p class="card-text">
                            <strong>Logo:</strong>
                            @if ($mediapartner->image)
                                <img src="{{ asset('storage/' . $mediapartner->image) }}"
                                     alt="{{ $mediapartner->mediapartner }}" width="100">
                            @else
                                No Image
                            @endif
                        </p>
                        <p class="card-text">
                            <strong>Status:</strong>
                            <form action="{{ route('mediapartners.toggle-status', $mediapartner->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-sm {{ $mediapartner->is_active ? 'btn-success' : 'btn-secondary' }}">
                                    {{ $mediapartner->is_active ? 'Active' : 'Inactive' }}
                                </button>
                            </form>
                        </p>
                        <div>
                            <a href="{{ route('mediapartners.edit', $mediapartner->id) }}" class="btn btn-warning">Edit</a>
                            <form action="/admin/mediapartner/{{ $mediapartner->id }}/delete" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
